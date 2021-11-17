<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('/wap/theme4/css/swiper.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/wap/theme4/css/sweet-alert.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/wap/theme4/css/loadAnimation.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('/wap/theme4/css/style2.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('/wap/theme4/js/swiper.min.js')); ?>"></script>
<script>
    var liveQuick = "", slotQuick = "", lotteryQuick = "", sportQuick = "", fishQuick = "", chessQuick = "", competitionQuick = "";
</script>
<div class="notice bb1 clearfix">
    <span><img src="<?php echo e(asset('/wap/theme4/images/lk_text_home_notice.png')); ?>" width="40" height="36"></span>
    <div class="marquee-wrap swiper-container notice-swiper swiper-container-vertical swiper-container-ios" style="height:30px">
        <ul class="swiper-wrapper" id="noticeSiper"></ul>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>
<?php if($_system_config->is_hongbao ==1): ?>
    <div style="padding: 10px;">
        <a target="_blank" href="<?php echo e(route('wap.red')); ?>">
            <img style="border-radius: 8px;width: 100%" src="<?php echo e(asset('wap/images/hongbao/qiang.jpg')); ?>">
        </a>
    </div>
<?php endif; ?>
<ul class="home-platform mt5 bb1 clearfix" id="gamelist" style="">
    <?php
    $slot = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('slot');
    ?>
        <?php $__currentLoopData = $slot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <a href="javascript:void (0);" onclick="window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1','_blank')">
            <?php
            $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
            $v['img'] = $img;
            ?>
            <img src="<?php echo e($img); ?>">
            <span><?php echo e($v['name']); ?></span>
        </a>
    </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $sports = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('sports');
        ?>
        <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="javascript:void (0);" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！'); <?php endif; ?>">
                    <?php
                    $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                    $v['img'] = $img;
                    ?>
                    <img src="<?php echo e($img); ?>">
                    <span><?php echo e($v['name']); ?></span>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $lottery = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('lottery');
        ?>
        <?php $__currentLoopData = $lottery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="javascript:void (0);" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！'); <?php endif; ?>">
                    <?php
                    $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                    $v['img'] = $img;
                    ?>
                    <img src="<?php echo e($img); ?>">
                    <span><?php echo e($v['name']); ?></span>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $live = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('live');
        ?>
        <?php $__currentLoopData = $live; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="javascript:void (0);" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！'); <?php endif; ?>">
                    <?php
                    $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                    $v['img'] = $img;
                    ?>
                    <img src="<?php echo e($img); ?>">
                    <span><?php echo e($v['name']); ?></span>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
        $poker = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('poker');
        ?>
        <?php $__currentLoopData = $poker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="javascript:void (0);" onclick="window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1','_blank')">
                    <?php
                    $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                    $v['img'] = $img;
                    ?>
                    <img src="<?php echo e($img); ?>">
                    <span><?php echo e($v['name']); ?></span>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('wap.index_py')); ?>">
                <img src="<?php echo e(asset('/wap/theme4/images/fish.png')); ?>">
                <span>欢乐捕鱼</span>
            </a>
        </li>
    <li class="platform-more hei">
        <span>敬请期待</span>
    </li>
    
</ul>
<!--快捷导航-->

<ul class="home-quicklist clearboth" id="quickList" style="display: none;"></ul>
<div class="home-quickdown">
    <a id="androidUrL" href="http://tnet.ng-demo.vip/">安卓下载</a>
    <a id="iosUrL" href="http://tnet.ng-demo.vip/">IOS下载</a>
</div>
<!--红包效果-->

<!--加载动画-->
<div class="loading-content loading-content-index" style="display:none">
    <svg viewBox="0 0 120 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="circle" class="g-circles g-circles--v1">
            <circle id="12" transform="translate(35, 16.698730) rotate(-30) translate(-35, -16.698730) " cx="35" cy="16.6987298" r="10"></circle>
            <circle id="11" transform="translate(16.698730, 35) rotate(-60) translate(-16.698730, -35) " cx="16.6987298" cy="35" r="10"></circle>
            <circle id="10" transform="translate(10, 60) rotate(-90) translate(-10, -60) " cx="10" cy="60" r="10"></circle>
            <circle id="9" transform="translate(16.698730, 85) rotate(-120) translate(-16.698730, -85) " cx="16.6987298" cy="85" r="10"></circle>
            <circle id="8" transform="translate(35, 103.301270) rotate(-150) translate(-35, -103.301270) " cx="35" cy="103.30127" r="10"></circle>
            <circle id="7" cx="60" cy="110" r="10"></circle>
            <text x="50%" y="55%">请稍后...</text>
            <circle id="6" transform="translate(85, 103.301270) rotate(-30) translate(-85, -103.301270) " cx="85" cy="103.30127" r="10"></circle>
            <circle id="5" transform="translate(103.301270, 85) rotate(-60) translate(-103.301270, -85) " cx="103.30127" cy="85" r="10"></circle>
            <circle id="4" transform="translate(110, 60) rotate(-90) translate(-110, -60) " cx="110" cy="60" r="10"></circle>
            <circle id="3" transform="translate(103.301270, 35) rotate(-120) translate(-103.301270, -35) " cx="103.30127" cy="35" r="10"></circle>
            <circle id="2" transform="translate(85, 16.698730) rotate(-150) translate(-85, -16.698730) " cx="85" cy="16.6987298" r="10"></circle>
            <circle id="1" cx="60" cy="10" r="10"></circle>
        </g>
    </svg>
</div>
<!--广告弹框-->
<div class="advert-opcity" id="indexDialog" onclick="$('#indexDialog').hide()" style="display: none;">
    <div class="advert-content">
        <h3 id="dialogTitle">活动107</h3>
        <img src="" id="dialogImg">
        <h3 onclick="$('#indexDialog').hide()">关闭</h3>
    </div>
</div>
<input type="hidden" value="0" id="hbCount">
<script>
    var mySwiper = "";
    $(function () {
        swiperLoad();
        //弹窗
        <?php if($_system_config->is_alert_on == 0): ?>
        $('#indexDialog').hide();
        $('#indexDialog').css({ "display": "flex" });
        $("#dialogImg").attr("src", "<?php echo e($_system_config->alert_img); ?>");
        $("#dialogTitle").html('消息');
        <?php endif; ?>
        //getGamePlate(1);
        biCommon.getNotices(1);
        //biCommon.getUserHongBaoCount();
        //biCommon.getDialogContent();
    })
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('wap.template.theme4.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>