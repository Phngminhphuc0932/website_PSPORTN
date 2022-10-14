<div class="container">
    <div class="women-product">
        <div class=" w_content">
            <div class="women">
                <a href="#">
                    <?php if(isset($name_loai_sp)): ?>
                        <?php $__currentLoopData = $name_loai_sp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h4><?php echo e($name->ten_loai_sp); ?> - <span>4449 itemms</span> </h4>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </a>
                <ul class="w_nav">
                    <li>Sort : </li>
                    <li><a class="active" href="#">popular</a></li>
                    |
                    <li><a href="#">new </a></li>
                    |
                    <li><a href="#">discount</a></li>
                    |
                    <li><a href="#">price: Low High </a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
        <?php if(isset($list_sp)): ?>
            <?php $__currentLoopData = $list_sp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="grid-product">
                    <div class="product-grid">
                        <div class="content_box">
                            <a href="single.html"> </a>
                            <div class="left-grid-view grid-view-left">
                                <img src="images/hinh_sp/<?php echo e($sp->hinh); ?>" class="img-responsive watch-right"
                                    alt="" />
                                <div class="mask">
                                    <div class="info">Quick View</div>
                                </div>
                            </div>
                            <h4><a href="#"><?php echo e($sp->ten_san_pham); ?></a></h4>
                            <p>It is a long established fact that a reader</p>
                            <span class="actual"><?php echo number_format($sp->gia_giam); ?> ₫</span><br>
                            <span class="reducedfrom"><?php echo number_format($sp->don_gia); ?> ₫</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <?php echo $__env->make('modules.mod_sub_cate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_product.blade.php ENDPATH**/ ?>