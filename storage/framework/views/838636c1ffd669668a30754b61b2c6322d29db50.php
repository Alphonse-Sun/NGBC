<?php $__env->startSection('content'); ?>

    <main class="panel slideout-panel slideout-panel-left" style="height:calc(100% - 60px);">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="self.location=document.referrer;">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">欢迎注册使用</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>

        <div data-v-1ea183fe="" class="register view">
            <form id="form1"  action="<?php echo e(route('wap.register.post')); ?>" method="post" name="form1">
            <div data-v-1ea183fe="" style="padding: 20px 10px;">
                <input type="hidden" name="i_code" value="<?php echo e($i_code); ?>">
                <?php if($_system_config->is_regtj_1 == 1): ?>
                <div data-v-1ea183fe="" class="margin-bottom" id="Introducer">
                    <div data-v-1ea183fe="" class="register-hint"><?php if($_system_config->is_regtj_2 == 1): ?>*<?php endif; ?>介绍人</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="account">
                            <span data-v-1ea183fe="" middle="" class="egister-info">介绍人</span>
                            <input data-v-1ea183fe="" name="t_name" type="text" maxlength="8" placeholder="介绍人" middle="" id="regIntroducer">
                        </label>
                    </div>
                </div>
                <?php endif; ?>
                <div data-v-1ea183fe="" class="margin-bottom">
                    <div data-v-1ea183fe="" class="register-hint">*账号为6-14位的英文，数字或组合</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="account">
                            <span data-v-1ea183fe="" middle="" class="egister-info">账号</span>
                            <input data-v-1ea183fe="" name="name" type="text" maxlength="9" placeholder="请输入账号" middle="" id="regUsername">
                        </label>
                    </div>
                </div>
                <div data-v-1ea183fe="" class="margin-bottom">
                    <div data-v-1ea183fe="" class="register-hint">*密码为6-12位的大小写字母、数字组合</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="password">
                            <span data-v-1ea183fe="" middle="" class="egister-info">密码</span>
                            <input data-v-1ea183fe="" name="password" type="password" maxlength="12" placeholder="请输入密码" middle="" id="regUserpwd">
                        </label>
                    </div>
                </div>
                <div data-v-1ea183fe="" class="margin-bottom">
                    <div data-v-1ea183fe="" class="register-hint">*请输入确定密码</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="confimrPassword">
                            <span data-v-1ea183fe="" middle="" class="egister-info">确认密码</span>
                            <input data-v-1ea183fe="" name="password_confirmation" type="password" maxlength="20" placeholder="请输入密码" middle="" id="regUserSurepwd">
                        </label>
                    </div>
                </div>
                    <?php if($_system_config->is_real_name_1 == 1): ?>
                <div data-v-1ea183fe="" class="margin-bottom">
                    <div data-v-1ea183fe="" class="register-hint"><?php if($_system_config->is_real_name_2 == 1): ?>*<?php endif; ?>与银行帐号姓名相同，否则不能出款</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="username">
                            <span data-v-1ea183fe="" middle="" class="egister-info">姓名</span>
                            <input data-v-1ea183fe="" name="real_name" type="text" maxlength="12" placeholder="请输入姓名" middle="" id="regUserTrueName">
                        </label>
                    </div>
                </div>
                    <?php endif; ?>
                <!---->
                <!---->
                    <?php if($_system_config->is_phone_1 == 1): ?>
                <div data-v-1ea183fe="" class="margin-bottom" id="UserPhone" >
                    <div data-v-1ea183fe="" class="register-hint"><?php if($_system_config->is_phone_2 == 1): ?>*<?php endif; ?>请输入手机号码</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="phone">
                            <span data-v-1ea183fe="" middle="" class="egister-info">手机号码</span>
                            <input data-v-1ea183fe="" type="phone" name="phone" placeholder="请输入手机号码" middle="" id="regUserPhone">
                        </label>
                    </div>
                </div>
                    <?php endif; ?>
                    <?php if($_system_config->is_qq_1 == 1): ?>
                <div data-v-1ea183fe="" class="margin-bottom"  id="Mailbox">
                    <div data-v-1ea183fe="" class="register-hint"><?php if($_system_config->is_qq_2 == 1): ?>*<?php endif; ?>联系QQ</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="account">
                            <span data-v-1ea183fe="" middle="" class="egister-info">QQ</span>
                            <input data-v-1ea183fe="" type="text" name="qq" maxlength="20" placeholder="请输入QQ" middle="" id="regMailbox">
                        </label>
                    </div>
                </div>
                    <?php endif; ?>
                    <?php if($_system_config->is_email_1 == 1): ?>
                <div data-v-1ea183fe="" class="margin-bottom"  id="Mailbox">
                    <div data-v-1ea183fe="" class="register-hint"><?php if($_system_config->is_email_2 == 1): ?>*<?php endif; ?>邮箱邮箱为您常用的邮箱</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="account">
                            <span data-v-1ea183fe="" middle="" class="egister-info">邮箱</span>
                            <input data-v-1ea183fe="" name="email" type="text" maxlength="20" placeholder="请输入邮箱地址" middle="" id="regMailbox">
                        </label>
                    </div>
                </div>
                    <?php endif; ?>
                    <?php if($_system_config->is_weixin_1 == 1): ?>
                <div data-v-1ea183fe="" class="margin-bottom"  id="Mailbox">
                    <div data-v-1ea183fe="" class="register-hint"><?php if($_system_config->is_weixin_2 == 1): ?>*<?php endif; ?>微信号/div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="account">
                            <span data-v-1ea183fe="" middle="" class="egister-info">微信号</span>
                            <input data-v-1ea183fe="" name="weixin" type="text" maxlength="20" placeholder="请输入微信号" middle="" id="regMailbox">
                        </label>
                    </div>
                </div>
                    <?php endif; ?>
                <div data-v-1ea183fe="" class="margin-bottom">
                    <div data-v-1ea183fe="" class="register-hint">*提款密码(6位纯数字)</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="" for="code">
                            <span data-v-1ea183fe="" middle="" class="egister-info">提款密码</span>
                            <input data-v-1ea183fe="" name="qk_pwd" type="password" maxlength="6" placeholder="请输入提款密码" middle="" id="regUserWithdrawalsPwd">
                        </label>
                    </div>
                </div>

                <div data-v-1ea183fe="" class="margin-bottom">
                    <div data-v-1ea183fe="" class="register-hint">*请输入验证码</div>
                    <div data-v-1ea183fe="" class="register-item">
                        <label data-v-1ea183fe="">
                            <span data-v-1ea183fe="" middle="" class="egister-info">验证码</span>
                            <input data-v-1ea183fe="" type="text" middle="" id="regUserCaptcha" name="captcha"  maxlength="4">
                            <img data-v-1ea183fe=""  onclick="javascript:re_captcha();" src="<?php echo e(URL('kit/captcha/1')); ?>" middle="" alt="" class="yzm—img" id="c2c98f0de5a04167a9e427d883690ff6">
                            <script>
                                function re_captcha() {
                                    $url = "<?php echo e(URL('kit/captcha')); ?>";
                                    $url = $url + "/" + Math.random();
                                    document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
                                }
                            </script>
                        </label>
                    </div>
                </div>
            </div>
            
            <div data-v-1ea183fe="" style="padding: 1.33333rem 10px;">
                <button id='reg' data-v-1ea183fe="" type="button" class="md-button primary large" style="background-color: rgb(0, 0, 0);"  >
                    <div class="md-button-inner ajax-submit-btn"><!----> 立即注册</div></button>
            </div>
            </form>
            <div data-v-1ea183fe="" class="md-landscape">
                <div class="md-popup with-mask center" style="display: none;">
                    <div class="md-popup-mask" style="display: none;"></div>
                    <div class="md-popup-box fade" style="display: none;">
                        <div class="content scroll">
                            <h3 data-v-1ea183fe="">开户协议</h3>
                            <div data-v-1ea183fe="" class="agree-text">
                                <p style="white-space: normal;">1、本站点只接受合法博彩年龄的客户申请。同时我们保留要求客户提供其年龄证明的权利。</p>
                                <p style="white-space: normal;">2、在本站点进行注册时所提供的全部信息必须在各个方面都是准确和完整的。</p>
                                <p style="white-space: normal;">3、在开户后进行一次有效存款，恭喜您成为本站点有效会员！</p>
                                <p style="white-space: normal;">4、存款免手续费，开户最低入款金额10人民币，最高单次入款金额500000人民币。</p>
                                <p style="white-space: normal;">5、成为本站点有效会员后，客户有责任以在线客服、电子邮件、在本站点网站上联系我们，随时向本公司提供最新的个人资料。</p>
                                <p style="white-space: normal;">6、本站点是提供互联网投注服务的机构。请会员在注册前参考当地政府的法律，在博彩不被允许的地区，如有会员在本站点注册、下注，为会员个人行为，本站点不负责、承担任何相关责任。</p>
                                <p style="white-space: normal;">7、无论是个人或是团体，如有任何威胁、滥用本站点优惠的行为，本站点保留权利取消、收回由优惠产生的红利，并保留权利追讨最高50%手续费。</p>
                                <p style="white-space: normal;">8、所有本站点的优惠是特别为玩家而设，在玩家注册信息有争议时，为确保双方利益、杜绝身份盗用行为，本站点保留权利要求客户向我们提供充足有效的文件， 并以各种方式辨别客户是否符合资格享有我们的任何优惠。</p>
                                <p style="white-space: normal;">9、客户一经注册开户，将被视为接受所有颁布在本站点网站上的规则与条例。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="close" style="display: none;">
                    <svg class="md-icon md-icon-cross lg" onclick="closeModel()">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cross"></use>
                    </svg>
                </div>
            </div>

        </div>
        <input type="hidden" isopensms="@systemseting["isOpenSms"]" id="OpenSMS" isPhone="@systemseting["isPhone"]"/>
    </main>

    <script>
        $(function () {
            /*whetherOpenSMS();
            if ("@systemseting["isAgentid"]"== "True") { $("#Introducer").show(); }
            if ("@systemseting["isMailbox"]" == "True") { $("#Mailbox").show(); }
            if ("@systemseting["isPhone"]" == "True") { $("#UserPhone").show(); }
            $("#regpin").click();*/
        })
    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>