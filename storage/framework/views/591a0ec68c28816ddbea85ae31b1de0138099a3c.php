<!DOCTYPE html>
<html  id="ng-app" ng-app="portalApp" meidon-time="2018"  moment-lang="zh-CN"  ng-init="'<?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?>'">
<head>
    <title><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico" />

    <link href="<?php echo e(asset('web/mb22/css/common.css')); ?>" rel="stylesheet">
    <link href="/web/mb23/css/jquery-ui.min.css" rel="stylesheet"/>

    <link href="/web/mb23/css/jquery-ui.theme.min.css" rel="stylesheet"/>

    <link href="/web/mb23/css/normalize.min.css" rel="stylesheet"/>

    <link href="/web/mb23/css/font-awesome5.min.css" rel="stylesheet"/>

    <link href="/web/mb23/bundles/custom.css?v=5Wa8nqZwlBGzu1Pp_QLNPIWNPw7nHF_nimfxfdWB2fE1" rel="stylesheet"/>

    <link href="/web/mb23/bundles/custom-modal.css?v=OoJMx9HYbSSX_kAkQy-IAdtYhsAf8mb55menPwEb4kQ1" rel="stylesheet"/>

    <link href="/web/mb31/bundles/site.css" rel="stylesheet"/>
 <?php if($web_route == 'web.index'): ?>  <link href="/web/mb31/bundles/home.css?v=Z0I1MnqVfQ2Gxw7Nrs0FZ-E7HyV84bcUupfFjChrVWE1" rel="stylesheet"/> <?php else: ?>  <?php endif; ?>

    <link href="/web/mb23/Content/Views/Shared/zh-CN.css?version=20150116" rel="stylesheet" />



    <link href="/web/mb23/Content/Views/Home/zh-CN.css?version=201404141731" rel="stylesheet" />
    <link href="/web/mb23/Content/each-site/animate.css" rel="stylesheet" />

    
    <script src="/web/mb23/js/jquery.min.js"></script>

    <script src="/web/mb23/js/jquery.marquee.min.js"></script>

    <script src="/web/mb23/js/jquery-ui.min.js"></script>

    <script src="/web/mb23/bundles/common.js?v=HNgwom0Dzrx_ZWnmf34LgV_TQUJqznH90A6VSugf2eM1"></script>

    <script src="/web/mb23/js/angular.min.js"></script>

    <script src="/web/mb23/js/moment-with-locales.min.js"></script>

    <script src="/web/mb23/js/moment-timezone-with-data.min.js"></script>

    <script src="/web/mb23/js/jquery.signalR-2.2.0.min.js"></script>




    <link rel="stylesheet" href="<?php echo e(asset('/web/mb23/css/qqq5595.css')); ?>">


    <!--[if lte IE 9]>
        <script src="/web/mb23/js/placeholders.min.js"></script>
        <script src="/web/mb23/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body class="layout" ng-controller="LayoutCtrl">

<?php echo $__env->make('web.template.mb31.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('web.template.mb31.layouts.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="notice_layer">
    <h3>???????????? <span class="close"></span></h3>
    <div class="notice_con">
        <?php $__currentLoopData = $_system_notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="module">
                <h4><?php echo e($v->title); ?></h4>
                <p>???<?php echo e($v->content); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php echo $__env->make('web.template.mb31.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="/web/mb23/js/angular-animate.min.js"></script>

    <script src="/web/mb23/js/ui-bootstrap-custom-tpls-0.10.0.min.js"></script>

    <script src="/web/mb23/Scripts/_site.js"></script>
    <script src="/web/mb23/bundles/environment.js?v=Sre_8bGZaXimeK2YCmr6RnY-uXP9_R8xIoUe5rN9spE1"></script>

    <script src="/web/mb23/Scripts/_config.js?version=20180117"></script>
    <script src="/web/mb23/Scripts/i18n/labels_zh-CN.js"></script>
    <script src="/web/mb23/js/angular-services.js?v=xyS-EheotkV8v-wdjby6bg-IWjEt_QrwXtAziZJAbBg1"></script>

    <script src="/web/mb23/js/angular-controllers.js?v=GjlNbpztu87jUS-Hv4d-WGODPxxT3eeYi2dzmiOKFXc1"></script>

    <script src="/web/mb23/js/angular-directives.js?v=agA_5MsASKuCuZnnudjzArmMB0Hg9A0aIc_PlABHIFY1"></script>

    <script src="/web/mb23/js/angular-filters.js?v=MeeQJovOHWNSkHRSyl6Jkj407IAV6G2P3C98wCBb83I1"></script>

    <script src="/web/mb23/bundles/portal-shared.js?v=1Qym7_7BFPaXQLvJzrHwUYSZT9__RyZpz431AkFTpQQ1"></script>


    
    <script src="/web/mb23/js/common.min.js"></script>
    <script src="/web/mb23/js/jquery.cycle2.js"></script>

<script src="/web/mb23/js/jquery.cycle2.carousel.js"></script>
    <script src="/web/mb23/Scripts/each-site/wow.js"></script>



<script src="<?php echo e(asset('/web/js/jquery.flexslider.js')); ?>"></script>
<script src="<?php echo e(asset('/web/js/index1.js')); ?>"></script>
<script src="<?php echo e(asset('/web/js/yk_modal.js')); ?>"></script>
<script src="<?php echo e(asset('/web/layer/layer.js')); ?>"></script>
<script src="<?php echo e(asset('/web/js/ajax-submit-form.js')); ?>"></script>
<script src="<?php echo e(asset('/web/js/jquery.lazyload.min.js')); ?>"></script>
<script src="<?php echo e(asset('/web/js/jquery.fly.min.js')); ?>"></script>
<script src="<?php echo e(asset('/web/js/common.js')); ?>"></script>
<?php echo $__env->yieldContent('after.js'); ?>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
	function AddFavorite(sURL, sTitle) {
		try {
			window.external.addFavorite(sURL, sTitle);
		} catch (e) {
			try {
				window.sidebar.addPanel(sTitle, sURL, "");
			} catch (e) {
				alert("??????????????????????????????Ctrl+D????????????");
			}
		}
	}	
	function Alert(){

	layer.alert('?????????????????????????????????????????????!',{icon:7});
};

</script>
<script type="text/javascript">
    /// ????????????
    app.controller('WinnerListCtrl', ['$scope',
        function ($scope) {
            var list = [{ "account": "jh****321", "money": "????????????", "game": 10300 },
                { "account": "ss****234", "money": "????????????", "game": 123400 },
                { "account": "ss****234", "money": "????????????2", "game": 80550 },
                { "account": "ba****y88", "money": "????????????", "game": 50015 },
                { "account": "ss****234", "money": "????????????", "game": 118200 },
                { "account": "ss****234", "money": "????????????", "game": 102480 },
                { "account": "ba****y88", "money": "????????????", "game": 12040 },
                { "account": "ff****888", "money": "????????????", "game": 26170 },
                { "account": "gg****bak", "money": "????????????", "game": 26870 },
                { "account": "zh****ff8", "money": "????????????", "game": 27500 },
                { "account": "cc****888", "money": "??????777", "game": 39950 },
                { "account": "as****123", "money": "????????????2", "game": 141000 },
                { "account": "tt****kpm", "money": "????????????", "game": 162800 },
                { "account": "ru****856", "money": "???????????????", "game": 155600 },
                { "account": "hg****919", "money": "?????????", "game": 13518 },
                { "account": "re****hun", "money": "??????", "game": 12625 },
                { "account": "yq****717", "money": "????????????", "game": 10458 },
                { "account": "Wb****5jx", "money": "????????????2", "game": 16400 },
                { "account": "ss****234", "money": "????????????", "game": 22274 },
                { "account": "ba****lai", "money": "??????", "game": 15915 },
                { "account": "yq****717", "money": "????????????", "game": 11025 },
                { "account": "zn****208", "money": "????????????", "game": 11429.28 },
                { "account": "z2****110", "money": "???????????????", "game": 36560 },
                { "account": "yx****312", "money": "????????????", "game": 48000 },
                { "account": "yu****ai1", "money": "?????????", "game": 33303 },
                { "account": "yo****ng9", "money": "????????????", "game": 33411.75 },
                { "account": "xi****520", "money": "???????????????", "game": 93090 },
                { "account": "xi****hui", "money": "??????", "game": 75720 },
                { "account": "xi****110", "money": "????????????", "game": 104010 },
                { "account": "ws****082", "money": "????????????", "game": 86400 },
                { "account": "wh****620", "money": "????????????", "game": 92050 },
                { "account": "tl****001", "money": "????????????2", "game": 75412 },
                { "account": "TJ****123", "money": "???????????????", "game": 192300 },
                { "account": "ta****g88", "money": "???????????????", "game": 78810 },
                { "account": "sz****285", "money": "????????????", "game": 59850 },
                { "account": "S2****010", "money": "????????????", "game": 219000 },
                { "account": "df****686", "money": "??????", "game": 28452 },
                { "account": "xi****hui", "money": "??????", "game": 75720 },
                { "account": "yo****ng9", "money": "????????????", "game": 33411.75 },
                { "account": "ww****147", "money": "????????????", "game": 29355 },
                { "account": "a7****801", "money": "????????????", "game": 33384 },
                { "account": "r1****872", "money": "?????????", "game": 32205 },
                { "account": "fu****hao", "money": "????????????", "game": 31750 },
                { "account": "fu****hao", "money": "????????????", "game": 31750 },
                { "account": "ke****666", "money": "???????????????", "game": 121455 },
                { "account": "xi****520", "money": "???????????????", "game": 60690 },
                { "account": "S2****010", "money": "?????????????????????", "game": 32008 },
                { "account": "hj****105", "money": "????????????", "game": 65175 },
                { "account": "S2****010", "money": "????????????", "game": 29868.75 },
                { "account": "a***889", "money": "????????????", "game": 562482.3 }];

            $scope.winnerList = [];

            for (var i = 0; i < 20; i++) {
                var index = Math.floor(Math.random() * (list.length - 1));
                $scope.winnerList.push(list[index]);
                list.splice(index, 1);
            }
        }]);

    $().ready(function () {
        $(".winner-list")
            .slide({
                mainCell: ".main-cell ul",
                autoPlay: true,
                effect: "topMarquee",
                vis: 6,
                interTime: 40
            });
    })
    function showLocale(objD)
    {
        var str,colorhead,colorfoot;
        var yy = objD.getYear();
        if(yy<1900) yy = yy+1900;
        var MM = objD.getMonth()+1;
        if(MM<10) MM = '0' + MM;
        var dd = objD.getDate();
        if(dd<10) dd = '0' + dd;
        var hh = objD.getHours();
        if(hh<10) hh = '0' + hh;
        var mm = objD.getMinutes();
        if(mm<10) mm = '0' + mm;
        var ss = objD.getSeconds();
        if(ss<10) ss = '0' + ss;
        var ww = objD.getDay();
        if  ( ww==0 )  colorhead="<font color=\"#fff\">";
        if  ( ww > 0 && ww < 6 )  colorhead="<font color=\"#fff\">";
        if  ( ww==6 )  colorhead="<font color=\"#fff\">";
        if  (ww==0)  ww="?????????";
        if  (ww==1)  ww="?????????";
        if  (ww==2)  ww="?????????";
        if  (ww==3)  ww="?????????";
        if  (ww==4)  ww="?????????";
        if  (ww==5)  ww="?????????";
        if  (ww==6)  ww="?????????";
        colorfoot="</font>"
        str = colorhead + yy + "-" + MM + "-" + dd + " " + hh + ":" + mm + ":" + ss + "  " + ww + colorfoot;
        return(str);
    }
    function tick()
    {
        var today;
        today = new Date();
        document.getElementById("localtime").innerHTML = showLocale(today);
        window.setTimeout("tick()", 1000);
    }
    tick();
</script>
<script>
    function getKey() {
        $url = "<?php echo e(URL('kit/captcha')); ?>";
        $url = $url + "/" + Math.random();
        document.getElementById('captcha').src = $url;
    }
</script>
<script>


    (function ($) {
        $(function () {

            //??????
            $('#mar0,.mar0').on('click', function () {
                var notice_index = layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,
                    area: '640px',
                    skin: 'layui-layer-nobg', //???????????????
                    shadeClose: true,
                    content: $('.notice_layer')
                });

                $('.notice_layer').on('click', '.close', function () {
                    layer.close(notice_index)
                })
            })

        })
    })(jQuery)
</script>
</body>
</html>