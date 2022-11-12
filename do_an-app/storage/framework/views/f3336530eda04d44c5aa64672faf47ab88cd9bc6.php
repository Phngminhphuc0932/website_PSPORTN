<div class="container">
    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <ul id="etalage">
                    <?php if(isset($sp_single)): ?>
                        <?php $__currentLoopData = $sp_single; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img class="etalage_thumb_image" src="images/hinh_sp/<?php echo e($sp_s->hinh); ?>"
                                    class="img-responsive" />
                                <img class="etalage_source_image" src="images/hinh_sp/<?php echo e($sp_s->hinh); ?>"
                                    class="img-responsive" title="" />
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($img_more)): ?>
                            <?php $__currentLoopData = $img_more; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <img class="etalage_thumb_image" src="images/hinh_sp/<?php echo e($img->ten_hinh); ?>"
                                        class="img-responsive" />
                                    <img class="etalage_source_image" src="images/hinh_sp/<?php echo e($img->ten_hinh); ?>"
                                        class="img-responsive" title="" />
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="desc1 span_3_of_2">
                <h4><?php echo e($sp_s->ten_san_pham); ?></h4>
                <div class="cart-b">
                    <div class="left-n"><?php echo number_format($sp_s->gia_giam); ?> đ
                    <span class="left-n reducedfrom"><?php echo number_format($sp_s->don_gia); ?> ₫</span>
                    </div>
                    <a class="now-get get-cart-in" href="gio-hang?id_sp=<?php echo e($sp_s->ID); ?>"
                        data-id-sp="<?php echo e($sp_s->ID); ?>">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
                
                <p><?php echo e($sp_s->gioi_thieu); ?></p>
                <?php endif; ?>
                


            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="toogle">
            <h3 class="m_3">Các sản phẩm khác</h3>
        </div>
        <ul id="flexiselDemo1">
            <?php if(isset($list_mau_ao_moi)): ?>
                <?php $__currentLoopData = $list_mau_ao_moi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><img src="images/hinh_sp/<?php echo e($sp->hinh); ?>" alt="" />
                        <div class="grid-flex">

                            <a href="/single?id_sp=<?php echo e($sp->ID); ?>">
                                <p class="in_one_line">
                                    <?php echo e($sp->ten_san_pham); ?>

                                </p>
                            </a>
                            <p style="margin-top: -20px "><?php echo number_format($sp->don_gia); ?> đ</p>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <?php echo $__env->make('modules.mod_sub_cate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!---->

</div>
<div class="clearfix"> </div>
</div>
<!---->
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_single.blade.php ENDPATH**/ ?>