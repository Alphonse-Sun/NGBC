<!DOCTYPE html>
<html style="font-size: 41.4px;" class="hairlines">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : '标题'); ?></title>
    <meta name="format-detection" content="telphone=no, email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="browsermode" content="application">
    <meta name="x5-page-mode" content="app">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Cache" content="no-cache">

    <link href="<?php echo e(asset('/wap/theme3/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/wap/theme3/css/swiper.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/wap/theme3/css/messenger.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/wap/theme3/css/messenger-theme-flat.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/wap/theme3/css/reset.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/wap/theme3/css/BIstyle.css')); ?>" rel="stylesheet">

    <script type="text/javascript" src="<?php echo e(asset('/wap/theme3/js/jquery-1.11.3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/wap/theme3/js/flex.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/messenger.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/wapMain.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/mobileJS.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/bicommon.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/wapConfig.js')); ?>"></script>
    <script src="<?php echo e(asset('/wap/theme3/js/CUnits.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/wap/js/layer.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/wap/js/wap_ajax-submit-form.js')); ?>"></script>

</head>

<body style="font-size: 36px; visibility: visible;">
<svg xmlns="httpst://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="__MAND_MOBILE_SVG_SPRITE_NODE__">
    <defs>
        <symbol id="hollow-plus" viewBox="0 0 512 512">
            <path d="M241.778 270.222v128c0 7.854 6.368 14.222 14.222 14.222s14.222-6.368 14.222-14.222v-128h128c7.854 0 14.222-6.368 14.222-14.222s-6.368-14.222-14.222-14.222h-128v-128c0-7.855-6.368-14.222-14.222-14.222s-14.222 6.367-14.222 14.222v128h-128c-7.855 0-14.222 6.368-14.222 14.222s6.367 14.222 14.222 14.222h128z"></path>
            <path d="M0 256C0 114.615 114.615 0 256 0s256 114.615 256 256-114.615 256-256 256S0 397.385 0 256zm28.445 0c0 125.675 101.88 227.555 227.555 227.555S483.555 381.675 483.555 256c0-125.675-101.88-227.555-227.555-227.555S28.445 130.325 28.445 256z"></path>
        </symbol>
        <symbol id="arrow-up" viewBox="0 0 512 512">
            <path d="M145.92 315.904c-5.632-5.632-5.632-14.336 0-19.968l100.352-99.84c5.12-5.632 14.336-5.632 19.968 0l99.84 99.84c5.632 5.632 5.632 14.336 0 19.968s-14.336 5.632-19.968 0L256 225.792l-90.112 90.112c-5.632 5.632-14.336 5.632-19.968 0z"></path>
        </symbol>
        <symbol id="arrow-down" viewBox="0 0 512 512">
            <path d="M366.08 196.096c5.632 5.632 5.632 14.336 0 19.968l-99.84 99.84c-5.632 5.632-14.848 5.632-19.968 0l-100.352-99.84c-5.632-5.632-5.632-14.336 0-19.968s14.336-5.632 19.968 0L256 286.208l90.112-90.112c5.632-5.632 14.336-5.632 19.968 0z"></path>
        </symbol>
        <symbol id="arrow-left" viewBox="0 0 512 512">
            <path d="M315.904 366.08c-5.632 5.632-14.336 5.632-19.968 0l-99.84-100.352c-5.632-5.12-5.632-14.336 0-19.968l99.84-99.84c5.632-5.632 14.336-5.632 19.968 0s5.632 14.336 0 19.968L225.792 256l90.112 90.112c5.632 5.632 5.632 14.336 0 19.968z"></path>
        </symbol>
        <symbol id="arrow-right" viewBox="0 0 512 512">
            <path d="M196.096 145.92c5.632-5.632 14.336-5.632 19.968 0l99.84 99.84c5.632 5.632 5.632 14.848 0 19.968l-99.84 100.352c-5.632 5.632-14.336 5.632-19.968 0s-5.632-14.336 0-19.968L286.208 256l-90.112-90.112c-5.632-5.632-5.632-14.336 0-19.968z"></path>
        </symbol>
        <symbol id="cross" viewBox="0 0 512 512">
            <path d="M111.104 91.136L256 236.032 400.896 91.136l19.968 19.968L275.968 256l144.896 144.896-19.968 19.968L256 275.968 111.104 420.864l-19.968-19.968L236.032 256 91.136 111.104l19.968-19.968z"></path>
        </symbol>
        <symbol id="circle-alert" viewBox="0 0 512 512">
            <path d="M256 496C123.449 496 16 388.551 16 256S123.449 16 256 16s240 107.449 240 240-107.449 240-240 240zm-23.441-375l7.031 165H271l8.441-165h-46.879zm44.692 218.76c-5.921-5.809-13.069-8.719-21.439-8.719-8.381 0-15.461 2.91-21.24 8.719-5.779 5.831-8.681 12.881-8.681 21.18 0 9.499 3.03 16.89 9.079 22.17 6.049 5.291 13.129 7.931 21.24 7.931 7.969 0 14.951-2.681 20.94-8.029 5.981-5.34 8.97-12.701 8.97-22.069 0-8.299-2.959-15.349-8.869-21.18z"></path>
        </symbol>
        <symbol id="circle-cross" viewBox="0 0 512 512">
            <title></title>
            <path d="M256 29.696C131.072 29.696 29.696 131.072 29.696 256S131.072 482.304 256 482.304 482.304 380.928 482.304 256 380.928 29.696 256 29.696zm90.112 296.448l-19.968 19.968L256 275.968l-70.144 70.144-19.968-19.968L236.032 256l-70.144-70.144 19.968-19.968L256 236.032l70.144-70.144 19.968 19.968L275.968 256l70.144 70.144z"></path>
        </symbol>
        <symbol id="circle-right" viewBox="0 0 512 512">
            <path d="M256 29.696C131.072 29.696 29.696 131.072 29.696 256S131.072 482.304 256 482.304 482.304 380.928 482.304 256 380.928 29.696 256 29.696zm-22.528 304.64l.512.512-19.968 19.968L128 268.8l19.968-19.968 65.536 65.536 145.92-145.92 19.968 19.968-145.92 145.92z"></path>
        </symbol>
        <symbol id="spinner" class="lds-spinner" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(30 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(60 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(90 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(120 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(150 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(180 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(210 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(240 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(270 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(300 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
            </rect>
            <rect x="46.5" y="15.5" rx="12.09" ry="4.03" width="7" height="17" fill="#eee" transform="rotate(330 50 50)">
                <animate attributeName="opacity" values="1;0" dur="1s" begin="0s" repeatCount="indefinite"></animate>
            </rect>
        </symbol>
        <symbol id="right" viewBox="0 0 670 512">
            <path d="M222.793 371.595L55.698 204.5-.001 260.198l222.793 222.793L640.529 65.254 584.831 9.555 222.793 371.593z"></path>
            <path d="M55.699 232.35L27.85 260.199l194.944 194.944L612.682 65.255l-27.849-27.849-362.038 362.038L55.7 232.349z"></path>
        </symbol>
        <symbol id="circle" viewBox="0 0 512 512">
            <path fill="none" stroke="#ccc" stroke-width="24.381" d="M467.81 256c0 116.98-94.83 211.81-211.81 211.81S44.19 372.98 44.19 256 139.02 44.19 256 44.19 467.81 139.02 467.81 256z"></path>
        </symbol>
    </defs>
</svg>
<div id="app" transition-dirction="back">
    <main class="menu slideout-menu slideout-menu-left" style="height:calc(100% - 60px);">
        <h3 class="menu-title"><span style=""><i middle="" class="iconfont icon-shouye"></i>首页</span></h3>

        <div class="menu-group">
            <div class="menu-item" plateform="game" onclick="openPlatform('game');">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-youxi"></i>电子游戏</span></a>
                <svg name="test0" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="game" style="display:none" id="game">
                <?php
                $slot = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('slot');
                ?>
                <?php $__currentLoopData = $slot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item" onclick="window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1','_blank')">
                        <span><?php echo e($v['name']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


            <div class="menu-item" plateform="live" onclick="openPlatform(&#39;live&#39;);">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-video"></i>真人视讯</span></a>
                <svg name="test1" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="live" style="display:none" id="live">

                <?php
                $live = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('live');
                ?>
                <?php $__currentLoopData = $live; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" platformcode="AG" gametype="">
                        <span><?php echo e($v['name']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="menu-item" plateform="lottery" onclick="openPlatform(&#39;lottery&#39;);">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-caipiao"></i>彩票游戏</span></a>
                <svg name="test3" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="lottery" style="display:none" id="lottery">
                <?php
                $lottery = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('lottery');
                ?>
                <?php $__currentLoopData = $lottery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&game_code=<?php echo e($v['game_code']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" platformcode="BB" gametype="Ltlottery">
                        <span><?php echo e($v['name']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="menu-item" plateform="sport" onclick="openPlatform(&#39;sport&#39;);">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-zuqiu"></i>体育竞技</span></a>
                <svg name="test4" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="sport" style="display:none" id="sport">
                <?php
                $sports = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('sports');
                ?>
                <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" platformcode="AG" gametype="">
                        <span><?php echo e($v['name']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="menu-item" plateform="chess" onclick="openPlatform(&#39;chess&#39;);">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-qipaishi"></i>棋牌游戏</span></a>
                <svg name="test5" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="chess" style="display:none" id="chess">
                <?php
                $poker = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('poker');
                ?>
                <?php $__currentLoopData = $poker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item" onclick="window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1');" platformcode="MW" gametype="">
                        <span><?php echo e($v['name']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="menu-item" plateform="fish" onclick="openPlatform(&#39;fish&#39;);">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-xiaoyouxi"></i>捕鱼游戏</span></a>
                <svg name="test2" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="fish" style="display:none" id="fish">
                <?php
                $fish = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('fish');
                ?>
                <?php $__currentLoopData = $fish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="menu-item" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&game_code=<?php echo e($v['game_code']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                        <span><?php echo e($v['name']); ?></span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="menu-item" plateform="youhui" onclick="window.location.href='<?php echo e(route("wap.activity_list")); ?>'">
                <a href="javascript:void(0)"><span><i middle="" class="iconfont icon-choujiang"></i>优惠活动</span></a>
                <svg name="test6" class="md-icon arrow-right md-icon-arrow-right lg" middle="">
                    <use xmlns:="" xlink="http://www.w3.org/1999/xlink" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                </svg>
            </div>
            <div class="menu-sub-group" plateform="youhui" style="display:none" id="youhui"></div>
        </div>
        <div class="menu-group">
            <div class="menu-item" onclick="<?php if($_member): ?> window.location.href = '<?php echo e(route('wap.recharge')); ?>'; <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                <a ids="deposit" href="javascript:void(0)">
                    <span><i middle="" class="iconfont icon-chongzhi"></i>充值</span>
                </a>
            </div>
            <div class="menu-item" onclick="<?php if($_member): ?> window.location.href = '<?php echo e(route('wap.drawing')); ?>'; <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                <a ids="withdraw" href="javascript:void(0)">
                    <span><i middle="" class="iconfont icon-chongzhitikuan"></i>提款</span>
                </a>
            </div>
            <div class="menu-item" onclick="<?php if($_member): ?> window.location.href = '<?php echo e(route('wap.transfer')); ?>'; <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                <a ids="transfer" href="javascript:void(0)"><span><i middle="" class="iconfont icon-zhuanhuan"></i>额度转换</span></a>
            </div>
            
            <div class="menu-item" onclick="<?php if($_member): ?> window.location.href = '<?php echo e(route('wap.game_record')); ?>'; <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                <a ids="history" href="javascript:void(0)">
                    <span><i middle="" class="iconfont icon-jilu"></i> 游戏记录</span></a>
            </div>
            <?php if($_system_config->is_fs==1): ?>
                <div class="menu-item" onclick="<?php if($_member): ?> window.location.href = '<?php echo e(route('wap.user_fs')); ?>'; <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                    <a href="javascript:void(0)">
                        <span><i middle="" class="iconfont icon-chongzhitikuan" ></i> 反水详情</span></a>
                </div>
            <?php endif; ?>
        </div>
        <?php if(!Auth::guard('member')->guest()): ?>
            <div class="menu-group">
                <div class="menu-item">
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span><i middle="" class="iconfont icon-icon4"></i> 退出</span></a>
                </div>
                <form id="logout-form" action="<?php echo e(route('wap.logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        <?php endif; ?>
    </main>
    <?php echo $__env->yieldContent('content'); ?>
    <div class="md-toast center" style="display: none;">
        <div class="md-popup center">
            <div class="md-popup-mask"></div>
            <div class="md-popup-box fade">
                <div class="md-toast-content">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="md-toast has-icon center" style="display: none;">
        <div class="md-popup center">
            <div class="md-popup-mask"></div>
            <div class="md-popup-box fade">
                <div class="md-toast-content">
                    <svg class="md-icon md-icon-circle-cross lg">
                        <use xlink:href="#circle-cross"></use>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div data-v-5ef742d8="" class="redPackerBox">
        <!---->
        <div data-v-5ef742d8="" class="md-popup with-mask center" style="display: none;">
            <div class="md-popup-mask" style="display: none;"></div>
            <div class="md-popup-box fade" style="display: none;">
                <div data-v-5ef742d8="" style="width: 9rem; height: 12rem;">
                    <div data-v-5ef742d8="" class="redPackerContent">
                        <div data-v-5ef742d8="" class="closeBtn">
                            x
                        </div>
                        <div data-v-5ef742d8="" class="aimateBox">

                            <div data-v-5ef742d8="" class="redPackerContentBox">
                                <div data-v-5ef742d8="" class="redPackerContentText">
                                    <h3 data-v-5ef742d8="">送现金红包</h3>
                                    <p data-v-5ef742d8="">离活动开始还差 : 0天0时0分0秒</p>
                                </div> <span data-v-5ef742d8="" class="openButton">打开查看</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabbar">
        <div class="tabbar-item">
            <a href="<?php echo e(route('wap.index')); ?>" ids="shouye">
                <img src="<?php echo e(asset('/wap/theme3/images/icon-shouye.png')); ?>" alt="home">
                <p>首页</p>
            </a>
        </div>
        <div class="tabbar-item">
            <a href="<?php echo e($_system_config->service_link); ?>" ids="kefu">
                <img src="<?php echo e(asset('/wap/theme3/images/icon-kefu.png')); ?>" alt="home">
                <p>客服</p>
            </a>
        </div>
        <div class="tabbar-item">
            <a href="javascript:void(0)" ids="deposit" onclick="<?php if($_member): ?> window.location = '<?php echo e(route('wap.recharge')); ?>' <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                <img src="<?php echo e(asset('/wap/theme3/images/icon-chongzhi.png')); ?>" alt="pay">
                <p>充值</p>
            </a>
        </div>
        <div class="tabbar-item">
            <a href="javascript:void(0)" ids="withdraw" onclick="<?php if($_member): ?> window.location = '<?php echo e(route('wap.drawing')); ?>'; <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>">
                <img src="<?php echo e(asset('/wap/theme3/images/icon-tikuan.png')); ?>" alt="draw">
                <p>提款</p>
            </a>
        </div>
        <div class="tabbar-item">
            <?php if(Auth::guard('member')->guest()): ?>
                <a href="<?php echo e(route('wap.login')); ?>" ids="login">
                    <img src="<?php echo e(asset('/wap/theme3/images/icon-account.png')); ?>" alt="order">
                    <p>登录/注册</p>
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('wap.nav')); ?>" ids="info">
                    <img src="<?php echo e(asset('/wap/theme3/images/icon-account.png')); ?>" alt="order">
                    <p>个人中心</p>
                </a>
            <?php endif; ?>

        </div>
        <!---->
    </div>


</div>
<!--公告弹框-->
<div class="notice-dialog clearboth hide" id="marquee-wrapper">
    <div class="notice-content clearboth hide">
        <div class="notice-header clearboth">
            <button onclick="closeMessageDioag()">×</button>
            <p>最新消息</p>
        </div>
        <ul class="notice-list clearboth" id="newsBags"></ul>
        <div class="notice-footer">
            <button onclick="closeMessageDioag()">关闭</button>
        </div>
    </div>
</div>

<!--公告详情-->
<div id="announcement-content" announcement-dialog-content="" obj="content" more="true" class="ng-scope ng-isolate-scope hide" style="">
    <div class="modal-announcement-content announcement-content-bg">
        <div class="mac-title">
            <img class="fa-reply" src="<?php echo e(asset('/wap/theme3/images/return.png')); ?>" onclick="closeNoticeContent()">
            <img class="fa-times" src="<?php echo e(asset('/wap/theme3/images/closeNotice.png')); ?>" onclick="closeNotices()">
            <span class="ng-binding" id="notice-tittle"></span>
        </div>
        <div class="mac-body announcement-content-color">
            <section class="ng-binding">
                <p id="notice-content">尊敬的会员您好：通知您〜北京时间：</p>
            </section>
        </div>
        <
    </div>
</div>

<input type="hidden" isopensms="False" id="OpenSMS">
<input type="hidden" id="userNameController" value="test001" minmoney="1" mintkmoney="100" maxmoney="10000" downandroid="1" downios="1" isopenred="False" systemrepair="False" systemrepairtent="太阳城娱乐" isphone="False">





<script>
    //gameClassifys();//左侧菜单栏

    // getGamePlate(4, 'game');//加载左侧子菜单
    getMaintain();//网站维护
    // biCommon.getUserMoneys();//获取用户余额
    //getUserMoney();//获取用户余额，每隔六秒请求一次

    $(function () {
        $("i.iconfont.menu-icon.icon-htmal5icon35").click(function () {
            menuToggle();
            //$("html").removeClass("slideout-open");
        });

    })
    function menuToggle() {
        if ($(".slideout-panel-left").hasClass("removeR")) {
            $(".slideout-panel-left").addClass("removeL");
            $(".slideout-panel-left").removeClass("removeR");
        }
        else {
            $("html").addClass("slideout-open");
            $(".slideout-panel-left").addClass("removeR");
            $(".slideout-panel-left").removeClass("removeL");
        }
    }

    setTimeout(showPage, 1000);
    function showPage() {
        $("body").css({
            'visibility': 'visible'
        })

    }
</script>
</body>
</html>