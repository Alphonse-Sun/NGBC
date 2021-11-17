<?php $__env->startSection('content'); ?>
    <main class="panel slideout-panel slideout-panel-left">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="border-bottom-color: rgb(0, 0, 0); background-color: rgb(0, 0, 0);">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="self.location=document.referrer;">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">修改密码</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>
        <div data-v-41e78f4a="" class="changePw view">
            <div data-v-41e78f4a="" class="scroll">
                <div data-v-41e78f4a="" class="md-tabs" style="">
                    
                    <div class="md-tab-content-wrapper" style="">
                        <div key="0" class="md-tab-content">
                            <div data-v-41e78f4a="" class="changePw-content">
                                <nav class="md-tab-bar">
                                    <div class="md-tab-bar-inner">
                                        <div class="md-tab-titles-wrapper">
                                            <a class="md-tab-title active">修改登录密码</a>
                                            
                                            <div class="ink-bar animate" style="width: 50%; left: 0%;background: none"></div>
                                        </div>
                                    </div>
                                </nav>
                                <form action="<?php echo e(route('wap.reset_login_password')); ?>" method="post" name="form1">
                                <div data-v-41e78f4a="" style="background-color: rgb(251, 249, 249);">
                                    <div data-v-41e78f4a="" style="padding: 5px;">
                                        <div data-v-41e78f4a="" class="md-field">
                                            <!---->
                                            <div class="md-field-content">
                                                <div data-v-41e78f4a="" class="md-input-item is-clear is-ios left normal">
                                                    <div class="md-input-item-container">
                                                        <!---->
                                                        <div class="md-input-item-title fixed">原登录密码</div>
                                                        <div class="md-input-item-control">
                                                            <input name="old_password" id="oldPwd" placeholder="请输入旧密码" maxlength="12" autocomplete="off" type="password" class="md-input-item-input">
                                                            <!---->
                                                            <div class="md-input-item-clear" style="display: none;">
                                                                <svg class="md-icon md-icon-circle-cross md">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#circle-cross"></use>
                                                                </svg>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                                <div data-v-41e78f4a="" class="md-input-item is-clear is-ios left normal">
                                                    <div class="md-input-item-container">
                                                        <!---->
                                                        <div class="md-input-item-title fixed">新登录密码</div>
                                                        <div class="md-input-item-control">
                                                            <input name="password" id="newPwd" placeholder="请输入新密码" maxlength="12" autocomplete="off" type="password" class="md-input-item-input">
                                                            <!---->
                                                            <div class="md-input-item-clear" style="display: none;">
                                                                <svg class="md-icon md-icon-circle-cross md">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#circle-cross"></use>
                                                                </svg>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                                <div data-v-41e78f4a="" class="md-input-item is-clear is-ios left normal">
                                                    <div class="md-input-item-container">
                                                        <!---->
                                                        <div class="md-input-item-title fixed">确认新密码</div>
                                                        <div class="md-input-item-control">
                                                            <input name="password_confirmation" id="confirmPwd" placeholder="请再次输入新密码" maxlength="12" autocomplete="off" type="password" class="md-input-item-input">
                                                            <!---->
                                                            <div class="md-input-item-clear" style="display: none;">
                                                                <svg class="md-icon md-icon-circle-cross md">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#circle-cross"></use>
                                                                </svg>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div data-v-41e78f4a="" style="padding: 1.33333rem 0.8rem;">
                                    <a data-v-41e78f4a="" type="button" class="md-button primary large ajax-submit-btn" style="" id="change_btn" >
                                        <div class="md-button-inner"><!----> 确定修改</div>
                                    </a>
                                </div>
                                </form>
                                <nav class="md-tab-bar">
                                    <div class="md-tab-bar-inner">
                                        <div class="md-tab-titles-wrapper">
                                            <a class="md-tab-title active">修改提款密码</a>

                                            <div class="ink-bar animate" style="width: 50%; left: 0%;background: none"></div>
                                        </div>
                                    </div>
                                </nav>
                                <form action="<?php echo e(route('wap.reset_qk_password')); ?>" method="post" name="form2" >
                                <div data-v-41e78f4a="" style="background-color: rgb(251, 249, 249);">
                                    <div data-v-41e78f4a="" style="padding: 5px;">
                                        <div data-v-41e78f4a="" class="md-field">
                                            <!---->
                                            <div class="md-field-content">
                                                <div data-v-41e78f4a="" class="md-input-item is-clear is-ios left normal">
                                                    <div class="md-input-item-container">
                                                        <!---->
                                                        <div class="md-input-item-title fixed">原提款密码</div>
                                                        <div class="md-input-item-control">
                                                            <input name="old_password" id="oldPwd" placeholder="请输入旧密码" maxlength="12" autocomplete="off" type="password" class="md-input-item-input">
                                                            <!---->
                                                            <div class="md-input-item-clear" style="display: none;">
                                                                <svg class="md-icon md-icon-circle-cross md">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#circle-cross"></use>
                                                                </svg>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                                <div data-v-41e78f4a="" class="md-input-item is-clear is-ios left normal">
                                                    <div class="md-input-item-container">
                                                        <!---->
                                                        <div class="md-input-item-title fixed">新提款密码</div>
                                                        <div class="md-input-item-control">
                                                            <input name="password" id="newPwd" placeholder="请输入新密码" maxlength="12" autocomplete="off" type="password" class="md-input-item-input">
                                                            <!---->
                                                            <div class="md-input-item-clear" style="display: none;">
                                                                <svg class="md-icon md-icon-circle-cross md">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#circle-cross"></use>
                                                                </svg>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                                <div data-v-41e78f4a="" class="md-input-item is-clear is-ios left normal">
                                                    <div class="md-input-item-container">
                                                        <!---->
                                                        <div class="md-input-item-title fixed">确认新密码</div>
                                                        <div class="md-input-item-control">
                                                            <input name="password_confirmation" id="confirmPwd" placeholder="请再次输入新密码" maxlength="12" autocomplete="off" type="password" class="md-input-item-input">
                                                            <!---->
                                                            <div class="md-input-item-clear" style="display: none;">
                                                                <svg class="md-icon md-icon-circle-cross md">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#circle-cross"></use>
                                                                </svg>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div data-v-41e78f4a="" style="padding: 1.33333rem 0.8rem;">
                                    <a data-v-41e78f4a="" type="button" class="md-button primary large" style="" id="change_btn" >
                                        <div class="md-button-inner ajax-submit-btn"><!----> 确定修改</div>
                                    </a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---->
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>