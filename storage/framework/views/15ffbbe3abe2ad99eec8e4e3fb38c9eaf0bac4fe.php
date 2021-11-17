<!-- 底部 -->
<link rel="stylesheet" href="<?php echo e(asset('/web/mb16/css/yk_modal.css')); ?>">
<style>
    .modal{width:100%;height:100%;position:fixed;left:0;top:0;z-index:10000;display:none;overflow:auto}.modal .modal-content{width:100%;height:100%;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto}


    .modal-login .modal-content{width:400px;height:400px;background:#fff;border-radius:6px;padding:5px 30px 0 30px}.modal-login .close{position:absolute;top:24px;right:30px;width:20px;height:20px;background-position:-140px -140px;cursor:pointer;-moz-opacity:.25;opacity:.25;filter:alpha(opacity=25);-webkit-transition:all .2s;-ms-transition:all .2s;-moz-transition:all .2s;-o-transition:all .2s;transition:all .2s;z-index:2}.modal-login .modal-login_form h2{overflow:visible;position:relative;clear:both;width:100%;height:60px;line-height:59px;text-align:left;font-size:20px;color:#333;margin-bottom:16px;border-bottom:1px solid #e8e8e8}.modal-login .modal-login_line{position:relative;width:100%;overflow:visible;clear:both;height:68px}.modal-login .modal-login_line input{height:44px;line-height:44px;width:99%;padding:0;background:none;border:1px solid #ccc;box-shadow:inset 0 0 3px rgba(0,0,0,0.1);border-radius:3px;font-size:13px;text-indent:6px}.modal-login .modal-login_line input.username{background:url(/web/images/user-ico.png) no-repeat right center}.modal-login .modal-login_line input.psw{background:url(/web/images/lock-ico.png) no-repeat right center}.modal-login .modal-login_line.code input{width:200px}.modal-login .modal-login_line.code img{display:inline;height:44px;vertical-align:-90%}.modal-login .modal-login_submit{width:100%;float:left;height:50px;line-height:50px;border-radius:3px;overflow:hidden;background:none;border:none;background:#ff3a2b;font-size:16px;color:#fff;cursor:pointer;text-align:center;box-shadow:0 1px 1px rgba(0,0,0,0.05);-webkit-transition:all .2s;-ms-transition:all .2s;-moz-transition:all .2s;-o-transition:all .2s;transition:all .2s}.modal-login .modal-login_submit:hover{box-shadow:0 4px 8px rgba(0,0,0,0.25)}.modal-login .modal-login_link a{color:#ff3a2b}.modal-daili .modal-content{height:410px !important}.modal-daili .modal-content textarea{width:100%;height:100px;border:1px solid #ccc;border-radius:4px;padding:8px}.modal-mobileBet .modal-content{width:400px;height:400px;background:#fff;border-radius:6px;padding:5px 30px 0 30px}

</style>
<script>
    var m = "<?php echo e($_member); ?>";
    var u = "<?php echo e(route('web.login')); ?>";
    (function($){
        $(function(){
            $('.daili_apply').on('click',function(){
                if (!m)
                {
                    location.href=u
                }else{
                    $('#dailiModal').modal();
                }
            })
        })
    })(jQuery)
</script>
<div id="aboutUs" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">确定</a>
        </div>
    </div>
</div>
<div id="cunkuanHelp" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">确定</a>
        </div>
    </div>
</div>
<div id="qukuanHelp" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">确定</a>
        </div>
    </div>
</div>
<div id="normalQues" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">确定</a>
        </div>
    </div>
</div>
<div id="dailiModal" class="modal modal-login modal-daili">
    <div class="modal-content">
        <form method="POST" action="<?php echo e(route('member.post_agent_apply')); ?>">
            <a href="" class="close bg-icon"></a>
            <div class="modal-login_form" method="POST" action="<?php echo e(route('member.post_agent_apply')); ?>">
                <h2>代理申请</h2>
                <div class="modal-login_line">
                    <input type="text" placeholder="QQ" required name="qq">
                </div>
                <div class="modal-login_line">
                    <input type="text" placeholder="联系电话" required name="phone">
                </div>
                <div class="modal-login_line" style="height: auto;margin-bottom: 15px">
                    <textarea name="about" placeholder="填写申请"></textarea>
                </div>
                <div class="modal-login_line">
                    <button class="modal-login_submit ajax-submit-btn" type="button">确定</button>
                </div>
            </div>
        </form>
    </div>
</div>
<footer id="footer">
        <div class="wrapper">
            <ul id="footer-info">
                <li class="tel"><span>联系电话<span ng-cloak><?php echo e($_system_config->phone1); ?></span></span></li>
                <li class="email"><span>联系邮箱<span ng-cloak><?php echo e($_system_config->agent_qq); ?></span></span></li>
                <li class="qq" ng-click=""onclick="javascript:window.open('http://wpa.qq.com/msgrd?V=3&uin=<?php echo e($_system_config->qq); ?>&Site=QQ客服&Menu=yes','','width=1024,height=768')"><span>客服QQ<span ng-bind="<?php echo e($_system_config->qq); ?>"></span></span></li>
                <li class="chat" ng-click=""onclick="javascript:window.open('<?php echo e($_system_config->service_link); ?>','','width=1024,height=768')"><span>在线客服<span>7X24小时</span></span></li>
            </ul>
            <div id="footer-logo"></div>
            <ul id="footer-nav">
                <li><a href="javascript:;" class="daili_apply">合作代理</a></li>
                <li><a href="javascript:;" class="cunkuanHelp_modal">存款帮助</a></li>
                <li><a href="javascript:;" class="qukuanHelp_modal">取款帮助</a></li>
                <li><a href="javascript:;" class="aboutUs_modal">关于我们</a></li>
                <li><a href="javascript:;" class="normalQues_modal">常见问题</a></li>
            </ul>
            <p id="footer-suggest">
                Copyright &#169; <?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?> Reserved
            </p>
        </div>

    </footer>
<script>
    (function($){
        $(function(){
            $('.aboutUs_modal').on('click',function(){
                $('#aboutUs').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'关于我们',
                    content:'<?php echo $about1->content; ?>'
                });
            });
            $('.cunkuanHelp_modal').on('click',function(){
                $('#cunkuanHelp').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'存款帮助',
                    content:'<?php echo $about2->content; ?>'
                });
            });
            $('.qukuanHelp_modal').on('click',function(){
                $('#qukuanHelp').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'取款帮助',
                    content:'<?php echo $about3->content; ?>'
                });
            });
            $('.normalQues_modal').on('click',function(){
                $('#normalQues').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'常见问题',
                    content:'<?php echo $about4->content; ?>'
                });
            });
        });
    })(jQuery);
</script>
