<?php if(session('msg_ok')|| session('msg_no') || $errors->any()): ?>
    <div style="position: fixed;z-index: 9999;top: 0;left:0;width: 100%;">
    <?php if(session('msg_no')): ?>
        <div class="alert alert-error alert-msg" style="border-radius: 0;margin:0 auto;width:100%;text-align: center" id="noMsg">
            
            <strong><?php echo e(session('msg_no')); ?></strong>
        </div>
    <?php endif; ?>
        <?php if(session('msg_ok')): ?>
            <div class="alert alert-success alert-msg" style="border-radius: 0;margin:0 auto;width:100%;text-align: center" id="okMSg">
                
                <strong><?php echo e(session('msg_ok')); ?></strong>
            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-error alert-msg"  style="border-radius: 0;margin:0 auto;width:100%;text-align: center">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
    <script>
        $(function() {
            setTimeout(function(){
                $('.alert-msg').slideUp();
            },2000);

            $('.alertBox').on('click','.linkUrl',function(){
                $('.alertBox').slideUp();
            })
        })
    </script>
<?php endif; ?>