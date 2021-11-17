<?php $__env->startSection('after.js'); ?>
    <link href="/bundles/home.css?v=kEJfj5m3p32HDyN-DPIJd3Namr0MZwylZT3l0yoYBLk1" rel="stylesheet"/>
    <?php if($_system_config->is_alert_on == 0): ?>
        <div id="modal-tit" class="modal modal-login">
            <div class="modal-content" style="width: 650px;height: 414px;padding: 0">
                <a href="" class="close bg-icon" style="top: 0;right: -20px;opacity: 1;background-color: #ccc"></a>
                <a href="javascript:;">
                    <img style="width: 100%" src="<?php echo e($_system_config->alert_img); ?>" alt="">
                </a>
            </div>
        </div>
        <script>
            (function($){
                $(function(){
                    $('#modal-tit').modal();
                })
            })(jQuery);
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
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
            
            <!--  <li style="display: none;"><a><img
                            src="<?php echo e(asset('/bundles/images/06.jpg')); ?>"/></a></li>
			 <li style="display: none;"><a><img
                            src="<?php echo e(asset('/bundles/images/07.jpg')); ?>"/></a></li>
			 <li style="display: none;"><a><img
                            src="<?php echo e(asset('/bundles/images/08.jpg')); ?>"/></a></li>-->
            </ul>


            <div class="sidecenter" id="middle-pic" style="top: 0px;">


                <ul class="lunbo">
                    <li class="active" id="t0"></li>
                    <li class="bg" id="t1"></li>
                    <li class="bg" id="t2"></li>
                    <li class="bg" id="t3"></li>
                    <!-- <li class="bg" id="t1"></li>
                    <li class="bg" id="t2"></li>
                    <li class="bg" id="t3"></li>
                    <li class="bg" id="t4"></li>
                   <li class="bg" id="t5"></li>
                    <li class="bg" id="t6"></li>
                    <li class="bg" id="t7"></li>-->
                </ul>
            </div>


            <!-- <a class="nivo-prevNav">左</a>
             <a class="nivo-nextNav">右</a>-->
        </div>


    </div>

    <div id="news" class="mar0" popup-news>

        <div class="wrapper">

            <marquee onmouseover="this.stop()" onmouseout="this.start()" style="float:left; color:#fff; font-size:14px; line-height:30px;position:relative;left:10px;margin-top:4px;" scrollAmount=5 width=650>
                <?php $__currentLoopData = $_system_notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="news-list" ng-click="newsClick()">
                        ~<?php echo e($v->title); ?>~<?php echo e($v->content); ?>


                    </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </marquee>
            <div class="domain"><?php echo e($_system_config->site_domain); ?></div>
        </div>
    </div>




    <div id="content">
        <div class="wrapper">


            <div id="home" ng-controller="LobbiesCtrl">
                <div class="popular-game">
                    <div class="game-box" ng-init="show='hot'">
                        <span class="hot-game" ng-mouseover="show='hot'" ng-class="{'active': show=='hot'}"></span>
                        <div class="slot-list"
                             carousel-slider
                             super-vis="6"
                             super-play="false"
                             super-effect="leftLoop">
                            <span class="prev"></span>
                            <span class="next"></span>
                            <div class="main-cell">
                                <ul class="game-list">
                                    <?php if(in_array('BBIN', $_api_list)): ?>
                                    <li game-box="bb" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')" ng-mouseover="show='bb'" ng-class="{'active': show=='bb'}">BBIN电子</li>
                                    <?php endif; ?>
                                        <?php if(in_array('MG', $_api_list)): ?>
                                    <li game-box="mg" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')" ng-mouseover="show='mg'" ng-class="{'active': show=='mg'}">MG电子</li>
                                        <?php endif; ?>
                                        <?php if(in_array('PT', $_api_list)): ?>
                                    <li game-box="pt" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')" ng-mouseover="show='pt'" ng-class="{'active': show=='pt'}">PT电子</li>
                                        <?php endif; ?>
                                        <?php if(in_array('CQ9', $_api_list)): ?>
                                    <li game-box="cq9" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')" ng-mouseover="show='cq9'" ng-class="{'active': show=='cq9'}">传奇电子</li>
                                        <?php endif; ?>
                                        <?php if(in_array('AG', $_api_list)): ?>
                                    <li game-box="ag" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')" ng-mouseover="show='ag'" ng-class="{'active': show=='ag'}">AG电子</li>
                                        <?php endif; ?>
                                        <?php if(in_array('JDB', $_api_list)): ?>
                                    <li game-box="jdb" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')" ng-mouseover="show='jdb'" ng-class="{'active': show=='jdb'}">夺宝电子</li>
                                        <?php endif; ?>
                                        <?php if(in_array('MW', $_api_list)): ?>
                                    <li game-box="mw" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')" ng-mouseover="show='mw'" ng-class="{'active': show=='mw'}">MW电子</li>
                                        <?php endif; ?>
                                        <?php if(in_array('SG', $_api_list)): ?>
                                    <li game-box="sg" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')" ng-mouseover="show='sg'" ng-class="{'active': show=='sg'}">新霸电子</li>
                                            <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="slot-panel">
                            <ul ng-show="show=='hot'" ng-cloak>
                                <li class="hot01"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>摆脱</span></p></a></li>
                                <li class="hot02"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>不朽的浪漫</span></p></a></li>
                                <li class="hot03"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>幸运双星</span></p></a></li>
                                <li class="hot04"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>连环夺宝1/2</span></p></a></li>
                                <li class="hot05"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>糖果派对1/2</span></p></a></li>
                                <li class="hot06"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>古怪猴子</span></p></a></li>
                                <li class="hot07"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>招财进宝</span></p></a></li>
                                <li class="hot08"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>跳高高</span></p></a></li>
                            </ul>
                            <?php if(in_array('BBIN', $_api_list)): ?>
                            <ul ng-show="show=='bb'" ng-cloak>
                                <li class="bb01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>糖果派对</span></p></li>
                                <li class="bb02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>糖果派对2</span></p></li>
                                <li class="bb03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>连环夺宝</span></p></li>
                                <li class="bb04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>连环夺宝2</span></p></li>
                                <li class="bb05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>趣味台球</span></p></li>
                                <li class="bb06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>喜福猴年</span></p></li>
                                <li class="bb07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>开心消消乐</span></p></li>
                                <li class="bb08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>沙滩排球</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('MG', $_api_list)): ?>
                            <ul ng-show="show=='mg'">
                                <li class="mg01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>摆脱</span></p></li>
                                <li class="mg02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>猫头鹰</span></p></li>
                                <li class="mg03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>宝石之轮</span></p></li>
                                <li class="mg04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>爆破银行</span></p></li>
                                <li class="mg05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>心跳时刻</span></p></li>
                                <li class="mg06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>伴娘我最大</span></p></li>
                                <li class="mg07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>比基尼派对</span></p></li>
                                <li class="mg08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>幸运双星</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('PT', $_api_list)): ?>
                            <ul ng-show="show=='pt'" ng-cloak>
                                <li class="pt01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>白狮王</span></p></li>
                                <li class="pt02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>金钱蛙</span></p></li>
                                <li class="pt03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>湛蓝深海</span></p></li>
                                <li class="pt04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>招财进宝</span></p></li>
                                <li class="pt05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>三倍猴子</span></p></li>
                                <li class="pt06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>招财童子</span></p></li>
                                <li class="pt07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>古怪猴子</span></p></li>
                                <li class="pt08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>深海大赢家</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('AG', $_api_list)): ?>
                            <ul ng-show="show=='ag'" ng-cloak>
                                <li class="ag01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>捕鱼王</span></p></li>
                                <li class="ag02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>水果拉霸</span></p></li>
                                <li class="ag03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>水果拉霸2</span></p></li>
                                <li class="ag04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>疯狂马戏团</span></p></li>
                                <li class="ag05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>太空漫游</span></p></li>
                                <li class="ag06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>灵猴献瑞</span></p></li>
                                <li class="ag07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>布袋和尚</span></p></li>
                                <li class="ag08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>冰河世界</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('SG', $_api_list)): ?>
                            <ul ng-show="show=='sg'" ng-cloak>
                                <li class="sg01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>熊之蜜</span></p></li>
                                <li class="sg02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>发发发</span></p></li>
                                <li class="sg03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>五龙吐珠</span></p></li>
                                <li class="sg04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>大福小福</span></p></li>
                                <li class="sg05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>财神888</span></p></li>
                                <li class="sg06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>黄金黥鱼</span></p></li>
                                <li class="sg07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>太空神猴</span></p></li>
                                <li class="sg08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>森林狂欢季</span></p></li>
                            </ul>
                            <?php endif; ?>
                            
                            <?php if(in_array('JDB', $_api_list)): ?>
                            <ul ng-show="show=='jdb'" ng-cloak>
                                <li class="jdb01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>变脸</span></p></li>
                                <li class="jdb02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>过新年</span></p></li>
                                <li class="jdb03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>拿破仑</span></p></li>
                                <li class="jdb04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>台湾黑熊</span></p></li>
                                <li class="jdb05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>月光秘宝</span></p></li>
                                <li class="jdb06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>江山美人</span></p></li>
                                <li class="jdb07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>芝麻开门</span></p></li>
                                <li class="jdb08" ng-click="toJdbHtml()"><div class="img"></div><p><span>唐伯虎点秋香</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('CQ9', $_api_list)): ?>
                            <ul ng-show="show=='cq9'" ng-cloak>
                                <li class="cq901" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>武圣</span></p></li>
                                <li class="cq902" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>甜蜜蜜</span></p></li>
                                <li class="cq903" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>血之吻</span></p></li>
                                <li class="cq904" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>跳起来</span></p></li>
                                <li class="cq905" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>跳起来2</span></p></li>
                                <li class="cq906" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>金玉满堂</span></p></li>
                                <li class="cq907" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>金鸡报喜</span></p></li>
                                <li class="cq908" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>钟馗运财</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('MW', $_api_list)): ?>
                            <ul ng-show="show=='mw'" ng-cloak>
                                <li class="mw01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>好运5扑克</span></p></li>
                                <li class="mw02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>水浒传</span></p></li>
                                <li class="mw03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>五龙争霸</span></p></li>
                                <li class="mw04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>森林舞会</span></p></li>
                                <li class="mw05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>明星97</span></p></li>
                                <li class="mw06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>洪福齐天</span></p></li>
                                <li class="mw07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>超级斗地主</span></p></li>
                                <li class="mw08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>HUGA</span></p></li>
                            </ul>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="aboutus">
                        <p class="text">
                            最具公信力的博彩公司、更有高质量的游戏平台、打造在线博彩第一品牌。公司不仅拥有市场上最多样化的游戏投注平台，同时为客户提供实时、刺激、高信誉的服务保证和高质量的游戏。
                        </p>
                    </div>
                </div>

                <div class="lobby-box">
                    <ul class="lobby-list" ng-init="select='live'">
                        <li data-img="live" ng-mouseover="select='live'" ng-class="{'active': select=='live'}"><a href="<?php echo e(route('web.liveCasino')); ?>">真人娱乐</a></li>
                        <li data-img="lottery" ng-mouseover="select='lottery'" ng-class="{'active': select=='lottery'}"><a href="<?php echo e(route('web.lottory')); ?>">彩票游戏</a></li>
                        <li data-img="sport" ng-mouseover="select='sport'" ng-class="{'active': select=='sport'}"><a href="<?php echo e(route('web.esports')); ?>">体育赛事</a></li>
                        <li data-img="mobile" ng-mouseover="select='mobile'" ng-class="{'active': select=='mobile'}"><a href="/m">手机投注</a></li>
                    </ul>
                    <ul class="lobby-img">
                        <li data-img="live" ng-show="select=='live'" ng-cloak><a href="<?php echo e(route('web.liveCasino')); ?>"><p>真人荷官在线发牌，给您亲临赌场的体验！</p></a></li>
                        <li data-img="lottery" ng-show="select=='lottery'" ng-cloak><a href="<?php echo e(route('web.lottory')); ?>"><p>六合彩，时时彩，北京赛车等多种游戏</p></a></li>
                        <li data-img="sport" ng-show="select=='sport'" ng-cloak><a href="<?php echo e(route('web.esports')); ?>"><p>世界联合赛，杯赛，一应俱全</p></a></li>
                        <li data-img="mobile" ng-show="select=='mobile'" ng-cloak><a href="/m"><p>手机投注，随时随地，随心所欲</p></a></li>
                    </ul>
                    <ul class="other">
                        <li data-img="board"><a href="<?php echo e(route('web.poker')); ?>">棋牌游戏</a></li>
                        <li data-img="game"><a href="<?php echo e(route('web.eGame')); ?>">电子竞技</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.template.mb26.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>