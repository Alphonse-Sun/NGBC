<header id="header">
    <div id="top-header">
        <div class="wrapper">
            <ul class="top-nav">
                <li class="license"></li>
                <li class="language" select-language>
                    语言选择:
                    <span data-language="zh-CN" title="简体中文"></span> <span data-language="zh-TW" title="繁体中文"></span> <span data-language="en-US" title="English" ></span>
                </li>
                <li>

                    <div class="div-meiDonNow">
                        美东时间 -
                        <span id="localtime" ></span>
                    </div>

                    <script type="text/javascript">
                        function showLocale(objD)
                        {
                            var str,colorhead,colorfoot;
                            var yy = objD.getYear();
                            if(yy<1900) yy = yy+1900;
                            var MM = objD.getMonth()+1;
                            if(MM<10) MM = '0' + MM;
                            var dd = objD.getDate();
                            if(dd<10) dd = '0' + dd;
                            var hh = objD.getHours();
                            if(hh<10) hh = '0' + hh;
                            var mm = objD.getMinutes();
                            if(mm<10) mm = '0' + mm;
                            var ss = objD.getSeconds();
                            if(ss<10) ss = '0' + ss;
                            var ww = objD.getDay();
                            if  ( ww==0 )  colorhead="<font color=\"#FF0000\">";
                            if  ( ww > 0 && ww < 6 )  colorhead="<font color=\"#373737\">";
                            if  ( ww==6 )  colorhead="<font color=\"#008000\">";
                            if  (ww==0)  ww="星期日";
                            if  (ww==1)  ww="星期一";
                            if  (ww==2)  ww="星期二";
                            if  (ww==3)  ww="星期三";
                            if  (ww==4)  ww="星期四";
                            if  (ww==5)  ww="星期五";
                            if  (ww==6)  ww="星期六";
                            colorfoot="</font>"
                            str = colorhead + yy + "-" + MM + "-" + dd + " " + hh + ":" + mm + ":" + ss + "  " + ww + colorfoot;
                            return(str);
                        }
                        function tick()
                        {
                            var today;
                            today = new Date();
                            document.getElementById("localtime").innerHTML = showLocale(today);
                            window.setTimeout("tick()", 1000);
                        }
                        tick();
                    </script>

                </li>
            </ul>
            <ul class="top-nav top-right">
                <li><a  target="_blank" href="<?php echo e(route('daili.init')); ?>">代理登陆</a></li>
                <li><a class="daili_apply" >代理申请</a></li>
                <li><a ng-href="<?php echo e(route('web.activityList')); ?>" target="_blank">优惠申请大厅</a></li>
                <li class="app"><a ng-href="<?php echo e($_system_config->app_link); ?>" target="_blank">手机APP下载</a></li>
                <li><a ng-href="<?php echo e(route('web.red')); ?>"target="_blank">VIP抢红包</a></li>
                
            </ul>
        </div>
    </div>
    <div class="wrapper">

        <div id="logo-bg" style="background: none">
            <a href="<?php echo e(route('web.index')); ?>"><img src="<?php echo e($_system_config->site_logo); ?>"></a>
        </div>

        <nav id="nav">
            <ul ng-controller="LobbiesCtrl">
                <li class="home">
                    <a href="<?php echo e(route('web.index')); ?>">首 页<span>HOME</span></a>
                </li>
                <li class="red hot">
                    <a href="<?php echo e(route('web.eGame')); ?>">电子游艺<span>SLOTS</span></a>
                    <div class="subnav">
                        <div class="sub-title">天天返水3.0%</div>
                        <ol>
                            <?php if(in_array('MG', $_api_list)): ?>
                                <li class="sub-hot" game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2">MG电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('PT', $_api_list)): ?>
                                <li class="sub-hot" game-box="pt">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2">PT电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('BBIN', $_api_list)): ?>
                                <li class="sub-hot" game-box="bb">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2">BBIN电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('AG', $_api_list)): ?>
                                <li game-box="ag">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2">AG电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('PP', $_api_list)): ?>
                                <li game-box="ag">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=PP&game_type=2">PP电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('SA', $_api_list)): ?>
                                <li game-box="ag">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=SA&game_type=2">SA电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('QT', $_api_list)): ?>
                                <li game-box="ag">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=QT&game_type=2">QT电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('SW', $_api_list)): ?>
                                <li game-box="ag">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=SW&game_type=2">SW电子</a>
                                </li>
                            <?php endif; ?>
                            
                        </ol>
                        <ol>
                            <?php if(in_array('CQ9', $_api_list)): ?>
                                <li class="sub-hot" game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2">传奇电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('JDB', $_api_list)): ?>
                                <li class="sub-hot" game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2">夺宝电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('MW', $_api_list)): ?>
                                <li game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2">MW电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('SG', $_api_list)): ?>
                                <li game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2">新霸电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('GPI', $_api_list)): ?>
                                <li game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=GPI&game_type=2">GPI电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('FG', $_api_list)): ?>
                                <li game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=2">FG电子</a>
                                </li>
                            <?php endif; ?>
                            <?php if(in_array('BNG', $_api_list)): ?>
                                <li game-box="mg">
                                    <a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=BNG&game_type=2">BNG电子</a>
                                </li>
                            <?php endif; ?>
                            
                        </ol>
                    </div>
                </li>
                <li class="green hot">
                    <a href="<?php echo e(route('web.esports')); ?>">体育赛事<span>SPORT</span></a>
                    <ol class="subnav">
                        <?php if(in_array('SS', $_api_list)): ?>
                            <li class="hot" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SS&game_type=4','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>三昇体育</span></li>
                        <?php endif; ?>
                        <?php if(in_array('SS', $_api_list)): ?>
                            <li class="hot" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GJ&game_type=4','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>皇冠体育</span></li>
                        <?php endif; ?>
                        <?php if(in_array('IBC', $_api_list)): ?>
                            <li class="hot" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=IBC&game_type=4','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>沙巴体育</span></li>
                        <?php endif; ?>
                        <?php if(in_array('BBIN', $_api_list)): ?>
                            <li class="hot"  <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=4','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>BBIN体育</span></li>
                        <?php endif; ?>
                        <?php if(in_array('AG', $_api_list)): ?>
                            <li <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=4','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>AG体育</span></li>
                        <?php endif; ?>
                        <?php if(in_array('NEWBB', $_api_list)): ?>
                            <li  <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=NEWBB&game_type=4','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>NEWBB体育</span></li>
                        <?php endif; ?>
                        <?php if(in_array('ESB', $_api_list)): ?>
                            <li  <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=ESB&game_type=5','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>ESB电竞</span></li>
                        <?php endif; ?>
                        <?php if(in_array('AVIA', $_api_list)): ?>
                            <li <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AVIA&game_type=5','','width=1024,height=768')"<?php else: ?> onclick="Alert();"<?php endif; ?>><span>泛亚电竞</span></li>
                        <?php endif; ?>
                        

                    </ol>
                </li>
                <li class="blue">
                    <a href="<?php echo e(route('web.lottory')); ?>">彩票游戏<span>LOTTERY</span></a>
                    <ol class="subnav">
                        <?php
                        $lottery = (new \App\Http\Controllers\Wap\AjaxController())->getGames('lottery');
                        ?>
                        <?php if(count($lottery) > 0): ?>
                            <?php $__currentLoopData = $lottery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="hot"
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"<?php endif; ?>>
                                    <span><?php echo e($v['name']); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        
                        
                    </ol>
                </li>
                <li class="hot">
                    <a href="<?php echo e(route('web.poker')); ?>">棋牌游戏<span>Card Games</span></a>

                    <ol class="subnav">
                        <li class="sub-title">天天反水 3.0%</li>
                        <?php if(in_array('AP', $_api_list)): ?>
                            <li class="hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=AP&game_type=7">AP爱棋牌</a></li>
                        <?php endif; ?>
                        <?php if(in_array('VG', $_api_list)): ?>
                            <li class="hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=VG&game_type=7">VG棋牌</a></li>
                        <?php endif; ?>
                        <?php if(in_array('SG', $_api_list)): ?>
                            <li class="hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=7">SG棋牌</a></li>
                        <?php endif; ?>
                        <?php if(in_array('LEG', $_api_list)): ?>
                            <li class="hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=LEG&game_type=7">LEG棋牌</a></li>
                        <?php endif; ?>
                        <?php if(in_array('MT', $_api_list)): ?>
                            <li class="sub-hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=MT&game_type=7">美天棋牌</a></li>
                        <?php endif; ?>
                        <?php if(in_array('KY', $_api_list)): ?>
                            <li class="sub-hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=KY&game_type=7">开元棋牌</a></li>
                        <?php endif; ?>
                        <?php if(in_array('FG', $_api_list)): ?>
                            <li class="sub-hot"><a target="_blank" href="<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=7">FG棋牌</a></li>
                        <?php endif; ?>
                        
                    </ol>

                </li>
                <li class="hot">
                    <a href="<?php echo e(route('web.catchFish')); ?>">捕鱼游戏<span>Fish Hunter</span></a>
                    <div class="subnav fish">
                        <div class="sub-title">天天反水 3.0%</div>
                        <ol>
                            <?php if(in_array('FG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=6&game_code=fish_mm','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>FG美人捕鱼</li>
                            <?php endif; ?>

                            <?php if(in_array('FG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=6&game_code=fish_bn','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>FG捕鸟达人</li>
                            <?php endif; ?>
                            <?php if(in_array('FG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=6&game_code=fish_tt','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>FG天天捕鱼</li>
                            <?php endif; ?>
                            <?php if(in_array('JDB', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=6&game_code=7_7003','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>JDB财神捕鱼</li>
                            <?php endif; ?>
                            <?php if(in_array('JDB', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=6&game_code=7_7001','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>JDB龙王捕鱼</li>
                            <?php endif; ?>
                            <?php if(in_array('AG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=6','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>AG捕鱼王</li>
                            <?php endif; ?>
                            <?php if(in_array('BBIN', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=6','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>BB捕鱼达人</li>
                            <?php endif; ?>
                            <?php if(in_array('SW', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SW&game_type=6','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>SW捕鱼多福</li>
                            <?php endif; ?>
                            <?php if(in_array('SW', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SW&game_type=6&game_code=sw_fuqsg','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>SW捕鱼多福</li>
                            <?php endif; ?>
                            <?php if(in_array('PT', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=6&game_code=cashfi','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>PT深海大赢家</li>
                            <?php endif; ?>
                            <?php if(in_array('SA', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SA&game_type=6','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>SA鱼乐无穷</li>
                            <?php endif; ?>
                            
                        </ol>
                        <ol>
                            <?php if(in_array('FG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=6','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>FG欢乐捕鱼</li>
                            <?php endif; ?>
                            <?php if(in_array('FG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=6&game_code=fish_zj','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>FG雷霆战警</li>
                            <?php endif; ?>
                            <?php if(in_array('FG', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FG&game_type=6&game_code=fish_3D','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>FG捕鱼嘉年华</li>
                            <?php endif; ?>
                            <?php if(in_array('CQ9', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=6','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>CQ9皇金渔场</li>
                            <?php endif; ?>
                            <?php if(in_array('JDB', $_api_list)): ?>
                                <li class="hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=6&game_code=7_7002','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>JDB龙王捕鱼2</li>
                            <?php endif; ?>
                            <?php if(in_array('BBIN', $_api_list)): ?>
                                <li class="sub-hot"
                                    <?php if($_member): ?>
                                    onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=6&game_code=38001','','width=1024,height=768')"
                                    <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>BBIN捕鱼大师</li>
                            <?php endif; ?>
                            <?php if(in_array('MW', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=6','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>MW千炮捕鱼</li>
                            <?php endif; ?>
                            <?php if(in_array('MT', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MT&game_type=6&game_code=PTG0011','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>MT李逵捕鱼</li>
                            <?php endif; ?>
                            <?php if(in_array('MT', $_api_list)): ?>
                                <li
                                        <?php if($_member): ?>
                                        onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MT&game_type=6&game_code=PTG0045','','width=1024,height=768')"
                                        <?php else: ?> onclick="Alert();"
                                        <?php endif; ?>>MT金蟾捕鱼</li>
                            <?php endif; ?>
                            
                        </ol>
                    </div>
                </li>
                <li>
                    <a href="<?php echo e(route('web.liveCasino')); ?>">视讯直播<span>CASINO</span></a>
                    <div class="subnav">
                        <div class="sub-title">天天返水1.2%</div>
                        <ol>
                            <?php if(in_array('AG', $_api_list)): ?>
                                <li class="hot" game-box="ag"<?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>AG寰亚厅</li>
                            <?php endif; ?>
                            <?php if(in_array('BG', $_api_list)): ?>
                                <li game-box="bg" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BG&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>BG尊娱厅</li>
                            <?php endif; ?>
                            <?php if(in_array('ALLBET', $_api_list)): ?>
                                <li game-box="ab" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=ALLBET&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>AB尊爵厅</li>
                            <?php endif; ?>
                            <?php if(in_array('GPI', $_api_list)): ?>
                                <li game-box="gpi" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GPI&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>GPI贵宾厅</li>
                            <?php endif; ?>
                            <?php if(in_array('GD', $_api_list)): ?>
                                <li game-box="gd" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GD&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>GD奢华厅</li>
                            <?php endif; ?>
                            <?php if(in_array('SA', $_api_list)): ?>
                                <li game-box="sa" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SA&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>沙龙荣耀厅</li>
                            <?php endif; ?>
                            
                        </ol>
                        <ol>
                            <?php if(in_array('BBIN', $_api_list)): ?>
                                <li class="hot" game-box="bb" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>BBIN旗舰厅</li>
                            <?php endif; ?>
                            <?php if(in_array('MG', $_api_list)): ?>
                                <li game-box="mg" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>MG欧美厅</li>
                            <?php endif; ?>
                            <?php if(in_array('PT', $_api_list)): ?>
                                <li game-box="pt" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>PT国际厅</li>
                            <?php endif; ?>
                            <?php if(in_array('DG', $_api_list)): ?>
                                <li game-box="evo" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=DG&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>DG尊爵会</li>
                            <?php endif; ?>
                            <?php if(in_array('SUNBET', $_api_list)): ?>
                                <li game-box="sb" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SUNBET&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>申博梦幻厅</li>
                            <?php endif; ?>
                            <?php if(in_array('OG', $_api_list)): ?>
                                <li game-box="og" <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=OG&game_type=1','','width=1024,height=768')" <?php else: ?> onclick="Alert();"<?php endif; ?>>OG如意厅</li>
                            <?php endif; ?>
                            
                        </ol>
                    </div>
                </li>

                <li class="red hot">
                    <a href="<?php echo e(route('web.activityList')); ?>">优惠活动<span>PROMOTION</span></a>
                    
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="javascript:window.open('<?php echo e($_system_config->service_link); ?>','','width=1024,height=768')">在线客服<span>SERVICE</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<?php if(Auth::guard('member')->guest()): ?>
    <div id="header-bot" class="home">
        <div class="wrapper">

            <div id="account-box" class="wow flipInX">
                <form name="LoginForm" id="LoginForm" action="<?php echo e(route('member.login.post')); ?>" method="POST">
                    <input id="login_account" type="text" placeholder="帐号" name="name" tabindex="1" required title="请输入账号"/>
                    <input id="login_password" type="password" placeholder="密码" name="password" tabindex="2" required title="请输入密码" />
                    <span class="forget-btn" ng-click=""onclick="return layer.alert('您好！忘记密码请联系客服!',{icon:7});">忘记?</span>
                    <div id="check-code-wrapper">
                        <input id="rmNum"  type="text" placeholder="验证码" name="captcha" tabindex="3" onfocus="javascript:re_captcha();"  required title="请输入验证码"/>
                        <img id="captcha"  style="background-color: burlywood;"onfocus="javascript:re_captcha();"
                        />
                        <script>
                            function re_captcha() {
                                $url = "<?php echo e(URL('kit/captcha')); ?>";
                                $url = $url + "/" + Math.random();
                                document.getElementById('captcha').src = $url;
                            }
                        </script>
                    </div>
                    <button id="login-box" class="login-btn ajax-submit-btn" ng-disabled="isProcessing" ng-bind="isProcessing ? '登入...' : '登入'">登入</button>
                    <button class="join-btn" onclick="javascript:window.location.href = '<?php echo e(route('web.register_one')); ?>';" type="button">免费开户</button>
                    <a class="freeplay-btn"  ng-click=""onclick="return layer.alert('您好！请联系客服索取试玩帐号!',{icon:7});">免费试玩</a>
                    <div id="agree" ng-show="loginOver" ng-cloak>
                        点击登入表示同意<a ng-click="agreement()">用户协议</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php else: ?>

    <div id="header-bot" class="home">
        <div class="wrapper">

            <div id="account-box" class="is-login wow flipInX" ng-controller="AccountCtrl" ng-init="$root.user.isLogin=true">
                <ul id="account-info">
                    <li class="user">
                        帐号 :
                        <span class="account" title="<?php echo e($_member->name); ?>"><?php echo e($_member->name); ?></span>
                        
                    </li>
                    <li class="money">
                        账户余额 :
                        <strong class="money1"><?php echo e($_member->money); ?></strong>
                    </li>
                </ul>


                <ul id="account-nav">
                    <?php if($_system_config ->is_new_center == 1): ?>
                        <li title="会员中心">
                            <a href="<?php echo e(route('member.userCenter')); ?>">
                                会员中心
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="deposit">
                            <a href="<?php echo e(route('member.finance_center')); ?>">
                                线上存款
                            </a>
                        </li>
                        <li class="withdraw">
                            <a href="<?php echo e(route('member.member_drawing')); ?>">
                                线上取款
                            </a>
                        </li>
                        <li class="betrecord">
                            <a href="<?php echo e(route('member.customer_report')); ?>">
                                账户记录
                            </a>
                        </li>
                        <li class="record">
                            <a href="<?php echo e(route('member.userCenter')); ?>">
                                账户管理
                            </a>
                        </li>
                        
                    <?php endif; ?>
                </ul>
                <div id="action-box">
                    <a href="<?php echo e(route('member.logout')); ?>"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="login-btn">登出</a>
                    <form id="logout-form" action="<?php echo e(route('member.logout')); ?>" method="POST"
                          style="display: none;">
                    <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        <?php if(!Auth::guard('member')->guest()): ?>
        <?php if($_member->is_trans_on == 1): ?>
        $(function () {
            $.ajax({
                type:'post',
                url : "<?php echo e(route('member.api.wallet_balance')); ?>",
                dataType : 'json',
                success : function (data) {
                    //console.log(data);
                    if(data.statusCode == '01'){
                        var all = Number($('.money1').text()) + Number(data.data);
                        $('.money1').text('');
                        $('.money1').text(parseInt(all.toFixed(2)));
                    }
                }
            })
        })
        <?php endif; ?>
        <?php endif; ?>
    </script>

<?php endif; ?>

