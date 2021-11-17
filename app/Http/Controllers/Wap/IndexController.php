<?php

namespace App\Http\Controllers\Wap;

use App\Http\Controllers\Api\ApiClientController;
use App\Http\Controllers\Member\PtController;
use App\Http\Controllers\Web\WebBaseController;
use App\Models\ActivityApply;
use App\Models\Api;
use App\Models\BankCard;
use App\Models\Banners;
use App\Models\BlackListIp;
use App\Models\DailiMoneyLog;
use App\Models\Dividend;
use App\Models\Drawing;
use App\Models\GameList;
use App\Models\GameRecord;
use App\Models\Member;
use App\Models\MemberDailiApply;
use App\Models\MemberLoginLog;
use App\Models\Recharge;
use App\Models\Red;
use App\Models\SystemConfig;
use App\Models\SystemNotice;
use App\Models\TcgGameList;
use App\Models\Template;
use App\Models\Transfer;
use App\Services\SelfService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
use Auth;
use Hash;
use App\Models\Activity;
use Illuminate\Support\Facades\Cache;
use Session;
use DB;
class IndexController extends WebBaseController
{
    use ValidationTrait;

    public function getPath($request)
    {
        $preview = $request->get('preview');
        if($request->has('preview')){
            $data = Template::where('id',$preview)->where('client_type',2)->first();
            $mb_path = $data->template_name;
        }else{
            $data = Template::where('status',2)->where('client_type',2)->first();
            $mb_path = $data->template_name;
        }
        return $mb_path;
    }
    //首页
    public function index(Request $request)
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        $banners = Banners::where('type', 2)->orderBy('sort','asc')->get();

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.index';
        }else{
            $view = 'wap.template.'.$mb_path.'.index';
        }
        //echo $view;
        //die;
        return view($view, compact('system_notices', 'banners'));
    }
    //首页
    public function index_py(Request $request)
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        $banners = Banners::where('type', 2)->get();
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.index_py';
        }else{
            $view = 'wap.template.'.$mb_path.'.index_py';
        }
        return view($view, compact('system_notices', 'banners'));
    }
    public function nav(Request $request)
    {
        $member = $this -> getMember();
        if ( !$member) {
            return redirect()->guest('m/login');
        }
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.nav';
        }else{
            $view = 'wap.template.'.$mb_path.'.nav';
        }
        return view($view);
    }

    public function activity_list(Request $request)
    {
        $mod = new Activity();
        $type = $request->get('type');
        if($type){
            $mod = $mod -> where('type',$type);
        }
        $data = $mod -> where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.activity_list';
        }else{
            $view = 'wap.template.'.$mb_path.'.activity_list';
        }
        return view($view, compact('data'));
    }

    public function activity_detail(Request $request,$id)
    {
        $data = Activity::findOrFail($id);
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.activity_detail';
        }else{
            $view = 'wap.template.'.$mb_path.'.activity_detail';
        }
        return view($view, compact('data'));
    }

    //pt 电子
    public function pt_rng_game_list()
    {
        $data = TcgGameList::where('productCode', 'PT')->where('on_line', 0)->where('gameType', 'RNG')->orderBy('sort', 'asc')->get();

        return view('wap.pt.rng_game_list', compact('data'));
    }

    //pt 真人游戏列表
    public function pt_live_game_list()
    {
        $data = TcgGameList::where('productCode', 'PT')->where('on_line', 0)->where('gameType', 'LIVE')->orderBy('sort', 'asc')->get();

        return view('wap.pt.live_game_list', compact('data'));
    }

    //png 电子
    public function png_rng_game_list()
    {
        $data = TcgGameList::where('productCode', 'PNG')->where('client_type', 'html5')->where('on_line', 0)->where('gameType', 'RNG')->orderBy('sort', 'asc')->get();

        return view('wap.png.rng_game_list', compact('data'));
    }

    //ttg 电子
    public function ttg_rng_game_list()
    {
        $data = TcgGameList::where('productCode', 'TTG')->where('client_type', 'html5')->where('on_line', 0)->where('gameType', 'RNG')->orderBy('sort', 'asc')->get();

        return view('wap.ttg.rng_game_list', compact('data'));
    }

    //GG 电子

    public function gg_rng_game_list()
    {
        $data = TcgGameList::where('productCode', 'GG')->where('client_type', 'html5')->where('on_line', 0)->where('gameType', 'RNG')->orderBy('sort', 'asc')->get();

        return view('wap.gg.rng_game_list', compact('data'));
    }

    //CQ9 电子

    public function cq9_rng_game_list()
    {
        $data = TcgGameList::where('productCode', 'CQ9')->where('client_type', 'html5')->where('on_line', 0)->where('gameType', 'RNG')->orderBy('sort', 'asc')->get();

        return view('wap.cq9.rng_game_list', compact('data'));
    }

//    public function pt_rng_game_list()
//    {
//        return view('wap.pt.rng_game_list');
//    }

    public function dt_rng_game_list()
    {
        return view('wap.dt.rng_game_list');
    }

    //ag 电子游戏列表
    public function ag_eGame_list()
    {
        return view('wap.ag.eGame_list');
    }

    //mg 电子游戏列表
    public function mg_eGame_list()
    {
        return view('wap.mg.eGame_list');
    }

    public function login()
    {
        return view('wap.login');
    }

    public function register(Request $request)
    {
        $i_code = $request->get('i');

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.register';
        }else{
            $view = 'wap.template.'.$mb_path.'.register';
        }
        return view($view, compact('i_code'));
    }

    public function postRegister(Request $request)
    {
        if(!session('milkcaptcha')||session('milkcaptcha') != $request->get('captcha'))
            return responseWrong('验证码错误');

        $my_system_config = SystemConfig::findOrFail(1);
        $validator = $this->verify($request, 'wap.register');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        //验证ip
        if (in_array($request->getClientIp(), BlackListIp::pluck('ip')->toArray()))
            return responseWrong('该ip限制，请联系客服');

        //必须以字母开头
        if (!preg_match('/^[a-z]+$/', substr((string)$request->get('name'),0,1)) || !preg_match('/^[0-9a-z]+$/', $request->get('name')))
            return responseWrong('用户名只能以小写字母开头且字母数字组合');

        if(strlen((string)$request->get('qk_pwd')) != 6){
            return responseWrong('取款密码为6位纯数字');
        }


        $data = $request->all();
        //判断是否必须

        $real_name='';
        $phone='';
        $email='';
        $qq='';
        $weixin ='';

        if($my_system_config->is_regtj_1==1){
            $t_name=$request->get('t_name');
            if($my_system_config->is_regtj_2==1){
                if(empty($t_name)){
                    return responseWrong('推荐人必填');
                }
            }
            if(!empty($t_name)){
                if(!Member::where('is_daili', 1)->where('name', $t_name)->first()){
                    return responseWrong('不存在此推荐人');
                }
            }
        }
        $dali_mod = '';//判断域名
        $do_main = $_SERVER['SERVER_NAME'];
        $m = Member::where('is_daili', 1)->where('agent_uri', $do_main)->first();
        if ($m)
        {
            $dali_mod = $m;
        } elseif ($request->has('u'))
        {
            $dali_mod = Member::where('is_daili', 1)->where('agent_uri', $request->get('u'))->first();
        } elseif ($request->has('i_code'))
        {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('i_code'))->first();
        }elseif (Cache::has(sha1(getIp()))){
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', Cache::get(sha1(getIp())))->first();
        } elseif ($request->has('t_name')) {
            $dali_mod = Member::where('is_daili', 1)->where('name', $request->get('t_name'))->first();
        }
        if($my_system_config->is_real_name_1==1){
            $real_name=$data['real_name'];
            if($my_system_config->is_real_name_2==1){
                if(empty($real_name)){
                    return responseWrong('姓名必填');
                }

            }
            if(!empty($real_name)){


                if(!preg_match('/^[\x{4e00}-\x{9fa5}]+$/u',$real_name)){
                    return responseWrong('姓名只能输入中文');
                }

                if (Member::where('real_name', $real_name)->first()){
                    return responseWrong('该姓名已存在！');

                }

            }
        }
        if($my_system_config->is_phone_1==1){
            $phone=$data['phone'];
            if($my_system_config->is_phone_2==1){
                if(empty($phone)){
                    return responseWrong('手机必填');
                }
                if(!preg_match("/^1[345678]\d{9}$/", $phone)){

                    return responseWrong('手机号码格式不正确！');

                }
            }

            if(!empty($phone)){
                if (Member::where('phone', $phone)->first()){
                    return responseWrong('该手机号已存在！');
                }

            }
        }
        if($my_system_config->is_qq_1==1){
            $qq=$data['qq'];
            if($my_system_config->is_qq_2==1){
                if(empty($qq)){
                    return responseWrong('QQ必填');
                }
                if (!preg_match( "/^[1-9][0-9]{4,14}$/", $data['qq'] ) )
                {

                    return responseWrong('您输入的QQ不合法');
                }
            }
            if(!empty($qq)){
                if (Member::where('qq', $qq)->first()){
                    return responseWrong('该QQ已存在！');
                }

            }
        }

        if($my_system_config->is_email_1==1){
            $email=$data['email'];
            if($my_system_config->is_email_2==1){
                if(empty($email)){
                    return responseWrong('邮箱必填');
                }
                if (!preg_match( "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i", $data['email'] ) )
                {

                    return responseWrong('您输入的电子邮件地址不合法');
                }
            }
            if(!empty($email)){
                if (Member::where('email', $email)->first()){
                    return responseWrong('该邮箱已存在！');
                }

            }
        }
        if($my_system_config->is_weixin_1==1){
            $weixin=$data['weixin'];
            if($my_system_config->is_weixin_2==1){
                if(empty($weixin)){
                    return responseWrong('微信必填');
                }
                if (!preg_match( "/^[a-zA-Z\d_]{5,}$/", $data['weixin'] ) )
                {

                    return responseWrong('您输入的微信不合法');
                }
            }
            if(!empty($weixin)){
                if (Member::where('weixin', $weixin)->first()){
                    return responseWrong('该微信已存在！');
                }

            }
        }
        Member::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'original_password' => substr(md5(md5($data['name'])), 0,10),
            'o_password' => $data['password'],
            'invite_code' => getRandom(7),
            'real_name' => $real_name,
            'qk_pwd' => $data['qk_pwd'],
            'top_id' => $dali_mod?$dali_mod->id:0,
            'register_ip' => $request->getClientIp(),
            'phone' => $phone,
            'email' => $email,
            'qq' => $qq,
            'weixin' => $weixin,
            'register_url'=>$_SERVER['HTTP_HOST'],
        ]);

        if (Auth::guard('member')->attempt(['name' => $request->name, 'password' => $request->password]))
        {
            $member = auth('member')->user();
            $member->last_session = Session::getId();
            $member->save();
            $member->update([
                'last_login_ip'=>$request->getClientIp(),
                'last_login_at' => date('Y-m-d H:i:s')
            ]);
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => $request->getClientIp()
            ]);
            return responseSuccess('', '登录成功', route('wap.index'));
        }

        return responseSuccess('','注册成功', route('wap.login'));
    }

    //个人中心
    public function userinfo(Request $request)
    {
        $this->refresh_ml();
        $api_mod= Api::where('on_line', 0)->orderBy('created_at', 'desc')->get();
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.userinfo';
        }else{
            $view = 'wap.template.'.$mb_path.'.userinfo';
        }
        return view($view, compact('api_mod'));
    }

    //代理
    public function agent(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.agent';
        }else{
            $view = 'wap.template.'.$mb_path.'.agent';
        }
        return view($view);
    }

    //代理申请页面
    public function agent_apply(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.agent_apply';
        }else{
            $view = 'wap.template.'.$mb_path.'.agent_apply';
        }
        return view($view);
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
        MemberDailiApply::create([
            'member_id' => $member->id,
            'phone' => $data['phone'],
            'msn_qq' => $data['qq'],
            'about' => $data['about']
        ]);

        return responseSuccess('','提交成功', route('wap.agent'));
    }

    public function bind_bank(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.bind_bank';
        }else{
            $view = 'wap.template.'.$mb_path.'.bind_bank';
        }
        return view($view);
    }

    public function post_bind_bank(Request $request)
    {
        $sys = SystemConfig::find(1);
        if ($sys->is_sms_on == 0)
        {
            if (!$request->has('v_code'))
                return responseWrong('请输入 手机验证码');

            if (session('phone_v_code') != $request->get('v_code'))
                return responseWrong('验证码错误 '.session('phone_v_code'));
        }

        $validator = $this->verify($request, 'wap.update_bank_info');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();
        $member = $this->getMember();

        $member->update($data);

        return responseSuccess('', '绑定成功', route('wap.drawing'));
    }

    public function set_phone(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.set_phone';
        }else{
            $view = 'wap.template.'.$mb_path.'.set_phone';
        }
        return view($view);
    }

    public function post_set_phone(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_set_phone');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();
        $member = $this->getMember();

        $member->update([
            'phone' => $data['phone']
        ]);

        return responseSuccess('', '设置成功', route('wap.index'));
    }

    public function drawing(Request $request)
    {
        $this->refresh_ml();
        if (!$this->getMember()->bank_card){
            return redirect()->to(route('wap.bind_bank'));
        }

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.drawing';
        }else{
            $view = 'wap.template.'.$mb_path.'.drawing';
        }
        return view($view);
    }

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

            return responseSuccess('','提交成功', route('wap.drawing_record'));
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

            return responseSuccess('','提交成功', route('wap.drawing_record'));
        }


    }



    public function recharge(Request $request)
    {
        $this->refresh_ml();
        $mb_path = $this->getPath($request);
        $bank_card_list = BankCard::where('on_line', 0)->orderBy('created_at', 'desc')->get();
        if(empty($mb_path)){
            $view = 'wap.recharge';
        }else{
            $view = 'wap.template.'.$mb_path.'.recharge';
        }
        return view($view,compact('bank_card_list'));
    }

    public function weixin_pay(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.weixin_pay';
        }else{
            $view = 'wap.template.'.$mb_path.'.weixin_pay';
        }
        return view($view);
    }

    public function post_weixin_pay(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_weixin_pay');

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

        return responseSuccess('', '', route('wap.recharge_record'));
    }

    public function ali_pay(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.ali_pay';
        }else{
            $view = 'wap.template.'.$mb_path.'.ali_pay';
        }
        return view($view);
    }

    public function third_bank_pay(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.third_bank_pay';
        }else{
            $view = 'wap.template.'.$mb_path.'.third_bank_pay';
        }
        return view($view);
    }

    public function third_pay_app()
    {
        return view('wap.third_pay_app');
    }

    public function qq_pay(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.qq_pay';
        }else{
            $view = 'wap.template.'.$mb_path.'.qq_pay';
        }
        return view($view);
    }

    public function third_pay_scan()
    {
        return view('wap.third_pay_scan');
    }

    public function post_ali_pay(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_ali_pay');

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

        return responseSuccess('', '', route('wap.recharge_record'));
    }

    public function post_qq_pay(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_qq_pay');

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

        return responseSuccess('', '', route('wap.recharge_record'));
    }

    public function bank_pay(Request $request)
    {
        $bank_card_list = BankCard::where('on_line', 0)->orderBy('created_at', 'desc')->get();
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.bank_pay';
        }else{
            $view = 'wap.template.'.$mb_path.'.bank_pay';
        }
        return view($view, compact('bank_card_list'));
    }

    public function post_bank_pay(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_bank_pay');

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

        return responseSuccess('', '', route('wap.recharge_record'));
    }

    public function reset_password(Request $request)
    {
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.reset_password';
        }else{
            $view = 'wap.template.'.$mb_path.'.reset_password';
        }
        return view($view);
    }

    public function reset_login_password(Request $request)
    {
        $validator = $this->verify($request, 'wap.update_login_password');

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

    public function reset_qk_password(Request $request)
    {
        $validator = $this->verify($request, 'wap.update_qk_password');

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

    public function transfer(Request $request)
    {
        $api_list = Api::where('on_line', 0)->orderBy('created_at', 'desc')->get();

        /*return view('wap.transfer', compact('api_list'));*/


        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.transfer';
        }else{
            $view = 'wap.template.'.$mb_path.'.transfer';
        }
        return view($view, compact('api_list'));
    }

    public function post_transfer(Request $request)
    {
        $validator = $this->verify($request, 'wap.post_transfer');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $member = $this->getMember();
        $in_account = $request->get('in_account');
        $out_account = $request->get('out_account');
        $money = $request->get('money');

        $o = new ApiClientController();

        if ($in_account == $out_account || ($in_account> 2 && $out_account > 2))
        {
            return responseWrong('不支持该种类型转换，请重新选择');
        }

        //
        if ($out_account == 1)//从中心账户转出
        {
            if ($member->money < $money)
                return responseWrong('账户余额不足');

            $api = Api::findOrFail($in_account);

            $res = $o->deposit($api->api_name, $member->name, $member->original_password, $money, 'money');
            if ($res['Code'] != 0)
                return responseWrong('失败！错误'.$res['Message'].' 请联系客服解决');
        } elseif ($out_account == 2){//从返水账户转出

            if ($member->fs_money < $money)
                return responseWrong('账户余额不足');

            $api = Api::findOrFail($in_account);

            $res = $o->deposit($api->api_name, $member->name, $member->original_password, $money, 'fs_money');
            if ($res['Code'] != 0)
                return responseWrong($res['Message']);
        } elseif ($in_account == 1){// 转入中心账户

            $api = Api::findOrFail($out_account);
            $res = $o->withdrawal($api->api_name, $member->name, $member->original_password, $money, 'money');
            if ($res['Code'] != 0)
                return responseWrong($res['Message']);
        }

        return responseSuccess('', '转换成功', route('wap.transfer'));
    }

    public function drawing_record(Request $request)
    {
        $data = Drawing::where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.drawing_record';
        }else{
            $view = 'wap.template.'.$mb_path.'.drawing_record';
        }
        return view($view, compact('data'));
    }

    public function game_record(Request $request)
    {

        $api_type = '';
        $mod = new GameRecord();
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
            $api_name = Api::where('id',$api_type)->first();

            if($api_name->api_name=='AG'){
                $ags = Api::where('api_name','AGS')->first();

                $mod = $mod->whereIn('api_type', [$ags->id,$api_type]);
            }elseif ($api_name->api_name == 'SUNBET'){
                $sunbets = Api::where('api_name','SUNBETS')->first();
                $mod = $mod->whereIn('api_type', [$sunbets->id,$api_type]);
            }else{
                $mod = $mod->where('api_type', $api_type);
            }

        }

        $data = $mod->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.game_record';
        }else{
            $view = 'wap.template.'.$mb_path.'.game_record';
        }
        return view($view, compact('data', 'api_type'));
    }

    public function recharge_record(Request $request)
    {

        $data = Recharge::where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.recharge_record';
        }else{
            $view = 'wap.template.'.$mb_path.'.recharge_record';
        }
        return view($view, compact('data'));
    }

    public function transfer_record(Request $request)
    {
        $cn_begin = $cn_end = date('Y-m-d');

        $s_begin_h = $request->get('s_begin_h')?:'00';
        $s_begin_i = $request->get('s_begin_i')?:'00';

        $s_end_h  = $request->get('s_end_h')?:'23';

        $s_end_i = $request->get('s_end_i')?:'59';

        $mod = new Transfer();
        if ($cn_begin)
        {
            $cn_begin = $request->get('cn_begin',date('Y-m-d'));
            $mod = $mod->where('created_at', '>=', $cn_begin." ".$s_begin_h.":".$s_begin_i.":00");
        }

        if ($cn_end)
        {
            $cn_end = $request->get('cn_end',date('Y-m-d'));
            $mod = $mod->where('created_at', '<=', $cn_end." ".$s_end_h.":".$s_end_i.":00");
        }


        $data = $mod->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.transfer_record';
        }else{
            $view = 'wap.template.'.$mb_path.'.transfer_record';
        }

        return view($view, compact('data', 'cn_begin', 'cn_end', 's_begin_h', 's_begin_i', 's_end_h', 's_end_i'));
    }

    public function daili_money_log(Request $request)
    {
        $data = DailiMoneyLog::where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.daili_money_log';
        }else{
            $view = 'wap.template.'.$mb_path.'.daili_money_log';
        }
        return view($view, compact('data'));
    }

    public function member_offline(Request $request)
    {
        $data = Member::where('top_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.member_offline';
        }else{
            $view = 'wap.template.'.$mb_path.'.member_offline';
        }
        return view($view, compact('data'));
    }

    public function member_offline_recharge(Request $request)
    {
        $mod = new Recharge();
        $name = '';
        $cn_begin =  date('Y-m-d');

        $cn_end = date('Y-m-d');

        if ($request->has('cn_begin'))
        {
            $cn_begin = $request->get('cn_begin');
            $mod = $mod->where('created_at', '>=', "$cn_begin");
        }

        if ($request->has('cn_end'))
        {
            $cn_end = $request->get('cn_end');
            $mod = $mod->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($cn_end)));
        }

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = Member::where('top_id', $this->getMember()->id)->where('name', 'LIKE', "%$name%")->pluck('id');
        } else {
            $m_list = Member::where('top_id', $this->getMember()->id)->pluck('id');
        }

        $mod = $mod->whereIn('member_id', $m_list);

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.member_offline_recharge';
        }else{
            $view = 'wap.template.'.$mb_path.'.member_offline_recharge';
        }

        return view($view ,compact('data', 'name', 'cn_begin', 'cn_end'));
    }

    public function member_offline_drawing(Request $request)
    {
        $mod = new Drawing();
        $name = '';
        $cn_begin =  date('Y-m-d');

        $cn_end = date('Y-m-d');

        if ($request->has('cn_begin'))
        {
            $cn_begin = $request->get('cn_begin');
            $mod = $mod->where('created_at', '>=', "$cn_begin");
        }

        if ($request->has('cn_end'))
        {
            $cn_end = $request->get('cn_end');
            $mod = $mod->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($cn_end)));
        }

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = Member::where('top_id', $this->getMember()->id)->where('name', 'LIKE', "%$name%")->pluck('id');
        } else {
            $m_list = Member::where('top_id', $this->getMember()->id)->pluck('id');
        }

        $mod = $mod->whereIn('member_id', $m_list);

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.member_offline_drawing';
        }else{
            $view = 'wap.template.'.$mb_path.'.member_offline_drawing';
        }

        return view($view ,compact('data', 'name', 'cn_begin', 'cn_end'));
    }


    public function member_offline_sy(Request $request)
    {
        $cn_begin =  '';

        $cn_end = '';

        $m_list = Member::where('top_id', $this->getMember()->id)->pluck('id');
        $recharge_mod = new Recharge();
        $drawing_mod = new Drawing();
        $dividend_mod = new Dividend();

        if ($request->has('cn_begin'))
        {
            $cn_begin = $request->get('cn_begin');
            $recharge_mod = $recharge_mod->where('created_at', '>=', $cn_begin);
            $drawing_mod = $drawing_mod->where('created_at', '>=', $cn_begin);
            $dividend_mod = $dividend_mod->where('created_at', '>=', $cn_begin);
        }

        if ($request->has('cn_end'))
        {
            $cn_end = $request->get('cn_end');
            $recharge_mod = $recharge_mod->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($cn_end)));
            $drawing_mod = $drawing_mod->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($cn_end)));
            $dividend_mod = $dividend_mod->where('created_at', '<=', date('Y-m-d 23:59:59', strtotime($cn_end)));
        }

        $total_recharge = $recharge_mod->where('status', 2)->whereIn('member_id', $m_list)->sum('money');
        $recharge_count = $recharge_mod->where('status', 2)->whereIn('member_id', $m_list)->count();

        $total_drawing = $drawing_mod->where('status', 2)->whereIn('member_id', $m_list)->sum('money');
        $drawing_count = $drawing_mod->where('status', 2)->whereIn('member_id', $m_list)->count();

        $total_dividend = $dividend_mod->whereIn('member_id', $m_list)->sum('money');
        $dividend_count = $dividend_mod->whereIn('member_id', $m_list)->count();


        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.member_offline_sy';
        }else{
            $view = 'wap.template.'.$mb_path.'.member_offline_sy';
        }

        return view($view, compact('cn_begin', 'cn_end', 'total_recharge', 'recharge_count', 'total_drawing', 'drawing_count', 'total_dividend', 'dividend_count'));
    }


    /**
     * 增加我的消息
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function msg(Request $request)
    {
        $member = $this->getMember();
        $data = $member->messages()->orderBy('created_at', 'desc')->paginate(config('web.page-size'));
        //dd($data);
        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.msg';
        }else{
            $view = 'wap.template.'.$mb_path.'.msg';
        }
        return view($view,compact('data'));
    }
    public function red()
    {
        $res = SystemConfig::findOrfail(1);
        if($res->is_hongbao == 1) {
            $red = Red::where('on_line',0)->orderBy('sort','asc')->get();
            return view('wap.red',compact('red'));
        }
    }

    public function my_activity(Request $request)
    {
        $member = $this->getMember();
        $data = ActivityApply::where('member_id', $member->id)->orderBy('status', 'asc')->get();

        $mb_path = $this->getPath($request);
        if(empty($mb_path)){
            $view = 'wap.my_activity';
        }else{
            $view = 'wap.template.'.$mb_path.'.my_activity';
        }
        return view($view, compact('data'));
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
