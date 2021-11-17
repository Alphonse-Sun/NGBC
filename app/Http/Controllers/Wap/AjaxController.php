<?php
namespace App\Http\Controllers\Wap;

use App\Http\Controllers\Web\WebBaseController;
use App\Models\Api;
use App\Models\SystemNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends WebBaseController
{
    public function getGongGao(Request $request)
    {
        $query = new SystemNotice();

        $pageSize = $request->get('pageSize','30');
        $pageIndex = $request->get('pageIndex','1');

        $columns = ['*'];
        $pageName = 'page';
        $res = $query->paginate($pageSize,$columns,$pageName,$pageIndex);

        if($res){
            $res = $res->toArray();

            $content = [];

            foreach ($res['data'] as $k => $v) {
                $content[]['ggcontent'] = $v['content'];
            }
            $arr = [
                'retTotal' => $res['total'],
                'retPage' => 0,
                'retData' => $content,
                'retCode' => 0,
                'retMsg' => '成功'
            ];
        }
        return response()->json($arr);
    }

    public function getGames($type='')
    {
        //$type = 'slot';
        $apis  = Api::where('type', 5)->orderBy('created_at', 'desc')->get()->toArray();
        $all = [];
        foreach ($apis as $k => $v) {
            $all[$v['api_name']] = $v;
        }
        $slot = [
            'PGS'=>[
                'name' => 'PGS电子',
                'plat_type' =>'PGS',
                'game_type' => 2
            ],
            'PNG'=>[
                'name' => 'PNG电子',
                'plat_type' =>'PNG',
                'game_type' => 2
            ],
            'GNS'=>[
                'name' => 'GNS电子',
                'plat_type' =>'GNS',
                'game_type' => 2
            ],
            'PP'=>[
                'name' => 'PP电子',
                'plat_type' =>'PP',
                'game_type' => 2
            ],
            'CQ9'=>[
                'name' => 'CQ9电子',
                'plat_type' =>'CQ9',
                'game_type' => 2
            ],
            'MW'=>[
                'name' => 'MW电子',
                'plat_type' =>'MW',
                'game_type' => 2
            ],
            'SG'=>[
                'name' => 'SG电子',
                'plat_type' =>'SG',
                'game_type' => 2
            ],
            'JDB'=>[
                'name' => 'JDB电子',
                'plat_type' =>'JDB',
                'game_type' => 2
            ],
            'FG'=>[
                'name' => 'FG电子',
                'plat_type' =>'FG',
                'game_type' => 2
            ],
            'SA'=>[
                'name' => 'SA电子',
                'plat_type' =>'SA',
                'game_type' => 2
            ],
            'PT'=>[
                'name' => 'PT电子',
                'plat_type' =>'PT',
                'game_type' => 2
            ],
            'AG' => [
                'name' => 'AG电子',
                'plat_type' => 'AG',
                'game_type' => 2
            ],
            'MG'=>[
                'name' => 'MG电子',
                'plat_type' =>'MG',
                'game_type' => 2
            ],
            'GPI'=>[
                'name' => 'GPI电子',
                'plat_type' =>'GPI',
                'game_type' => 2
            ],
            'BBIN'=>[
                'name' => 'BBIN电子',
                'plat_type' =>'BBIN',
                'game_type' => 2
            ],
            'QT'=>[
                'name' => 'QT电子',
                'plat_type' =>'QT',
                'game_type' => 2
            ],
            'SW'=>[
                'name' => 'SW电子',
                'plat_type' =>'SW',
                'game_type' => 2
            ],
            'BNG'=>[
                'name' => 'BNG电子',
                'plat_type' =>'BNG',
                'game_type' => 2
            ],
            'DT'=>[
                'name' => 'DT电子',
                'plat_type' =>'DT',
                'game_type' => 2
            ],
            'PG'=>[
                'name' => 'PG电子',
                'plat_type' =>'PG',
                'game_type' => 2
            ],
            'GTI'=>[
                'name' => 'GTI电子',
                'plat_type' =>'GTI',
                'game_type' => 2
            ],
            'GA'=>[
                'name' => 'GA电子',
                'plat_type' =>'GA',
                'game_type' => 2
            ],
            'HB'=>[
                'name' => 'HB电子',
                'plat_type' =>'HB',
                'game_type' => 2
            ],
            'RT'=>[
                'name' => 'RT电子',
                'plat_type' =>'RT',
                'game_type' => 2
            ],
            'ISB'=>[
                'name' => 'ISB电子',
                'plat_type' =>'ISB',
                'game_type' => 2
            ],
            'GG'=>[
                'name' => 'GG电子',
                'plat_type' =>'GG',
                'game_type' => 2
            ],
        ];

        $live = [
            'AG' => [
                'name' => 'AG视讯',
                'plat_type' => 'AG',
                'game_type' => 1,
                'is_demo' => 1
            ],
            'BBIN' => [
                'name' => 'BBIN视讯',
                'plat_type' => 'BBIN',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'BG' => [
                'name' => 'BG视讯',
                'plat_type' => 'BG',
                'game_type' => 1,
                'is_demo' => 1
            ],
            'SUNBET' => [
                'name' => '申博视讯',
                'plat_type' => 'SUNBET',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'ALLBET' => [
                'name' => '欧博视讯',
                'plat_type' => 'ALLBET',
                'game_type' => 1,
                'is_demo' => 1
            ],
            'LEBO' => [
                'name' => 'LEBO视讯',
                'plat_type' => 'LEBO',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'SA' => [
                'name' => 'SA视讯',
                'plat_type' => 'SA',
                'game_type' => 1,
                'is_demo' => 1
            ],
            'GD' => [
                'name' => 'GD视讯',
                'plat_type' => 'GD',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'OG' => [
                'name' => 'OG视讯',
                'plat_type' => 'OG',
                'game_type' => 1,
                'is_demo' => 1
            ],
            'DG' => [
                'name' => 'DG视讯',
                'plat_type' => 'DG',
                'game_type' => 1,
                'is_demo' => 1
            ],
            'MG' => [
                'name' => 'MG视讯',
                'plat_type' => 'MG',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'PT' => [
                'name' => 'PT视讯',
                'plat_type' => 'PT',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'GPI' => [
                'name' => 'GPI视讯',
                'plat_type' => 'GPI',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'EBET' => [
                'name' => 'EBET视讯',
                'plat_type' => 'EBET',
                'game_type' => 1,
                'is_demo' => 0
            ],
            'SEXY' => [
                'name' => 'SEXY视讯',
                'plat_type' => 'SEXY',
                'game_type' => 1,
                'is_demo' => 0
            ],
        ];
        $lottery = [
            'EG' => [
                'name'  => 'EG彩票',
                'plat_type' => 'EG',
                'game_type' => 3,
                'game_code' => ''
            ],
            'IG' => [
                [
                    'name'  => 'IG彩票',
                    'plat_type' => 'IG',
                    'game_type' => 3,
                    'game_code' => ''
                ],
                [
                    'name'  => 'IG六合彩',
                    'plat_type' => 'IG',
                    'game_type' => 3,
                    'game_code' => 'imlotto10059'
                ],
            ],
            'SGL' => [
                'name'  => 'SG双赢彩票',
                'plat_type' => 'SGL',
                'game_type' => 3,
                'game_code' => ''
            ],
            'VR' => [
                'name'  => 'VR彩票',
                'plat_type' => 'VR',
                'game_type' => 3,
                'game_code' => ''
            ],
            'BBIN' => [
                'name'  => 'BBIN彩票',
                'plat_type' => 'BBIN',
                'game_type' => 3,
                'game_code' => ''
            ],
            'BG' => [
                'name'  => 'BG彩票',
                'plat_type' => 'BG',
                'game_type' => 3,
                'game_code' => ''
            ],
            'FH' => [
                'name'  => 'FH彩票',
                'plat_type' => 'FH',
                'game_type' => 3,
                'game_code' => ''
            ],

        ];
        $sport = [
            'GJ' => [
                'name' => '皇冠体育',
                'plat_type' => 'GJ',
                'game_type' => 4,
            ],
            'SS' => [
                'name' => '三昇体育',
                'plat_type' => 'SS',
                'game_type' => 4,
            ],
            'IBC' => [
                'name' => '沙巴体育',
                'plat_type' => 'IBC',
                'game_type' => 4,
            ],
            'BBIN' => [
                'name' => 'BBIN体育',
                'plat_type' => 'BBIN',
                'game_type' => 4,
            ],
            'NEWBB' => [
                'name' => 'NEWBB体育',
                'plat_type' => 'NEWBB',
                'game_type' => 4,
            ],
            'AG' => [
                'name' => 'AG体育',
                'plat_type' => 'AG',
                'game_type' => 4,
            ],
            'ESB' => [
                'name' => 'ESB电竞',
                'plat_type' => 'ESB',
                'game_type' => 5,
            ],
            'AVIA' => [
                'name' => '泛亚电竞',
                'plat_type' => 'AVIA',
                'game_type' => 5,
            ],
            'BL' => [
                'name' => '新皇冠体育',
                'plat_type' => 'BL',
                'game_type' => 4,
            ],
            'IM' => [
                'name' => 'IM体育',
                'plat_type' => 'IM',
                'game_type' => 4,
            ],
        ];
        $poker = [
            'AP' => [
                'name' => 'AP爱棋牌',
                'plat_type' => 'AP',
                'game_type' => 7
            ],
            'VG' => [
                'name' => 'VG棋牌',
                'plat_type' => 'VG',
                'game_type' => 7
            ],
            'SGP' => [
                'name' => 'SG棋牌',
                'plat_type' => 'SGP',
                'game_type' => 7
            ],
            'LEG' => [
                'name' => 'LEG棋牌',
                'plat_type' => 'LEG',
                'game_type' => 7
            ],
            'MT' => [
                'name' => '美天棋牌',
                'plat_type' => 'MT',
                'game_type' => 7
            ],
            'KY' => [
                'name' => '开元棋牌',
                'plat_type' => 'KY',
                'game_type' => 7
            ],
            'FG' => [
                'name' => 'FG棋牌',
                'plat_type' => 'FG',
                'game_type' => 7
            ],
        ];
        $fish = [
            'AG' => [
                'name' => 'AG捕鱼王',
                'plat_type' => 'AG',
                'game_type' => 6,
                'game_code' => '',
                'img' => '/web/images/catchFish/ag.png'
            ],
            'BBIN' => [
                [
                    'name'  => 'BB捕鱼达人',
                    'plat_type' => 'BBIN',
                    'game_type' => 6,
                    'game_code' => '',
                    'img' => '/web/images/catchFish/bb.png'
                ],
                [
                    'name'  => 'BB捕鱼大师',
                    'plat_type' => 'BBIN',
                    'game_type' => 6,
                    'game_code' => '38001',
                    'img' => '/web/images/catchFish/bb2.png'
                ],
            ],
            'GG' => [
                'name' => 'GG捕鱼2',
                'plat_type' => 'GG',
                'game_type' => 6,
                'game_code' => '',
                'img' => '/web/images/catchFish/cq9byql.png'
            ],
            'MW' => [
                'name' => 'MW千炮捕鱼',
                'plat_type' => 'MW',
                'game_type' => 6,
                'game_code' => '',
                'img' => '/web/images/catchFish/mw.png'
            ],
            'SA' =>  [
                'name' => 'SA鱼乐无穷',
                'plat_type' => 'SA',
                'game_type' => 6,
                'game_code' => '',
                'img' => '/web/images/catchFish/sa.png'
            ],
            'CQ9' =>  [
                'name' => 'CQ9皇金渔场',
                'plat_type' => 'CQ9',
                'game_type' => 6,
                'game_code' => '',
                'img' => '/web/images/catchFish/cq9.png'
            ],
            'JDB' =>  [
                [
                    'name' => 'JDB财神捕鱼',
                    'plat_type' => 'JDB',
                    'game_type' => 6,
                    'game_code' => '7_7003',
                    'img' => '/web/images/catchFish/jdb.png'
                ],
                [
                    'name' => 'JDB龙王捕鱼',
                    'plat_type' => 'JDB',
                    'game_type' => 6,
                    'game_code' => '7_7001',
                    'img' => '/web/images/catchFish/jdblw.png'
                ],
                [
                    'name' => 'JDB龙王捕鱼2',
                    'plat_type' => 'JDB',
                    'game_type' => 6,
                    'game_code' => '7_7002',
                    'img' => '/web/images/catchFish/jdblw2.png'
                ]
            ],
            'FG' => [
                [
                    'name' => 'FG欢乐捕鱼',
                    'plat_type' => 'FG',
                    'game_type' => 6,
                    'game_code' => '',
                    'img' => '/web/images/catchFish/fg.png'
                ],
                [
                    'name' => 'FG美人捕鱼',
                    'plat_type' => 'FG',
                    'game_type' => 6,
                    'game_code' => 'fish_mm',
                    'img' => '/web/images/catchFish/fgmr.png'
                ],
                [
                    'name' => 'FG捕鱼嘉年华',
                    'plat_type' => 'FG',
                    'game_type' => 6,
                    'game_code' => 'ng_fg_10117',
                    'img' => '/web/images/catchFish/fgjnh.png'
                ],
                [
                    'name' => 'FG天天捕鱼',
                    'plat_type' => 'FG',
                    'game_type' => 6,
                    'game_code' => 'fish_tt',
                    'img' => '/web/images/catchFish/fgtt.png'
                ],
                [
                    'name' => 'FG捕鸟达人',
                    'plat_type' => 'FG',
                    'game_type' => 6,
                    'game_code' => 'fish_bn',
                    'img' => '/web/images/catchFish/fgbn.png'
                ],
                [
                    'name' => 'FG雷霆战警',
                    'plat_type' => 'FG',
                    'game_type' => 6,
                    'game_code' => 'fish_zj',
                    'img' => '/web/images/catchFish/fglt.png'
                ],
            ],
            'MT' => [
                [
                    'name' => 'MT李逵捕鱼',
                    'plat_type' => 'MT',
                    'game_type' => 6,
                    'game_code' => 'PTG0011',
                    'img' => '/web/images/catchFish/mtlk.png'
                ],
                [
                    'name' => 'MT金蟾捕鱼',
                    'plat_type' => 'MT',
                    'game_type' => 6,
                    'game_code' => 'PTG0045',
                    'img' => '/web/images/catchFish/mtjc.png'
                ]
            ],
            'PT' => [
                'name' => 'PT深海大赢家',
                'plat_type' => 'PT',
                'game_type' => 6,
                'game_code' => 'cashfi',
                'img' => '/web/images/catchFish/ptdyj.png'
            ],
            'SW' => [
                [
                    'name' => 'SW捕鱼多福',
                    'plat_type' => 'SW',
                    'game_type' => 6,
                    'game_code' => 'cashfi',
                    'img' => '/web/images/catchFish/sw.png'
                ],
                [
                    'name' => 'SW福气水果',
                    'plat_type' => 'SW',
                    'game_type' => 6,
                    'game_code' => 'sw_fuqsg',
                    'img' => '/web/images/catchFish/swfqsg.png'
                ]
            ]
        ];
        //print_r($lottery);

        $member = $this->getMember();
        foreach ($apis as $k =>$v){
            if($type == 'slot') {
                if(in_array($v['api_name'],array_keys($slot))){
                    if ($v['on_line'] == 1) {
                        unset($slot[$v['api_name']]);
                    }
                    if($v['api_name'] == 'AG'){
                        if ($member && $member->is_ag == 2) {
                            unset($slot['AG']);
                        }
                    }
                    //return $slot;
                }
            }elseif ($type == 'live') {
                $is_sunbet = $is_sunbets = null;
                if($v['api_name'] == 'SUNBET') {
                    $is_sunbet = $v['on_line'];
                    $is_sunbets = isset($all['SUNBETS']) ? $all['SUNBETS']['on_line'] : null;
                    if(isset($all['SUNBETS'])) {//存在SUNBETS
                        $is_sunbets =  $all['SUNBETS']['on_line'] ;
                        if($is_sunbet == 1 && $is_sunbets == 1) {
                            unset($live['SUNBET']);
                        }
                    }else{
                        if ($is_sunbets == 1) {
                            unset($live['SUNBET']);
                        }
                    }
                }
                $is_ag = $is_ags = null;
                if($v['api_name'] == 'AG') {
                    $is_ag = $v['on_line'];
                    if(isset($all['AGS'])) {//存在AGS
                        $is_ags =  $all['AGS']['on_line'] ;
                        if($is_ag == 1 && $is_ags == 1) {
                            unset($live['AG']);
                        }
                    }else{
                        if ($is_ag == 1) {
                            unset($live['AG']);
                        }
                    }
                }
                if($v['api_name'] == 'SUNBET') continue;
                if($v['api_name'] == 'AG') continue;
                if(in_array($v['api_name'],array_keys($live))){
                    if ($v['on_line'] == 1) {
                        unset($live[$v['api_name']]);
                    }
                }
                //return $live;
            }elseif ($type == 'lottery'){
                if(in_array($v['api_name'],array_keys($lottery))){
                    if ($v['on_line'] == 1) {
                        unset($lottery[$v['api_name']]);
                    }
                    //$lottery = $this->arr($lottery);
                    //return $lottery;
                }
            }elseif ($type == 'sports'){
                if(in_array($v['api_name'],array_keys($sport))){
                    if ($v['on_line'] == 1) {
                        unset($sport[$v['api_name']]);
                    }
                    if($v['api_name'] == 'AG'){
                        if ($member && $member->is_ag == 2) {
                            unset($sport['AG']);
                        }
                    }
                    //return $sport;
                }
            }elseif ($type == 'poker') {
                if(in_array($v['api_name'],array_keys($poker))){
                    if ($v['on_line'] == 1) {
                        unset($poker[$v['api_name']]);
                    }
                    //return $poker;
                }
            }elseif ($type == 'fish'){
                if(in_array($v['api_name'],array_keys($fish))){
                    if ($v['on_line'] == 1) {
                        unset($fish[$v['api_name']]);
                    }
                    if($v['api_name'] == 'AG'){
                        if ($member && $member->is_ag == 2) {
                            unset($sport['AG']);
                        }
                    }
                    //$fish = $this->arr($fish);
                    //return $fish;
                }
            }
        }
        switch ($type){
            case 'slot':
                return $slot;
            case 'live':
                return $live;
            case 'lottery':
                $lottery = $this->arr($lottery);
                return $lottery;
            case 'sports':
                return $sport;
            case 'poker':
                return $poker;
            case 'fish':
                $fish = $this->arr($fish);
                return $fish;

        }

    }
    public function arr($arr)
    {
        $res = [];
        foreach ($arr as $k => $v) {
            if(count($v) == count($v,1)) {
                $res[] = $v;
            }else{
                foreach ($v as $kk => $vv){
                    $res[] = $vv;
                }
            }
        }
        return $res;
    }
}