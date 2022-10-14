<?php echo $__env->make('widgets.admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<!-- container section start -->
<section id="container" class="">
    
    <?php echo $__env->make('widgets.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('widgets.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('main-content'); ?>
    
</section>
<!-- container section start -->

<?php echo $__env->make('widgets.admin.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/templates/template_admin.blade.php ENDPATH**/ ?>