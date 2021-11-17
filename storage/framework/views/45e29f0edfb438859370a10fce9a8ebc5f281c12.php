<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : '标题'); ?></title>
    <meta name="keywords" content="" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Cache-control" content="no-cache"/>
    <meta http-equiv="Cache" content="no-cache"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/wap/theme4/css/messenger.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/wap/theme4/css/messenger-theme-flat.css')); ?>">
    <link href="<?php echo e(asset('/wap/theme4/css/style2.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/wap/theme3/css/my.css')); ?>" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo e(asset('/wap/theme4/js/jquery-1.11.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('wap/theme4/js/CUnits.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('wap/theme4/js/messenger.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('wap/theme4/js/wapConfig.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('wap/theme4/js/bicommon.js')); ?>"></script>
    <script src="<?php echo e(asset('wap/theme4/js/mobileJS.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('wap/theme4/js/wapMain.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/wap/js/layer.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/wap/js/wap_ajax-submit-form.js')); ?>"></script>
    <script>
        $(function () {
            $(".home-top-menu").parent("body").addClass("mod-home");
            //biCommon.getUserMoneys();
            //getUserMoney();
        })
    </script>
    <title></title>
</head>

<body>
<div class="header">
    <div class="fr hd-right">
        <?php if(Auth::guard('member')->guest()): ?>
            <a href="<?php echo e(route('wap.register')); ?>">注册</a>
            <a href="<?php echo e(route('wap.login')); ?>">/登陆</a>
        <?php else: ?>
            <img src="<?php echo e(asset('wap/theme4/images/icon_header_user.png')); ?>"/>
            <a href="<?php echo e(route('wap.userinfo')); ?>"><?php echo e($_member -> name); ?></a>
            <img src="<?php echo e(asset('wap/theme4/images/icon_header_wallet.png')); ?>"/>
            <a href="<?php echo e(route('wap.transfer')); ?>" class="UserAmountController money"><?php echo e($_member -> money); ?></a>
        <?php endif; ?>
    </div>
    <h1>
        <a href="<?php echo e(route('wap.index')); ?>">
            <img src="<?php echo e($_system_config->m_site_logo); ?>" height="34"/>
        </a>
    </h1>
</div>
<ul class="home-top-menu clearfix">
    <li>
        <a href="<?php echo e(route('wap.recharge')); ?>" onclick="return checkLogin();">
        <img src="<?php echo e(asset('/wap/theme4/images/lk_icon_home_deposit.png')); ?>" />
        <span>存款</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('wap.activity_list')); ?>">
        <img src="<?php echo e(asset('/wap/theme4/images/lk_icon_home_promotions.png')); ?>" />
        <span>优惠</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('wap.drawing')); ?>" onclick="return checkLogin();">
        <img src="<?php echo e(asset('wap/theme4/images/lk_icon_home_wager.png')); ?>" />
        <span>取款</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('wap.game_record')); ?>" onclick="return checkLogin();">
        <img src="<?php echo e(asset('wap/theme4/images/lk_icon_home_withdraw.png')); ?>" />
        <span>注单</span>
        </a>
    </li>
    <!--<li>
        <a href="transfer" onclick="return landing();">
            <img src="~/Areas/Wap1/Content/images/main/lk_icon_home_withdraw2.png" />
            <span>额度转换</span>
        </a>
    </li>-->
</ul>
<?php echo $__env->yieldContent('content'); ?>
<div class="nav">
    <ul>
        <li>
            <a href="<?php echo e(route('wap.index')); ?>" class="nav-home">
                <img src="<?php echo e(asset('/wap/theme4/images/nav_icon_home_n.png')); ?>" />
                <span>首页</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('wap.game_record')); ?>" onclick="return checkLogin();" class="nav-game"><img src="<?php echo e(asset('/wap/theme4/images/nav_icon_game_n.png')); ?>" /><span>记录</span></a>
        </li>

        <li>
            <a href="<?php echo e($_system_config->service_link); ?>" class="nav-chat"><img src="<?php echo e(asset('wap/theme4/images/nav_icon_aide_n.png')); ?>" /><span>客服</span></a>
        </li>
        <li>
            <a href="<?php echo e(route('wap.transfer')); ?>" onclick="return checkLogin();" class="nav-aide"><img src="<?php echo e(asset('/wap/theme4/images/nav_icon_aide_n.png')); ?>" /><span>转账</span></a>
        </li>
        <li>
            <a href="<?php echo e(route('wap.nav')); ?>" class="nav-my" onclick="return checkLogin();"><img src="<?php echo e(asset('/wap/theme4/images/nav_icon_my_n.png')); ?>" /><span>我的</span><i class="news-tip"></i></a>
        </li>
    </ul>
</div>
<!--公告弹框-->
<div class="notice-dialog clearboth hide" id="marquee-wrapper">
    <div class="notice-content clearboth hide">
        <div class="notice-header clearboth">
            <button onclick="closeMessageDioag()">×</button>
            <p>最新消息</p>
        </div>
        <ul class="notice-list clearboth" id="newsBags"></ul>
        <div class="notice-footer">
            <button onclick="closeMessageDioag()">关闭</button>
        </div>
    </div>
</div>

<!--公告详情-->
<div id="announcement-content" announcement-dialog-content="" obj="content" more="true" class="ng-scope ng-isolate-scope hide" style="">
    <div class="modal-announcement-content announcement-content-bg">
        <div class="mac-title">
            <img class="fa-reply" src="<?php echo e(asset('/wap/theme4/images/return.png')); ?>" onclick="closeNoticeContent()" />
            <img class="fa-times" src="<?php echo e(asset('/wap/theme4/images/closeNotice.png')); ?>" onclick="closeNotices()" />
            <span class="ng-binding" id="notice-tittle"></span>
        </div>
        <div class="mac-body announcement-content-color">
            <section class="ng-binding">
                <p id="notice-content">尊敬的会员您好：通知您〜北京时间：</p>
            </section>
        </div>

    </div>
</div>

</body>

</html>
<script>
    //getMaintain();
function checkLogin() {
    <?php if($_member): ?>
        return true;
    <?php else: ?>
        notify("请先登录游戏！");
        return false;
    <?php endif; ?>
}
$(function () {
    <?php if(!Auth::guard('member')->guest()): ?>
        <?php if($_member->is_trans_on == 1): ?>
        $(function () {
            $.ajax({
                type: 'post',
                url: "<?php echo e(route('member.api.wallet_balance')); ?>",
                dataType: 'json',
                success: function (data) {
                    //console.log(data);
                    if (data.statusCode == '01') {
                        var all = Number($('.money').text()) + Number(data.data);
                        $('.money').text('');
                        $('.money').text(parseInt(all.toFixed(2)));
                    }
                }
            })
        })
        <?php endif; ?>
    <?php endif; ?>
})
</script>