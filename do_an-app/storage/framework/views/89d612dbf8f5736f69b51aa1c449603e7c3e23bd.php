<html>

<?php echo $__env->make('widgets.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    
	<?php echo $__env->make('widgets.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('main-content'); ?>

    <?php echo $__env->make('widgets.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/templates/template_pink.blade.php ENDPATH**/ ?>