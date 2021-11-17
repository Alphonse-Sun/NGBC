<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Banners;
use App\Models\BlackListIp;
use App\Models\GameList;
use App\Models\MemberLoginLog;
use App\Models\Red;
use App\Models\TcgGameList;
use App\Models\Member;
use App\Models\SystemConfig;
use App\Models\SystemNotice;
use App\Models\Template;
use App\Models\Version;
use App\Services\CurlService;
use App\Services\DedeHttpDown;
use App\Services\UpdateService;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\Traits\ValidationTrait;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Classes\Cache;
use Mockery\Exception;
use Session;
use App\Models\Api;
class IndexController extends Controller
{
    use ValidationTrait;
    public function index(Request $request)
    {

        //dd($request->all());
        $do_main = $_SERVER['HTTP_HOST'];
        $arr = explode('.', $do_main);
        if (count($arr) == 3 && $arr[0] == 'pc')
        {
            $con = SystemConfig::find(1);
            return redirect()->to($con->pic_link);
        }
        if (count($arr) == 2)
        {
            return redirect()->to('http://www.'.$do_main);
        }
        if (is_Mobile()) {
            return redirect()->to(route('wap.index'));
        }

        $banners = Banners::where('type', 1)->orderBy('sort','asc')->get();

        $preview = $request->get('preview');
        if($request->has('preview')){
            $data = Template::where('id',$preview)->where('client_type',1)->first();
            $mb_path = $data->template_name;
        }else{
            $data = Template::where('status',2)->where('client_type',1)->first();
            $mb_path = $data->template_name;
        }
        $view = 'web.template.'.$mb_path.'.index';
        return view($view, compact('banners'));
    }

    public function activityList(Request $request)
    {

        $mod = new Activity();
        $type = $request->get('type');
        if($type) {
            $mod = $mod->where('type',$type);
        }
        $data = $mod->where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();

        return view('web.activityList', compact('data'));
    }

    public function activityDetail($id)
    {
        $data = Activity::where('on_line', 0)->where('id', $id)->first();

        return view('web.activityDetail', compact('data'));
    }

    public function liveCasino()
    {
        return view('web.liveCasino');
    }
    public function poker()
    {
        return view('web.poker');
    }
    public function pic()
    {
        return view('web.pic');
    }
    public function esports()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.esports', compact('system_notices'));
    }
    public function lottory()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.lottory', compact('system_notices'));
    }

    public function eGame(Request $request)
    {

        $api_name = $request->get('api_name')?strtoupper($request->get('api_name')):'PT';

        if (in_array($api_name, [
            'CQ9',
            'DG',
            'IBC',
            'PNG',
            'TTG',
            'PT',
            'AB',
            'GG',
        ]))
        {
            $mod = new TcgGameList();

            //$api_mod = Api::where('api_name', $api_name)->first();

            $mod = $mod->where('productCode', $api_name);

            $gameName =  '';

            if ($request->has('name'))
            {
                $gameName = $request->get('name');
                $mod = $mod->where('gameName', 'LIKE', "%$gameName%");
            }

            $game_list = $mod->where('on_line', 0)->where('platform', 'LIKE', "%flash%")->orderBy('sort', 'asc')->get();

            return view('web.eGame', compact('game_list','gameName', 'api_name'));
        }

        $mod = new GameList();

        //$api_mod = Api::where('api_name', $api_name)->first();

        $mod = $mod->where('api_name', $api_name);

        $gameName =  '';

        if ($request->has('name'))
        {
            $gameName = $request->get('name');
            $mod = $mod->where('name', 'LIKE', "%$gameName%");
        }

        $game_list = $mod->where('on_line', 0)->orderBy('sort', 'asc')->get();

        return view('web.eGame', compact('game_list','gameName', 'api_name'));
    }

    public function catchFish()
    {
        return view('web.catchFish');
    }
    public function hongbao()
    {
        return view('web.hongbao');
    }

    public function novice_guidance()
    {
        return view('web.novice_guidance');
    }

    public function maintain()
    {
        $mod = SystemConfig::findOrFail(1);
        if ($mod->is_maintain == 0)
            return redirect()->to(route('web.index'));

        $str = $mod->maintain_desc;
        return view('web.maintain', compact('str'));
    }

    public function register_one(Request $request)
    {
        $i_code = $request->get('i');
        if($i_code){
            \Illuminate\Support\Facades\Cache::put(sha1(getIp()),$i_code,1440);
        }
        if (is_Mobile()) {
            return redirect()->to(route('wap.register').'?i='.$i_code);
        }

        $register_name = $request->has('register_name')?$request->get('register_name'):'';

        return view('web.register_one', compact('i_code', 'register_name'));
    }
    public function login(Request $request)
    {
        return view('web.login');
    }

    public function post_register_one(Request $request)
    {
        if(!session('milkcaptcha')||session('milkcaptcha') != $request->get('captcha'))
            return responseWrong('验证码错误');

        $my_system_config = SystemConfig::findOrFail(1);
        $validator = $this->verify($request, 'member.register_one');

        if ($validator->fails())
            return responseWrong($validator->messages()->toArray());

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

        $name = trim($data['name'], ' ');
        $pwd = trim($data['password'], ' ');
        $i_code = isset($data['i_code'])?trim($data['i_code'], ' '):'';

        //$phone = trim($data['phone']);
        $dali_mod = '';
        //判断域名
        $do_main = $_SERVER['SERVER_NAME'];
        $m = Member::where('is_daili', 1)->where('agent_uri', $do_main)->first();
        if ($m)
        {
            $dali_mod = $m;
        } elseif ($request->has('i_code'))
        {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('i_code'))->first();
        }elseif (\Illuminate\Support\Facades\Cache::has(sha1(getIp()))){
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', \Illuminate\Support\Facades\Cache::get(sha1(getIp())))->first();
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
        /*return responseWrong('测试！');
        die;*/
        Member::create([
            'name' => $name,
            'original_password' => substr(md5(md5($name)), 0,10),
            'o_password' => $pwd,
            'password' => bcrypt($pwd),
            'invite_code' => getRandom(7),
            'top_id' => $dali_mod?$dali_mod->id:0,
            'qk_pwd' => $data['qk_pwd'],
            'register_ip' => getIp(),
            'real_name' => $real_name,
            'phone' => $phone,
            'email' => $email,
            'qq' => $qq,
            'weixin' => $weixin,
            'register_url'=>$_SERVER['HTTP_HOST'],
        ]);

        if (Auth::guard('member')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
            $member = auth('member')->user();
//            $member->update([
//                'is_login' => 1
//            ]);
            $member->last_session = Session::getId();
            $member->save();

            $member->update([
                'last_login_ip'=>$request->getClientIp(),
                'last_login_at' => date('Y-m-d H:i:s')
            ]);
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => getIp()
            ]);
            return responseSuccess('', '登录成功', route('member.userCenter'));
        }

        return responseSuccess('', '', route('web.register_two')."?register_name=$name&pwd=$pwd&i_code=$i_code");
    }

    public function register_two(Request $request)
    {
        $register_name = $request->get('register_name');
        $pwd = $request->get('pwd');
        $i_code = $request->get('i_code');

        return view('web.register_two', compact('register_name', 'pwd', 'i_code'));
    }

    public function post_register_two(Request $request)
    {
        $validator = $this->verify($request, 'member.register_two');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        //判断是否为代理邀请注册
        $dali_mod = '';
        if ($request->has('invite_code'))
        {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('invite_code'))->first();
        }

        Member::create([
            'name' => $data['name'],
            'original_password' => substr(md5(md5($data['name'])), 0,10),
            'password' => bcrypt($data['password']),
            'invite_code' => str_random(7),
            'real_name' => $data['real_name'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'qq' => $data['qq'],
            'email' => $data['email'],
            'top_id' => $dali_mod?$dali_mod->id:0,
            'qk_pwd' => $data['qk_pwd'],
            'register_ip' => $request->getClientIp()
        ]);

        if (Auth::guard('member')->attempt(['name' => $data['name'], 'password' => $data['password']]))
        {
            $member = auth('member')->user();
            $member->update([
                'is_login' => 1
            ]);
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => $request->getClientIp()
            ]);
            return responseSuccess('', '登录成功', route('member.userCenter'));
        }

        return responseSuccess('', '', route('web.register_success'));
    }

    public function register_success(Request $request)
    {
        return view('web.register_success');
    }

    public function syncTpl($name)
    {
        return view('web.member.'.$name);
    }

    public function red_index()
    {
        $res = SystemConfig::findOrfail(1);
        if($res -> is_hongbao == 1){
            $red = Red::where('on_line', 0)->orderBy('sort', 'asc')->get();
            return view('web.hongbao', compact('red'));
        }

    }

    public function upgrade()
    {
        (new UpdateService())->upgrade();
    }
    /**
     * 后台更新控制
     */
    /*public function upgrade()
    {
        set_time_limit(0);
        ignore_user_abort(true);
        $data = (new Version)->orderBy('id','desc')->first();

        if($data){
            $updated_at = $data->last_time;
        }else{
            $updated_at = '2018-12-04 12:48:41';//默认功能时间
        }

        $api_url = 'http://www.cashnet.test/a.php';
        $post_data = [
            'updated_at' => $updated_at
        ];

        $res = (new CurlService())->get($api_url,$post_data);
        print_r($res);
        die;
        $res = json_decode($res,true);

        if(is_array($res) && $res['status'] == 1){
            $update_info = $res['data'];
            //print_r($update_info);
            $dhd = new DedeHttpDown();
            $update_path = base_path().'\public\update';
            if(!file_exists($update_path)){
                mkdir($update_path,'0777',true);
            }
            //开始下载文件
            foreach ($update_info as $v){
                $dhd->OpenUrl($v['upload_url']);
                $savefilename = $update_path.'/'.$v['name'];
                $dhd->SaveToBin($savefilename);
                $dhd->Close();
            }



            foreach ($update_info as $info) {
                //开始解压更新包
                $zip = new \ZipArchive();//
                $files =  $update_path.'/'.$info['name'];
                $file = str_replace('\\','/',$files);
                if(file_exists($file)){
                    $res = $zip->open($file);
                    if($res === true){
                        //解压缩到$extractTo指定的文件夹
                        $extractTo = base_path().'\public\data';
                        //echo $extractTo;
                        if(!file_exists($extractTo)){
                            mkdir($extractTo,'0777',true);
                        }
                        $zip->extractTo($extractTo);
                        $zip->close();


                        //开始替换
                        $all_file = $this->getDir($extractTo);
                        //print_r($all_file);
                        $num = count($all_file);
                        if($num > 0) {
                            foreach ($all_file as $file ){

                                $file_info = pathinfo($file);
                                //print_r($file_info);

                                $extension = $file_info['extension'];
                                if($extension == 'sql') {
                                    $content = file_get_contents($file);
                                    if (strpos($content, "\xEF\xBB\xBF") === 0) {                                               //\x表示16进制
                                        $content = substr($content, 3);
                                    }
                                    $sqls = explode(";", $content);

                                    foreach ($sqls as $sql) {
                                        if($sql) {
                                            $rs = DB::statement($sql);
                                        }
                                    }
                                    unlink($file);
                                }else{
                                    $source_path = str_replace($extractTo,'',$file);
                                    $source_path = base_path().$source_path;
                                    //$f = basename($source_path);


                                    $rs = @copy($file,$source_path);

                                    if(!$rs){
                                        $d = dirname($source_path);
                                        if(!file_exists($source_path)){
                                            mkdir($d,'0777',true);
                                            @copy($file,$source_path);
                                        }
                                    }
                                }

                            }
                        }
                        $file_obj = new Filesystem();
                        $file_obj->deleteDirectory($extractTo);

                        $up = [
                            'ver' => $info['ver'],
                            'last_time' => $info['created_at']
                        ];
                        Version::create($up);
                    }else{
                        $info = '解压失败';
                        Log::info($info);
                    }
                }
            }

            $file_obj = new Filesystem();
            $file_obj->deleteDirectory($update_path);
        }
    }
    function getDir($path)
    {
        //判断目录是否为空
        if(!file_exists($path)) {
            return [];
        }
        $files = scandir($path);
        $fileItem = [];
        foreach($files as $v) {
            $newPath = $path .DIRECTORY_SEPARATOR . $v;
            if(is_dir($newPath) && $v != '.' && $v != '..') {
                $fileItem = array_merge($fileItem, $this->getDir($newPath));
            }else if(is_file($newPath)){
                $fileItem[] = $newPath;
            }
        }

        return $fileItem;
    }*/

}

