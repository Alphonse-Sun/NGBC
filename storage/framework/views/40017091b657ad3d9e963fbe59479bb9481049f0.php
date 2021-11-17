<?php ($path = 'web.template.'.$mb_path.'.layouts.main'); ?>

<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('/web/css/pocker.css')); ?>">
    <style>

        .mb2{
            margin-top: 193px;
        }
        .mb4{
            margin-top: 97px;
        }
        .mb6{
            margin-top: 165px;
        }
        .mb7{
            margin-top: 72px;
        }
        .mb12{
            margin-top: 160px;
        }

        #mb1{
            top:84px;
        }
        #mb2,#mb3,#mb4,#mb5,#mb6,#mb7,#mb9,#mb10,#mb11,#mb13,#mb14,#mb15,#mb16,#mb17,#mb18,#mb19,#mb20,#mb21,#mb22,#mb24,#mb25,#mb26,#mb27,#mb29,#mb30,#mb31{
            top: 49px;
        }
        #mb8{
            top: 91px;
        }
        #mb23{
            top: 102px;
        }
        #mb32{
            top: 36px;
        }

        <?php if($mb_path == 'mb8' || $mb_path == 'mb9' || $mb_path == 'mb18' || $mb_path=='mb5' || $mb_path=='mb6' || $mb_path=='mb21' || $mb_path=='mb22'): ?>
            #lobby ul.game-list>li{
            padding-top: 0px;
        }
        <?php endif; ?>

    </style>
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
    <div id="content" class="<?php echo e($mb_path); ?>">
        <div class="wrapper">

            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                <ul class="game-list en-gamelist" ng-init="show='kg'">
                    <?php if(in_array('AP', $_api_list)): ?>
                        <li plat-type="ap" game-box="city761" onclick="getGameList('ap')"></li>
                    <?php endif; ?>
                    <?php if(in_array('VG', $_api_list)): ?>
                        <li plat-type="vg" game-box="vg" onclick="getGameList('vg')"></li>
                    <?php endif; ?>
                    <?php if(in_array('SGP', $_api_list)): ?>
                        <li plat-type="sgp" game-box="sgp" onclick="getGameList('sgp')"  ></li>
                    <?php endif; ?>
                    <?php if(in_array('LEG', $_api_list)): ?>
                        <li plat-type="leg" game-box="leg" onclick="getGameList('leg')"></li>
                    <?php endif; ?>
                    <?php if(in_array('MT', $_api_list)): ?>
                        <li plat-type="mt" game-box="mt" onclick="getGameList('mt')"></li>
                    <?php endif; ?>
                    <?php if(in_array('KY', $_api_list)): ?>
                        <li plat-type="ky" game-box="ky" onclick="getGameList('ky')"  ></li>
                    <?php endif; ?>
                    <?php if(in_array('FG', $_api_list)): ?>
                        <li plat-type="fg" game-box="fg" onclick="getGameList('fg')"></li>
                    <?php endif; ?>
                </ul>
                <iframe id="gameFrame" src="" ng-show="show=='kg'" class="ng-animate" style=""></iframe>
            </section>
        </div>
    </div>
<script>
    $(function () {
        $('.en-gamelist li').click(function () {
            $(this).addClass('active');
            $(this).siblings('li').removeClass('active');
        })
        var plat_type_obj = $("#lobby").find("ul li").first();
        $(plat_type_obj).css('margin-left','110px');
        $(plat_type_obj).addClass('active');
        var plat_type = $(plat_type_obj).attr('plat-type');
        var url = "<?php echo e(route('ng.playGame')); ?>?plat_type=" + plat_type + "&game_type=7";
        $("#gameFrame").attr("src", url);
    });
    function getGameList(plat_type) {
        var url = "<?php echo e(route('ng.playGame')); ?>?plat_type=" + plat_type + "&game_type=7";
        $("#gameFrame").attr("src", url);//
    }
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make($path, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>