<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('/wap/theme3/css/pay.css')); ?>" rel="stylesheet" />
    <main class="panel slideout-panel slideout-panel-left">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="history.go('-1')">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">申请进度</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>
        <div data-v-5e36b0dc="" class="account view">
            <div class="userInfo setCard">
                <ul class="list-group">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item message-item">
                            <div class="message-title" style="color:#232323;">活动标题：<?php echo e($item->activity->title); ?></div>
                            <div class="message-content">
                                <?php if($item->status == 3): ?>
                                    <font color="red">你的活动申请未通过，原因：<?php echo e($item->fail_reason); ?></font>
                                <?php endif; ?>
                                <?php if($item->status == 2): ?>
                                    恭喜你，你的活动申请已审核通过，赠送金额已发放到你的账户，请查收！
                                <?php endif; ?>
                                <?php if($item->status == 1): ?>
                                    <font color="blue">你的活动申请正在审核，请耐心等耐！</font>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <!---->
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>