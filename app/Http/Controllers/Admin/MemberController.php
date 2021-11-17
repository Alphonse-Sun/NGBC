<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\ApiClientController;
use App\Models\Dividend;
use App\Models\Drawing;
use App\Models\GameRecord;
use App\Models\Recharge;
use App\Models\Transfer;
use App\Services\SelfService;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Member;
use Auth;
use App\Models\AdminActionMoneyLog;
use App\Models\MemberLoginLog;
use Illuminate\Support\Facades\DB;

class MemberController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new Member();
        $name = $status = $register_ip = $on_line = $real_name = $last_login_ip = '';
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'like', "%$name%");
        }
        if ($request->has('real_name'))
        {
            $real_name = $request->get('real_name');
            $mod = $mod->where('real_name', 'like', "%$real_name%");
        }
        if ($request->has('register_ip'))
        {
            $register_ip = $request->get('register_ip');
            $mod = $mod->where('register_ip', 'like', "%$register_ip%");
        }
        if ($request->has('last_login_ip'))
        {
            $last_login_ip = $request->get('last_login_ip');
            $mod = $mod->where('last_login_ip', 'like', "%$last_login_ip%");
        }
        if ($request->has('status'))
        {
            $status = $request->get('status');
            $mod = $mod->where('status', $status);
        }
        if ($request->has('on_line'))
        {
            $on_line = $request->get('on_line');
            if ($on_line == 1)
            {
                $_online_member_array = MemberLoginLog::where('created_at', '>=', date('Y-m-d H:i:s', strtotime('-3 hours')))->pluck('member_id')->toArray();
                $mod = $mod->whereIn('id', $_online_member_array);
            }

        }

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));


        //dump($data->toArray());

        /*foreach($data as $item){
            $money_obj = (new SelfService())->wallet_balance($item->name);
            $money = json_decode($money_obj,true);
            //print_r($money);
            $item->money = $item->money + $money['data'];
        }*/
        return view('admin.member.index', compact('data', 'name','real_name', 'status', 'register_ip', 'on_line','last_login_ip'));
    }

    public function assign($id)
    {
        $data = Member::findOrFail($id);
        $daili_list = Member::where('is_daili', 1)->pluck('name', 'id')->toArray();

        return view('admin.member.assign', compact('data', 'daili_list'));
    }

    public function post_assign(Request $request, $id)
    {
        if (!$request->has('top_id'))
            return responseWrong('请选择 代理');

        $member = Member::findOrFail($id);
        $member->update([
            'top_id' => $request->get('top_id')
        ]);

        return responseSuccess('', '分配代理成功', route('member.index'));
    }

    public function showGameRecordInfo(Request $request, $id)
    {
        $mod = new GameRecord();
        $start_at = $end_at = $api_type ='';
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
            $mod = $mod->where('api_type', $api_type);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('betTime', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('betTime', '<=',$end_at);
        }

        $mod = $mod->where('member_id', $id);

        $data = $mod->orderBy('betTime', 'desc')->paginate(config('admin.page-size'));

        // $total_netAmount = $mod->sum('netAmount');
        // $total_betAmount = $mod->sum('betAmount');

        $total_netAmount = $mod->sum('netAmount');
        $total_betAmount = $mod->sum('betAmount');
       // $total_netAmount = $total_netAmount - $total_betAmount;
        $total_validBetAmount = $mod->sum('validBetAmount');

        return view('admin.member.showGameRecordInfo', compact('data','start_at', 'end_at', 'api_type', 'total_netAmount', 'total_betAmount', 'id', 'total_validBetAmount'));
    }

    public function showRechargeInfo(Request $request, $id)
    {
        $mod = new Recharge();

        $status = $payment_type = '';

        if ($request->has('status'))
        {
            $status = $request->get('status');
            $mod = $mod->where('status', $status);
        }

        if ($request->has('payment_type'))
        {
            $payment_type = $request->get('payment_type');
            $mod = $mod->where('payment_type', $payment_type);
        }

        $mod = $mod->where('member_id', $id);

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_recharge = $mod->sum('money');
        $total_diff_money = $mod->sum('diff_money');

        return view('admin.member.showRechargeInfo', compact('data', 'status', 'payment_type', 'total_recharge', 'total_diff_money', 'id'));
    }

    public function showDrawingInfo(Request $request, $id)
    {
        $mod = new Drawing();

        $status = '';

        if ($request->has('status'))
        {
            $status = $request->get('status');
            $mod = $mod->where('status', $status);
        }
        $mod = $mod->where('member_id', $id);

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_money = $mod->sum('money');
        $total_counter_fee = $mod->sum('counter_fee');

        return view('admin.member.showDrawingInfo', compact('data', 'status', 'total_money', 'total_counter_fee', 'id'));
    }

    public function showDividendInfo(Request $request, $id)
    {
        $mod = new Dividend();

        $type = '';

        if ($request->has('type'))
        {
            $type = $request->get('type');
            $mod = $mod->where('type', $type);
        }

        $mod = $mod->where('member_id', $id);

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_money = $mod->sum('money');

        return view('admin.member.showDividendInfo', compact('data','total_money', 'type','id'));
    }

    public function checkBalance($id)
    {
        $data = Member::FindOrFail($id);

        return view('admin.member.checkBalance', compact('data', 'id'));
    }

    public function showTransfer(Request $request, $id)
    {
        $mod = new Transfer();
        $name = $type = $transfer_type = $transfer_in_account = $transfer_out_account = $start_at = $end_at = '';
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = Member::where('name', 'LIKE', "%$name%")->pluck('id');
            $mod = $mod->whereIn('member_id', $m_list);
        }
        if ($request->has('transfer_in_account'))
        {
            $transfer_in_account = $request->get('transfer_in_account');
            $mod = $mod->where('transfer_in_account', 'LIKE', "%$transfer_in_account%");
        }
        if ($request->has('transfer_out_account'))
        {
            $transfer_out_account = $request->get('transfer_out_account');
            $mod = $mod->where('transfer_out_account', 'LIKE', "%$transfer_in_account%");
        }
        if ($request->has('transfer_type'))
        {
            $transfer_type = $request->get('transfer_type');
            $mod = $mod->where('transfer_type', $transfer_type);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }

        $mod = $mod->where('member_id', $id);
        $total_money = $mod->sum('money');
        $total_diff_money = $mod->sum('diff_money');

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.member.showTransfer', compact('data', 'name', 'transfer_in_account', 'transfer_out_account', 'transfer_type', 'start_at', 'end_at', 'total_money', 'total_diff_money', 'id'));
    }

    public function export(Request $request)
    {
        $map = [];
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $map['name'] = ['name', 'like', "%$name%"];
        }

        if ($request->has('realname'))
        {
            $realname = $request->get('realname');
            $map['realname'] = ['realname', 'like', "%$realname%"];
        }

        //默认不显示超级管理员
        $map['is_super_admin'] = 0;
        $data = MemberRepository::getByWhere($map)->toArray();

        Excel::create('测试', function ($excel) use ($data) {
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->rows(
                    $data
                );
            });
        })->download('xls');
    }

    public function create()
    {
        return view('admin.member.create');
    }

    /**
     *
     * 创建
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = $this->verify($request, 'member.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        Member::create($data);

        return responseSuccess('','', route('member.index'));
    }

    /**
     *
     * 编辑
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data= Member::findOrFail($id);

        return view('admin.member.edit', compact('data'));
    }
    public function edit2($id)
    {
        $data= Member::findOrFail($id);
        return view('admin.member.edit2', compact('data'));
    }
    public function update2(Request $request, $id)
    {
        $member= Member::findOrFail($id);

        $money_type = $request->get('money_type');
        $type = $request->get('type');
        $my_money = trim($request->get('my_money'));
        $remark = $request->get('remark');
        if(empty($money_type)){
            return responseWrong('请选择加款类型！');
        }
        if(empty($my_money)){
            return responseWrong('请输入金额！');
        }
        if($money_type=='in'){
            if(empty($type)){
                return responseWrong('请输入红利类型！');
            }
        }




        $types = config('platform.dividend_type');

        if($money_type == 'in'){

            if($type == 1) {
                DB::beginTransaction(); //开启事务
                try{
                    Recharge::create([
                        'bill_no' => getBillNo(),
                        'member_id' => $member->id,
                        'name' => $member->name,
                        'money' => $my_money,
                        'payment_type' => 5,
                        'account' => '系统充值',
                        'status' => 2,
                        'hk_at' => date('Y-m-d H:i:s'),
                        'confirm_at' =>date('Y-m-d H:i:s')
                    ]);
                    //用户中心账户加钱
                    $member->increment('money', $my_money);
                    DB::commit();
                }catch (\Exception $e){
                    DB::rollback();
                    return responseWrong('加款失败,请重试！！');
                }
                return responseSuccess('','', route('member.index'));

            }else{

                if($member->is_trans_on == 1) {
                    $result = (new SelfService())->wallet_balance($member->name);
                    $res = json_decode($result,true);
                    $center_money = $res['data'];
                    if(!$res){
                        return responseWrong('网络错误请稍后重试');
                    }
                    if($res['statusCode'] != 01){
                        return responseWrong('网络错误请稍后重试');
                    }
                    $all_money = $member->money + $center_money;
                    try{
                        DB::transaction(function() use($member, $type,$my_money,$remark,$types,$all_money) {
                            //如果存在赠送金额 则添加进红利表
                            Dividend::create([
                                'member_id' => $member->id,
                                'type' => $type,
                                'money' => $my_money,
                                'describe' => $remark ? $remark : $types[$type],
//                        'before_money' => $mod->member->money,
//                        'after_money' => $mod->member->money + $data['money'],
                                'status' => 1
                            ]);
                            //用户本地账户加钱
                            $member->increment('money', $my_money);
                            $user = \Auth::user();
                            AdminActionMoneyLog::create([
                                'member_id' => $member->id,
                                'user_id' => $user->id,
                                'old_money' => $all_money,
                                'new_money' => $all_money + $my_money,
                                /*'old_fs_money' => $old_fs_money ? $old_fs_money : 0 ,
                                'new_fs_money' => $new_fs_money ? $new_fs_money : 0*/
                                'remark'=>$remark
                            ]);
                        });
                    }catch(Exception $e){
                        DB::rollback();
                        return responseWrong('加款失败,请重试！！');
                    }
                }else{
                    $all_money = $member->money;
                    try{
                        DB::transaction(function() use($member, $type,$my_money,$remark,$types,$all_money) {
                            //如果存在赠送金额 则添加进红利表
                            Dividend::create([
                                'member_id' => $member->id,
                                'type' => $type,
                                'money' => $my_money,
                                'describe' => $remark ? $remark : $types[$type],
//                        'before_money' => $mod->member->money,
//                        'after_money' => $mod->member->money + $data['money'],
                                'status' => 1
                            ]);
                            //用户本地账户加钱
                            $member->increment('money', $my_money);
                            $user = \Auth::user();
                            AdminActionMoneyLog::create([
                                'member_id' => $member->id,
                                'user_id' => $user->id,
                                'old_money' => $all_money,
                                'new_money' => $all_money + $my_money,
                                /*'old_fs_money' => $old_fs_money ? $old_fs_money : 0 ,
                                'new_fs_money' => $new_fs_money ? $new_fs_money : 0*/
                                'remark'=>$remark
                            ]);
                        });
                    }catch(Exception $e){
                        DB::rollback();
                        return responseWrong('加款失败,请重试！！');
                    }
                }

                return responseSuccess('','', route('member.index'));
            }

        }elseif($money_type=='out'){

        if($member->is_trans_on == 1) {


            $result = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($result,true);
            $center_money = $res['data'];
            if(!$res){
                return responseWrong('网络错误请稍后重试');
            }
            if($res['statusCode'] != 01){
                return responseWrong('网络错误请稍后重试');
            }
            $all_money = $member->money + $center_money;

            if($all_money < $my_money){
                return responseWrong('用户余额不足！！扣款失败！！');
            }else{

                DB::beginTransaction();
                try{
                    if($center_money > 0){
                        $result = (new SelfService())->trans($member->name,0-$center_money);

                        $res = json_decode($result,true);

                        if(!isset($res['statusCode'])){
                            DB::rollBack();
                            return responseWrong('网络错误请稍后重试');
                        }
                        if($res['statusCode'] != '01'){
                            DB::rollBack();
                            return responseWrong('网络错误请稍后重试');
                        }
                        $member->increment('money', $center_money);
                    }

                    $t = date('Y-m-d H:i:s');
                    $sql = "update `members` set `money` = `money` - ?, `updated_at` = ? where `id` = ? and `deleted_at` is null and money >= ? and money >0";
                    $rs = DB::update($sql,[$my_money,$t,$member->id,$all_money]);

                    if(!$rs){
                        DB::rollBack();
                        return responseWrong('内部错误！请联系管理员！');
                    }
                    //如果存在赠送金额 则添加进红利表
                    /*Dividend::create([
                        'member_id' => $member->id,
                        'type' => $type,
                        'money' => 0-$my_money,
                        'describe' => $remark ? $remark : $types[$type],
//                        'before_money' => $mod->member->money,
//                        'after_money' => $mod->member->money + $data['money'],
                        'status' => 1
                    ]);*/
                    $user = \Auth::user();
                    AdminActionMoneyLog::create([
                        'member_id' => $member->id,
                        'user_id' => $user->id,
                        'old_money' => $all_money,
                        'new_money' => $all_money - $my_money,
                        /*'old_fs_money' => $old_fs_money ? $old_fs_money : 0 ,
                        'new_fs_money' => $new_fs_money ? $new_fs_money : 0*/
                        'remark'=>$remark
                    ]);
                    DB::commit();
                }catch(\Exception $e){
                    DB::rollback();
                    return responseWrong('内部错误！请联系管理员！');
                }
                /*try{
                    DB::transaction(function() use($member, $type,$my_money,$remark,$types,$center_money,$all_money) {
                        if($center_money > 0){
                            $result = (new SelfService())->trans($member->name,0-$center_money);

                            $res = json_decode($result,true);

                            if(!isset($res['statusCode'])){
                                DB::rollBack();
                                return responseWrong('网络错误请稍后重试');
                            }
                            if($res['statusCode'] != '01'){
                                DB::rollBack();
                                return responseWrong('网络错误请稍后重试');
                            }
                            $member->increment('money', $center_money);
                        }

                        $t = date('Y-m-d H:i:s');
                        $sql = "update `members` set `money` = `money` - ?, `updated_at` = ? where `id` = ? and `deleted_at` is null and money >= ? and money >0";
                        $rs = DB::update($sql,[$my_money,$t,$member->id,$all_money]);

                        if(!$rs){
                            DB::rollBack();
                            return responseWrong('内部错误！请联系管理员！');
                        }
                        //如果存在赠送金额 则添加进红利表
                        Dividend::create([
                            'member_id' => $member->id,
                            'type' => $type,
                            'money' => 0-$my_money,
                            'describe' => $remark ? $remark : $types[$type],
//                        'before_money' => $mod->member->money,
//                        'after_money' => $mod->member->money + $data['money'],
                            'status' => 1
                        ]);
                    });
                }catch(Exception $e){
                    DB::rollback();
                    return responseWrong('扣款失败,请重试！！');
                }*/
            }
            }else {
            $all_money = $member->money;

            if ($all_money < $my_money) {
                return responseWrong('用户余额不足！！扣款失败！！');
            } else {

                DB::beginTransaction();
                try {
                    $t = date('Y-m-d H:i:s');
                    $sql = "update `members` set `money` = `money` - ?, `updated_at` = ? where `id` = ? and `deleted_at` is null and money >= ? and money >0";
                    $rs = DB::update($sql, [$my_money, $t, $member->id, $all_money]);

                    if (!$rs) {
                        DB::rollBack();
                        return responseWrong('内部错误！请联系管理员！');
                    }
                    //如果存在赠送金额 则添加进红利表
                    /*Dividend::create([
                        'member_id' => $member->id,
                        'type' => $type,
                        'money' => 0-$my_money,
                        'describe' => $remark ? $remark : $types[$type],
//                        'before_money' => $mod->member->money,
//                        'after_money' => $mod->member->money + $data['money'],
                        'status' => 1
                    ]);*/
                    $user = \Auth::user();
                    AdminActionMoneyLog::create([
                        'member_id' => $member->id,
                        'user_id' => $user->id,
                        'old_money' => $all_money,
                        'new_money' => $all_money - $my_money,
                        /*'old_fs_money' => $old_fs_money ? $old_fs_money : 0 ,
                        'new_fs_money' => $new_fs_money ? $new_fs_money : 0*/
                        'remark' => $remark
                    ]);
                    DB::commit();
                } catch (\Exception $e) {
                    DB::rollback();
                    return responseWrong('内部错误！请联系管理员！');
                }
            }
        }
            return responseSuccess('','', route('member.index'));
        }

    }

    public function update(Request $request, $id)
    {
//        $validator = $this->verify($request, 'member.update');
//
//        if ($validator->fails())
//        {
//            $messages = $validator->messages()->toArray();
//            return responseWrong($messages);
//        }

        if ($request->has('qk_pwd'))
        {
            $q = (string)$request->get('qk_pwd');
            if (!is_numeric($request->get('qk_pwd')) || strlen($q) != 6)
                return responseWrong('取款密码为6位数字');
        }

        $member= Member::findOrFail($id);
        /*$old_money = $member->money;
        $old_fs_money = $member->fs_money;
        $new_money = $request->get('money');
        $new_fs_money = $request->get('fs_money');*/


        if (!$request->has('password'))
        {
            if ($request->has('qk_pwd'))
                $member->update([
                    //'money' => $money,
                    //'fs_money' => $request->get('fs_money',0),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'qk_pwd' => $request->get('qk_pwd'),
                    'bank_username' => $request->get('bank_username'),
                    'bank_name' => $request->get('bank_name'),
                    'bank_branch_name' => $request->get('bank_branch_name'),
                    'bank_card' => $request->get('bank_card'),
                    'bank_address' => $request->get('bank_address'),
                    'real_name' => $request->get('real_name')

                ]);
            else
                $member->update([
                    //'money' => $money,
                    //'fs_money' => $request->get('fs_money'),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'bank_username' => $request->get('bank_username'),
                    'bank_name' => $request->get('bank_name'),
                    'bank_branch_name' => $request->get('bank_branch_name'),
                    'bank_card' => $request->get('bank_card'),
                    'bank_address' => $request->get('bank_address'),
                    'real_name' => $request->get('real_name')
                ]);
        }else{
            $data = $request->all();
            $data['o_password'] = $request->get('password');
            $member->update($data);
        }
        return responseSuccess('','', route('member.index'));
    }

    public function destroy($id)
    {
        Member::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = Member::findOrFail($id);
        $mod->update([
            'status' => $status
        ]);

        return respS();
    }
    public function set_ag($id,$is_ag,Request $request)
    {
        if($request->get('type') && $request->get('type') == 'is_sunbets') {
            $mod = Member::findOrFail($id);
            $mod->update([
                'is_sunbets'=>$is_ag
            ]);
        }else{
            $mod = Member::findOrFail($id);
            $mod->update([
                'is_ag'=>$is_ag
            ]);
        }

        return respS();
    }
    public function getMoney(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $user = $data['name'];
        $member= Member::findOrFail($id);
        $money = $member->money;

        if($member->is_trans_on == 1){
            $money_obj = (new SelfService())->wallet_balance($user);
            $res = json_decode($money_obj,true);
            $error = json_last_error();
            if($error > 0) {
                $msg = [
                    'Code' => '01',
                    'Message' =>$money_obj,
                ];
                return json_encode($msg);
            }
            if($res['statusCode'] == 01) {
                $money2 = $res['data'];
                $all_money = $money + $money2;
                $msg = [
                    'Code' => 0,
                    'Data' =>sprintf('%.2f',$all_money),
                ];
                return json_encode($msg);
            }else{
                $msg = [
                    'Code' => $res['statusCode'],
                    'Message' =>$res['message'],
                ];
                return json_encode($msg);
            }
        }else{
            $msg = [
                'Code' => 0,
                'Data' =>sprintf('%.2f',$member->money),
                'msg'=>'转账钱包'
            ];
            return json_encode($msg);
        }


    }
}
