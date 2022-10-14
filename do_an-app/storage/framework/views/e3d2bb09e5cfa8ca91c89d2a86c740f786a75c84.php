<?php $__env->startSection('main-content'); ?>
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>Thêm sản phẩm mới</h3>
                
            </div>
        </div>
        <?php echo $__env->make('page_admin.modules.mod_them_sp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/page_admin/trang_them_sp.blade.php ENDPATH**/ ?>