<?php ($path = 'web.template.'.$mb_path.'.layouts.main'); ?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/web/css/livecasion.css')); ?>">
    <style>
        .mb2{
            margin-top: 193px;
        }
        .mb6{
            margin-top: 166px;
        }
        .mb7{
            margin-top: 72px;
        }
        .mb4{
            margin-top: 97px;
        }
        .mb12{
            margin-top: 112px;
        }

        #mb1{
            top:-96px;
        }
        #mb2,#mb3,#mb4,#mb5,#mb6,#mb7,#mb9,#mb10,#mb11,#mb12,#mb13,#mb14,#mb15,#mb16,#mb17,#mb18,#mb19,#mb20,#mb21,#mb22,#mb24,#mb25,#mb26,#mb27,#mb28,#mb29,#mb30,#mb31{
            top:-131px;
        }
        #mb23{
            top:-77px;
        }
        #mb8{
            top:-91px;
        }
        #mb32{
            top: -144px;
        }

    </style>
    <div class="<?php echo e($mb_path); ?>" style="background: #1b191a;">
        <div id="banner"></div>
        <div id="<?php echo e($mb_path); ?>" class="notice-row">
            <div class="noticeBox">
                <div class="w">
                    <div class="title">
                        最新公告：
                    </div>
                    <div class="bd2">
                        <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
                            <marquee id="mar0" scrollamount="4" direction="left" onmouseout="this.start()"
                                     onmouseover="this.stop()">
                                <?php $__currentLoopData = $_system_notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="module" style="display: inline-block;">
                                        <span>~<?php echo e($v->title); ?>~</span>
                                        <span><?php echo e($v->content); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
                <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                    <ul class="game-list">
                        <?php if(in_array('AG', $_api_list) || in_array('AGS',$_api_list)): ?>
                            <li game-box="ag">
                                <span>AG视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=AG&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                                <a
                                        onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=AG&game_type=1','','width=1024,height=768')"
                                        class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('BBIN', $_api_list)): ?>
                            <li game-box="bb">
                                <span>BBIN视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('BG', $_api_list)): ?>
                            <li game-box="bg">
                                <span>BG视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BG&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                                <a
                                        onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=BG&game_type=1','','width=1024,height=768')"
                                        class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('SUNBET', $_api_list) || in_array('SUNBETS',$_api_list)): ?>
                            <li game-box="sb">
                                <span>申博视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SUNBET&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('ALLBET', $_api_list)): ?>
                            <li game-box="ab" class="no-margin">
                                <span>欧博视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=ALLBET&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                                <a
                                        onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=ALLBET&game_type=1','','width=1024,height=768')"
                                        class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('LEBO', $_api_list)): ?>
                            <li game-box="lebo">
                                <span>LEBO视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=LEBO&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('SA', $_api_list)): ?>
                            <li game-box="sa">
                                <span>SA视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SA&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                                <a
                                        onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=SA&game_type=1','','width=1024,height=768')"
                                        class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('GD', $_api_list)): ?>
                            <li game-box="gd">
                                <span>GD视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GD&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('OG', $_api_list)): ?>
                            <li game-box="og" class="no-margin">
                                <span>OG视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=OG&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                                <a
                                        onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=OG&game_type=1','','width=1024,height=768')"
                                        class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('DG', $_api_list)): ?>
                            <li game-box="dg"  >
                                <span>DG视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=DG&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                                <a
                                        onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=DG&game_type=1','','width=1024,height=768')"
                                        class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('MG', $_api_list)): ?>
                            <li game-box="mg">
                                <span>MG视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=MG&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('PT', $_api_list)): ?>
                            <li game-box="pt">
                                <span>PT视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=PT&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                        <?php if(in_array('GPI', $_api_list)): ?>
                            <li game-box="gpi" class="no-margin">
                                <span>GPI视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=GPI&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                        <?php endif; ?>
                        <?php if(in_array('EBET', $_api_list)): ?>
                            <li game-box="ebet" >
                                <span>EBET视讯</span>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=EBET&game_type=1','','width=1024,height=768')"
                                        <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                            <?php if(in_array('SEXY', $_api_list)): ?>
                                <li game-box="sexy" >
                                    <span>SEXY视讯</span>
                                    <a
                                            <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SEXY&game_type=1','','width=1024,height=768')"
                                            <?php else: ?> onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                            class="game-btn play-btn game_show" data-url="" style="top: 40%" href="javascript:">进入游戏</a>
                                </li>
                            <?php endif; ?>
                        <li game-box="more"></li>
                        
                        
                    </ul>
                </section>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($path, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>