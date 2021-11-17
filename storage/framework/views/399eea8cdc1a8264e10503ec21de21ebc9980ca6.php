<?php $__env->startSection('content'); ?>
    <main class="panel slideout-panel slideout-panel-left" style="height:calc(100% - 44px);">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="self.location=document.referrer;">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">优惠活动</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>
        <div data-v-30793220="" class="appgame view" style="">
            <div data-v-30793220="" class="appgame-top" id="activityTitle">
                
                    <span data-v-30793220="" onclick="window.location.href='<?php echo e(route('wap.activity_list')); ?>'" <?php if( !request()->get('type') ): ?>class="active" <?php endif; ?> >全部活动</span>

                <?php $__currentLoopData = config('platform.activity_type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span data-v-30793220="" onclick="window.location.href='<?php echo e(route('wap.activity_list',['type'=>$k])); ?>'"  <?php if( request()->get('type') == $k ): ?>class="active" <?php endif; ?> ><?php echo e($v); ?>

                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div data-v-30793220="" class="appgame-content" id="activety">
                <div class="hotbox clearboth">
                    <a class="hotApplication" href="<?php echo e(route('wap.my_activity')); ?>" style="text-decoration: none;">申请进度查询</a>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <dl data-id="10">

                        <dd>
                            <img onclick="window.location.href='<?php echo e(route('wap.activity_detail', ['id' => $item->id])); ?>'" src="<?php echo e($item->title_img); ?>">
                            <div style="text-align: center;margin: 0px;padding: 0px;">
                                <?php if($item->is_apply == 0): ?>

                                    <?php if($_member): ?>
                                        <form style="display: inline-block ;" action="<?php echo e(route('member.apply_activity')); ?>" method="post">
                                            <input type="hidden" name="activity_id" value="<?php echo e($item->id); ?>">
                                            <a class="applybtn ajax-submit-without-confirm-btn" style="padding:2px 5px; border:0px; background:#C30; color:#ffffff; border-radius:4px;font-size: 10px">申请活动</a>
                                        </form>
                                    <?php else: ?>
                                        <a class="applybtn" onclick="alert('请先登录')" style="padding:2px 5px; border:0px; background:#C30; color:#ffffff; border-radius:4px;line-height: 26px;font-size: 10px">申请活动</a>
                                    <?php endif; ?>

                                <?php endif; ?>

                            </div>
                        </dd>
                        
                    </dl>
                        <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!---->
    </main>
    <script>
        $(function () {
            // activetyImg()
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>