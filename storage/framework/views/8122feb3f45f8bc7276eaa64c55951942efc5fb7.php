<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">会员加/减款操作</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal cmxform" name="registerForm" id="form" action="<?php echo e(route('member.update2', ['id' => $data->getKey()])); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="membername" class="col-sm-2 control-label">用户名</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name"  placeholder="用户名" value="<?php echo e($data->name); ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="money" class="col-sm-2 control-label">中心账户余额</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" id="money-all" name="money"  value="<?php echo e($data->money); ?>" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">类型</label>
                            <div class="col-sm-7">
                                <label><input name="money_type" type="radio" value="in" />加款 </label>
                                <label><input name="money_type" type="radio" value="out" />扣款 </label>
                                <input type="number" name="my_money" min="1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">红利类型</label>
                            <div class="col-sm-7">
                            <select name="type" id="type" class="form-control">
                                <option value="">--请选择--</option>
                                
                                <option value="1">充值</option>
                                <option value="5">优惠活动</option>
                                <option value="3">游戏返水</option>
                                <option value="10">其他</option>
                            </select>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="remark" class="col-sm-2 control-label">备注</label>
                             
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="remark" name="remark"  value=""/>
                            </div>
                        </div>
						 
                     
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="<?php echo e(route('member.index')); ?>" class="btn btn-info">返回</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after.js'); ?>
    <script>
        <?php if($data->is_trans_on ==1): ?>
        $(function(){
            var name = '<?php echo e($data->name); ?>';
            var id = '<?php echo e($data->id); ?>';
            $.ajax({
                type:'get',
                url : "<?php echo e(route('member.get_money')); ?>",
                data : {name:name,id:id},
                dataType : 'json',
                success : function (data) {
                    //console.log(data);
                    if (data.Code != 0)
                    {
                        alert(data.Message);
                        return ;
                    }else{
                        $('input[name=money]').val('');
                        $('input[name=money]').val(data.Data);
                    }
                }
            })
        })
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>