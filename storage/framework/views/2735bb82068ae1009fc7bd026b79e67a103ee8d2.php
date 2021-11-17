<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('/wap/theme3/css/my.css')); ?>" rel="stylesheet" />
    <main class="panel slideout-panel slideout-panel-left" id="transactionContent" style="height:calc(100% - 60px);">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="self.location=document.referrer;">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">我的消息</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>

        <div data-v-0ba198ab="" class="drawRecord view">
            <div data-v-0ba198ab="" class="scroll">
                <div class="table-content">
                    
                    <div class="mine-table">
                        <table class="historytab" datasource="cashin">
                            <thead>
                            <tr>
                                <td>时间</td>
                                <td>标题</td>
                                <td>内容</td>
                            </tr>
                            </thead>
                            <tbody id="cashin">
                            <?php if($data->total() > 0): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->content); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3">暂无记录！</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo $data->links(); ?>

                </div>


            </div>
        </div>
        <!---->
    </main>
    <script type="text/javascript" src="<?php echo e(asset('/wap/js/laydate.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>