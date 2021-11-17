<?php $__env->startSection('content'); ?>
    <main class="panel slideout-panel slideout-panel-left" style="height: calc(100% - 60px);">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="self.location=document.referrer;">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">会员中心</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container">
                <div data-v-76fa910e="" class="info">
                    <span data-v-76fa910e="" class="log-out" onclick="event.preventDefault();document.getElementById('logout-form-2').submit();">退出</span>
                    <form id="logout-form-2" action="<?php echo e(route('wap.logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </div>
            </div>
        </div>
        <div data-v-c7cccd90="" class="memberCenter view">
            <div data-v-c7cccd90="" class="scoll">
                <div data-v-c7cccd90="" class="avatar">
                    <div data-v-c7cccd90="" relative="" class="avatar-icon"><img data-v-c7cccd90="" src="<?php echo e(asset('/wap/theme3/images/main/avatar.png')); ?>" alt="avatar" middle-center=""></div>
                    <div data-v-c7cccd90="" relative="" class="member-info">
                        <div data-v-c7cccd90="" middle="">
                            <p data-v-c7cccd90="" class="member-name">
                                会员账号: <span data-v-c7cccd90=""><?php echo e($_member->name); ?></span>
                                
                            </p>
                            <p data-v-c7cccd90="" class="member-balance">
                                钱包余额:
                                <span data-v-c7cccd90="" style="margin-right: 10px;" class="UserAmountController money"><?php echo e($_member->money); ?></span>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div data-v-c7cccd90="" class="member-btn">
                    <div data-v-c7cccd90="" class="pay-btn" onclick="window.location.href='<?php echo e(route('wap.recharge')); ?>'" style="">充值</div>
                    <div data-v-c7cccd90="" class="draw-btn" onclick="window.location.href='<?php echo e(route('wap.drawing')); ?>'">提款</div>
                </div>
                <div data-v-e52c7616="" data-v-c7cccd90="" class="member-list">
                    <div data-v-e52c7616="" class="member-item">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-profile.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text" onclick="window.location.href='<?php echo e(route('wap.userinfo')); ?>'">
                            我的账户
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.reset_password')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-modifypwd.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            修改密码
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>

                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.transfer')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-transfer.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            额度转换
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.recharge_record')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-withdrawReport.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            充值记录
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.drawing_record')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-withdrawReport.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            提款记录
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.transfer_record')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-withdrawReport.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            额度转换记录
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <?php if($_system_config->is_fs==1): ?>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.user_fs')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-backWater.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            反水详情
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left">
                            <i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.game_record')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-record.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            游戏记录
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e(route('wap.agent')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-record.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            代理中心
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" id="mailbox" class="member-item" onclick="window.location.href='<?php echo e(route('wap.msg')); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-trans.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            我的消息

                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <div data-v-e52c7616="" id="OldwithNew" style="display:none" class="member-item" onclick="window.location.href='/Index/OldwithNew'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----> <img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-bankaccount.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            老带新列表
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left">
                            <i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i>
                        </div>
                    </div>
                    <div data-v-e52c7616="" class="member-item" onclick="window.location.href='<?php echo e($_system_config->service_link); ?>'">
                        <div data-v-e52c7616="" relative="" class="icon">
                            <!----><img data-v-e52c7616="" src="<?php echo e(asset('/wap/theme3/images/main/menu-24.png')); ?>" alt="" middle-center="">
                        </div>
                        <div data-v-e52c7616="" class="text">
                            联系客服
                        </div>
                        <div data-v-e52c7616="" relative="" class="icon-arrow-left"><i data-v-e52c7616="" middle-center="" class="icon iconfont icon-arrow-right-copy"></i></div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
        <!---->
    </main>
    <script>
        $(function () {
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
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>