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
                <h3 data-v-76fa910e="" class="title">登录</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>
        <div data-v-f645c2cc="" class="login view" style="">
            <div data-v-f645c2cc="" relative="" class="logo">
                <img data-v-f645c2cc="" src="<?php echo e($_system_config->m_site_logo); ?>" middle-center="" alt=""></div>
            <form id="loginForm"  action="<?php echo e(route('wap.login.post')); ?>" method="post">
                <div data-v-f645c2cc="" class="login-content">
                    <div data-v-f645c2cc="" relative="" class="login-item" id="longUserName">
                        <label data-v-f645c2cc="" for="account">
                        <span data-v-f645c2cc="" middle="" class="login-info">
                            <img data-v-f645c2cc="" src="<?php echo e(asset('/wap/theme3/images/main/menu-profile.png')); ?>" alt="" middle="">
                            <span data-v-f645c2cc="" class="paddingleft">账号</span>
                        </span>
                            <input data-v-f645c2cc="" type="text" name="name" middle="" id="loginUsername" style=" " maxlength="16">
                        </label>
                    </div>
                    <div data-v-f645c2cc="" relative="" class="login-item" style="margin-top: 10px;" id="longUserPwd">
                        <label data-v-f645c2cc="" for="password">
                        <span data-v-f645c2cc="" relative="" class="login-info">
                            <img data-v-f645c2cc="" src="<?php echo e(asset('/wap/theme3/images/main/menu-modifypwd.png')); ?>" alt="" middle="">
                            <span data-v-f645c2cc="" class="paddingleft">密码</span>
                        </span>
                            <input data-v-f645c2cc="" type="password" name="password" middle="" maxlength="16" id="loginUserpwd" style=" ">
                        </label>
                    </div>
                    
                </div>
                <div data-v-f645c2cc="" class="buttons">
                    <button data-v-f645c2cc=""  type="button" class="md-button button-item primary large" style=" ">
                        <div class="md-button-inner ajax-submit-btn">
                            <!---->
                            登录
                        </div>
                    </button>
                    <button data-v-f645c2cc="" type="button" class="md-button button-item primary large" style=" " onclick="window.location.href='<?php echo e(route('wap.register')); ?>'">
                    <div class="md-button-inner">
                        <!----> 立即注册
                    </div>
                    </button>
                </div>
            </form>
        </div>
        <!---->
    </main>

    <script>
        //loginFun();
        //whetherOpenSMS();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>