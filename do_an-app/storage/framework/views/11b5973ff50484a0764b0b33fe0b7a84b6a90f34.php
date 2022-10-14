<div class="container">
    <div class="account_grid">
        <div class="login-right">
            <h3>ĐĂNG NHẬP</h3>
            <p>Nếu đã có tài khoản, vui lòng đăng nhập</p>
            <?php if($errors->first()): ?>
                <div class="error_message panel panel-danger">
                    <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message_error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel-body item_message text-danger"><?php echo e($message_error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php if($errors->loginErrors->first()): ?>
                <div class="error_message panel panel-danger">
                    <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                    <?php $__currentLoopData = $errors->loginErrors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel-body item_message text-danger"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php echo Form::open(['route' => 'loginAccount', 'class' => 'form_dang_nhap']); ?>

            <!-- Email -->
            <?php echo Form::label('email', 'Email'); ?>

            <?php echo Form::text('email', null, ['class' => 'form-control']); ?>


            <!-- password -->
            <?php echo Form::label('password', 'Password'); ?>

            <?php echo Form::password('password', ['class' => 'form-control']); ?>



            <div class="register-but">
                <a class="forgot" href="#">Quên mật khẩu?</a>
                <?php echo Form::submit('Đăng nhập', ['class' => 'btn btn-primary']); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
        <div class="login-left">
            <h3>Dành cho khách hàng mới</h3>
            <p>
                Tạo tài khoản để có thể sử dụng nhiều tính năng mua sắm tiện ích mới nhất của cửa hàng chúng tôi
            </p>
            <a class="acount-btn" href="/register">Tạo tài khoản mới</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php echo $__env->make('modules.mod_sub_cate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <div class="clearfix"></div>
</div>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_login.blade.php ENDPATH**/ ?>