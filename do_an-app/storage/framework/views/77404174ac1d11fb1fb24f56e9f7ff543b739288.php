<?php
// Form::macro('colorfield', function($name)
// {
//     return '<input name="'. $name .'" type="color">';
// });

// foreach ($errors->all() as $message) {
//     echo $message;
// }

//$errors->first();
?>
<div class="container">
    <div class="register">
        <div class="register-top-grid">
            <h3>THÔNG TIN ĐĂNG KÝ</h3>
            <?php if($errors->first()): ?>
                <div class="error_message panel panel-danger">
                    <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message_error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="panel-body item_message text-danger"><?php echo e($message_error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <div class="mation">
                <?php echo Form::open(['route' => 'saveCreateNewAccount', 'class' => 'register_form', 'files' => true]); ?>


                <!-- username -->
                <?php echo Form::label('username', 'Username'); ?>

                <?php echo Form::text('username', null, ['class' => 'form-control']); ?>


                <!-- password -->
                <?php echo Form::label('password', 'Password'); ?>

                <?php echo Form::password('password', ['class' => 'form-control']); ?>


                <!-- password -->
                <?php echo Form::label('password_confirmation', 'Confirmed Password'); ?>

                <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>


                <!-- Email -->
                <?php echo Form::label('email', 'Email'); ?>

                <?php echo Form::text('email', null, ['class' => 'form-control']); ?>


                <!-- ngày sinh -->
                <?php echo Form::label('date_of_birth', 'Date of Birth'); ?>

                <?php echo Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control']); ?>


                <!-- Giới tính -->
                <?php echo Form::label('sex', 'Sex'); ?>

                <?php echo Form::radio('sex', 1, true, ['id' => 'nu']); ?>

                <?php echo Form::label('nu', 'Nữ'); ?>

                <?php echo Form::radio('sex', 0, false, ['id' => 'nam']); ?>

                <?php echo Form::label('nam', 'Nam'); ?>


                
                <div class="register-but">
                    <?php echo Form::submit('Đăng ký', ['class' => 'btn btn-primary']); ?>

                </div>

                <?php echo Form::close(); ?>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php echo $__env->make('modules.mod_sub_cate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_register_acc.blade.php ENDPATH**/ ?>