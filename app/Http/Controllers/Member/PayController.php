<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Web\WebBaseController;
use App\Models\Dividend;
use App\Models\Member;
use App\Models\PayRecord;
use App\Models\Recharge;
use App\Models\SystemConfig;
use App\Services\MbPay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PayService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Validator;
use DB;

class PayController extends WebBaseController
{

    public $api_key;
    public $merchant;
    public $uri;
    public function __construct()
    {

        $config = SystemConfig::findOrFail(1);
        $this->api_key = trim($config->third_userkey);
        $this->merchant = trim($config->third_userid);
        $this->uri = trim($config->third_pay_url);
    }

    public function pay(Request $request)
    {

        $rules = [
            'paytype' =>'required',
            'pay_name' => 'required',
        ];
        $msg = [
            'paytype.required' => '请选择支付方式',
            'pay_name.required' => '支付姓名必须填写',
            'amount.required' => '金额必须填写'
        ];

        //$data = $request->only('name','password');


        $this->validate($request,$rules,$msg);
        $data = $request->all();
        if($data['amount'] < 120) {
            return redirect()->back()->withErrors('金额必须大于120')->withInput();
        }

        $config = SystemConfig::findOrFail(1);

        if($config->is_thirdpay_on == 1 ) {
            return redirect()->back()->withErrors('系统已关闭第三方支付')->withInput();
        }
        $pay_memberid = $config->third_userid;   //商户ID
        $pay_orderid = getBillNo();    //订单号
        $amount = $request->get('amount')?sprintf("%.2f", $request->get('amount')):0.01;
        $pay_amount = $amount;    //交易金额
        $pay_notifyurl = route('pay.notify');   //服务端返回地址
        $pay_callbackurl = route('pay.return');  //页面跳转返回地址
        $pay_name = $request->get('pay_name');
        $pay_type = $request->get('paytype');
        $Md5key = $config->third_userkey;   //密钥

        $tjurl = $config->third_pay_url;   //提交地址

        $requestarray = array(
            "version" => $config->third_version,
            "customerid" => $pay_memberid,
            'total_fee' => $pay_amount,
            'sdorderno' => $pay_orderid,
            'notifyurl' => $pay_notifyurl,
            'returnurl' => $pay_callbackurl,
            'paytype' => $pay_type,
            'pay_name' => $pay_name
        );

        //ksort($requestarray);
        /*$md5str = "";
        foreach ($requestarray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }


        $sign = md5($md5str . $Md5key);*/
        $sign=md5('version='.$requestarray['version'].'&customerid='.$requestarray['customerid'].'&total_fee='.$requestarray['total_fee'].'&sdorderno='.$requestarray['sdorderno'].'&notifyurl='.$requestarray['notifyurl'].'&returnurl='.$requestarray['returnurl'].'&pay_name='.$requestarray['pay_name'].'&'.$Md5key);

        $requestarray["sign"] = $sign;


        $member = $request->get('mid')?Member::findOrFail($request->get('mid')):$this->getMember();
        //产生支付记录
        PayRecord::create([
            'member_id' => $member->id,
            'order_no' => $pay_orderid,
            'money' => $amount,
            'pay_type' => 1,
            'typeId' => $pay_type,
            'clientIp' => $request->getClientIp(),
            'before_request_result' => json_encode($requestarray)
        ]);
        //充值记录
        Recharge::create([
            'bill_no' => $pay_orderid,
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $amount,
            'payment_type' => 4,
            'account' => '第三方支付',
            'status' => 1,
            'hk_at' => date('Y-m-d H:i:s')
        ]);

        // 生成表单数据
        echo $this->buildForm($requestarray, $tjurl);

    }

    public function ajax_pay(Request $request)
    {
        $rules = [
            'paytype' =>'required',
            //'pay_name' => 'required',
            'amount'=>'required'
        ];
        $msg = [
            'paytype.required' => '请选择支付方式',
            //'pay_name.required' => '支付姓名必须填写',
            'amount.required' => '金额必须填写'
        ];


        $validator = Validator::make($request->all(),$rules,$msg);
        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        if($data['amount'] < 100) {
            return responseWrong('金额必须大于等于100');
        }

        $reg="/^\d+(\.\d{0,2})?$/";
        if(!preg_match($reg,$data['amount'])){
            return responseWrong( '请输入正确的数字,小数保留两位小数！');
        }

        $config = SystemConfig::findOrFail(1);

        if($config->is_thirdpay_on == 1 ) {
            return responseWrong('系统已关闭第三方支付');
        }


        $amount = $request->get('amount');
        $pay_amount = $amount;    //交易金额
        $pay_name = $request->get('pay_name','');
        $pay_type = $request->get('paytype');

        if ($pay_type == 'bankcard'){
            $pay_amount = $pay_amount / $this->getPrice($pay_type);
        }elseif ($pay_type == 'aliPay'){
            $pay_amount = $pay_amount / $this->getPrice($pay_type);
        }elseif ($pay_type == 'weChatpay'){
            $pay_amount = $pay_amount / $this->getPrice($pay_type);
        }

        $orderNum = 'buy'.getBillNo();
        $member = $this->getMember();
        $res = $this->login($this->merchant,$member->name,1,$orderNum,$pay_type,sprintf('%.2f',$pay_amount));
        if($res && $res['statusCode'] == 01) {
            //这个时候要产生支付记录

            $requestarray = [
                'member_id' => $member->id,
                'order_no' => $orderNum,
                'money' => $amount,
                'pay_name' => $pay_name,
                'name' => $member->name
            ];
            PayRecord::create([
                'member_id' => $member->id,
                'order_no' => $orderNum,
                'money' => $amount,
                'pay_type' => 1,
                'typeId' => $pay_type,
                'clientIp' => $request->getClientIp(),
                'before_request_result' => json_encode($requestarray,JSON_UNESCAPED_UNICODE)
            ]);
            $uri = $res['data']['url'];
            //$uri = 'http://192.168.1.3:8080/webpc/';
            $token = $res['data']['token'];
            $url = $uri .'?token='.$token;
            //echo $url;die;

            return responseSuccess('','',$url);
        }else{
            return responseWrong('网络错误！！');
        }
        /*if ($pay_type == 'bankcard'){
            $pay_amount = $pay_amount- $pay_amount*0.004;
        }elseif ($pay_type == 'aliPay'){
            $pay_amount = $pay_amount- $pay_amount*0.009;
        }elseif ($pay_type == 'weChatpay'){
            $pay_amount = $pay_amount- $pay_amount*0.009;
        }*/


        /*$arr = [
            'pay_name'=>$pay_name,
            'paytype' =>$pay_type,
            'amount' =>$pay_amount,
            't'=>date('YmdHis').getRandom()
        ];
        $url = route('ajax_post_pay').'?'.http_build_query($arr);*/




    }

    /**
     * 获取银行卡通知
     * @param Request $request
     */
    public function bank(Request $request)
    {
        $post = $request->all();
        $data=[
            'userName'=>$post['userName'],
            'orderNum'=>$post['orderNum']
        ];
        ksort($data);
        $formData=$this->buildFormData($data);
        $api_key = $this->api_key;
        $sign=md5(sprintf("%s%s",$formData,$api_key));
        if(strcmp($sign,$_POST['sign'])==0){
            //获取订单号的真实名称
            $payRecord = PayRecord::where('order_no',$post['orderNum'])->first();
            if(!is_null($payRecord)) {
                $before_request_result = json_decode($payRecord->before_request_result,true);
                //充值记录
               /* Recharge::create([
                    'bill_no' => $payRecord->order_no,
                    'member_id' => $before_request_result['member_id'],
                    'name' => $before_request_result['name'],
                    'money' => $payRecord->money,
                    'payment_type' => 4,
                    'account' => '第三方支付',
                    'status' => 1,
                    'hk_at' => date('Y-m-d H:i:s')
                ]);*/


                //Log::info($before_request_result);
                $realName=$before_request_result['pay_name'];
                $account='';
                $bank='';
                $subBranch='';
                $res=[
                    'Message'=>'成功',
                    'Code'=>1,
                    'Success'=>true,
                    'Account'=>$account,
                    'Bank'=>$bank,
                    'RealName'=>$realName,
                    'SubBranch'=>$subBranch
                ];
                $res['Sign']=md5("${account}${bank}${realName}${subBranch}${api_key}");
                $after_request_resul = json_encode($res,JSON_UNESCAPED_UNICODE);
                $payRecord->after_request_result = $after_request_resul;
                $rs = $payRecord->save();
                if(!$rs) {
                    $res=[
                        'Message'=>'内部错误',
                        'Code'=>0,
                        'Success'=>false,
                    ];
                }
            }else{
                $res=[
                    'Message'=>'签名错误',
                    'Code'=>0,
                    'Success'=>false,
                ];
            }
        } else {
            $res=[
                'Message'=>'签名错误',
                'Code'=>0,
                'Success'=>false,
            ];
        }
        return response()->json($res);
    }

    public function notice(Request $request)
    {
        $all = $request->all();
        Log::info($all);
        $data=[
            'coinAmount'=>$all['coinAmount'],
            'createdAt'=>$all['createdAt'],
            'legalAmount'=>$all['legalAmount'],
            'memberName'=>$all['memberName'],
            'orderId'=>$all['orderId'],
            'orderNum'=>$all['orderNum'],
            'orderState'=>$all['orderState'],
            'payState'=>$all['payState'],
            'price'=>$all['price'],
            'token'=>$all['token'],
            'type'=>$all['type']
        ];

        ksort($data);
        $formData=$this->buildFormData($data);
        $sign=md5(sprintf("%s%s",$formData,$this->api_key));
        if(strcmp($sign,$all['sign'])==0){
            //获取订单记录
            $payRecord = PayRecord::where('order_no',$all['orderNum'])->first();
            //获取充值记录
            $recharge = Recharge::where('bill_no',$all['orderNum'])->first();
            //充值记录
            if(is_null($recharge)) {
                $before_request_result = json_decode($payRecord->before_request_result,true);
                Recharge::create([
                    'bill_no' => $payRecord->order_no,
                    'member_id' => $before_request_result['member_id'],
                    'name' => $before_request_result['name'],
                    'money' => $payRecord->money,
                    'payment_type' => 4,
                    'account' => '第三方支付',
                    'status' => 1,
                    'hk_at' => date('Y-m-d H:i:s')
                ]);
            }
            if($all['payState'] == 1 && $all['orderState'] == 1) {
                //获取订单记录
                $payRecord = PayRecord::where('order_no',$all['orderNum'])->first();
                //获取充值记录
                $recharge = Recharge::where('bill_no',$all['orderNum'])->first();
                //充值记录
                if(is_null($recharge)) {
                    $before_request_result = json_decode($payRecord->before_request_result,true);
                    Recharge::create([
                        'bill_no' => $payRecord->order_no,
                        'member_id' => $before_request_result['member_id'],
                        'name' => $before_request_result['name'],
                        'money' => $payRecord->money,
                        'payment_type' => 4,
                        'account' => '第三方支付',
                        'status' => 1,
                        'hk_at' => date('Y-m-d H:i:s')
                    ]);
                }
                $res=[
                    'Message'=>'签名错误',
                    'Code'=>0,
                    'Success'=>false,
                ];
            }elseif ($all['payState'] == 2 && $all['orderState'] == 3) {

                    $mod = PayRecord::where('order_no', $all["orderNum"])->first();
                    if ($mod)
                    {
                        $member = Member::find($mod->member_id);
                        $recharge = Recharge::where('bill_no', $all["orderNum"])->first();

                        $mod->update([
                            //'status' => $data["status"],
                            'after_request_result' => json_encode($all)
                        ]);

                        //如果处理成功
                        if ($recharge)
                        {
                            //未处理的时候更新订单
                            if ($recharge->status == 1)
                            {
                                DB::beginTransaction();
                                try{
//中心账户
                                    $sys = SystemConfig::find(1);
                                    $member->increment('money', $mod["money"]);
                                    $member->increment('ml_money', $mod["money"] * $sys->ml_percent);
                                    //赠送金额
                                    $cz_ration = $sys->cz_ration / 100;
                                    $diff_money = sprintf('%.2f',$mod["money"] * $cz_ration);
                                    if($diff_money > 0) {
                                        Dividend::create([
                                            'member_id' => $member->id,
                                            'type' => 1,
                                            'money' => $diff_money,
                                            'describe' => '充值赠送金额',
//                        'before_money' => $mod->member->money,
//                        'after_money' => $mod->member->money + $data['money'],
                                            'status' => 1
                                        ]);
                                        $member->increment('money', $diff_money);
                                    }
                                    //支付记录
                                    $recharge->update([
                                        'diff_money' => $diff_money,
                                        'status' =>2,
                                        'confirm_at' => date('Y-m-d H:i:s'),
                                    ]);

                                    DB::commit();
                                    $res=[
                                        'Message'=>'成功',
                                        'Code'=>1,
                                        'Success'=>true
                                    ];
                                }catch (\Exception $e){
                                    DB::rollBack();
                                }
                            }
                        }

                    }
            }elseif ($all['orderState'] == 5 || $all['orderState'] == 6 || $all['orderState'] == 7) {
                    //支付记录
                    $recharge = Recharge::where('bill_no', $data["orderNum"])->first();
                    if ($recharge->status == 1){
                        $recharge->update([
                            'status' =>3,
                            'confirm_at' => date('Y-m-d H:i:s'),
                        ]);
                        $res=[
                            'Message'=>'签名错误',
                            'Code'=>0,
                            'Success'=>false,
                        ];
                    }
                }

            }else{
                $res=[
                    'Message'=>'签名错误',
                    'Code'=>0,
                    'Success'=>false,
                ];
            }


        return response()->json($res);

    }
    function buildFormData($data) {
        if(!is_array($data)) return "";
        $result="";
        foreach ($data as $k=>$v) {
            $result.=sprintf("%s=%s&",$k,$v);
        }
        $result=rtrim($result,"&");
        return $result;
    }
    public function ajax_post_pay(Request $request)
    {

        $config = SystemConfig::findOrFail(1);


        if($config->is_thirdpay_on == 1 ) {
            return responseWrong('系统已关闭第三方支付');
        }

        $amount = $request->get('amount')?sprintf("%.2f", $request->get('amount')):'';

        $pay_amount = $amount;    //交易金额
        $pay_name = $request->get('pay_name');
        $pay_type = $request->get('paytype');
        $pay_memberid = $config->third_userid;   //商户ID
        $pay_notifyurl = route('pay.notify');   //服务端返回地址
        $pay_callbackurl = route('pay.return');  //页面跳转返回地址
        $Md5key = $config->third_userkey;   //密钥

        $pay_orderid = getBillNo();    //订单号

        $tjurl = $config->third_pay_url;   //提交地址

        $requestarray = array(
            "version" => $config->third_version,
            "customerid" => $pay_memberid,
            'total_fee' => $pay_amount,
            'sdorderno' => $pay_orderid,
            'notifyurl' => $pay_notifyurl,
            'returnurl' => $pay_callbackurl,
            'paytype' => $pay_type,
            'pay_name' => $pay_name
        );
        $sign=md5('version='.$requestarray['version'].'&customerid='.$requestarray['customerid'].'&total_fee='.$requestarray['total_fee'].'&sdorderno='.$requestarray['sdorderno'].'&notifyurl='.$requestarray['notifyurl'].'&returnurl='.$requestarray['returnurl'].'&pay_name='.$requestarray['pay_name'].'&'.$Md5key);

        $requestarray["sign"] = $sign;



        $member = $request->get('mid')?Member::findOrFail($request->get('mid')):$this->getMember();
        //产生支付记录
        PayRecord::create([
            'member_id' => $member->id,
            'order_no' => $pay_orderid,
            'money' => $amount,
            'pay_type' => 1,
            'typeId' => $pay_type,
            'clientIp' => $request->getClientIp(),
            'before_request_result' => json_encode($requestarray)
        ]);
        //充值记录
        Recharge::create([
            'bill_no' => $pay_orderid,
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $amount,
            'payment_type' => 4,
            'account' => '第三方支付',
            'status' => 1,
            'hk_at' => date('Y-m-d H:i:s')
        ]);



        $sHtml = "<form id='paysubmit' name='bankPaySubmit' action='".$tjurl."' method='post'>";
        while (list ($key, $val) = each ($requestarray)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }
        $sHtml.= "</form>";
        $sHtml.= "<script>document.forms['bankPaySubmit'].submit();</script>";

        return $sHtml;

    }
    public function pay_scan(Request $request)
    {
        $config = config('pay');

        // 请求数据赋值
        $data = [];
        // 商户APINMAE，WEB渠道一般支付
        $data['service'] = is_Mobile()?'TRADE.H5PAY':'TRADE.SCANPAY';
        // 商户API版本
        $data['version'] = $config['mobaopay_api_version'];
        // 商户在支付系统的平台号
        $data['merId'] = $config['platform_id'];

        //商户订单号
        $tradeNo = getBillNo();
        $data['tradeNo'] = $tradeNo;
        // 商户订单日期
        $data['tradeDate'] = date('Ymd');
        // 商户交易金额
        $amount = $request->get('amount')?sprintf("%.2f", $request->get('amount')):0.01;
        $data['amount'] = $amount;

        // 商户通知地址
        $data['notifyUrl'] = route('pay.notify');

        $data['summary'] = 'abc';
        $data['extra'] = 'qwer';

        $clientIp = $request->getClientIp();
        $data['clientIp'] = $clientIp;
        $bankCode = $request->get('typeId')?:2;
        $data['typeId'] = $bankCode;
        $data['expireTime'] = 180;


        // 对含有中文的参数进行UTF-8编码
        // 将中文转换为UTF-8
        if(!preg_match("/[\xe0-\xef][\x80-\xbf]{2}/", $data['notifyUrl']))
        {
            $data['notifyUrl'] = iconv("GBK","UTF-8", $data['notifyUrl']);
        }


        if(!preg_match("/[\xe0-\xef][\x80-\xbf]{2}/", $data['extra']))
        {
            $data['extra'] = iconv("GBK","UTF-8", $data['extra']);
        }

        if(!preg_match("/[\xe0-\xef][\x80-\xbf]{2}/", $data['summary']))
        {
            $data['summary'] = iconv("GBK","UTF-8", $data['summary']);
        }

        // 初始化
        $cMbPay = new MbPay($config['mbp_key'], $config['mobaopay_gateway']);
        // 准备待签名数据
        $str_to_sign = $cMbPay->prepareSign($data);
        // 数据签名
        $sign = $cMbPay->sign($str_to_sign);
        $data['sign'] = $sign;


        $member = $request->get('mid')?Member::findOrFail($request->get('mid')):$this->getMember();
        //产生支付记录
        PayRecord::create([
            'member_id' => $member->id,
            'order_no' => $tradeNo,
            'money' => $amount,
            'pay_type' => 1,
            'bankId' => $bankCode,
            'clientIp' => $clientIp,
            'before_request_result' => json_encode($data)
        ]);
        //充值记录
        Recharge::create([
            'bill_no' => $tradeNo,
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $amount,
            'payment_type' => 4,
            'account' => '第三方支付',
            'status' => 1,
            'hk_at' => date('Y-m-d H:i:s')
        ]);

        //H5支付
        if ($data['service'] == 'TRADE.H5PAY')
        {
            echo $cMbPay->buildForm($data, $config['mobaopay_gateway']);
        }

        // 初始化
        $pPay = new MbPay($config['mbp_key'], $config['mobaopay_gateway']);
        // 准备请求数据
        $to_requset = $pPay->prepareRequest($str_to_sign, $sign);
        //请求数据
        $resultData = $pPay->request($to_requset);

        // 响应吗
        preg_match('{<code>(.*?)</code>}', $resultData, $match);
        $respCode = $match[1];

        // 响应信息
        preg_match('{<desc>(.*?)</desc>}', $resultData, $match);
        $respDesc = $match[1];


        preg_match('{<qrCode>(.*?)</qrCode>}', $resultData, $match);
        $respqrCode= $match[1];


        $base64 =$respqrCode;


        if (is_Mobile())
        {
            return view('wap.pay_scan', compact('base64'));
        }

        return view('member.pay_scan', compact('base64'));
    }

    public function quick_pay_apply(Request $request)
    {
        $config = config('pay');

        // 请求数据赋值
        $data = [];
        // 商户APINMAE，WEB渠道一般支付
        $data['service'] = 'TRADE.QUICKPAY.APPLY';
        // 商户API版本
        $data['version'] = $config['mobaopay_api_version'];
        // 商户在支付系统的平台号
        $data['merId'] = $config['platform_id'];

        //商户订单号
        $tradeNo = getBillNo();
        $data['tradeNo'] = $tradeNo;
        // 商户订单日期
        $opeDate =date('Ymd');
        $data['tradeDate'] = $opeDate;
        // 商户交易金额
        $amount = $request->get('amount')?sprintf("%.2f", $request->get('amount')):0.01;
        $data['amount'] = $amount;

        // 商户通知地址
        $data['notifyUrl'] = route('pay.notify');

        $data['summary'] = 'abc';
        $data['extra'] = 'qwer';

        $clientIp = $request->getClientIp();
        $data['clientIp'] = $clientIp;
        $bankCode = $request->get('bankcode')?:'ICBC';
        $data['bankId'] = $bankCode;
        $data['expireTime'] = 180;

        // 接收银行代码
        $data['cardType'] = $request->get("cardType");
        //银行卡号
        $data['cardNo'] = $request->get("cardNo");
        //开户姓名
        $data['cardName'] = $request->get("cardName");
        //身份证号
        $data['idCardNo'] = $request->get("idCardNo");
        //预留手机号
        $data['mobile'] = $request->get("mobile");
        //信用卡安全
        $data['cvn2'] = "";
        //签名
        $data['validDate'] = "";


        // 对含有中文的参数进行UTF-8编码
        // 将中文转换为UTF-8
        if(!preg_match("/[\xe0-\xef][\x80-\xbf]{2}/", $data['notifyUrl']))
        {
            $data['notifyUrl'] = iconv("GBK","UTF-8", $data['notifyUrl']);
        }


        if(!preg_match("/[\xe0-\xef][\x80-\xbf]{2}/", $data['extra']))
        {
            $data['extra'] = iconv("GBK","UTF-8", $data['extra']);
        }

        if(!preg_match("/[\xe0-\xef][\x80-\xbf]{2}/", $data['summary']))
        {
            $data['summary'] = iconv("GBK","UTF-8", $data['summary']);
        }

        // 初始化
        $cMbPay = new MbPay($config['mbp_key'], $config['mobaopay_gateway']);
        // 准备待签名数据
        $str_to_sign = $cMbPay->prepareSign($data);
        // 数据签名
        $sign = $cMbPay->sign($str_to_sign);
        $data['sign'] = $sign;

        $member = $request->get('mid')?Member::findOrFail($request->get('mid')):$this->getMember();
        //产生支付记录
        PayRecord::create([
            'member_id' => $member->id,
            'order_no' => $tradeNo,
            'money' => $amount,
            'pay_type' => 1,
            'bankId' => $bankCode,
            'clientIp' => $clientIp,
            'before_request_result' => json_encode($data)
        ]);
        //充值记录
        Recharge::create([
            'bill_no' => $tradeNo,
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $amount,
            'payment_type' => 4,
            'account' => '第三方支付',
            'status' => 1,
            'hk_at' => date('Y-m-d H:i:s')
        ]);

        // 初始化
        $pPay = new MbPay($config['mbp_key'], $config['mobaopay_gateway']);
        // 准备请求数据
        $to_requset = $pPay->prepareRequest($str_to_sign, $sign);
        //请求数据
        $resultData = $pPay->request($to_requset);


        preg_match('{<code>(.*?)</code>}', $resultData, $match);

        $code = $match[1];

        if ($code == '00')
        {
            preg_match('{<sessionID>(.*?)</sessionID>}', $resultData, $match);

            $sessionID = $match[1];


            return view('member.third_quick_pay_confirm', compact('sessionID', 'tradeNo', 'opeDate'));
        } else {
            echo '错误代码 '.$code;exit;
        }

    }

    public function quick_pay_confirm(Request $request)
    {
        $config = config('pay');

        // 请求数据赋值
        $data = [];
        // 商户APINMAE，WEB渠道一般支付
        $data['service'] = 'TRADE.QUICKPAY.CONFIRM';
        // 商户API版本
        $data['version'] = $config['mobaopay_api_version'];
        // 商户在支付系统的平台号
        $data['merId'] = $config['platform_id'];

        //商户订单号
        $tradeNo = getBillNo();
        $data['opeNo'] = $request->get('tradeNo');
        // 商户订单日期
        $data['opeDate'] = $request->get('opeDate');

        // 商户通知地址
        $data['sessionID'] = $request->get('sessionID');

        $data['dymPwd'] = $request->get('dymPwd');


        $pPay = new MbPay($config['mbp_key'], $config['mobaopay_gateway']);
        // 准备待签名数据

        $str_to_sign = $pPay->prepareSign($data);
        // 数据签名
        $signMsg = $pPay->sign($str_to_sign);

        $data['sign'] = $signMsg;

        // 准备请求数据
        $to_requset = $pPay->prepareRequest($str_to_sign, $signMsg);
        //请求数据
        $resultData = $pPay->request($to_requset);

        preg_match('{<desc>(.*?)</desc>}', $resultData, $match);

        $desc = $match[1];

        echo $desc;
    }

    public function success()
    {
        $sys = SystemConfig::findOrfail(1);

        if($sys->is_new_center ==1) {
            $r = route('member.userCenter');
        }else{
            $r = route('member.customer_report').'?type=0';
        }

        if(is_Mobile())
        {
            $r = route('wap.recharge_record');
        }
        return view('member.pay_success', compact('r'));
    }

    public function notify(Request $request)
    {
        $res = $request->all();
        Log::info($res);

////        if ('0' == $res["notifyType"]) {
////            return redirect()->to(route('pay.success'));
//        }
        // 请求数据赋值
        $data = [];

        // 订单状态，0-未支付，1-支付成功，2-失败，4-部分退款，5-退款，9-退款处理中
        $data['status'] = $res["status"];
        $data['sdorderno'] = $res["sdorderno"];
        $data['total_fee'] = $res['total_fee'];



        //处理订单
//        if ('1' == $res["notifyType"])
//        {

        if($data['status'] == 1) {
            $mod = PayRecord::where('order_no', $data["sdorderno"])->first();
            if ($mod)
            {
                $member = Member::find($mod->member_id);
                $recharge = Recharge::where('bill_no', $data["sdorderno"])->first();

                $mod->update([
                    'status' => $data["status"],
                    'after_request_result' => json_encode($data)
                ]);


                //如果处理成功
                if ($recharge)
                {
                    if ($data['status'] == "1" && $recharge->status != 2)
                    {
                        //中心账户
                        $member->increment('money', $data["total_fee"]);
                        //支付记录
                        $recharge->update([
                            'status' =>2,
                            'confirm_at' => date('Y-m-d H:i:s'),
                        ]);
                    }
                }
            }


            echo  "success";
        }else{
            echo 'fail';
        }



        //}
    }

    public function pay_return(Request $request)
    {
        return redirect()->to(route('pay.success'));
    }

    protected  function buildForm($data, $gateway) {
        $sHtml = "<form id='paysubmit' name='bankPaySubmit' action='".$gateway."' method='post'>";
        while (list ($key, $val) = each ($data)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }
        $sHtml.= "</form>";
        $sHtml.= "<script>document.forms['bankPaySubmit'].submit();</script>";

        return $sHtml;
    }

    /**
     * 注册用户
     * @param $merchant 商户号
     * @param $username 必须数字字母组合2-16位
     * @return mixed
     */
    public function addUser($merchant,$username)
    {
        $url = $this->uri.'/pay/coin/add-user';
        $data = [
            'merchant'=>$merchant,
            'username' => $username,
            'sign' => md5($merchant.$username.$this->api_key)
        ];

        $res =  self::request($url,$data);
        if(isset($res['statusCode']) && $res['statusCode'] == 01){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 获取数字货币交易登陆地址
     * @param $merchant 商户号
     * @param $username 用户名
     * @param $type 交易类型 1为买2为卖
     * @param $orderNum 商户定义的唯一订单编号,长度不超过 32 位，数字货币交易订单变动通知，以 OrderNum 为准
     * @param $payMethod 支付方式 weChatpay 微信 aliPay 支付宝 bankcard 网银
     * @param $amount 订单金额
     * @return bool|mixed
     */
    public function login($merchant,$username,$type,$orderNum,$payMethod,$amount)
    {
        $url = $this->uri.'/pay/coin/login';
        $data = [
            'merchant' => $merchant,
            'username' => $username,
            'type' => $type,
            'orderNum' => $orderNum,
            'payMethod' =>$payMethod,
            'amount' => $amount,
            'sign' => md5($merchant.$username.$type.$orderNum.$payMethod.$this->api_key)
        ];
        if(self::addUser($merchant,$username)){
            return self::request($url,$data);
        }else{
            return false;
        }

    }
    public function getPrice($code)
    {
        $url = $this->uri.'/pay/coin/get-pay-price';
        $data = [
            'merchant' => $this->merchant,
            'sign' => md5($this->merchant.$this->api_key)
        ];
        $rs = self::request($url,$data);
        if($rs && $rs['statusCode']==01) {
            $arr = [];
            foreach ($rs['data'] as $k => $v) {
                $arr[$v['code']] = $v;
            }
            if($code) {
                return $arr[$code]['price'];
            }else{
                return false;
            }

        }else{
            return false;
        }
    }
    /**
     * @param $url
     * @param $postData
     * @return mixed
     */
    public static function request($url,$postData)
    {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($postData),
                'timeout'=>60,//单位秒
            )
        );
        $context  = stream_context_create($options);
        $res =  file_get_contents($url, false, $context);
        return json_decode($res,true);
    }
}