<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">系统设置</h3>
            </div>
            <div class="panel-body">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">信息</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">佣金与打码量设置</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">交易账号</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">第三方支付</a></li>
                        
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form class="form-horizontal" id="form" action="<?php echo e(route('system_config.update', ['id' => 1])); ?>" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="site_name" class="col-sm-2 control-label">网站名称</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="site_name" name="site_name" value="<?php echo e($data->site_name); ?>"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">网站logo</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload" type="file" name="file" multiple>
                                            <div id="progress" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files" class="files">
                                                <?php if($data->site_logo): ?>
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="<?php echo e($data->site_logo); ?>" target="_blank"><img src="<?php echo e($data->site_logo); ?>" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="site_logo" value="<?php echo e($data->site_logo); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">手机站logo</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload4" type="file" name="file" multiple>
                                            <div id="progress4" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files4" class="files">
                                                <?php if($data->m_site_logo): ?>
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="<?php echo e($data->m_site_logo); ?>" target="_blank"><img src="<?php echo e($data->m_site_logo); ?>" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="m_site_logo" value="<?php echo e($data->m_site_logo); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">客服微信二维码</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload_wx" type="file" name="file" multiple>
                                            <div id="progress_wx" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files_wx" class="files">
                                                <?php if($data->wx_pic): ?>
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="<?php echo e($data->wx_pic); ?>" target="_blank"><img src="<?php echo e($data->wx_pic); ?>" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="wx_pic" value="<?php echo e($data->wx_pic); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_alert_on" class="col-sm-2 control-label"><span style="color: red">是否开启弹框</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_alert_on"  value="0" <?php if($data->is_alert_on == 0): ?>checked <?php endif; ?> />开放</label>
                                            <label><input type="radio" name="is_alert_on"  value="1" <?php if($data->is_alert_on == 1): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">弹框图片</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload9" type="file" name="file" multiple>
                                            <div id="progress9" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files9" class="files">
                                                <?php if($data->alert_img): ?>
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="<?php echo e($data->alert_img); ?>" target="_blank"><img src="<?php echo e($data->alert_img); ?>" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="alert_img" value="<?php echo e($data->alert_img); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label for="site_title" class="col-sm-2 control-label">网站标题</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="site_title" name="site_title" value="<?php echo e($data->site_title); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_domain" class="col-sm-2 control-label">网站主域名</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="不需要填写http://" id="site_domain" name="site_domain" value="<?php echo e($data->site_domain); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">关键字</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="keyword" name="keyword"  value="<?php echo e($data->keyword); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone1" class="col-sm-2 control-label">客服电话1</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="phone1" name="phone1"  value="<?php echo e($data->phone1); ?>" />
                                        </div>
                                        <label for="phone2" class="col-sm-1 control-label">客服电话2</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="phone2" name="phone2"  value="<?php echo e($data->phone2); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq" class="col-sm-2 control-label">客服qq</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq" name="qq" placeholder="直接填写 qq号"  value="<?php echo e($data->qq); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq" class="col-sm-2 control-label">代理qq</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq" name="agent_qq" placeholder="直接填写 qq号"  value="<?php echo e($data->agent_qq); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="service_link" class="col-sm-2 control-label">客服链接</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="service_link" name="service_link"  value="<?php echo e($data->service_link); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="app_link" class="col-sm-2 control-label">APP链接</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="app_link" name="app_link"  value="<?php echo e($data->app_link); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">苹果APP下载二维码</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload20" type="file" name="file" multiple>
                                            <div id="progress20" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files20" class="files">
                                                <?php if($data->wap_qrcode): ?>
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="<?php echo e($data->wap_qrcode); ?>" target="_blank"><img src="<?php echo e($data->wap_qrcode); ?>" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="wap_qrcode" value="<?php echo e($data->wap_qrcode); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">安卓APP下载二维码</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload21" type="file" name="file" multiple>
                                            <div id="progress21" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files21" class="files">
                                                <?php if($data->pic_link): ?>
                                                    <div class="pull-left" style="position:relative;margin: 10px;">
                                                        <a href="<?php echo e($data->pic_link); ?>" target="_blank"><img src="<?php echo e($data->pic_link); ?>" alt="" style="width: 100px;"></a>
                                                        <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                        <input type="hidden" name="pic_link" value="<?php echo e($data->pic_link); ?>">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">网站模式</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_maintain"  value="0" <?php if($data->is_maintain == 0): ?>checked <?php endif; ?> />正常</label>
                                            <label><input type="radio" name="is_maintain"  value="1" <?php if($data->is_maintain == 1): ?>checked <?php endif; ?> />维护</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="maintain_desc" class="col-sm-2 control-label">维护提示语</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="maintain_desc" name="maintain_desc"  value="<?php echo e($data->maintain_desc); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fs_time" class="col-sm-2 control-label">返水提示时间</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="fs_time" name="fs_time"  value="<?php echo e(isset($data->fs_time) ? $data->fs_time : "15:00"); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cz_ration" class="col-sm-2 control-label">充值赠送金额百分比</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="cz_ration" name="cz_ration" placeholder="只填写数字"  value="<?php echo e($data->cz_ration); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="auto_logout_time" class="col-sm-2 control-label">后台自动登出时间(小时)</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="auto_logout_time" name="auto_logout_time" placeholder="只填写数字"  value="<?php echo e($data->auto_logout_time); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="auto_logout_time" class="col-sm-2 control-label">每日提款次数</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="transfer_times" name="transfer_times" placeholder="只填写数字"  value="<?php echo e($data->transfer_times); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">网站红包控制</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_hongbao"  value="1" <?php if($data->is_hongbao == 1): ?>checked <?php endif; ?> />开启</label>
                                            <label><input type="radio" name="is_hongbao"  value="2" <?php if($data->is_hongbao == 2): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">网站左侧悬浮图片</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="left_ad"  value="1" <?php if($data->left_ad == 1): ?>checked <?php endif; ?> />开启</label>
                                            <label><input type="radio" name="left_ad"  value="2" <?php if($data->left_ad == 2): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">网站右侧悬浮图片</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="right_ad"  value="1" <?php if($data->left_ad == 1): ?>checked <?php endif; ?> />开启</label>
                                            <label><input type="radio" name="right_ad"  value="2" <?php if($data->left_ad == 2): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">个人中心切换</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_new_center"  value="1" <?php if($data->is_new_center == 1): ?>checked <?php endif; ?> />新版</label>
                                            <label><input type="radio" name="is_new_center"  value="2" <?php if($data->is_new_center == 2): ?>checked <?php endif; ?> />旧版</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">实时返水</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_fs"  value="1" <?php if($data->is_fs == 1): ?>checked <?php endif; ?> />开启</label>
                                            <label><input type="radio" name="is_fs"  value="2" <?php if($data->is_fs == 2): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">注册页选项</label>
                                    </div>


                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">姓名</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_real_name_1"  value="1" <?php if($data->is_real_name_1 == 1): ?>checked <?php endif; ?> />显示</label>
                                            <label><input type="radio" name="is_real_name_1"  value="0" <?php if($data->is_real_name_1 == 0): ?>checked <?php endif; ?> />隐藏</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label><input type="radio" name="is_real_name_2"  value="1" <?php if($data->is_real_name_2 == 1): ?>checked <?php endif; ?> />必填</label>
                                            <label><input type="radio" name="is_real_name_2"  value="0" <?php if($data->is_real_name_2 == 0): ?>checked <?php endif; ?> />不必填</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">手机</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_phone_1"  value="1" <?php if($data->is_phone_1 == 1): ?>checked <?php endif; ?> />显示</label>
                                            <label><input type="radio" name="is_phone_1"  value="0" <?php if($data->is_phone_1 == 0): ?>checked <?php endif; ?> />隐藏</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label><input type="radio" name="is_phone_2"  value="1" <?php if($data->is_phone_2 == 1): ?>checked <?php endif; ?> />必填</label>
                                            <label><input type="radio" name="is_phone_2"  value="0" <?php if($data->is_phone_2 == 0): ?>checked <?php endif; ?> />不必填</label>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">邮箱</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_email_1"  value="1" <?php if($data->is_email_1 == 1): ?>checked <?php endif; ?> />显示</label>
                                            <label><input type="radio" name="is_email_1"  value="0" <?php if($data->is_email_1 == 0): ?>checked <?php endif; ?> />隐藏</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label><input type="radio" name="is_email_2"  value="1" <?php if($data->is_email_2 == 1): ?>checked <?php endif; ?> />必填</label>
                                            <label><input type="radio" name="is_email_2"  value="0" <?php if($data->is_email_2 == 0): ?>checked <?php endif; ?> />不必填</label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">QQ</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_qq_1"  value="1" <?php if($data->is_qq_1 == 1): ?>checked <?php endif; ?> />显示</label>
                                            <label><input type="radio" name="is_qq_1"  value="0" <?php if($data->is_qq_1 == 0): ?>checked <?php endif; ?> />隐藏</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label><input type="radio" name="is_qq_2"  value="1" <?php if($data->is_qq_2 == 1): ?>checked <?php endif; ?> />必填</label>
                                            <label><input type="radio" name="is_qq_2"  value="0" <?php if($data->is_qq_2 == 0): ?>checked <?php endif; ?> />不必填</label>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">微信</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_weixin_1"  value="1" <?php if($data->is_weixin_1 == 1): ?>checked <?php endif; ?> />显示</label>
                                            <label><input type="radio" name="is_weixin_1"  value="0" <?php if($data->is_weixin_1 == 0): ?>checked <?php endif; ?> />隐藏</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label><input type="radio" name="is_weixin_2"  value="1" <?php if($data->is_weixin_2 == 1): ?>checked <?php endif; ?> />必填</label>
                                            <label><input type="radio" name="is_weixin_2"  value="0" <?php if($data->is_weixin_2 == 0): ?>checked <?php endif; ?> />不必填</label>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="keyword" class="col-sm-2 control-label">推荐人</label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_regtj_1"  value="1" <?php if($data->	is_regtj_1 == 1): ?>checked <?php endif; ?> />显示</label>
                                            <label><input type="radio" name="is_regtj_1"  value="0" <?php if($data->	is_regtj_1 == 0): ?>checked <?php endif; ?> />隐藏</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <label><input type="radio" name="is_regtj_2"  value="1" <?php if($data->	is_regtj_2 == 1): ?>checked <?php endif; ?> />必填</label>
                                            <label><input type="radio" name="is_regtj_2"  value="0" <?php if($data->is_regtj_2 == 0): ?>checked <?php endif; ?> />不必填</label>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <form class="form-horizontal" id="form" action="<?php echo e(route('system_config.update', ['id' => 1])); ?>" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="active_member_money" class="col-sm-2 control-label">活跃用户月充值金额</label>
                                        <div class="col-sm-7">
                                            <input type="number" class="form-control" id="active_member_money" name="active_member_money"  value="<?php echo e($data->active_member_money); ?>" />
                                        </div>
                                    </div><font color="red">此金额用来判断代理下线玩家是否为活跃用户,填写200元即为充值达到200元才为活跃用户。</font>
                                    <div class="form-group">
                                        <label for="active_member_money" class="col-sm-2 control-label">打码量倍数</label>
                                        <div class="col-sm-7">
                                            <input type="number" class="form-control" id="ml_percent" name="ml_percent"  value="<?php echo e($data->ml_percent); ?>" />
                                        </div>
                                    </div><font color="red">如填写1则为1倍码量，如填写0.1则为0.1倍码量
                                    </font>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <form class="form-horizontal" id="form" action="<?php echo e(route('system_config.update', ['id' => 1])); ?>" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="is_wechat_on" class="col-sm-2 control-label"><span style="color: red">是否开放银行卡转账</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_bankpay_on"  value="0" <?php if($data->is_bankpay_on == 0): ?>checked <?php endif; ?> />开放</label>
                                            <label><input type="radio" name="is_bankpay_on"  value="1" <?php if($data->is_bankpay_on == 1): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_alipay_on" class="col-sm-2 control-label"><span style="color: red">是否开放支付宝转账</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_alipay_on"  value="0" <?php if($data->is_alipay_on == 0): ?>checked <?php endif; ?> />开放</label>
                                            <label><input type="radio" name="is_alipay_on"  value="1" <?php if($data->is_alipay_on == 1): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_wechat_on" class="col-sm-2 control-label"><span style="color: red">是否开放微信转账</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_wechat_on"  value="0" <?php if($data->is_wechat_on == 0): ?>checked <?php endif; ?> />开放</label>
                                            <label><input type="radio" name="is_wechat_on"  value="1" <?php if($data->is_wechat_on == 1): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_qq_on" class="col-sm-2 control-label"><span style="color: red">是否开放QQ转账</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_qq_on"  value="0" <?php if($data->is_qq_on == 0): ?>checked <?php endif; ?> />开放</label>
                                            <label><input type="radio" name="is_qq_on"  value="1" <?php if($data->is_qq_on == 1): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alipay_nickname" class="col-sm-2 control-label">支付宝昵称</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="alipay_nickname" name="alipay_nickname"  value="<?php echo e($data->alipay_nickname); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alipay_account" class="col-sm-2 control-label">支付宝账号</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="alipay_account" name="alipay_account"  value="<?php echo e($data->alipay_account); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">支付宝二维码(可上传多个)</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload2" type="file" name="file" multiple>
                                            <div id="progress2" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files2" class="files">
                                                <?php if($data->alipay_qrcode): ?>
                                                    <?php 
                                                        $alipay_qrcode = explode(',',$data->alipay_qrcode);
                                                     ?>
                                                    <?php $__currentLoopData = $alipay_qrcode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="pull-left" style="position:relative;margin: 10px;">
                                                            <a href="<?php echo e($item); ?>" target="_blank"><img src="<?php echo e($item); ?>" alt="" style="width: 100px;"></a>
                                                            <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                            <input type="hidden" name="alipay_qrcode[]" value="<?php echo e($item); ?>">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wechat_nickname" class="col-sm-2 control-label">微信昵称</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="wechat_nickname" name="wechat_nickname"  value="<?php echo e($data->wechat_nickname); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wechat_account" class="col-sm-2 control-label">微信账号</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="wechat_account" name="wechat_account"  value="<?php echo e($data->wechat_account); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">微信二维码(可上传多个)</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload3" type="file" name="file" multiple>
                                            <div id="progress3" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files3" class="files">
                                                <?php if($data->wechat_qrcode): ?>
                                                    <?php 
                                                        $wechat_qrcode = explode(',',$data->wechat_qrcode);
                                                     ?>
                                                    <?php $__currentLoopData = $wechat_qrcode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="pull-left" style="position:relative;margin: 10px;">
                                                            <a href="<?php echo e($item); ?>" target="_blank"><img src="<?php echo e($item); ?>" alt="" style="width: 100px;"></a>
                                                            <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                            <input type="hidden" name="wechat_qrcode[]" value="<?php echo e($item); ?>">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="qq_nickname" class="col-sm-2 control-label">QQ昵称</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq_nickname" name="qq_nickname"  value="<?php echo e($data->qq_nickname); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qq_account" class="col-sm-2 control-label">QQ账号</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="qq_account" name="qq_account"  value="<?php echo e($data->qq_account); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">QQ二维码(可上传多个)</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload77" type="file" name="file" multiple>
                                            <div id="progress77" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files77" class="files">
                                                <?php if($data->qq_qrcode): ?>
                                                    <?php 
                                                        $qq_qrcode = explode(',',$data->qq_qrcode);
                                                     ?>
                                                    <?php $__currentLoopData = $qq_qrcode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="pull-left" style="position:relative;margin: 10px;">
                                                            <a href="<?php echo e($item); ?>" target="_blank"><img src="<?php echo e($item); ?>" alt="" style="width: 100px;"></a>
                                                            <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                            <input type="hidden" name="qq_qrcode[]" value="<?php echo e($item); ?>">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <form class="form-horizontal" id="form" action="<?php echo e(route('system_config.update', ['id' => 1])); ?>" method="post">
                                <input type="hidden" name="_method" value="put">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="is_thirdpay_on" class="col-sm-2 control-label"><span style="color: red">是否开放第三方支付</span></label>
                                        <div class="col-sm-7">
                                            <label><input type="radio" name="is_thirdpay_on"  value="0" <?php if($data->is_thirdpay_on == 0): ?>checked <?php endif; ?> />开放</label>
                                            <label><input type="radio" name="is_thirdpay_on"  value="1" <?php if($data->is_thirdpay_on == 1): ?>checked <?php endif; ?> />关闭</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="third_userid" class="col-sm-2 control-label">第三方商户名</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_userid" name="third_userid" placeholder="例：9999" value="<?php echo e($data->third_userid); ?>"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_userkey" class="col-sm-2 control-label">第三方userkey</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_userkey" name="third_userkey" placeholder="例：011d495aaaab9611cd7f1f31ccaaa9377c565aaa15" value="<?php echo e($data->third_userkey); ?>"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_pay_url" class="col-sm-2 control-label">第三方 url</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_pay_url" name="third_pay_url" value="<?php echo e($data->third_pay_url); ?>"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="third_version" class="col-sm-2 control-label">银行卡通知地址</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="third_version" name="" value="<?php echo e(route('pay.bank')); ?>" readonly  />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="third_version" class="col-sm-2 control-label">订单变动通知地址</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="third_version" name="" value="<?php echo e(route('pay.notice')); ?>" readonly />
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="banner">
                            <form class="form-horizontal" id="form" action="<?php echo e(route('banner.store')); ?>" method="post">
                                <input type="hidden" name="type" value="1">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">电脑端 首页banner图（可多张）</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload_b" type="file" name="file" multiple>
                                            <div id="progress_b" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files_b" class="files">
                                                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($item->type == 1): ?>
                                                        <div class="pull-left" style="position:relative;margin: 10px;">
                                                            <a href="<?php echo e($item->path); ?>" target="_blank"><img src="<?php echo e($item->path); ?>" alt="" style="width: 100px;"></a>
                                                            <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                            <input type="hidden" name="banners[]" value="<?php echo e($item->path); ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <form class="form-horizontal" id="form" action="<?php echo e(route('banner.store')); ?>" method="post">
                                <input type="hidden" name="type" value="2">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label">手机端 首页banner图（可多张）</label>
                                        <div class="col-sm-7">
                                            <input id="fileupload_m" type="file" name="file" multiple>
                                            <div id="progress_m" class="progress">
                                                <div class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <div id="files_m" class="files">
                                                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($item->type == 2): ?>
                                                        <div class="pull-left" style="position:relative;margin: 10px;">
                                                            <a href="<?php echo e($item->path); ?>" target="_blank"><img src="<?php echo e($item->path); ?>" alt="" style="width: 100px;"></a>
                                                            <a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>
                                                            <input type="hidden" name="banners[]" value="<?php echo e($item->path); ?>">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-7">
                                            <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section><!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after.js'); ?>
    <script src="<?php echo e(asset('/backstage/js/jquery.ui.widget.js')); ?>"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="<?php echo e(asset('/backstage/js/jquery.iframe-transport.js')); ?>"></script>
    <!-- The basic File Upload plugin -->
    <script src="<?php echo e(asset('/backstage/js/jquery.fileupload.js')); ?>"></script>
    <script>
        /*jslint unparam: true */
        /*global window, $ */
        var upload_url = "<?php echo e(route('upload.post')); ?>";
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = upload_url;
            $('#fileupload').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="site_logo" value="'+img_path+'">' +
                        '</div>';
                    $('#files').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //手机站logo
            $('#fileupload4').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="m_site_logo" value="'+img_path+'">' +
                        '</div>';
                    $('#files4').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress4 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //弹框图片
            $('#fileupload9').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="alert_img" value="'+img_path+'">' +
                        '</div>';
                    $('#files9').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress9 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            /************************************/
            //客服微信二维码
            $('#fileupload_wx').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="wx_pic" value="'+img_path+'">' +
                        '</div>';
                    $('#files_wx').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress_wx .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
            /************************************/
            //左侧悬浮图片
            $('#fileupload10').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="left_img" value="'+img_path+'">' +
                        '</div>';
                    $('#files10').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress10 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //右侧悬浮图片
            $('#fileupload11').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="right_img" value="'+img_path+'">' +
                        '</div>';
                    $('#files11').append(html)
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress11 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //支付宝
            $('#fileupload2').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="alipay_qrcode[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files2').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress2 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //微信
            $('#fileupload3').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="wechat_qrcode[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files3').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress3 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');


            //QQ
            $('#fileupload77').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="qq_qrcode[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files77').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress77 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            //手机二维码
            $('#fileupload20').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="wap_qrcode" value="'+img_path+'">' +
                        '</div>';
                    $('#files20').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress20 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

        //安卓APP二维码
            $('#fileupload21').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="pic_link" value="'+img_path+'">' +
                        '</div>';
                    $('#files21').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress21 .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
            //电脑端banner
            $('#fileupload_b').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="banners[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files_b').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress_b .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');


            //手机端端banner
            $('#fileupload_m').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {

                    var res = data.result;
                    //console.log(res)
                    if (res.status == 0)
                    {
                        alert(res.message);
                        return false;
                    }
                    var img_path = res.data.url;
                    var html = '<div class="pull-left" style="position:relative;margin: 10px;">' +
                        '<a href="'+img_path+'" target="_blank">' +
                        '<img src="'+img_path+'" style="width: 100px;" />' +
                        '</a>' +
                        '<a href="javascript:;" class="glyphicon glyphicon-remove" style="position: absolute;right: 0;top: 0;" onclick="removeDiv(this)"></a>'+
                        '<input type="hidden" name="banners[]" value="'+img_path+'">' +
                        '</div>';
                    $('#files_m').append(html)

                    //console.log(data)
//                    $.each(data.result.files, function (index, file) {
//                        console.log(file)
//                        $('<p/>').text(file.name).appendTo('#files');
//                        var img = '<img src="'+file.thumbnailUrl+'" style="width: 50px;" />';
//                        $('#imgs').append(img)
//                    });
                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress_m .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
        });

        function removeDiv(e)
        {
            $(e).closest('div').remove();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>