<?php $__env->startSection('content'); ?>
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">前台模板列表</h3>
             </div>
             <div class="panel-body">
                 <?php echo $__env->make('admin.template.filter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th class="text-center">模板名称</th>
                         <th  style="width: 10%">客户端类型</th>
                         <th  style="width: 10%">模板路径</th>
                         <th  style="width: 10%">图片</th>
                         <th  style="width: 5%">默认</th>
                         <th  style="width: 20%">操作</th>
                     </tr>
                     <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                             <td>
                                 <?php echo e($item->id); ?>

                             </td>
                             <td>
                                 <?php echo e($item->name); ?>

                             </td>
                             <td>
                                 <?php if($item->client_type==1): ?>
                                     PC端
                                 <?php else: ?>
                                    手机端
                                 <?php endif; ?>
                             </td>
                             <td>
                                 <?php echo e($item->template_name); ?>

                             </td>
                             <td>
                                 <a target="_blank" href="<?php echo e($item->pic); ?>"><img style="width: 50px;height: 50px;" src="<?php echo e($item->pic); ?>"></a>
                             </td>
                             <td>
                                 <?php if($item->status==2): ?>
                                     当前默认模板
                                 <?php else: ?>
                                     <a href="<?php echo e(route('template.set',['id'=>$item->id,'client_type'=>$item->client_type])); ?>" class="btn btn-success btn-xs" onclick="return confirm('确定设置为默认模板吗？')">设置默认</a>
                                 <?php endif; ?>
                             </td>
                             <td>
                                 <?php if($item->client_type == 1): ?>
                                 <a target="_blank" href="<?php echo e($url); ?>?preview=<?php echo e($item->id); ?>" class="btn btn-info btn-xs">预览</a>
                                 <?php else: ?>
                                     <a target="_blank" href="<?php echo e($url); ?>/m?preview=<?php echo e($item->id); ?>" class="btn btn-info btn-xs">预览</a>
                                 <?php endif; ?>
                                 <a href="<?php echo e(route('template.edit', ['id' => $item->getKey()])); ?>" class="btn btn-primary btn-xs">修改</a>
                                 
                                         
                                         
                                         
                                 
                                     
                                 
                             </td>
                         </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>总共 <strong style="color: red"><?php echo e($data->total()); ?></strong> 条</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                     <?php echo $data->render(); ?>

                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>