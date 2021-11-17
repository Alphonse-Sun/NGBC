<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">编辑系统公告</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="<?php echo e(route('message.update', ['id' => $data->id])); ?>" method="post">
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">标题 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($data->title); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label">内容 <strong style="color: red">*</strong></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="content" name="content" value="<?php echo e($data->title); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">跳转链接</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="url" name="url" value="<?php echo e($data->url); ?>" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="<?php echo e(route('message.index')); ?>" class="btn btn-info">返回</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>