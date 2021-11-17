<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('wap/theme3/css/sweet-alert.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('wap/theme3/css/loadAnimation.css')); ?>" rel="stylesheet">
    <main class="panel slideout-panel slideout-panel-left removeL" style="">
        <!---->
        <div data-v-76fa910e="" class="navbar-container">
            <div data-v-76fa910e="" middle="" class="logo-container">
                <img data-v-76fa910e="" fl="" src="<?php echo e($_system_config->m_site_logo); ?>" alt="logo" class="logo">
            </div>
            <div data-v-76fa910e="" middle="" class="menu-container">
                <div data-v-76fa910e="">
                    <i data-v-76fa910e="" middle="" class="iconfont menu-icon icon-htmal5icon35" style=""></i>
                </div>
            </div>
            <div data-v-76fa910e="" class="title"></div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container">
                <?php if(!Auth::guard('member')->guest()): ?>
                    <div data-v-76fa910e="" class="info dns" style="">
                        <label class="yue">余额：</label>
                        <span data-v-76fa910e="" class="UserAmountController money"><?php echo e($_member->money); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div data-v-5a8252ec="" class="home view">
            <div data-v-5a8252ec="" class="content">
                <div data-v-5a8252ec="">
                    <div data-v-5a8252ec="" class="banner">
                        <div data-v-5a8252ec="" class="md-swiper">
                            <div class="md-swiper-box">
                                
                                <div class="md-swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide banner-item">
                                            <a target="_blank" href="<?php echo e($item->jumpurl); ?>">
                                                <img width="100%" src="<?php echo e($item->path); ?>" alt="">
                                            </a>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>

                            <!---->
                        </div>
                    </div>
                    <div data-v-5a8252ec="" class="my-notice van-notice-bar" style="">
                        <div class="van-notice-bar__left-icon">
                            <img src="<?php echo e(asset('/wap/theme3/images/noice.png')); ?>">
                        </div>
                        <div class="">
                            <div class="swiper-container notice-swiper" style="">
                                <ul class="swiper-wrapper" id="noticeSiper" style=""></ul>
                            </div>
                        </div>
                        <!---->
                    </div>
                    <?php if($_system_config->is_hongbao ==1): ?>
                        <div style="padding: 10px;">
                            <a target="_blank" href="<?php echo e(route('wap.red')); ?>">
                                <img style="border-radius: 8px;width: 100%" src="<?php echo e(asset('wap/images/hongbao/qiang.jpg')); ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div data-v-5a8252ec="" class="scroll">
                    <div data-v-5a8252ec="" clearfix="">
                        <div data-v-2d10ac7a="" data-v-5a8252ec="" class="grid">
                            <div data-v-2d10ac7a="" rows="4" clearfix="" class="nav-top">
                                <div data-v-2d10ac7a="" class="nav-top-box">
                                    <div data-v-2d10ac7a="" class="nav-top-box-w" style="">
                                        <div data-v-2d10ac7a="" class="scroll-item active" onclick="GamesListShow('slot');">
                                            <img data-v-2d10ac7a="" src="<?php echo e(asset('/wap/theme3/images/dz.png')); ?>" alt="">
                                            <p data-v-2d10ac7a="">电子游戏</p>
                                        </div>
                                        <div data-v-2d10ac7a="" class="scroll-item" onclick="GamesListShow('live');">
                                            <img data-v-2d10ac7a="" src="<?php echo e(asset('/wap/theme3/images/vd.png')); ?>" alt="">
                                            <p data-v-2d10ac7a="">真人视讯</p>
                                        </div>
                                        <div data-v-2d10ac7a="" class="scroll-item" onclick="GamesListShow('sport');">
                                            <img data-v-2d10ac7a="" src="<?php echo e(asset('/wap/theme3/images/sp.png')); ?>" alt="">
                                            <p data-v-2d10ac7a="">体育游戏</p>
                                        </div>
                                        
                                        <div data-v-2d10ac7a="" class="scroll-item" onclick="GamesListShow('chess');">
                                            <img data-v-2d10ac7a="" src="<?php echo e(asset('/wap/theme3/images/qp.png')); ?>" alt="">
                                            <p data-v-2d10ac7a="">棋牌游戏</p>
                                        </div>
                                        <div data-v-2d10ac7a="" class="scroll-item" onclick="GamesListShow('competition');">
                                            <img data-v-2d10ac7a="" src="<?php echo e(asset('/wap/theme3/images/fc.png')); ?>" alt="">
                                            <p data-v-2d10ac7a="">彩票游戏</p>
                                        </div>
                                        <div data-v-2d10ac7a="" class="scroll-item" onclick="GamesListShow('fish');">
                                            <img data-v-2d10ac7a="" src="<?php echo e(asset('/wap/theme3/images/fish.png')); ?>" alt="">
                                            <p data-v-2d10ac7a="">捕鱼达人</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div data-v-2d10ac7a="" clearfix="" class="nav-body" style="">
                                <div data-v-2d10ac7a="" class="nav-body-title" id="Gametype">电子游戏</div>

                                <div data-v-2d10ac7a="" style="display:none;" class="GamesList" id="Indexsport">
                                    <?php
                                    $sports = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('sports');
                                    ?>
                                        <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-v-2d10ac7a="" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" platformcode="AG" gametype="" relative="" class="game-box">
                                        <div data-v-2d10ac7a="" class="border-top sub-hot sub-new"></div>
                                        <div data-v-2d10ac7a="" class="game-box-content">
                                            <div data-v-2d10ac7a="">
                                                <?php
                                                    $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                                                    $v['img'] = $img;
                                                ?>
                                                <img data-v-2d10ac7a="" src="<?php echo e(asset($v['img'])); ?>" alt="" class=""></div>
                                            <p data-v-2d10ac7a=""><?php echo e($v['name']); ?></p>
                                        </div>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                                <div data-v-2d10ac7a="" style="display:none;" class="GamesList" id="Indexlive">
                                    <?php
                                    $live = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('live');
                                    ?>
                                        <?php $__currentLoopData = $live; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-v-2d10ac7a="" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" platformcode="AG" gametype="" relative="" class="game-box">
                                        <div data-v-2d10ac7a="" class="border-top sub-hot sub-new"></div>
                                        <div data-v-2d10ac7a="" class="game-box-content">
                                            <div data-v-2d10ac7a="">
                                                <?php
                                                $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                                                $v['img'] = $img;
                                                ?>
                                                <img data-v-2d10ac7a="" src="<?php echo e(asset($img)); ?>" alt="" class=""></div>
                                            <p data-v-2d10ac7a=""><?php echo e($v['name']); ?></p>
                                        </div>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div data-v-2d10ac7a="" style="display:none;" class="GamesList" id="Indexchess">
                                    <?php
                                    $poker = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('poker');
                                    ?>
                                        <?php $__currentLoopData = $poker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-v-2d10ac7a="" onclick=" window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1'); " platformcode="MW" gametype="" relative="" class="game-box">
                                        <div data-v-2d10ac7a="" class="border-top  "></div>
                                        <div data-v-2d10ac7a="" class="game-box-content">
                                            <div data-v-2d10ac7a="">
                                                <?php
                                                $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                                                $v['img'] = $img;
                                                ?>
                                                <img data-v-2d10ac7a="" src="<?php echo e(asset($img)); ?>" alt="" class=""></div>
                                            <p data-v-2d10ac7a=""><?php echo e($v['name']); ?></p>
                                        </div>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div data-v-2d10ac7a="" class="GamesList" id="Indexslot">
                                    <?php
                                    $slot = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('slot');
                                    ?>
                                        <?php $__currentLoopData = $slot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-v-2d10ac7a="" onclick="window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&devices=1','_blank')" platformcode="AG" gametype="" relative="" class="game-box">
                                        <div data-v-2d10ac7a="" class="border-top sub-hot sub-new"></div>
                                        <div data-v-2d10ac7a="" class="game-box-content">
                                            <div data-v-2d10ac7a="">
                                                <?php
                                                $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                                                $v['img'] = $img;
                                                ?>
                                                <img data-v-2d10ac7a="" src="<?php echo e(asset($img)); ?>" alt="" class=""></div>
                                            <p data-v-2d10ac7a=""><?php echo e($v['name']); ?></p>
                                        </div>
                                    </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div data-v-2d10ac7a="" style="display:none;" class="GamesList" id="Indexcompetition">
                                    <?php
                                    $lottery = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('lottery');
                                    ?>
                                        <?php $__currentLoopData = $lottery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-v-2d10ac7a="" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&game_code=<?php echo e($v['game_code']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" platformcode="AVIA" gametype="" relative="" class="game-box"> <div data-v-2d10ac7a="" class="border-top  "></div>
                                        <div data-v-2d10ac7a="" class="game-box-content">
                                            <div data-v-2d10ac7a="">
                                                <?php
                                                $img = '/wap/theme3/images/index/'.$v['plat_type'].'.png';
                                                $v['img'] = $img;
                                                ?>
                                                <img data-v-2d10ac7a="" src="<?php echo e($img); ?>" alt=""></div>
                                            <p data-v-2d10ac7a=""><?php echo e($v['name']); ?></p></div>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                                <div data-v-2d10ac7a="" style="display:none;" class="GamesList" id="Indexfish">
                                    <?php
                                    $fish = (new \App\Http\Controllers\Wap\AjaxController()) -> getGames('fish');
                                    ?>
                                        <?php $__currentLoopData = $fish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div data-v-2d10ac7a="" platformcode="AG" gametype="6" gameid="" gamename="" onclick="<?php if($_member): ?> window.open('<?php echo e(route('ng.playGame')); ?>?plat_type=<?php echo e($v['plat_type']); ?>&game_type=<?php echo e($v['game_type']); ?>&game_code=<?php echo e($v['game_code']); ?>&devices=1'); <?php else: ?> notify('请先登录游戏！',1); <?php endif; ?>" relative="" class="game-box">
                                        <div data-v-2d10ac7a="" class="border-top"></div>
                                        <div data-v-2d10ac7a="" class="game-box-content">
                                            <div data-v-2d10ac7a="">

                                                <img data-v-2d10ac7a="" src="<?php echo e($v['img']); ?>" alt=""></div><p data-v-2d10ac7a=""><?php echo e($v['name']); ?></p>
                                        </div>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>


                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--红包效果-->
        <div class="hongbao-content clearboth">
            <ul class="couten"></ul>
        </div>
        <div class="mo" onclick="clickMo()">
            <div class="sen">
                <h3>获得红包<b id="luckHongBao"></b>元</h3>
            </div>
        </div>
        <!--广告弹框-->
        <div class="advert-opcity" id="indexDialog" onclick="$(&#39;#indexDialog&#39;).hide()" style="display: none;">
            <div class="advert-content">
                <h3 id="dialogTitle">活动107</h3>
                <img src="./1_files/hoti20190902022648382.png" id="dialogImg">
                <h3 onclick="$(&#39;#indexDialog&#39;).hide()">关闭</h3>
            </div>
        </div>
        <input type="hidden" value="0" id="hbCount">
    </main>
    <script>
        //getGamePlate(1, 'slot');
        $(function () {
            swiperLoad();

            biCommon.getNotices(1);
            // biCommon.getUserHongBaoCount();
            //biCommon.getDialogContent();
            //弹窗
            <?php if($_system_config->is_alert_on == 0): ?>
                $('#indexDialog').hide();
                $('#indexDialog').css({ "display": "flex" });
                $("#dialogImg").attr("src", "<?php echo e($_system_config->alert_img); ?>");
                $("#dialogTitle").html('消息');
            <?php endif; ?>
            $("div.nav-top-box-w div[data-v-2d10ac7a]").click(function () {
                $(this).parent().children().removeClass("active");
                $(this).addClass("active");
            })

            $("#app .view").click(function () {
                if ($(".slideout-panel-left").hasClass("removeR")) {
                    $(".slideout-panel-left").addClass("removeL");
                    $(".slideout-panel-left").removeClass("removeR");
                }
            })
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
                                var all = Number($('.money').text()) + Number(data.data);
                                $('.money').text('');
                                $('.money').text(parseInt(all.toFixed(2)));
                            }
                        }
                    })
                })
                <?php endif; ?>
            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>