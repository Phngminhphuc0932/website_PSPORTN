

<?php if($errors->noticeOrder->first()): ?>
<script>
    alert('<?php echo e($errors->noticeOrder->first()); ?>');
</script>
<?php endif; ?>

<?php $__env->startSection('main-content'); ?>
 <?php echo $__env->make('modules.mod_trang_chu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template_pink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/trang_chu.blade.php ENDPATH**/ ?>