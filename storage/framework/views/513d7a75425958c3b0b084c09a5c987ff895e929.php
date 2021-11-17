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
                <h3 data-v-76fa910e="" class="title">充值记录</h3>
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
                                <th>充值时间</th>
                                <th>充值金额</th>
                                <th>充值状态</th>
                            </tr>
                            </thead>
                            <tbody id="cashin">
                            <?php if($data->total() > 0): ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td><?php echo e($item->money); ?></td>
                                        <td><?php echo \App\Models\Base::$RECHARGE_STATUS_HTML[$item->status]; ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3">暂无充值记录！</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>

                        <table class="historytab" datasource="transferrecord" style="display:none;">
                            <thead>
                            <tr>
                                <th>操作类型</th>
                                <th>操作时间</th>
                                <th>操作金额</th>
                                <th>是否成功</th>
                                <th>操作详细</th>
                            </tr>
                            </thead>
                            <tbody id="transferrecord"></tbody>
                        </table>
                    </div>
                    <?php echo $data->links(); ?>

                </div>
                <div data-v-0ba198ab="" relative="" class="payRecord-content">
                    <div data-v-ecaca2b0="" data-v-0ba198ab="" id="outer-7kqct" class="_v-container" style="position: absolute; width: 100%; height: 100%;">
                        <div data-v-ecaca2b0="" id="inner-ebazf" class="_v-content" style="transform: translate3d(0px, 0px, 0px) scale(1);">
                            <!---->

                            <div data-v-0ba198ab="" data-v-ecaca2b0="" style="height: 1px;"></div>
                            <div data-v-ecaca2b0="" class="loading-layer">
                                <span data-v-ecaca2b0="" class="spinner-holder">
                                    <svg data-v-ecaca2b0="" viewBox="0 0 64 64" class="spinner" style="fill: rgb(170, 170, 170); stroke: rgb(170, 170, 170);">
                                        <g stroke-width="4" stroke-linecap="round">
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(180)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(210)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values="0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(240)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".1;0;1;.85;.7;.65;.55;.45;.35;.25;.15;.1" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(270)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".15;.1;0;1;.85;.7;.65;.55;.45;.35;.25;.15" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(300)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".25;.15;.1;0;1;.85;.7;.65;.55;.45;.35;.25" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(330)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".35;.25;.15;.1;0;1;.85;.7;.65;.55;.45;.35" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(0)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".45;.35;.25;.15;.1;0;1;.85;.7;.65;.55;.45" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(30)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".55;.45;.35;.25;.15;.1;0;1;.85;.7;.65;.55" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(60)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".65;.55;.45;.35;.25;.15;.1;0;1;.85;.7;.65" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(90)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".7;.65;.55;.45;.35;.25;.15;.1;0;1;.85;.7" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(120)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values=".85;.7;.65;.55;.45;.35;.25;.15;.1;0;1;.85" repeatCount="indefinite"></animate>
                                            </line>
                                            <line y1="17" y2="29" transform="translate(32,32) rotate(150)">
                                                <animate attributeName="stroke-opacity" dur="750ms" values="1;.85;.7;.65;.55;.45;.35;.25;.15;.1;0;1" repeatCount="indefinite">
                                                </animate>
                                            </line>
                                        </g>
                                    </svg>
                                </span>
                                <div data-v-ecaca2b0="" class="no-data-text active" style="color: rgb(170, 170, 170);">没有更多数据</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!---->
    </main>
    <script type="text/javascript" src="<?php echo e(asset('/wap/js/laydate.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>