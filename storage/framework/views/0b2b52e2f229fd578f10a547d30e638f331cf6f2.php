<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($_system_config->site_title) ? $_system_config->site_title : 'motoo'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="keywords" content="<?php echo e($_system_config->keyword); ?>">
    <script src="<?php echo e(asset('/web/js/jquery-2.1.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/web/layer/layer.js')); ?>"></script>
    <style>
        body {
            background: #000;
        }
        form{
            padding-bottom: 0px;
            margin-bottom: 0px !important:
        }
        .layui-layer-page{
            border-radius:6px;
        }
        .layui-layer-title{
            text-align:center;
            background:#4186F7;
            color:white;
            border-radius:6px 6px 0 0;
        }
        .layui-layer-content{
            background-color:#EDEEF0;
            padding:10px;
        }
        .layui-layer-input{
            display: block;
            width: 90%;
            height: 36px;
            margin: 0 auto;
            line-height: 30px;
            padding-left:10px;
            padding-right:10px;
            border: 0px;
            color: #333;
            border-radius:6px;
        }
        .layui-layer-btn{
            background-color:#EDEEF0;
            border-radius: 0 0 6px 6px;
            text-align:center;
        }
        .layui-layer-btn0{
            background:white !important;
            border:1px solid #ccc !important;
            border-radius: 6px !important;
            color:#717171 !important;
            height:40px !important;
            line-height:40px !important;
        }
        .layui-layer-btn1{
            background:#3E83F8 !important;
            border-radius: 6px !important;
            color:white !important;
            height:40px !important;
            line-height:40px !important;
        }
        .tips{
            color:#d1c1d1;
            padding-left:10px;
            font-size:12px;
        }
        .sel_s{
            color:#4d4f4e;
            padding-left:10px;
            font-size:14px;
        }
        .sel_s>span,.sel_s>label{
            color:white;
            border-radius: 6px;
            padding-left:4px;
            padding-right:4px;
            text-align:center;
            cursor: pointer;
        }
        .sel_s>span:nth-child(1){
            background:#3e8df6;
        }
        .sel_s>span:nth-child(2){
            background:#d9bf36;
        }
        .sel_s>span:nth-child(3){
            background:#cd3225;
        }
        .sel_s>span:nth-child(4){
            background:#9a33d8;
        }
        .sel_s>span:nth-child(5){
            background:#51c435;
        }
    </style>
</head>
<body>
<p style="display: none" id="uri"><?php echo e($str); ?></p>
<form action="<?php echo e(route('transfer_all')); ?>" id="root" method="post" style="display: none;">
    <?php echo csrf_field(); ?>

    <input id="coin" type="number" name="amount" class="layui-layer-input" value="" placeholder="???????????????????????????">
    <input type="hidden" name="api_code" value="<?php echo e($api_code); ?>">
    <input type="hidden" name="str" value="<?php echo e($str); ?>">
    <p class="tips">*?????????????????????????????????????????????????????????????????????</p>
    <div class="sel_s">
        ???????????????
        <span>10</span>
        <span>100</span>
        <span>1000</span>
        <span>5000</span>
        <span>10000</span>
        <label style="background:#3c97c2;">??????</label>
    </div>
</form>
<script>
    (function ($) {
        $(function () {

            layer.open({
                type: 1,
                title: '???????????????'+'<?php echo e($api_code); ?>'+'?????????????????????',
                content:$("#root"),
                closeBtn: 0,
                shadeClose: false,
                area:['380px','240px'],
                btn:['?????????????????????','????????????????????????'],
                yes: function (index, layer) {
                    //??????????????????????????????
                    $('#root').submit();
                },
                btn2: function (index, layer) {
                    //??????????????????????????????
                    var uri = $('#uri').html().replace(/&amp;/g,'\&');
                    location.href=uri;
                    //return false ?????????????????????????????????????????????
                }
            });

            $(".sel_s>label").click(function(){
                $("#coin").val("<?php echo e($_member->money); ?>");
                //alert("123");
            });
            $(".sel_s>span").click(function(){
                $("#coin").val($(this).text());
            });

            // layer.open({
            //     type: 1,
            //     title: '????????????(???????????????????????????????????????)',
            //     closeBtn: 0,
            //     shadeClose: false,
            //     skin: 'yourclass',
            //     area: ['400px', '150px'],
            //     btn: ['????????????????????????','??????????????????????????????'],
            //     content: '<form action="<?php echo e(route('transfer_all')); ?>" id="transfer_form" method="post"><div style="margin:15px;text-align:center">' +
            //         '<?php echo csrf_field(); ?>'+
            //     '<input type="hidden" name="api_code" value="<?php echo e($api_code); ?>">'+
            //     '<input type="hidden" name="str" value="<?php echo e($str); ?>">'+
            //     '<p>???????????????<?php echo e($api_code); ?>???&nbsp; &nbsp;<input type="number" name="amount" style="width:100px;" value="<?php echo e($_member->money); ?>" >&nbsp; &nbsp;??????</p>' +
            //     '</div></form>',
            //     yes: function (index, layer) {
            //         //??????????????????????????????
            //         $('#transfer_form').submit();
            //     },
            //     btn2: function (index, layer) {
            //         //??????????????????????????????
            //         var uri = $('#uri').html().replace(/&amp;/g,'\&');
            //         location.href=uri;
            //         //return false ?????????????????????????????????????????????
            //     },
            //     
            //             
            //             
            //             
            //     cancel: function () {
            //         //?????????????????????

            //         //return false ?????????????????????????????????????????????
            //     }
            // });
        })
    })(jQuery);
</script>

</body>
</html>