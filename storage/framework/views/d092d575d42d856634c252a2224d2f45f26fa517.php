<?php ($path = 'web.template.'.$mb_path.'.layouts.main'); ?>

<?php $__env->startSection('content'); ?>
    <div class="top_margin">
        <div class="container">
            <div class="register_con login_con">
                <div class="top">
                    <a href="javascript:;" class="active">登录</a>
                    
                    
                </div>
                <div class="register_left login_left">
                    <div class="bank_tips">温馨提示： 标志*为必填项目 注意：如发现客户拥有多个账户，其帐户将会被冻结并且取消所有胜出的投注，恕不另行通知。</div>
                    <div class="line_form">
                        <form method="POST" action="<?php echo e(route('member.login.post')); ?>">
                            <div class="line">
                                <span class="tit">登录账号</span>
                                
                                    
                                    <input class="username inp" type="text" placeholder="请输入用户名" required name="name">
                                
                                <span class="tips"><span class="themeCr">*</span>必须是7-10个字符，只能使用字母、数字</span>
                            </div>
                            <div class="line">
                                <span class="tit">登录密码</span>
                                <input class="psw inp" type="password" placeholder="请输入密码" required name="password">
                                <span class="tips"><span class="themeCr">*</span>6-12位字符</span>
                            </div>
                            <div class="line">
                                <span class="tit">验证码</span>
                                <input class="psw inp" type="text" placeholder="请输入验证码" required name="captcha">
                                <div class="yzm-img"><a onclick="javascript:re_captcha_re();" ><img src="<?php echo e(URL('kit/captcha/1')); ?>" id="c2c98f0de5a04167a9e427d883690ff11"></a></div>
                                <script>
                                    function re_captcha_re() {
                                        $url = "<?php echo e(URL('kit/captcha')); ?>";
                                        $url = $url + "/" + Math.random();
                                        document.getElementById('c2c98f0de5a04167a9e427d883690ff11').src=$url;
                                    }
                                </script>
                            </div>
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            
                                
                                
                                
                            
                            <div class="line">
                                <span class="tit"></span>
                                <a href="javascript:;" class="ajax-submit-without-confirm-btn account_save">确定</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
                
                    
                
            </div>

            <?php echo $__env->make('web.layouts.hot_act', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($path, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>