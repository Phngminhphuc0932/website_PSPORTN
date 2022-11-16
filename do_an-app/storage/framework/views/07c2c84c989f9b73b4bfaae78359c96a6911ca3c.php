<?php $__env->startSection('main-content'); ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-user"></i>
                        <div class="count">6.674</div>
                        <div class="title">Khách hàng mới</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-user"></i>
                        <?php if(isset($khach_hang)): ?>
                            <?php $__currentLoopData = $khach_hang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="count"><?php echo e($user->so_luong_khach_hang); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <div class="title">Thành viên</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <?php if(isset($tong_so_luong)): ?>
                            <?php $__currentLoopData = $tong_so_luong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tsl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="count"><?php echo e($tsl->tong_so_luong); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <div class="title">Đơn hàng</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count">1.426</div>
                        <div class="title">Lượt truy cập</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

            </div>
            <!--/.row-->
            <div class="post-container">
                <div class="poster fade">
                    <img src="/admin_page/img/banner-san-pham.jpg" alt="" style="width:100%; height:350px">
                </div>
                <div class="poster fade">
                    <img src="/admin_page/img/banner_2.jpg" alt="" style="width:100%; height:350px">
                </div>
                <div class="poster fade">
                    <img src="/admin_page/img/banner_3.jpg" alt="" style="width:100%; height:350px">
                </div>

                <br>

                <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

            </div>

            <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                    let i;
                    let slides = document.getElementsByClassName("poster");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 3000);
                }
            </script>
        </section>
    </section>
    <!--main content end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/page_admin/trang_dashboard.blade.php ENDPATH**/ ?>