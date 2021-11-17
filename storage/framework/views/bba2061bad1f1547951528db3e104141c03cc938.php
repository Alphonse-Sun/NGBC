<header class="main-header">

    <!-- Logo -->
    <a href="javascript:;" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>管理</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo e($_system_config->site_name); ?>管理系统</b></span>
    </a>


    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning up">0</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">你有<strong class="up">0</strong>条网站更新消息</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a href="<?php echo e(route('web_update.show')); ?>">查看</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo e(asset('/node_modules/admin-lte/dist/img/user2-160x160.jpg')); ?>" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo e($_user->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="<?php echo e(asset('/node_modules/admin-lte/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo e($_user->name); ?> - <?php if($_user->is_super_admin == 1): ?>超级管理员<?php else: ?><?php echo e($_user->role->name); ?><?php endif; ?>
                                <small><?php echo e($_user->created_at); ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        
                            
                                
                                    
                                
                                
                                    
                                
                                
                                    
                                
                            
                            
                        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e(route('user.personal')); ?>" class="btn btn-default btn-flat">个人资料</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(route('admin.login.out')); ?>" class="btn btn-default btn-flat">安全退出</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
                    
                
            </ul>
        </div>
    </nav>
</header>

<audio id="sk" src="<?php echo e(asset('/backstage/audio/hk_notice.mp3')); ?>"></audio>
<audio id="tk" src="<?php echo e(asset('/backstage/audio/tk_notice.mp3')); ?>"></audio>
<audio id="tips" src="<?php echo e(asset('/backstage/audio/on_line_tips.mp3')); ?>"></audio>
<audio id="fs" src="<?php echo e(asset('/backstage/audio/fs.mp3')); ?>"></audio>
<audio id="dl" src="<?php echo e(asset('/backstage/audio/dl.mp3')); ?>"></audio>
<audio id="yh" src="<?php echo e(asset('/backstage/audio/yhhd_notice.mp3')); ?>"></audio>
<script>
    var hk_url = "<?php echo e(route('admin.hk_notice')); ?>";
    var tk_url = "<?php echo e(route('admin.tk_notice')); ?>";
    var tips_url = "<?php echo e(route('admin.tips_on')); ?>";
    var fs_url = "<?php echo e(route('admin.fs_notice')); ?>";
    var dl_url = "<?php echo e(route('admin.dl_notice')); ?>";
    var yh_url="<?php echo e(route('admin.yh_notice')); ?>";
    $(function(){
$.ajax({
    url :'<?php echo e(route('admin.web_update')); ?>',
    type : 'get',
    success:function (data) {
        $('.up').text(data);
    }
});
var fs_timer = setInterval(function(){
    $.ajax({
        url:fs_url,
        data:'',
        dataType:'json',
        type:'get',
        success:function(data){
            var myDate = new Date();
            var h = myDate.getHours();
            var m =myDate.getMinutes();
            var h_m = h+':'+m;
            if(data.fs_time == h_m){
                document.getElementById('fs').play();
            }
        }
    })
},20000);

var dl_timer = setInterval(function(){
    $.ajax({
        url:dl_url,
        data:'',
        dataType:'json',
        type:'get',
        success:function(data){
            if(data.status == 1){
                $('#daili').find('.tip_msg').text('new');
                var rs = $('#daili').find('.treeview-menu').find('li');
                $(rs[0]).find('.tip_msg_sk').text('new');
                document.getElementById('dl').play();

                /*var rs = $('#money').find('.treeview-menu');
                console.log(rs);*/
            }
        }
    })
},10000);
var sk_timer=setInterval(function(){
    $.ajax({
        url:hk_url,
        data:'',
        dataType:'json',
        type:'get',
        success:function(data){
            if(data.status == 1){
                $('#money').find('.tip_msg').text('new');
                var rs = $('#money').find('.treeview-menu').find('li');
                $(rs[0]).find('.tip_msg_sk').text('new');
                document.getElementById('sk').play();

                /*var rs = $('#money').find('.treeview-menu');
                console.log(rs);*/
            }
        }
    })
},10000);
var tk_timer=setInterval(function(){
    $.ajax({
        url:tk_url,
        data:'',
        dataType:'json',
        type:'get',
        success:function(data){
            if(data.status == 1){
                $('#money').find('.tip_msg').text('new');
                var rs = $('#money').find('.treeview-menu').find('li');
                $(rs[1]).find('.tip_msg_sk').text('new');
                document.getElementById('tk').play();
            }
        }
    })
},10000);
var yh_timer=setInterval(function(){
    $.ajax({
        url:yh_url,
        data:'',
        dataType:'json',
        type:'get',
        success:function(data){
            if(data.status == 1){
                $('#activity').find('.tip_msg').text('new');
                var rs = $('#activity').find('.treeview-menu').find('li');
                $(rs[2]).find('.tip_msg_sk').text('new');
                document.getElementById('yh').play();
            }
        }
    })
},10000);
var tips=setInterval(function(){
    $.ajax({
        url:tips_url,
        data:'',
        dataType:'json',
        type:'get',
        success:function(data){
            if(data.status == 1){
                document.getElementById('tips').play();
            }
        }
    })
},10000);
});
</script>