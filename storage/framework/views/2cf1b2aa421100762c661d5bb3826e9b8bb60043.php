<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">客户端类型</span>
                    <select class="form-control" name="client_type">
                        <option value="">请选择</option>
                        <option value="1" <?php if($client_type==1): ?> selected <?php endif; ?>>PC</option>
                        <option value="2" <?php if($client_type==2): ?> selected <?php endif; ?>>手机</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-lg-3 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                    <a href="<?php echo e(route('template.create')); ?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>添加模板</a>
                </div>
            </div>
        </div>
    </form>
</div>