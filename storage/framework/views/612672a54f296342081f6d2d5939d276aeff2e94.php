<?php ($path = 'web.template.'.$mb_path.'.layouts.main'); ?>

<?php $__env->startSection('content'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('/web/css/lottery.css')); ?>">
    <style>
        .mb2{
            margin-top: 193px;
        }
        .mb4{
            margin-top: 97px;
        }
        .mb6{
            margin-top: 166px;
        }
        .mb7{
            margin-top: 72px;
        }
        .mb12{
            margin-top: 112px;
        }
        #mb1{
            top:-320px;
        }
        #mb2,#mb3,#mb4,#mb5,#mb6,#mb7,#mb9,#mb10,#mb11,#mb12,#mb13,#mb14,#mb15,#mb16,#mb17,#mb18,#mb19,#mb20,#mb21,#mb22,#mb24,#mb25,#mb26,#mb27,#mb28,#mb29,#mb30,#mb31,#mb32{
            top:-355px;
        }
        #mb23{
            top:-301px;
        }
        #mb8{
            top:-315px;
        }
    </style>
    <div id="banner" class="<?php echo e($mb_path); ?>"></div>
    <div class="notice-row">
        <div class="noticeBox" id="<?php echo e($mb_path); ?>">
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
        <div class="wrapper">
            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                <ul class="game-list">
                    <?php if(in_array('NG', $_api_list)): ?>
                        <li game-box="ng"
                            <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=NG&game_type=3','','width=1024,height=768')"
                            <?php else: ?>
                            onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                        >
                            <div class="pic"></div>
                            <div class="info">
                                <span class="title">NG信用彩票</span>
                                最火爆彩票投注平台，口碑最好，用户好评率最高的平台
                            </div>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array('NG', $_api_list)): ?>
                        <li game-box="ng2"
                            <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=NG&game_type=3&lott_type=1','','width=1024,height=768')"
                            <?php else: ?>
                            onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                        >
                            <div class="pic"></div>
                            <div class="info">
                                <span class="title">NG传统彩票</span>
                                最火爆彩票投注平台，口碑最好，用户好评率最高的平台
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(in_array('CSK', $_api_list)): ?>
                        <li game-box="vr">
                            <div class="pic"></div>
                            <div class="info"><span class="title">CSK彩票</span>提供丰富的游戏玩法</div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CSK&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>
                        <?php if(in_array('CS', $_api_list)): ?>
                            <li game-box="ig">
                                <div class="pic"></div>
                                <div class="info"><span class="title">CS彩票</span>提供丰富的游戏玩法</div>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=CS&game_type=3','','width=1024,height=768')"
                                        <?php else: ?>
                                        onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>
                    <?php if(in_array('EG', $_api_list)): ?>
                        <li game-box="eg">
                            <div class="pic"></div>
                            <div class="info"><span class="title">EG彩票</span>提供丰富的游戏玩法</div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=EG&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array('IG', $_api_list)): ?>
                        <li game-box="ig">
                            <div class="pic"></div>
                            <div class="info">
                                <span class="title">IG彩票</span>亚洲最大最流行的彩票平台之一
                            </div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=IG&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>

                    <?php if(in_array('IG', $_api_list)): ?>
                        <li game-box="ig6">
                            <div class="pic"></div>
                            <div class="info">
                                <span class="title">IG六合彩</span>亚洲最大最流行的彩票平台之一
                            </div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=IG&game_type=3&game_code=imlotto10059','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array('SGL', $_api_list)): ?>
                        <li game-box="sgl">
                            <div class="pic"></div>
                            <div class="info"><span class="title">SG双赢彩票</span>亚洲最大最流行的彩票平台之一</div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=SGL&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array('VR', $_api_list)): ?>
                        <li game-box="vr">
                            <div class="pic"></div>
                            <div class="info"><span class="title">VR彩票</span>即时开奖，即时投注，分分都刺激</div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=VR&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array('BBIN', $_api_list)): ?>
                        <li game-box="bb">
                            <div class="pic"></div>
                            <div class="info"><span class="title">BBIN彩票</span>亚洲最大最流行的彩票平台之一</div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BBIN&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                        </li>
                    <?php endif; ?>
                    <?php if(in_array('BG', $_api_list)): ?>
                        <li game-box="bg">
                            <div class="pic"></div>
                            <div class="info"><span class="title">BG彩票</span>知名顶级的彩票平台之一</div>
                            <a
                                    <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=BG&game_type=3','','width=1024,height=768')"
                                    <?php else: ?>
                                    onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                    class="game-btn play-btn game_show" data-url="" style="top: 25%" href="javascript:">进入游戏</a>
                            <a
                                    onclick="javascript:window.open('<?php echo e(route('ng.demo_login')); ?>?plat_type=BG&game_type=3','','width=1024,height=768')"
                                    class="game-btn try-btn game_show" style="top: 55%" href="javascript:">试玩</a>
                        </li>
                    <?php endif; ?>
                        <?php if(in_array('FH', $_api_list)): ?>
                            <li game-box="ng2">
                                <div class="pic"></div>
                                <div class="info"><span class="title">FH乐利彩票</span>亚洲最大最流行的彩票平台之一</div>
                                <a
                                        <?php if($_member): ?> onclick="javascript:window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=FH&game_type=3','','width=1024,height=768')"
                                        <?php else: ?>
                                        onclick="return layer.msg('请先登录!',{icon:6})" <?php endif; ?>
                                        class="game-btn play-btn game_show" data-url="" style="top: 45%" href="javascript:">进入游戏</a>
                            </li>
                        <?php endif; ?>

                        <li game-box="more">
                            <div class="pic"></div>
                            <div class="info"><span class="title">敬请期待</span>COMING SOON</div>
                        </li>
                    
                </ul>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($path, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>