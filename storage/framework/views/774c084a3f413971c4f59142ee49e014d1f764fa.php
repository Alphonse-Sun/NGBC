<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        
            
                
            
            
                
                
                
            
        

        <!-- search form (Optional) -->
        
            
                
              
                
                
              
            
        
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">NG.</li>
            <!-- Optionally, you can add icons to the links -->
            <li <?php if($active_route == 'admin.index'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('admin.index')); ?>"><i class="fa fa-dashboard"></i> <span>后台首页</span></a></li>
            <?php $__currentLoopData = config('admin_menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item['is_hide'] == 1): ?>
                    <li class="treeview" id="<?php echo e($k); ?>">
                        <a <?php if($item['router']): ?> href="<?php echo e(route($item['router'])); ?>" <?php else: ?> href="#" <?php endif; ?>>
                            <i class="<?php echo e($item['icon']); ?>"></i>
                            <span><?php echo e($item['name']); ?></span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                                <small class="label pull-right bg-green tip_msg"></small>
                            </span>
                            
                        </a>

                        <?php if(count($item['submenus']) > 0): ?>
                            <ul class="treeview-menu">
                                <?php $__currentLoopData = $item['submenus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($v['router'] == 'ctr.index'): ?>
                                        <li ><a <?php if($v['router']): ?> class="disabled ctr-l" href="javascript:;" <?php else: ?> href="javascript:;" <?php endif; ?>><i class="fa fa-circle-o"></i> <?php echo e($v['title']); ?></a></li>
                                    <?php elseif(($_user->is_super_admin || in_array($v['router'], $_user_routers))): ?>
                                    <li <?php if($active_route == $v['router']): ?> class="active" <?php endif; ?>><a <?php if($v['router']): ?> href="<?php echo e(route($v['router'])); ?>" <?php else: ?> href="javascript:;" <?php endif; ?>><i class="fa fa-circle-o"></i> <?php echo e($v['title']); ?>

                                            <span class="pull-right-container">
                  <span class="label bg-green pull-right tip_msg_sk"></span>
                </span>
                                        </a>

                                    </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                    <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <script>
                $(function(){
                    $('.ctr-l').click(function(){
                        layer.alert('请联系销售人员开通');
                    })

                })
            </script>


            
                
            
              
            
                
                
                    
                
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
<script>
    $(function(){
        $('.treeview').each(function(e){
            var li_a_num = $(this).find('.active').length
            if (li_a_num > 0)
                $(this).addClass('active')
        })
    })
</script>