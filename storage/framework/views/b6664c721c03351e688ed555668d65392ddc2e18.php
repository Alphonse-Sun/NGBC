<?php $__env->startSection('content'); ?>
    <div id="banner">
        <div class="nivoSlider" id="Sliderbanner">
            <ul id="au" class="mianbanner">
                
                
                
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a id="img1">
                            <img src="<?php echo e($item->path); ?>"/></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <!--<li style="display: none;"><a><img
                            src="<?php echo e(asset('/bundles/images/8.jpg')); ?>"/></a></li>-->
            </ul>
            <div class="sidecenter" id="middle-pic">
                <ul class="lunbo">
                    <li class="active" id="t0"></li>
                    <li class="bg" id="t1"></li>
                    <li class="bg" id="t2"></li>
                    <li class="bg" id="t3"></li>
                    
                    <!--  <li class="bg" id="t7"></li>-->
                </ul>
            </div>
            <!-- <a class="nivo-prevNav">左</a>
             <a class="nivo-nextNav">右</a>-->
        </div>


        <div id="news" popup-news>
            <div class="wrapper">
                <div id="hot-news" ng-click="newsClick()"><marquee ng-click="newsClick()" style="float:left; color:#fff; font-size:14px; line-height:30px;position:relative;left:-10px;margin-top:1px;" scrollAmount=5 width=890><?php $__currentLoopData = $_system_notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            ~<?php echo e($v->title); ?>~<?php echo e($v->content); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </marquee></div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="wrapper">
        </div>

        <div id="home">
            <div class="wrapper">

                <!--[if !IE | gte IE 9]> -->
                <svg id="home-box" xmlns="http://www.w3.org/2000/svg" width="1040" height="450">
                    <defs>
                        <pattern id="home-01" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/link01.png" width="239" height="241" />
                        </pattern>
                        <pattern id="home-02" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/link02.png" width="239" height="241" />
                        </pattern>
                        <pattern id="home-03" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/link03.png" width="239" height="241" />
                        </pattern>
                        <pattern id="lobby-01" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/live.png" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-01h" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/live.png" y="-263" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-02" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/sport.png" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-02h" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/sport.png" y="-263" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-03" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/game.png" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-03h" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/game.png" y="-263" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-04" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/lottery.png" width="262" height="526" />
                        </pattern>
                        <pattern id="lobby-04h" patternUnits="objectBoundingBox" width="1" height="1">
                            <image xlink:href="/web/mb31/images/lottery.png" y="-263" width="262" height="526" />
                        </pattern>
                    </defs>

                    <a href="" target="_blank">
                        <g id="home-01">
                            <polygon id="home-01" points="254,0 136,119 254,237 373,119"></polygon>
                        </g>
                    </a>

                    <a href="" target="_blank">
                        <g id="home-02">
                            <polygon id="home-02" points="518,0 400,119 518,238 636,119"></polygon>
                        </g>
                    </a>

                    <a href="" target="_blank">
                        <g id="home-03">
                            <polygon id="home-03" points="782,0 664,119 781,238 901,119"></polygon>
                        </g>
                    </a>
                    <a xlink:href="<?php echo e(route('web.liveCasino')); ?>" href="<?php echo e(route('web.liveCasino')); ?>">
                        <g id="lobby-01">
                            <polygon id="lobby-01" points="129,129 0,260 128,395 265,259"></polygon>
                        </g>
                    </a>
                    <a xlink:href="<?php echo e(route('web.esports')); ?>" href="<?php echo e(route('web.esports')); ?>">
                        <g id="lobby-02">
                            <polygon id="lobby-02" points="388,129 260,260 388,395 524,259"></polygon>
                        </g>
                    </a>
                    <a xlink:href="<?php echo e(route('web.eGame')); ?>" href="<?php echo e(route('web.eGame')); ?>">
                        <g id="lobby-03">
                            <polygon id="lobby-03" points="649,129 518,260 645,395 780,259"></polygon>
                        </g>
                    </a>
                    <a xlink:href="<?php echo e(route('web.lottory')); ?>" href="<?php echo e(route('web.lottory')); ?>">
                        <g id="lobby-04">
                            <polygon id="lobby-04" points="908,129 779,260 905,395 1045,259"></polygon>
                        </g>
                    </a>
                </svg>
                <!-- <![endif]-->

                <!--[if IE 8]>
                <ul id="game-box01">
                    <li data-img="link01"><a></a></li>
                    <li data-img="link02"><a></a></li>
                    <li data-img="link03"><a></a></li>
                </ul>
                <ul id="game-box02">
                    <li data-img="live"><a href="<?php echo e(route('web.liveCasino')); ?>"></a></li>
                    <li data-img="sport"><a href="<?php echo e(route('web.esports')); ?>"></a></li>
                    <li data-img="slot"><a href="<?php echo e(route('web.eGame')); ?>"></a></li>
                    <li data-img="lottery"><a href="<?php echo e(route('web.lottory')); ?>"></a></li>
                </ul>
                <![endif]-->
            </div>
        </div>
        <div id="electronic" ng-controller="LobbiesCtrl">
            <div class="wrapper" ng-init="game='hot'">
                <ul class="slot-list">
                    <li class="hot" ng-mouseover="game='hot'" ng-class="{'active': game=='hot'}">最热游戏推荐</li>
                    <li class="popular" ng-mouseover="game='popular'" ng-class="{'active': game=='popular'}">人气游戏推荐</li>
                    <li class="classic" ng-mouseover="game='classic'" ng-class="{'active': game=='classic'}">经典游戏推荐</li>
                </ul>
                <ul class="game-box hot-box" ng-show="game=='hot'">
                    <li class="hot01" onclick="javascript:window.open('<?php echo e(route('web.catchFish')); ?>','','width=1024,height=768')">千炮捕鱼</li>
                    <?php if(in_array('MW', $_api_list)): ?>
                    <li class="hot02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')">水浒传</li>
                    <li class="hot03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')">五龙争霸</li>
                    <li class="hot04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')">超级斗地主</li>
                    <?php endif; ?>
                    <?php if(in_array('GNS', $_api_list)): ?>
                    <li class="hot05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GNS&game_type=2','','width=1024,height=768')">金龙卷</li>
                    <li class="hot06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GNS&game_type=2','','width=1024,height=768')">金鸡报喜</li>
                    <li class="hot07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GNS&game_type=2','','width=1024,height=768')">银雪驯鹿</li>
                    <li class="hot08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GNS&game_type=2','','width=1024,height=768')">狂野英雄</li>
                        <?php endif; ?>
                </ul>
                <ul class="game-box popular-box" ng-show="game=='popular'">
                    <?php if(in_array('AG', $_api_list)): ?>
                    <li class="popular01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')">太空漫游</li>
                    <li class="popular02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')">灵猴献瑞</li>
                    <li class="popular03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')">武财神</li>
                    <li class="popular04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')">捕鱼王</li>
                    <?php endif; ?>
                        <?php if(in_array('BBIN', $_api_list)): ?>
                    <li class="popular05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')">斗鸡</li>
                    <li class="popular06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')">夜市人生</li>
                    <li class="popular07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')">糖果派对</li>
                    <li class="popular08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')">连环夺宝</li>
                            <?php endif; ?>
                </ul>
                <ul class="game-box classic-box" ng-show="game=='classic'">
                    <?php if(in_array('MG', $_api_list)): ?>
                    <li class="classic01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">心跳时刻</li>
                    <li class="classic02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">打破大银行</li>
                    <li class="classic03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">宝石联机</li>
                    <li class="classic04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">摆脱</li>
                    <li class="classic05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">太空神猴</li>
                    <li class="classic06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">发发发</li>
                    <li class="classic07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">森林狂欢季</li>
                    <li class="classic08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')">熊之蜜</li>
                        <?php endif; ?>
                </ul>


                <div class="jackpot">
                    <span digital digital-min="16770000" add word="CNY"></span>
                </div>


                <ul id="award" class="cycle-slideshow" ng-controller="WinnerListCtrl"
                    data-cycle-fx="carousel"
                    data-cycle-carousel-vertical="true"
                    data-cycle-timeout="1"
                    data-cycle-easing="linear"
                    data-cycle-slides="> li"
                    data-cycle-speed="1500"
                    data-cycle-pause-on-hover=true>
                    <li ng-repeat="item in winnerList track by $index" ng-cloak>
                        <span class="player" ng-bind="item.account"></span>
                        <span class="money"ng-bind="item.game"></span>
                        <span class="game-name" ng-bind="item.money"></span>
                    </li>
                </ul>


            </div>
        </div>
        <div id="mobile">
            <div class="wrapper">
                <p>
                    我们的手机投注平台面向全网玩家，提供近百款老虎机、百家乐、以及彩票游 戏投注，线上存款及线上取款，一键操作，运用3D即时运算创造真实场景结合 立体影像，完整规划的跨系统娱乐平台，整合同步账号和资料传输，达到随时 随地不间断娱乐的享受概念。
                </p>
                <div id="qr">
                    <img src="<?php echo e($_system_config->wap_qrcode); ?>" onerror="this.style.display='none'" />
                    扫一扫立即下载
                </div>
                <a ng-href="<?php echo e($_system_config->app_link); ?>" target="_blank"></a>
            </div>
        </div>

    </div>


    <?php if($_system_config->is_alert_on == 0): ?>
        <div id="modal-tit" class="modal modal-login modal-daili">
            <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="popup-dialog" aria-labelledby="ui-id-1" style="position: absolute; height: auto; top: 50%; left: 50%;transform:translateX(-50%) translateY(-50%); display: block;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title"><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?>：独家与中国人民银行签约合作,出款0冻结0拖延0手续费,自动出款秒到账！</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="popup-dialog" popup-dialog="" class="ui-dialog-content ui-widget-content" style="display: block; width: auto; min-height: 110px; max-height: none; height: auto;"><img src="<?php echo e($_system_config->alert_img); ?>"><div class="dialog-footer"><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?>线上最佳游戏平台！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;官方网址：<span style="color:red;"><?php echo e($_system_config->site_domain); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;易记网址：<span style="color:red;"><?php echo e($_system_config->site_domain); ?></span></div></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text" >关闭</span></button></div></div></div></div>
        <script>
            (function($){
                $(function(){
                    $('#modal-tit').modal();
                })
            })(jQuery);
        </script>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.template.mb31.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>