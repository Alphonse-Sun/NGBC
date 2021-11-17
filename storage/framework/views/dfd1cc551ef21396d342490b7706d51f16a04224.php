<?php $__env->startSection('content'); ?>
    <main class="panel slideout-panel slideout-panel-left">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="self.location=document.referrer;">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">我的账户</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>
        <div data-v-5e36b0dc="" class="account view">
            <div data-v-5e36b0dc="" class="scroll">

                
                <div data-v-037c77f0="" data-v-5e36b0dc="" class="account-content">
                    <div data-v-037c77f0="" class="account-item">
                        <span data-v-037c77f0="" fl="" ml="">账号</span>
                        <span data-v-037c77f0="" fr="" mr="" id="loginUsername"><?php echo e($_member->name); ?></span></div>
                    <div data-v-037c77f0="" class="account-item">
                        <span data-v-037c77f0="" fl="" ml="">手机号码</span>
                        <span data-v-037c77f0="" fr="" mr=""><?php if($_member->phone): ?>
                                <?php echo e($_member->phone); ?>

                            <?php else: ?>
                                <a href="<?php echo e(route('wap.set_phone')); ?>" class="c_blue">去设置</a>
                            <?php endif; ?></span>
                    </div>
                    <div data-v-037c77f0="" class="account-item">
                        <span data-v-037c77f0="" fl="" ml="">注册时间</span>
                        <span data-v-037c77f0="" fr="" mr="" ><?php echo e($_member->created_at); ?></span>
                    </div>
                    <div data-v-037c77f0="" class="account-item">
                        <span data-v-037c77f0="" fl="" ml="">最后登陆时间</span>
                        <span data-v-037c77f0="" fr="" mr="" ><?php echo e($_member->last_login_at); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!---->
    </main>
    <script>
        $(function () {
            //personDataFunc();
            //getGamePlate(2);
        })

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>