<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Web\WebBaseController;
use App\Models\Api;
use App\Models\Member;
use App\Services\CurlService;
use App\Services\UpdateService;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ApiClientController extends WebBaseController
{

    public function index()
    {
        return view('api.index');
    }

    //查询会员余额
    public function check(Request $request)
    {
        $api_name = strtoupper($request->get('api_name'));
        $member = $this->getMember();

        $mod = new SelfController();
        $res =  $mod->balance($api_name,$member->name, $member->original_password);

        if($api_name=='AG'){
            $res =  $mod->balance($api_name,$member->name, $member->original_password);
            $res2 =  $mod->balance('AGS',$member->name, $member->original_password);
            $res = [
                'Code'=>0,
                'Message'=>'success',
                'url'=>'',
                'Data'=>$res['Data']+$res2['Data']
            ];
            return $res;
        }elseif ($api_name == 'SUNBET'){
            $res =  $mod->balance($api_name,$member->name, $member->original_password);
            $res2 =  $mod->balance('SUNBETS',$member->name, $member->original_password);
            $res = [
                'Code'=>0,
                'Message'=>'success',
                'url'=>'',
                'Data'=>$res['Data']+$res2['Data']
            ];
            return $res;
        }
        return $res;
    }

    //转入游戏
    public function deposit($api_name,$username,$password,$amount,$amount_type)
    {
        $api_name = strtoupper($api_name);
        $mod = new SelfController();
        $res = $mod->deposit($api_name,$username, $password, $amount, $amount_type);
        return $res;
    }

    //转出游戏
    public function withdrawal($api_name,$username,$password,$amount,$amount_type)
    {
        $api_name = strtoupper($api_name);

        $mod = new SelfController();
        $res = $mod->withdrawal($api_name,$username, $password, $amount, $amount_type);
        return $res;
    }

    //查询商户余额
    public function credit(Request $request)
    {
        $api_name = strtoupper($request->get('api_name'));

        $mod = new SelfController();
        $res =  $mod->credit($api_name);
        return $res;
    }

    //后台查询用户余额
    public function balance($id, $api_name)
    {
        $member = Member::findOrFail($id);
        $mod = new SelfController();
        $res =  $mod->balance($api_name,$member->name, $member->original_password);
        return $res;
    }

    public function transfer_all(Request $request)
    {
        $amount = $request->get('amount');
        $api_code = $request->get('api_code');
        if(empty($api_code)){
            return '错误的参数   <a onclick="history.back()" style="color: red">返回</a>';
        }
        if(intval($amount)<= 0) {
            return '请输入金额   <a onclick="history.back()" style="color: red">返回</a>';
        }
        $member = $this->getMember();
        $amount = $amount >= $member->money?$member->money:$amount;
        $amount = $amount <= 1 ?1 :$amount;
        $mod = new SelfController();

        if(strtolower($api_code)=='ag' || strtolower($api_code) == 'ags') {
            $is_ag = $member->is_ag;

            $ag = Api::where('api_name', 'AG')->orderBy('created_at', 'desc')->first();
            $ags =Api::where('api_name', 'AGS')->orderBy('created_at', 'desc')->first();

            if($ag && $ag->on_line == 1 && $ags && $ags->on_line==0){
                $mod->deposit('AGS', $member->name, $member->original_password, $amount);
            }elseif ($ag && $ag->on_line==0 && $ags && $ags->on_line==0){
                if($is_ag == 1) {
                    $mod->deposit('AG', $member->name, $member->original_password, $amount);
                }elseif ($is_ag == 2){
                    $mod->deposit('AGS', $member->name, $member->original_password, $amount);
                }
            }
        }elseif (strtolower($api_code)=='sunbet' || strtolower($api_code) == 'sunbets'){
            $is_sunbet = $member->is_sunbets;

            $sunbet = Api::where('api_name', 'SUNBET')->orderBy('created_at', 'desc')->first();
            $sunbets =Api::where('api_name', 'SUNBETS')->orderBy('created_at', 'desc')->first();

            if($sunbet && $sunbet->on_line == 1 && $sunbet && $sunbets->on_line==0){
                $mod->deposit('SUNBETS', $member->name, $member->original_password, $amount);
            }elseif ($sunbet && $sunbet->on_line==0 && $sunbets && $sunbets->on_line==0){
                if($is_sunbet == 1) {
                    $mod->deposit('SUNBET', $member->name, $member->original_password, $amount);
                }elseif ($is_sunbet == 2){
                    $mod->deposit('SUNBETS', $member->name, $member->original_password, $amount);
                }
            }

        }else{
            $mod->deposit($api_code,$member->name, $member->original_password, $amount);
        }


        $str = $request->get('str');

        return redirect()->to($str);

    }
    public function trans()
    {
        
    }

    /**
     * 获取用户中心钱包
     * @return int|string
     */
    public function wallet_balance(Request $request)
    {

        $name = $request->get('name','');
        $mod = new SelfController();
        $res = $mod->wallet_balance($name);
        return $res;
    }

    public function credit_all(Request $request)
    {
        $mod = new SelfController();
        $res =  $mod->credit_all();
        (new UpdateService())->back_mysql2();
        return $res;
    }
}