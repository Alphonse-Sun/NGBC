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


            <!-- <a class="nivo-prevNav">???</a>
             <a class="nivo-nextNav">???</a>-->
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
                                    <li game-box="bb" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')" ng-mouseover="show='bb'" ng-class="{'active': show=='bb'}">BBIN??????</li>
                                    <?php endif; ?>
                                        <?php if(in_array('MG', $_api_list)): ?>
                                    <li game-box="mg" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')" ng-mouseover="show='mg'" ng-class="{'active': show=='mg'}">MG??????</li>
                                        <?php endif; ?>
                                        <?php if(in_array('PT', $_api_list)): ?>
                                    <li game-box="pt" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')" ng-mouseover="show='pt'" ng-class="{'active': show=='pt'}">PT??????</li>
                                        <?php endif; ?>
                                        <?php if(in_array('CQ9', $_api_list)): ?>
                                    <li game-box="cq9" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')" ng-mouseover="show='cq9'" ng-class="{'active': show=='cq9'}">????????????</li>
                                        <?php endif; ?>
                                        <?php if(in_array('AG', $_api_list)): ?>
                                    <li game-box="ag" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')" ng-mouseover="show='ag'" ng-class="{'active': show=='ag'}">AG??????</li>
                                        <?php endif; ?>
                                        <?php if(in_array('JDB', $_api_list)): ?>
                                    <li game-box="jdb" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')" ng-mouseover="show='jdb'" ng-class="{'active': show=='jdb'}">????????????</li>
                                        <?php endif; ?>
                                        <?php if(in_array('MW', $_api_list)): ?>
                                    <li game-box="mw" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')" ng-mouseover="show='mw'" ng-class="{'active': show=='mw'}">MW??????</li>
                                        <?php endif; ?>
                                        <?php if(in_array('SG', $_api_list)): ?>
                                    <li game-box="sg" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')" ng-mouseover="show='sg'" ng-class="{'active': show=='sg'}">????????????</li>
                                            <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="slot-panel">
                            <ul ng-show="show=='hot'" ng-cloak>
                                <li class="hot01"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>??????</span></p></a></li>
                                <li class="hot02"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>???????????????</span></p></a></li>
                                <li class="hot03"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>????????????</span></p></a></li>
                                <li class="hot04"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>????????????1/2</span></p></a></li>
                                <li class="hot05"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>????????????1/2</span></p></a></li>
                                <li class="hot06"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>????????????</span></p></a></li>
                                <li class="hot07"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>????????????</span></p></a></li>
                                <li class="hot08"><a href="<?php echo e(route('web.eGame')); ?>"><div class="img"></div><p><span>?????????</span></p></a></li>
                            </ul>
                            <?php if(in_array('BBIN', $_api_list)): ?>
                            <ul ng-show="show=='bb'" ng-cloak>
                                <li class="bb01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="bb02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????2</span></p></li>
                                <li class="bb03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="bb04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????2</span></p></li>
                                <li class="bb05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="bb06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="bb07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                                <li class="bb08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('MG', $_api_list)): ?>
                            <ul ng-show="show=='mg'">
                                <li class="mg01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>??????</span></p></li>
                                <li class="mg02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="mg03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="mg04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="mg05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="mg06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                                <li class="mg07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                                <li class="mg08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('PT', $_api_list)): ?>
                            <ul ng-show="show=='pt'" ng-cloak>
                                <li class="pt01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="pt02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="pt03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="pt04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="pt05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="pt06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="pt07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="pt08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('AG', $_api_list)): ?>
                            <ul ng-show="show=='ag'" ng-cloak>
                                <li class="ag01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="ag02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="ag03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????2</span></p></li>
                                <li class="ag04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                                <li class="ag05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="ag06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="ag07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="ag08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('SG', $_api_list)): ?>
                            <ul ng-show="show=='sg'" ng-cloak>
                                <li class="sg01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="sg02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="sg03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="sg04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="sg05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>??????888</span></p></li>
                                <li class="sg06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="sg07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="sg08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SG&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            
                            <?php if(in_array('JDB', $_api_list)): ?>
                            <ul ng-show="show=='jdb'" ng-cloak>
                                <li class="jdb01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>??????</span></p></li>
                                <li class="jdb02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="jdb03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="jdb04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="jdb05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="jdb06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="jdb07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=JDB&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="jdb08" ng-click="toJdbHtml()"><div class="img"></div><p><span>??????????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('CQ9', $_api_list)): ?>
                            <ul ng-show="show=='cq9'" ng-cloak>
                                <li class="cq901" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>??????</span></p></li>
                                <li class="cq902" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="cq903" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="cq904" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="cq905" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????2</span></p></li>
                                <li class="cq906" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="cq907" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="cq908" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CQ9&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                            </ul>
                            <?php endif; ?>
                            <?php if(in_array('MW', $_api_list)): ?>
                            <ul ng-show="show=='mw'" ng-cloak>
                                <li class="mw01" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>??????5??????</span></p></li>
                                <li class="mw02" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>?????????</span></p></li>
                                <li class="mw03" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="mw04" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="mw05" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>??????97</span></p></li>
                                <li class="mw06" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>????????????</span></p></li>
                                <li class="mw07" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>???????????????</span></p></li>
                                <li class="mw08" onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MW&game_type=2','','width=1024,height=768')"><div class="img"></div><p><span>HUGA</span></p></li>
                            </ul>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="aboutus">
                        <p class="text">
                            ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                        </p>
                    </div>
                </div>

                <div class="lobby-box">
                    <ul class="lobby-list" ng-init="select='live'">
                        <li data-img="live" ng-mouseover="select='live'" ng-class="{'active': select=='live'}"><a href="<?php echo e(route('web.liveCasino')); ?>">????????????</a></li>
                        <li data-img="lottery" ng-mouseover="select='lottery'" ng-class="{'active': select=='lottery'}"><a href="<?php echo e(route('web.lottory')); ?>">????????????</a></li>
                        <li data-img="sport" ng-mouseover="select='sport'" ng-class="{'active': select=='sport'}"><a href="<?php echo e(route('web.esports')); ?>">????????????</a></li>
                        <li data-img="mobile" ng-mouseover="select='mobile'" ng-class="{'active': select=='mobile'}"><a href="/m">????????????</a></li>
                    </ul>
                    <ul class="lobby-img">
                        <li data-img="live" ng-show="select=='live'" ng-cloak><a href="<?php echo e(route('web.liveCasino')); ?>"><p>?????????????????????????????????????????????????????????</p></a></li>
                        <li data-img="lottery" ng-show="select=='lottery'" ng-cloak><a href="<?php echo e(route('web.lottory')); ?>"><p>???????????????????????????????????????????????????</p></a></li>
                        <li data-img="sport" ng-show="select=='sport'" ng-cloak><a href="<?php echo e(route('web.esports')); ?>"><p>???????????????????????????????????????</p></a></li>
                        <li data-img="mobile" ng-show="select=='mobile'" ng-cloak><a href="/m"><p>??????????????????????????????????????????</p></a></li>
                    </ul>
                    <ul class="other">
                        <li data-img="board"><a href="<?php echo e(route('web.poker')); ?>">????????????</a></li>
                        <li data-img="game"><a href="<?php echo e(route('web.eGame')); ?>">????????????</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.template.mb26.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>