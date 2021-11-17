<style>
    .hb{
        position: fixed;
        left: 0px;
        bottom: 0px;
        z-index: 99999;
    }
    a.floathb {
        display: block;
        width: 210px;
        height: 240px;
        background-image: url(/web/images/floathongbao.png);
        background-repeat: no-repeat;
        background-position: center top;
    }
    a.floathb:hover {
        background-position: center bottom;
    }
    .close-hb{
        position:absolute;
        right:0;
        top:0;
        font-size:12px;
        color:#fff;
        cursor:pointer;
    }
    #fixd-left {
        left: 0;
        top: 0;
    }
    .fixscroll {
        z-index: 9999;
        height: 394px;
        width: 130px;
        position: absolute;
    }
    .fixscroll a {
        display: block;
        position: relative;
    }
    #fixd-left .ad-close {
        display: inline-block;
        width: 100%;
        height: 21px;
        text-align: center;
    }
    #fixd-right {
        right: 20px;
        top: 0;
    }
    #fixd-left .ad-close img {
        display: inline-block;
    }
    .fixscroll_qq {
        position: absolute;
        width: 100%;
        text-align: center;
        color: #fff;
        font-size: 16px;
        left: 0;
        top: 30px;
        margin-left:10px;
    }
    .fix_qrcode{
        position: absolute;
        left: 17px;
        bottom: 8px;
        width: 100px;
        height: 100px;
    }
</style>
<?php if($_system_config->left_ad==1): ?>
    <div id="fixd-left" class="fixscroll">
        <a href="javascript:;">
            <img src="<?php echo e(asset('/web/images/left_01.png')); ?>">
            <img class="fix_qrcode" src="<?php echo e($_system_config->wap_qrcode); ?>" alt="">
        </a>
        <a href="javascript:;">
            <img src="<?php echo e(asset('/web/images/left_02.png')); ?>">
            <img class="fix_qrcode" src="<?php echo e($_system_config->pic_link); ?>" alt="">
        </a>
        <a class="ad-close" href="javascript:;"><img src="<?php echo e(asset('/web/images/close.png')); ?>"></a>
    </div>
<?php endif; ?>
<?php if($_system_config->right_ad==1): ?>
    <div id="fixd-right" class="fixscroll">
        <a href="javascript:;" onclick="javascript:window.open('<?php echo e($_system_config->service_link); ?>','','width=1024,height=768')">
            <img src="<?php echo e(asset('/web/images/right_01.png')); ?>">
        </a>
        <a href="javascript:;">
            <img src="<?php echo e(asset('/web/images/right_02.png')); ?>">
            <span class="fixscroll_qq"><?php echo e($_system_config->qq); ?></span>
        </a>
        <a href="javascript:;">
            <img src="<?php echo e(asset('/web/images/right_03.png')); ?>">
            <span class="fixscroll_qq" style="top: 23px;"><?php echo e($_system_config->agent_qq); ?></span>
        </a>
        <a href="javascript:;">
            <img src="<?php echo e(asset('/web/images/right_04.png')); ?>">
            <img class="fix_qrcode" style="left: 30px;bottom: 30px;width: 75px;height: 75px;" src="<?php echo e($_system_config->wx_pic); ?>">
        </a>
        <a class="ad-close" href="javascript:;">
            <img src="<?php echo e(asset('/web/images/close.png')); ?>">
        </a>
    </div>
<?php endif; ?>
<?php if($_system_config->is_hongbao ==1): ?>
    <div class="hb"><a href="<?php echo e(route('web.red')); ?>" class="floathb" target="_blank"></a><span class="close-hb">关闭红包</span></div>
<?php endif; ?>
<script>
    $(function(){
        $('.fixscroll').on('click','.ad-close',function(){
            $(this).parent().hide();
        });
        $(".fixscroll").floatadv();
        $('.hb').on('click','.close-hb',function(){
            $(this).parent().hide();
        });
    });
    jQuery.fn.floatadv = function(loaded) {
        var obj = this;
        body_height = parseInt($(window).height());
        block_height = parseInt(obj.height());

        top_position = parseInt((body_height/2) - (block_height/2) + $(window).scrollTop());

        if (body_height<block_height) { top_position = 0 + $(window).scrollTop(); };

        if(!loaded) {
            obj.css({'position': 'absolute'});
            obj.css({ 'top': top_position });
            $(window).bind('resize', function() {
                obj.floatadv(!loaded);
            });
            $(window).bind('scroll', function() {
                obj.floatadv(!loaded);
            });
        } else {
            obj.stop();
            obj.css({'position': 'absolute'});
            obj.animate({ 'top': top_position }, 400, 'linear');
        }
    }
</script>
