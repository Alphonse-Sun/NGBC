<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Api\SelfController;
use App\Http\Controllers\Web\WebBaseController;
use App\Models\Activity;
use App\Models\ActivityApply;
use App\Models\Api;
use App\Models\BankCard;
use App\Models\DistillRedLog;
use App\Models\Dividend;
use App\Models\Drawing;
use App\Models\Feedback;
use App\Models\FsLevel;
use App\Models\GameRecord;
use App\Models\MemberDailiApply;
use App\Models\MemberMessage;
use App\Models\Recharge;
use App\Models\Red;
use App\Models\RedLog;
use App\Models\SystemConfig;
use App\Models\SystemNotice;
use App\Models\Transfer;
use App\Services\SelfService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
use Hash;
use App\Http\Controllers\Api\ApiClientController;
use DB;
class IndexController extends ApiClientController
{
    use ValidationTrait;

    public $sys;
    public function __construct()
    {
        $this->sys = SystemConfig::findOrfail(1);
    }

    /**
     *
     * 基本信息
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userCenter()
    {
        $this->refresh_ml();
        $api_mod= Api::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        $bank_card_list = BankCard::where('on_line', 0)->orderBy('created_at', 'desc')->get();
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        if($this->sys->is_new_center == 1){
            $game_types = config('platform.game_type');

            //print_r($game_types);
            $user = $this->getMember();
            //dump($user->name);

            $list = [];

            $total = [
                'game_str' => '',
                'fs_money' => 0
            ];

            foreach ($game_types as $k=>$v ){
                //if($k != 6) continue;
                $rows = GameRecord::where('gameType',$k)
                    ->where('member_id',$user->id)
                    ->where('isfs','=',0)
                    ->where('flag',1)
                    ->orderBy('betTime','desc')
                    ->get()
                    ->toArray();

                //print_r($rows);
                $res = [];
                foreach ($rows as $key => $row){
                    $date = substr($row['betTime'],'0',10);
                    $res[$date][] = $row;
                }
                $all = [];
                $fs_level = FsLevel::orderBy('level','desc')->where('game_type',$k)->get();

                foreach ($res as $d => $v){
                    $game_str = '';
                    $tz_amount = 0;
                    $rate = 0;
                    $level_name = '';
                    foreach ($v as $kk => $info){
                        $game_str .= $info['id'].',';
                        $tz_amount += $info['validBetAmount'];
                    }
                    foreach ($fs_level as $l =>$value){
                        if($tz_amount >= $value->quota){
                            $level_name = $value->name;
                            $rate = $value->rate;
                            break;
                        }
                    }
                    $fs_money = sprintf("%.2f",  $tz_amount*$rate/100);
                    if($fs_money  <= 0) {
                        /*if($d != date('Y-m-d')) {
                            continue;
                        }*/
                    }

                    $all[$d]['game_str'] = $game_str;
                    $all[$d]['tz_amount'] = $tz_amount;
                    $all[$d]['level_name'] = $level_name;
                    $all[$d]['rate'] = $rate;
                    $all[$d]['fs_money'] = $fs_money;
                    if($d == date('Y-m-d') && $fs_money > 0) {
                        $total['game_str'] .= $game_str;
                        $total['fs_money'] += $fs_money;
                    }elseif($d != date('Y-m-d')){
                        $total['game_str'] .= $game_str;
                        $total['fs_money'] += $fs_money;
                    }


                }

                $list[$k] = $all;
            }
            $member = $this->getMember();
            $data = ActivityApply::where('member_id', $member->id)->orderBy('status', 'asc')->get();
            return view('member.new_single_info', compact('api_mod','bank_card_list','system_notices','total','list','data'));
        }else{
            return view('member.single_info', compact('api_mod','bank_card_list','system_notices'));
        }

    }

    /**
     *
     * 银行资料
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bank_load()
    {
        return view('member.bank_load');
    }

    /**
     *
     * 账户设置
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function account_load()
    {
        $api_list = Api::where('on_line', 0)->orderBy('created_at', 'desc')->get();

        return view('member.account_load', compact('api_list'));
    }

    public function message_list()
    {
        //$this->getMember()->messages()->where('is_read', 0)->update(['is_read' => 1]);
        return view('member.message_list');
    }

    /**
     *
     * 安全密码
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function safe_psw()
    {
        return view('member.safe_psw');
    }

    /**
     *
     * 登录密码
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login_psw()
    {
        return view('member.login_psw');
    }

    /**
     *
     * 会员存款
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finance_center()
    {
        return view('member.finance_center');
    }

    /**
     *
     * 会员提款
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function member_drawing()
    {
        $this->refresh_ml();
        $member = $this->getMember();
        if (!$member->bank_username)
            return redirect()->to(route('member.update_bank_info'));
        return view('member.member_drawing');
    }

    /**
     *
     * 户内转账
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indoor_transfer()
    {
        $api_mod = Api::where('on_line', 0)->get();

        return view('member.indoor_transfer', compact('api_mod'));
    }

    /**
     *
     * 客户报表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function customer_report(Request $request)
    {
        $type = $request->has('type')?$request->get('type'):0;

        return view('member.customer_report', compact('type'));
    }

    /**
     *
     * 公告信息
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function service_center()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();

        return view('member.service_center', compact('system_notices'));
    }

    /**
     *
     * 投诉建议
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function complaint_proposal()
    {
        return view('member.complaint_proposal');
    }

    public function post_agent_apply(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_agent_apply');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }


        $data = $request->all();
        $member = $this->getMember();

        if ($member->is_daili == 1)
            return responseWrong('已经是代理');

        MemberDailiApply::create([
            'member_id' => $member->id,
            'phone' => $data['phone'],
            'msn_qq' => $data['qq'],
            'about' => $data['about']
        ]);

        return responseSuccess('','申请成功', route('web.index'));
    }

    public function update_bank_info()
    {
        return view('member.update_bank_info');
    }

    public function post_update_bank_info(Request $request)
    {
        $sys = SystemConfig::find(1);
        if ($sys->is_sms_on == 0)
        {
            if (!$request->has('v_code'))
                return responseWrong('请输入 手机验证码');

            if (session('phone_v_code') != $request->get('v_code'))
                return responseWrong('验证码错误 '.session('phone_v_code'));
        }

        $validator = $this->verify($request, 'member.update_bank_info');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();
        $member = $this->getMember();

        $member->update($data);

        return responseSuccess('', '', route('member.userCenter'));
    }

    //修改取款密码
    public function update_qk_password(Request $request)
    {
        $validator = $this->verify($request, 'member.update_qk_password');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $member = $this->getMember();

        if ($member->qk_pwd != $data['old_password'])
        {
            return responseWrong('原密码错误');
        }

        $member->update([
            'qk_pwd' => $data['password']
        ]);

        return responseSuccess('', '修改成功');
    }

    public function update_login_password(Request $request)
    {
        $validator = $this->verify($request, 'member.update_login_password');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $member = $this->getMember();
        if (!Hash::check($data['old_password'], $member->password))
        {
            return responseWrong('原密码错误');
        }

        $member->update([
            'password' => bcrypt($data['password']),
            //'original_password' => $data['password']
        ]);

        return responseSuccess('', '修改成功');
    }

    public function recharge_type(Request $request)
    {
        if(!$request->has('type'))
            return responseWrong('请选择充值类型');

        $type = $request->get('type');
        $route = '';
        if ($type == 1)
            $route = route('member.weixin_pay');
        elseif ($type == 2)
            $route = route('member.ali_pay');
        elseif ($type == 3)
            $route = route('member.bank_pay');
        elseif ($type == 4)
            $route = route('member.third_bank_pay');
        elseif ($type == 5)
            $route = route('member.third_pay_scan');
        elseif ($type == 6)
            $route = route('member.qq_pay');
        elseif ($type == 7)
            $route = route('member.third_quick_pay_apply');

        return responseSuccess('','', $route);
    }

    public function third_quick_pay_apply()
    {
        return view('member.third_quick_pay');
    }

    //微信支付
    public function weixin_pay()
    {
        return view('member.weixin_pay');
    }

    //微信支付
    public function qq_pay()
    {
        return view('member.qq_pay');
    }

    //支付宝支付
    public function ali_pay()
    {
        return view('member.ali_pay');
    }

    //提交QQ支付
    public function post_qq_pay(Request $request)
    {
        $validator = $this->verify($request, 'member.post_qq_pay');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $member = $this->getMember();

        Recharge::create([
            'bill_no' => getBillNo(),
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $data['money'],
            'payment_type' => 5,
            'account' => $data['account'],
            'status' => 1,
            'hk_at' => $data['paytime'].' '.$data['date_h'].':'.$data['date_i'].':'.$data['date_s']
        ]);

        if($this->sys->is_new_center == 1){
            return responseSuccess('','提交成功');
        }else{
            return responseSuccess('','提交成功', route('member.customer_report').'?type=0');
        }

    }


    public function third_bank_pay()
    {
        return view('member.third_bank_pay');
    }

    public function third_pay_scan()
    {
        return view('member.third_pay_scan');
    }

    //银行卡支付
    public function bank_pay()
    {
        $bank_card_list = BankCard::where('on_line', 0)->orderBy('created_at', 'desc')->get();

        return view('member.bank_pay', compact('bank_card_list'));
    }

    //提交微信支付
    public function post_weixin_pay(Request $request)
    {
        $validator = $this->verify($request, 'member.post_weixin_pay');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $member = $this->getMember();

        Recharge::create([
            'bill_no' => getBillNo(),
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $data['money'],
            'payment_type' => 2,
            'account' => $data['account'],
            'status' => 1,
            'hk_at' => $data['paytime'].' '.$data['date_h'].':'.$data['date_i'].':'.$data['date_s']
        ]);

        if($this->sys->is_new_center == 1){
            return responseSuccess('','提交成功');
        }else{
            return responseSuccess('','提交成功', route('member.customer_report').'?type=0');
        }

    }

    //提交支付宝支付
    public function post_ali_pay(Request $request)
    {
        $validator = $this->verify($request, 'member.post_ali_pay');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $member = $this->getMember();

        Recharge::create([
            'bill_no' => getBillNo(),
            'member_id' => $member->id,
            'name' => $member->name,
            'money' => $data['money'],
            'payment_type' => 1,
            'account' => $data['account'],
            'status' => 1,
            'hk_at' => $data['paytime'].' '.$data['date_h'].':'.$data['date_i'].':'.$data['date_s']
        ]);

        if($this->sys->is_new_center == 1){
            return responseSuccess('','提交成功');
        }else{
            return responseSuccess('','提交成功', route('member.customer_report').'?type=0');
        }


    }

    //提交银行卡支付
    public function post_bank_pay(Request $request)
    {
        $validator = $this->verify($request, 'member.post_bank_pay');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $member = $this->getMember();

        Recharge::create([
            'bill_no' => getBillNo(),
            'member_id' => $member->id,
            'name' => $data['name'],
            'money' => $data['money'],
            'payment_type' => 3,
            'account' => $data['account'],
            'payment_desc' => $data['payment_desc'],
            'status' => 1,
            'hk_at' => $data['paytime'].' '.$data['date_h'].':'.$data['date_i'].':'.$data['date_s']
        ]);

        if($this->sys->is_new_center == 1){
            return responseSuccess('','提交成功');
        }else{
            return responseSuccess('','提交成功', route('member.customer_report').'?type=0');
        }

    }

    //提交提款
    public function post_drawing(Request $request)
    {
        $member = $this->getMember();

        if (!$member->bank_username)
            return responseWrong('请先设置银行卡信息','', route('member.update_bank_info'));

        $validator = $this->verify($request, 'member.post_drawing');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        if($data['money'] <= 0){
            return responseWrong('请输入正整数字');
        }


        $sys = SystemConfig::find(1);
        $times = Drawing::where('member_id',$member->id)
            ->where('created_at', '>=', date('Y-m-d 00:00:00'))
            ->where('created_at', '<=', date('Y-m-d 23:59:59'))
            ->where('status',2)
            ->count();

        if ($times >= $sys->transfer_times){
            return responseWrong('每天最多只能申请提款' . $sys->transfer_times . '次');
            }
        if($member->ml_money != 0) {
            return responseWrong('您的打码量不足，无法提现');
        }
        //中心钱包
        if($member->is_trans_on ==1) {
            $center_res = json_decode((new SelfService())->wallet_balance($member->name),true);
            if(!$center_res){
                $msg = (new SelfService())->wallet_balance($member->name);
                return responseWrong($msg);
            }
            //print_r($center_res);
            if($center_res['statusCode'] == 01){
                $center_money = $center_res['data'];
            }else{
                return responseWrong($center_res['code'].'--'.$center_res['message']);
            }

            $all_money = $member->money + $center_money;


            if ($data['money'] > $all_money) {
                return responseWrong('提款金额大于余额');
            }
            /*if ($data['qk_pwd'] != $member->qk_pwd) {
                return responseWrong('取款密码不正确');
            }*/

            if(strcmp($data['qk_pwd'],$member->qk_pwd) != 0) {
                return responseWrong('取款密码不正确');
            }
            //将中心钱包余额转入网站用户余额
            //$amount = $data['money'] > 0 ? -$data['money']:$data['money'];

            if($center_money > 0){
                //中心钱包金额大于0
                $amount = $center_money > 0 ? -$center_money : $center_money;

                $result = (new SelfService())->trans($member->name,$amount);
                $res = json_decode($result,true);

                if(!$res){
                    return responseWrong($result);
                }
                if($res['statusCode'] != 01){
                    return responseWrong($res['statusCode'].'--'.$res['message']);
                }
                $amount_type = 'money';
                if(is_array($res) && $res['statusCode'] == 01){
                    try{
                        DB::transaction(function() use($res,$amount_type,$amount,$member,$result) {
                            //个人账户
                            $member->increment($amount_type , abs($amount));
                            //额度转换记录
                            Transfer::create([
                                'bill_no' => getBillNo(),
                                'api_type' => '0',
                                'member_id' => $member->id,
                                'transfer_type' => 1,
                                'money' => $amount,
                                'transfer_in_account' => $amount_type == 'money'?'中心账户':'返水账户',
                                'transfer_out_account' => '免转钱包',
                                'result' => $result
                            ]);
                        });
                    }catch(\Exception $e){
                        DB::rollback();
                        return responseWrong('网络错误请重试2');
                    }
                }
            }

            /*--------------end---------------------*/
            try{
                DB::transaction(function() use($data, $member) {
                    Drawing::create([
                        'bill_no' => getBillNo(),
                        'member_id' => $member->id,
                        'name' => $member->bank_username,
                        'money' => $data['money'],
                        'account' => $member->bank_card,
                        'bank_name' => $member->bank_name,
                        'bank_card' => $member->bank_card,
                        'bank_address' => $member->bank_branch_name
                    ]);

                    $member->decrement('money', $data['money']);

                });
            }catch(\Exception $e){
                DB::rollback();
                return responseWrong('失败');
            }

            if($this->sys->is_new_center == 1){
                return responseSuccess('','提交成功');
            }else{
                return responseSuccess('','提交成功', route('member.customer_report').'?type=1');
            }
        }else{
            //转账钱包
            $all_money = $member->money;


            if ($data['money'] > $all_money) {
                return responseWrong('提款金额大于余额');
            }
            /*if ($data['qk_pwd'] != $member->qk_pwd) {
                return responseWrong('取款密码不正确');
            }*/
            if(strcmp($data['qk_pwd'],$member->qk_pwd) != 0) {
                return responseWrong('取款密码不正确');
            }
            try{
                DB::transaction(function() use($data, $member) {
                    Drawing::create([
                        'bill_no' => getBillNo(),
                        'member_id' => $member->id,
                        'name' => $member->bank_username,
                        'money' => $data['money'],
                        'account' => $member->bank_card,
                        'bank_name' => $member->bank_name,
                        'bank_card' => $member->bank_card,
                        'bank_address' => $member->bank_branch_name
                    ]);

                    $member->decrement('money', $data['money']);

                });
            }catch(\Exception $e){
                DB::rollback();
                return responseWrong('失败');
            }

            if($this->sys->is_new_center == 1){
                return responseSuccess('','提交成功');
            }else{
                return responseSuccess('','提交成功', route('member.customer_report').'?type=1');
            }
        }



    }

    //提交额度转换
    public function post_transfer(Request $request)
    {
        $validator = $this->verify($request, 'member.post_transfer');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $input = $request->all();

        $member = $this->getMember();
        if($input['account2'] == 0){
            $api_name ='center';
        }else{
            $api = Api::findOrFail($input['account2']);
            $api_name = $api->api_name;
        }

        $username = $member->name;
        $password = $member->original_password;
        $amount = $input['money'];
        $transfer_type = $input['transfer_type'];
        //$account1 = $input['account1']==1?'money':'fs_money';
        $account1 = $input['account1']==1?'money':'money';

        $data = [];
        //转账类型
        if ($transfer_type == 0)//转入游戏
        {
            if ($account1 == 'money' && $member->money < $amount)
                return responseWrong('账户余额不足');
            if ($account1 == 'fs_money' && $member->fs_money < $amount)
                return responseWrong('账户余额不足');

            $is_ag = $member->is_ag;

            $ag = Api::where('api_name', 'AG')->orderBy('created_at', 'desc')->first();
            $ags =Api::where('api_name', 'AGS')->orderBy('created_at', 'desc')->first();

            //增加申博
            $is_sunbet = $member->is_sunbets;
            $sunbet = Api::where('api_name', 'SUNBET')->orderBy('created_at', 'desc')->first();
            $sunbets =Api::where('api_name', 'SUNBETS')->orderBy('created_at', 'desc')->first();
            if(strtolower($api_name) == 'ag' || strtolower($api_name) == 'ags') {
                if($ag && $ag->on_line == 1 && $ags && $ags->on_line==0){
                    $res = $this->deposit('AGS', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }elseif ($ag && $ag->on_line==0 && $ags && $ags->on_line==0){
                    if($is_ag == 1) {
                        $res = $this->deposit('AG', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($is_ag == 2){
                        $res = $this->deposit('AGS', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }
                }
            }elseif (strtolower($api_name) == 'sunbet' || strtolower($api_name) == 'sunbets'){
                if($sunbet && $sunbet->on_line == 1 && $sunbets && $sunbets->on_line==0){
                    $res = $this->deposit('SUNBETS', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }elseif ($sunbet && $sunbet->on_line==0 && $sunbets && $sunbets->on_line==0){
                    if($is_sunbet == 1) {
                        $res = $this->deposit('SUNBET', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($is_sunbet == 2){
                        $res = $this->deposit('SUNBETS', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }
                }
            }else{
                $res = $this->deposit($api_name, $username, $password, $amount, $account1);
                if ($res['Code'] != 0){
                    return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                }
            }
            /*$res = $this->deposit($api_name, $username, $password, $amount, $account1);
            if ($res['Code'] != 0){
                return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
            }*/


        } elseif ($transfer_type == 1)//转出游戏
        {

            if(strtolower($api_name) == 'ag' || strtolower($api_name) == 'ags') {
                $is_ag = $member->is_ag;

                $ag = Api::where('api_name', 'AG')->orderBy('created_at', 'desc')->first();
                $ags =Api::where('api_name', 'AGS')->orderBy('created_at', 'desc')->first();

                if($ag && $ag->on_line == 1 && $ags && $ags->on_line==0){
                    $res = $this->withdrawal('AGS', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }elseif ($ag && $ag->on_line==0 && $ags && $ags->on_line==0){
                    if($is_ag == 1) {
                        $res = $this->withdrawal('AG', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($is_ag == 2){
                        $res = $this->withdrawal('AGS', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }
                }
            }elseif (strtolower($api_name) == 'sunbet' || strtolower($api_name) == 'sunbets'){
//增加申博
                $is_sunbet = $member->is_sunbets;
                $sunbet = Api::where('api_name', 'SUNBET')->orderBy('created_at', 'desc')->first();
                $sunbets =Api::where('api_name', 'SUNBETS')->orderBy('created_at', 'desc')->first();
                if($sunbet && $sunbet->on_line == 1 && $sunbets && $sunbets->on_line==0){
                    $res = $this->withdrawal('SUNBETS', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }elseif ($sunbet && $sunbet->on_line==0 && $sunbets && $sunbets->on_line==0){
                    if($is_sunbet == 1) {
                        $res = $this->withdrawal('SUNBET', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($is_sunbet == 2){
                        $res = $this->withdrawal('SUNBETS', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }
                }
            }else{
                $res = $this->withdrawal($api_name, $username, $password, $amount, $account1);
                //print_r($res);
                //die;
                if ($res['Code'] != 0){
                    return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                }
            }

        }
        if (is_Mobile()) {
            $url=route('wap.transfer') ;
        }
        if($this->sys->is_new_center == 1){
            if(is_Mobile()){
                return responseSuccess('','提交成功',$url);
            }else{
                return responseSuccess('','提交成功',route('member.userCenter',['type'=>3]));
            }

        }else{
            if(is_Mobile()){
                return responseSuccess('','提交成功',$url);
            }else{
                return responseSuccess('','提交成功', route('member.customer_report').'?type=2');
            }

        }


    }

    public function one_transfer(Request $request)
    {


        $input = $request->all();


        $member = $this->getMember();
        $amount = $member->money;

        $api_name = $input['api_name'];
        $username = $member->name;
        $password = $member->original_password;

        $transfer_type = $input['transfer_type'];
        $account1 = 'money';

        $data = [];
        //转账类型
        if ($transfer_type == 0)//转入游戏
        {

            if($member -> money <= 0) {
                return responseWrong('账户余额不足,请充值!!!');
            }
            if ($account1 == 'money' && $member->money < $amount){
                return responseWrong('账户余额不足');
            }

            if ($account1 == 'fs_money' && $member->fs_money < $amount){
                return responseWrong('账户余额不足');
            }

            $is_ag = $member->is_ag;

            $ag = Api::where('api_name', 'AG')->orderBy('created_at', 'desc')->first();
            $ags =Api::where('api_name', 'AGS')->orderBy('created_at', 'desc')->first();





            $sunbet = Api::where('api_name', 'SUNBET')->orderBy('created_at', 'desc')->first();
            $sunbets =Api::where('api_name', 'SUNBETS')->orderBy('created_at', 'desc')->first();

            $is_sunbet = $member->is_sunbets;

            if(strtolower($api_name) == 'ag' || strtolower($api_name) == 'ags') {
                if($ag && $ag->on_line == 1 && $ags && $ags->on_line==0){
                    $res = $this->deposit('AGS', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }elseif ($ag && $ag->on_line==0 && $ags && $ags->on_line==0){
                    if($is_ag == 1) {
                        $res = $this->deposit('AG', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($is_ag == 2){
                        $res = $this->deposit('AGS', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }
                }else{
                    $res = $this->deposit('AG', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }
            }elseif (strtolower($api_name) == 'sunbet' || strtolower($api_name) == 'sunbets'){


                if($sunbet && $sunbet->on_line == 1 && $sunbets && $sunbets->on_line==0){

                    $res = $this->deposit('SUNBETS', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }elseif ($sunbet && $sunbet->on_line==0 && $sunbets && $sunbets->on_line==0){

                    if($is_sunbet == 1) {
                        $res = $this->deposit('SUNBET', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($is_sunbet == 2){
                        $res = $this->deposit('SUNBETS', $username, $password, $amount, $account1);
                        if ($res['Code'] != 0){
                            return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                        }
                    }
                }else{
                    $res = $this->deposit('SUNBET', $username, $password, $amount, $account1);
                    if ($res['Code'] != 0){
                        return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                    }
                }
            }else{
                $res = $this->deposit($api_name, $username, $password, $amount, $account1);
                if ($res['Code'] != 0){
                    return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
                }
            }
        } elseif ($transfer_type == 1)//转出游戏
        {
            $m = 0;
            $apis = Api::where('on_line', 0)->pluck('api_name');

            //if(in_array($api_name,$apis->toArray())){
                $mod = new SelfController();

                $is_ag = $member->is_ag;

                $ag = Api::where('api_name', 'AG')->orderBy('created_at', 'desc')->first();
                $ags =Api::where('api_name', 'AGS')->orderBy('created_at', 'desc')->first();


                if(strtolower($api_name) == 'ag' || strtolower($api_name) == 'ags') {
                    if($ag && $ag->on_line == 1 && $ags && $ags->on_line==0){
                        $res =  $mod->balance('AGS',$member->name, $member->original_password);
                        if (intval($res['Data']) <= 0) {

                            return responseWrong('额度不足');
                        }
                        $m = $res['Data'];

                        $res = $this->withdrawal('AGS', $username, $password, $m, $account1);

                        if ($res['Code'] != 0){
                            return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
                        }
                    }elseif ($ag && $ag->on_line==0 && $ags && $ags->on_line==0){
                        if($is_ag == 1) {
                            $res =  $mod->balance('AG',$member->name, $member->original_password);
                            if (intval($res['Data']) <= 0) {

                                return responseWrong('额度不足');
                            }
                            $m = $res['Data'];

                            $res = $this->withdrawal('AG', $username, $password, $m, $account1);

                            if ($res['Code'] != 0){
                                return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
                            }
                        }elseif ($is_ag ==2){
                            $res =  $mod->balance('AGS',$member->name, $member->original_password);
                            if (intval($res['Data']) <= 0) {

                                return responseWrong('额度不足');
                            }
                            $m = $res['Data'];

                            $res = $this->withdrawal('AGS', $username, $password, $m, $account1);

                            if ($res['Code'] != 0){
                                return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
                            }
                        }
                    }
                }elseif (strtolower($api_name) == 'sunbet' || strtolower($api_name) == 'sunbets'){

                    $is_sunbet = $member->is_sunbets;

                    $sunbet = Api::where('api_name', 'SUNBET')->orderBy('created_at', 'desc')->first();
                    $sunbets =Api::where('api_name', 'SUNBETS')->orderBy('created_at', 'desc')->first();

                    return $this->private_game_trans($sunbet,$sunbets,$is_sunbet,$account1);


                }else{
                    $res =  $mod->balance($api_name,$member->name, $member->original_password);
                    if (intval($res['Data']) <= 0) {

                        return responseWrong('额度不足');
                    }
                    $m = $res['Data'];

                    $res = $this->withdrawal($api_name, $username, $password, $m, $account1);

                    if ($res['Code'] != 0){
                        return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
                    }
                }


            //}


            /*die;
            //获取单接口的余额
            if (in_array($api_name, [
                'AG',
                'BBIN',
                'MG',
                'PT',
                'AB',
                'TTG',
                'IBC',
                'YC',
                'CG',
                'SA',
                'BG',
                'DT',
                'HJ',
                'WJS',
                'PNG',
                'SS',
                'BS',
                'MW',
                'SUNBET',
                'EG',
                'OG',
                'VR',
                'NAG',
                'KG',
                'KY',
                'IMSB',
                'OPUSSPORT',
                'OPUSCASINO',
                'CQ9',
                'DG',
                'GG',
                'EBET'
            ]))
            {
                $mod = new SelfController();
                $res =  $mod->balance($api_name,$member->name, $member->original_password);
                if ($res['Data'] <= 0) {

                    return responseWrong('额度不足');
                }
                $m = $res['Data'];
            }

            $res = $this->withdrawal($api_name, $username, $password, $m, $account1);
            if ($res['Code'] != 0)
                return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');*/
        }


        if (is_Mobile()) {
            $url=route('wap.transfer') ;
        }

        if($this->sys->is_new_center == 1){
            if(is_Mobile()){
                return responseSuccess('','提交成功',$url);
            }else{
                return responseSuccess('','提交成功',route('member.userCenter',['type'=>3]));
            }

        }else{
            if(is_Mobile()){
                return responseSuccess('','提交成功',$url);
            }else{
                return responseSuccess('','提交成功');
            }

        }

    }

    /**
     * @param $game1正版
     * @param $game2私有
     * @param $is_state开启状态
     * @param $account1账户类型money
     * @return mixed
     */
    private function private_game_trans($game1,$game2,$is_state,$account1)
    {
        $member = $this->getMember();
        $username = $member->name;
        $password = $member->original_password;

        $mod = new SelfController();

        if($game1 && $game1->on_line == 1 && $game2 && $game2->on_line==0){
            //山寨游戏
            $res =  $mod->balance($game2->api_name,$member->name, $member->original_password);
            if (intval($res['Data']) <= 0) {

                return responseWrong('额度不足');
            }
            $m = $res['Data'];

            $res = $this->withdrawal($game2->api_name, $username, $password, $m, $account1);

            if ($res['Code'] != 0){
                return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
            }
        }elseif ($game1 && $game1->on_line==0 && $game2 && $game2->on_line==0){
            if($is_state == 1) {
                $res =  $mod->balance($game1->api_name,$member->name, $member->original_password);
                if (intval($res['Data']) <= 0) {

                    return responseWrong('额度不足');
                }
                $m = $res['Data'];

                $res = $this->withdrawal($game1->api_name, $username, $password, $m, $account1);

                if ($res['Code'] != 0){
                    return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
                }
            }elseif ($is_state ==2){
                $res =  $mod->balance($game2->api_name,$member->name, $member->original_password);
                if (intval($res['Data']) <= 0) {

                    return responseWrong('额度不足');
                }
                $m = $res['Data'];

                $res = $this->withdrawal($game2->api_name, $username, $password, $m, $account1);

                if ($res['Code'] != 0){
                    return responseWrong('失败!'.$res['Message'].' 请联系客服解决');
                }
            }
        }
        if (is_Mobile()) {
            $url=route('wap.transfer') ;
        }

        if($this->sys->is_new_center == 1){
            if(is_Mobile()){
                return responseSuccess('','提交成功',$url);
            }else{
                return responseSuccess('','提交成功',route('member.userCenter',['type'=>3]));
            }

        }else{
            if(is_Mobile()){
                return responseSuccess('','提交成功',$url);
            }else{
                return responseSuccess('','提交成功');
            }

        }
    }
    //提交反馈
    public function post_feedback(Request $request)
    {
        $validator = $this->verify($request, 'member.post_feedback');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        Feedback::create([
            'type' => $data['type'],
            'content' => $data['content'],
            'phone' => $data['phone'],
            'member_id' => $this->getMember()->id
        ]);

        return responseSuccess('', '谢谢您的反馈！', route('member.complaint_proposal'));
    }

    public function distillRed(Request $request)
    {
        //最近一次成功充值
        $member = $this->getMember();
        $recharge = Recharge::where('member_id', $member->id)->where('status', 2)->orderBy('created_at','desc')->first();

        if(!$recharge)
            return responseWrong('没有充值记录');

        //匹配红包等级
        $red_level = Red::where('on_line', 0)->orderBy('sort', 'desc')->get();
        $rate = $times = 0;
        foreach ($red_level as $k => $v)
        {
            if ($recharge->money >= $v->min_amount && $recharge->money <= $v->max_amount)
            {
                $rate = rand($v->min_rate, $v->max_rate);
                $times = $v->times;
                break;
            }
        }


        if ($rate > 0 )
        {
            //判断次数
            $log = DistillRedLog::where('recharge_id', $recharge->id)->first();
            if (!$log)
            {
                $log = DistillRedLog::create([
                    'recharge_id' => $recharge->id
                ]);
            }

            if ($log->times < $times)
            {
                //计算红包
                $red_money = $recharge->money*$rate/100;
                try{
                    DB::transaction(function() use($log, $member,$red_money,$recharge) {

                        $member->increment('money', $red_money);
                        //红利
                        Dividend::create([
                            'member_id' => $member->id,
                            'type' => 4,
                            'describe' => '充值红包',
                            'money' => $red_money,
                        ]);
                        //
                        RedLog::create([
                            'recharge_id' => $recharge->id,
                            'money' => $red_money
                        ]);
                        //
                        $log->increment('times', 1);

                    });
                }catch(\Exception $e){
                    DB::rollback();
                    return responseWrong('失败');
                }
            } else {
                return responseWrong('红包资格已用完');
            }

        } else {
            return responseWrong('没有达到抽取红包条件');
        }

        return responseSuccess($red_money, '抽取成功，红包已发放到中心账户');


    }
    public function my_activity()
    {
        $member = $this->getMember();
        $data = ActivityApply::where('member_id', $member->id)->orderBy('status', 'asc')->get();

        return view('member.my_activity', compact('data'));
    }

    //申请活动
    public function post_apply_activity(Request $request)
    {
        $data = $request->all();
        $member = $this->getMember();

        $check = ActivityApply::where(['activity_id' => $data['activity_id'], 'member_id'=>$member->id,'status'=>1])->first();
        if(isset($check->id))
        {
            return responseWrong('你已申请过该活动,并且正在审核！');
        }
        else
        {
            $check2 = ActivityApply::where([
                'activity_id'=>$data['activity_id'],
                'member_id'=>$member->id,
                'status'=>2
            ])->first();
            if(isset($check2->id)){
                return responseWrong('你已申请过该活动,请不要重复申请！');
            }
            $check_activity = Activity::where('id', $data['activity_id'])->first();

            if($check_activity->type == 9)
            {//首存活动
                $first_mod = new Recharge();

                if(isset($check_activity->start_at))
                {
                    $first_mod = $first_mod->where('created_at', '>=', $check_activity->start_at);
                }

                if(isset($check_activity->end_at))
                {
                    $first_mod = $first_mod->where('created_at', '<=', $check_activity->end_at);
                }

                $first_recharge = $first_mod->where('status', 2)->where('member_id', $member->id)->orderBy('created_at', 'asc')->first();

                if(!isset($first_recharge->id))
                {
                    return responseWrong('请充值后再来申请');
                }
                else
                {
                    if(isset($check_activity->start_at))
                    {
                        if(date('Y-m-d H:i:s', time()) < $check_activity->start_at)
                        {
                            return responseWrong("活动将于 $check_activity->start_at 开始");
                        }
                    }

                    if(isset($check_activity->end_at))
                    {
                        if(date('Y-m-d H:i:s', time()) > $check_activity->end_at)
                        {
                            return responseWrong("活动已结束，请申请其他活动");
                        }
                    }

                    if($first_recharge->money < $check_activity->money)
                    {
                        return responseWrong("首存金额需达到 $check_activity->money 才能申请该活动");
                    }
                }
            }

            if($check_activity->type == 3)
            {//充值活动
                $ck_mod = new Recharge();

                if(isset($check_activity->start_at))
                {
                    $ck_mod = $ck_mod->where('created_at', '>=', $check_activity->start_at);
                }

                if(isset($check_activity->end_at))
                {
                    $ck_mod = $ck_mod->where('created_at', '<=', $check_activity->end_at);
                }

                if(isset($check_activity->start_at))
                {
                    if(date('Y-m-d H:i:s', time()) < $check_activity->start_at)
                    {
                        return responseWrong("活动将于 $check_activity->start_at 开始");
                    }
                }

                if(isset($check_activity->end_at))
                {
                    if(date('Y-m-d H:i:s', time()) > $check_activity->end_at)
                    {
                        return responseWrong("活动已结束，请申请其他活动");
                    }
                }

                $recharge_money = $ck_mod->where('member_id', $member->id)->where('status', 2)->sum('money');

                if($recharge_money < $check_activity->money)
                {
                    return responseWrong("充值金额需达到 $check_activity->money 才能申请该活动");
                }
            }

            ActivityApply::create([
                'activity_id' => $data['activity_id'],
                'member_id' => $member->id
            ]);
        }

        $url=route('member.my_activity');

        if (is_Mobile()) {
            $url=route('wap.my_activity');
        }

        if($this->sys->is_new_center == 1){
            return responseSuccess('','申请成功');
        }else{
            return responseSuccess('', '申请成功', $url);
        }
    }

    public function post_change_trans(Request $request)
    {
        $data = $request->all();
        if($request->has('is_trans_on')){
            $member = $this->getMember();

            if($data['is_trans_on'] == 0){
                //开启转账钱包  中心钱包 转入系统
                $center_res = json_decode((new SelfService())->wallet_balance($member->name),true);
                if(!$center_res){
                    $msg = (new SelfService())->wallet_balance($member->name);
                    return responseWrong($msg);
                }
                if($center_res['statusCode'] == 01){
                    $center_money = $center_res['data'];
                }else{
                    return responseWrong($center_res['code'].'--'.$center_res['message']);
                }

                //中心钱包有钱时转入系统
                if($center_money > 0) {
                    $amount = $center_money > 0 ? -$center_money : $center_money;

                    $result = (new SelfService())->trans($member->name,$amount);
                    $res = json_decode($result,true);

                    if(!$res){
                        return responseWrong($result);
                    }
                    if($res['statusCode'] != 01){
                        return responseWrong($res['statusCode'].'--'.$res['message']);
                    }
                    $amount_type = 'money';
                    if(is_array($res) && $res['statusCode'] == 01){
                        try{
                            DB::transaction(function() use($res,$amount_type,$amount,$member,$result) {
                                //个人账户
                                $member->increment($amount_type , abs($amount));
                                //额度转换记录
                                Transfer::create([
                                    'bill_no' => getBillNo(),
                                    'api_type' => '0',
                                    'member_id' => $member->id,
                                    'transfer_type' => 1,
                                    'money' => abs($amount),
                                    'transfer_in_account' => $amount_type == 'money'?'中心账户':'返水账户',
                                    'transfer_out_account' => '免转钱包',
                                    'result' => $result
                                ]);
                            });
                        }catch(\Exception $e){
                            DB::rollback();
                            return responseWrong('网络错误请重试2');
                        }
                    }
                }

            }elseif ($data['is_trans_on'] == 1) {
                $result = (new SelfService())->trans_all($member->name);
                $res = json_decode($result,true);

                if(!$res){
                    return responseWrong($result);
                }
                if($res['statusCode'] != 01){
                    //return responseWrong($res['statusCode'].'--'.$res['message']);
                    if($res['statusCode'] == '10040'){
                        $res['message'] = '请先进入任意游戏激活会员,然后转换钱包';
                    }
                    return json_encode(array(
                        'code' => $res['statusCode'],
                        'msg' => $res['message']
                    ));
                }
                $amount_type = 'money';
                if(isset($res['data']['allCount'])) {
                    $amount = $res['data']['allCount'];
                }else{
                    $amount = 0;
                }

                if($amount > 0) {
                    if(is_array($res) && $res['statusCode'] == 01){
                        try{
                            DB::transaction(function() use($res,$amount_type,$amount,$member,$result) {
                                //个人账户
                                $member->increment($amount_type , abs($amount));
                                //额度转换记录
                                Transfer::create([
                                    'bill_no' => getBillNo(),
                                    'api_type' => '0',
                                    'member_id' => $member->id,
                                    'transfer_type' => 1,
                                    'money' => abs($amount),
                                    'transfer_in_account' => $amount_type == 'money'?'中心账户':'返水账户',
                                    'transfer_out_account' => '转账钱包',
                                    'result' => $result
                                ]);
                            });
                        }catch(\Exception $e){
                            DB::rollback();
                            return responseWrong('网络错误请重试2');
                        }
                    }
                }
            }
            $res = $member->update([
                'is_trans_on'=>$data['is_trans_on']
            ]);
            if($res) {
                echo json_encode(array(
                    'code' => 0,
                    'msg' => '状态修改成功'
                ));
                exit;
            }else{
                echo json_encode(array(
                    'code' => 0,
                    'msg' => '状态修改失败'
                ));
                exit;
            }
        }else{
            echo json_encode(array(
                'code' => 0,
                'msg' => '参数错误'
            ));
            exit;
        }
    }
    public function refresh_ml()
    {
        $start_date = '2019-11-12 00:00:00';
        $member = $this->getMember();
        $game_record = GameRecord::where('member_id', $member->id)
            ->where('created_at', '>=', $start_date)
            ->where('validBetAmount', '<>', 0)
            ->where('is_mluse', '0');
        $total_ml = $game_record->sum('validBetAmount');
        $update_ml = $member->ml_money - $total_ml;
        $update_ml = $update_ml >= 0 ? $update_ml : 0;
        try {
            DB::transaction(function () use($member, $update_ml, $game_record) {
                $member->update(['ml_money' => $update_ml]);
                $game_record->update(['is_mluse' => 1]);
            });
        } catch (\Exception $e) {
            DB::rollback();
            return responseWrong('码量刷新失败');
        }
    }
}
