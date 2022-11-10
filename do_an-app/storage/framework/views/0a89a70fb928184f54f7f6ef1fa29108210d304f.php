<div class="container">
    <div class="shoes-grid">
        <div class="wrap-in">
            <div class="wmuSlider example1 slide-grid">
                <?php if(isset($list_sp_noi_bat)): ?>
                    <?php $__currentLoopData = $list_sp_noi_bat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_noi_bat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="wmuSliderWrapper">
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-matter">
                                    <div class="col-md-5 banner-bag">
                                        <img class="img-responsive " src="images/hinh_sp/<?php echo e($sp_noi_bat->hinh); ?>"
                                            alt=" " />
                                    </div>
                                    <div class="col-md-7 banner-off">
                                        <h2>FLASH SALE 50% 0FF</h2>
                                        <label><b>VỚI TẤT CẢ HÓA ĐƠN</b> MUA HÀNG</label>
                                        <p>Thanh toán trực tiếp tại cửa hàng bằng tiền mặt / thẻ tín dụng / chuyển
                                            khoản (*)
                                            / Cổng thanh toán VNPay hoặc Ví điện tử Momo (**). </p>
                                        <a href="/single?id_sp=<?php echo e($sp_noi_bat->ID); ?>">
                                            <span class="on-get">Mua Ngay</span>
                                        </a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                    <li><a href="#" class="">2</a></li>
                </ul>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>
        </a>
        <!---->
        <div class="shoes-grid-left">
            <?php if(isset($list_sp_noi_bat)): ?>
                <?php $__currentLoopData = $list_sp_noi_bat->splice(0, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_noi_bat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 con-sed-grid">
                        <div class=" elit-grid">
                            <label><?php echo e($sp_noi_bat->ten_san_pham); ?></label>
                            <p class="in_par">Trải nghiệm ngay những đôi giày tốt nhất tại cửa hàng chúng tôi!</p>
                            <span class="on-get">MUA NGAY</span>
                        </div>
                        <img class="img-responsive shoe-left" src="images/hinh_sp/<?php echo e($sp_noi_bat->hinh); ?>"
                            alt=" " />
                        <div class="clearfix"> </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>
        <div class="products">
            <h5 class="latest-product">MẪU ÁO MỚI NHẤT</h5>
            <a class="view-all" href="/product">XEM TẤT CẢ<span> </span></a>
        </div>

        <div class="product-left">
            <?php if(isset($list_mau_ao_moi)): ?>
                <?php $__currentLoopData = $list_mau_ao_moi->splice(0, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mau_ao_moi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 chain-grid">
                        <a href="/single?id_sp=<?php echo e($mau_ao_moi->ID); ?>"><img class="img-responsive chain"
                                src="images/hinh_sp/<?php echo e($mau_ao_moi->hinh); ?>" alt=" " /></a>
                        <span class="star"></span>
                        <div class="grid-chain-bottom">
                            <h6>
                                <a href="/single?id_sp=<?php echo e($mau_ao_moi->ID); ?>"><?php echo e($mau_ao_moi->ten_san_pham); ?></a>
                            </h6>
                            <div class="star-price">
                                <div class="dolor-grid">
                                    <span class="actual"><?php echo number_format($mau_ao_moi->gia_giam); ?> ₫</span><br>
                                    <span class="reducedfrom"><?php echo number_format($mau_ao_moi->don_gia); ?> ₫</span>
                                    <span class="rating">
                                        <input type="radio" class="rating-input" id="rating-input-1-5"
                                            name="rating-input-1">
                                        <label for="rating-input-1-5" class="rating-star1"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-4"
                                            name="rating-input-1">
                                        <label for="rating-input-1-4" class="rating-star1"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-3"
                                            name="rating-input-1">
                                        <label for="rating-input-1-3" class="rating-star"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-2"
                                            name="rating-input-1">
                                        <label for="rating-input-1-2" class="rating-star"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-1"
                                            name="rating-input-1">
                                        <label for="rating-input-1-1" class="rating-star"> </label>
                                    </span>
                                </div>
                                <a class="now-get get-cart" href="gio-hang?id_sp=<?php echo e($mau_ao_moi->ID); ?>"
                                    data-id-sp="<?php echo e($mau_ao_moi->ID); ?>">THÊM VÀO GIỎ HÀNG</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>


            <div class="clearfix"> </div>

        </div>

        <div class="products">
            <h5 class="latest-product">MẪU GIÀY MỚI NHẤT</h5>
            <a class="view-all" href="/product">XEM TẤT CẢ<span> </span></a>
        </div>
        <div class="product-left">
            <?php if(isset($list_mau_giay_moi)): ?>
                <?php $__currentLoopData = $list_mau_giay_moi->splice(0, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mau_giay_moi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 chain-grid">
                        <a href="/single?id_sp=<?php echo e($mau_giay_moi->ID); ?>"><img class="img-responsive chain"
                                src="images/hinh_sp/<?php echo e($mau_giay_moi->hinh); ?>" alt=" " /></a>
                        <span class="star"> </span>
                        <div class="grid-chain-bottom">
                            <h6><a href="/single?id_sp=<?php echo e($mau_giay_moi->ID); ?>"><?php echo e($mau_giay_moi->ten_san_pham); ?></a>
                            </h6>
                            <div class="star-price">
                                <div class="dolor-grid">
                                    <span class="actual"><?php echo number_format($mau_giay_moi->gia_giam); ?> ₫</span><br>
                                    <span class="reducedfrom"><?php echo number_format($mau_giay_moi->don_gia); ?> ₫</span>
                                    <span class="rating">
                                        <input type="radio" class="rating-input" id="rating-input-1-5"
                                            name="rating-input-1">
                                        <label for="rating-input-1-5" class="rating-star1"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-4"
                                            name="rating-input-1">
                                        <label for="rating-input-1-4" class="rating-star1"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-3"
                                            name="rating-input-1">
                                        <label for="rating-input-1-3" class="rating-star"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-2"
                                            name="rating-input-1">
                                        <label for="rating-input-1-2" class="rating-star"> </label>
                                        <input type="radio" class="rating-input" id="rating-input-1-1"
                                            name="rating-input-1">
                                        <label for="rating-input-1-1" class="rating-star"> </label>
                                    </span>
                                </div>
                                <a class="now-get get-cart" href="gio-hang?id_sp=<?php echo e($mau_giay_moi->ID); ?>"
                                    data-id-sp="<?php echo e($mau_giay_moi->ID); ?>">THÊM
                                    VÀO GIỎ HÀNG</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <?php echo $__env->make('modules.mod_sub_cate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="clearfix"> </div>
</div>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_trang_chu.blade.php ENDPATH**/ ?>