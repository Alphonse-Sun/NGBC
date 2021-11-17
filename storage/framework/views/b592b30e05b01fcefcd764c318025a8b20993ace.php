<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('/wap/theme3/css/pay.css')); ?>" rel="stylesheet" />
    <main class="panel slideout-panel slideout-panel-left">
        <!---->
        <div data-v-76fa910e="" class="navbar-container" style="">
            <div data-v-76fa910e="" middle="" class="logo-container"></div>
            <div data-v-76fa910e="" middle="" class="menu-container" onclick="history.go(-1)">
                <div data-v-76fa910e="" relative="" style="">
                    <img data-v-76fa910e="" middle="" src="<?php echo e(asset('/wap/theme3/images/main/goback.png')); ?>" alt="" style="">
                </div>
            </div>
            <div data-v-76fa910e="" class="title">
                <h3 data-v-76fa910e="" class="title">代理中心</h3>
            </div>
            <div data-v-76fa910e="" middle="" class="balance"></div>
            <div data-v-76fa910e="" middle="" class="info-container"></div>
        </div>
        <div data-v-5e9fb540="" class="addCard view">
            <div class="userInfo dy_center" style="padding-top: 0;">
                <dl class="dy_center_info">
                    <dt>
                        会员账户
                    </dt>
                    <dd>
                        <div class="pull-left">
                            推广域名
                        </div>
                        <div class="<?php if($_member -> is_daili == 1): ?> pull-left <?php else: ?> pull-right <?php endif; ?>">
                            <?php if($_member->is_daili == 1): ?>
                                <span id="url"><?php if($_member->agent_uri): ?>
                                        <?php echo e($_member->agent_uri); ?>

                                    <?php else: ?>
                                        <?php echo e(route('web.register_one').'?i='.$_member->invite_code); ?>

                                    <?php endif; ?></span>
                                <span class="btn" onclick="tapCopy('url')" data-clipboard-target="#url" style="color: #e4393c;padding-right: 0">复制</span>
                            <?php else: ?>
                                <?php
                                $apply = '';
                                if (count($_member->daili_apply) > 0)
                                    $apply = $_member->daili_apply()->orderBy('created_at', 'desc')->first();
                                ?>
                                <?php if($apply && $apply->status == 0): ?>
                                    <span style="color: red;">您的代理资格审批中</span>
                                <?php elseif($apply && $apply->status == 2): ?>
                                    <span style="color: red;">申请失败</span>
                                    <a href="<?php echo e(route('wap.agent_apply')); ?>"  style="width: 120%" class="submit_btn text-center">重新申请</a>
                                <?php elseif($apply && $apply->status == 1): ?>
                                    <span id="url1"><?php echo e(route('web.register_one').'?i_code='.$item->invite_code); ?></span>
                                    <span class="btn" onclick="copyArticle1()" data-clipboard-target="#url" style="color: #e4393c;padding-right: 0">复制</span>
                                <?php else: ?>
                                    <span style="color: red;">您还不是代理</span>
                                    <a href="<?php echo e(route('wap.agent_apply')); ?>" class="submit_btn text-center">立即申请</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </dd>
                    <dd>
                        <div class="pull-left">
                            真实姓名
                        </div>
                        <div class="pull-right">
                            <?php echo e($_member->real_name); ?>

                        </div>
                    </dd>
                    <dd>
                        <div class="pull-left">
                            QQ
                        </div>
                        <div class="pull-right">
                            <?php echo e($_member->qq); ?>

                        </div>
                    </dd>
                    <dd>
                        <div class="pull-left">手机号码</div>
                        <div class="pull-right">
                            <?php if($_member->phone): ?>
                                <?php echo e($_member->phone); ?>

                            <?php else: ?>
                                <a href="<?php echo e(route('wap.set_phone')); ?>" class="c_blue">未设置</a>
                            <?php endif; ?>
                        </div>
                    </dd>
                    <dd>
                        <div class="pull-left">银行账户</div>
                        <div class="pull-right">
                            <?php if($_member->bank_card): ?>
                                <?php echo e($_member->bank_card); ?>

                            <?php else: ?>
                                <a href="<?php echo e(route('wap.bind_bank')); ?>" class="c_blue">未设置</a>
                            <?php endif; ?>
                        </div>
                    </dd>
                </dl>
                <dl style="margin-top: 10px">
                    <a href="<?php echo e(route('wap.daili_money_log')); ?>" class="clear">
                    <dd>
                            <div class="pull-left">
                                佣金发放记录
                            </div>
                            <i data-v-e52c7616=""  style="position: absolute;right: 10px" class="icon iconfont icon-arrow-right-copy "></i>

                    </dd>
                    </a>
                </dl>
                <dl style="margin-top: 10px">
                    <a href="<?php echo e(route('wap.member_offline_sy')); ?>" class="clear">
                    <dd>
                            <div class="pull-left">
                                会员输赢报表
                            </div>
                            <i data-v-e52c7616=""  style="position: absolute;right: 10px" class="icon iconfont icon-arrow-right-copy "></i>

                    </dd>
                    </a>
                </dl>
                <dl style="margin-top: 10px">
                    <a href="<?php echo e(route('wap.member_offline')); ?>" class="clear">
                    <dd>
                            <div class="pull-left">
                                下线会员
                            </div>
                            <i data-v-e52c7616=""  style="position: absolute;right: 10px" class="icon iconfont icon-arrow-right-copy "></i>

                    </dd>
                    </a>
                </dl>
                <dl>
                    <a href="<?php echo e(route('wap.member_offline_recharge')); ?>" class="clear">
                    <dd>

                            <div class="pull-left">
                                下线会员存款记录
                            </div>
                            <i data-v-e52c7616=""  style="position: absolute;right: 10px" class="icon iconfont icon-arrow-right-copy "></i>
                    </dd>
                    </a>
                </dl>
                <dl>
                    <a href="<?php echo e(route('wap.member_offline_drawing')); ?>" class="clear">
                    <dd>
                            <div class="pull-left">
                                下线会员提款记录
                            </div>
                            <i data-v-e52c7616=""  style="position: absolute;right: 10px" class="icon iconfont icon-arrow-right-copy "></i>

                    </dd>
                    </a>
                </dl>
            </div>
        </div>
        <!---->
    </main>
    <script>
        /*biCommon.getBindbank($("#banknode"), $("#card"), $("#bankname"), $("#UserName"), 2);
        biCommon.getWithdrawBankList();*/
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wap.template.theme3.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>