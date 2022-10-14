<div class="container">
    <div class="register">
        <div class="register-top-grid">
            <div class="mation">
                <div class="panel panel-<?php echo e($type_notice); ?>">
                    <div class="panel-heading">Thông báo</div>
                    <div class="panel-body item_message text-danger"><?php echo e($message_notice); ?></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php echo $__env->make('modules.mod_sub_cate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<script>
    setTimeout(() => {
        window.location.href = '<?php echo e($url_redirect); ?>';
    }, 5000);
</script>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_notice_and_redirect.blade.php ENDPATH**/ ?>