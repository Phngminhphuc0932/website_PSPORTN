<?php $__env->startSection('main-content'); ?>
    <!--main content start-->
    <link rel="stylesheet" href="css/data_table.min.css">
    <script src="js/data_table.min.js"></script>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-table"></i>Table</li>
                        <li><i class="fa fa-th-list"></i>Basic Table</li>
                    </ol>
                </div>
            </div>
            <!-- page start-->

            <?php if($errors->NoticeDelete->first()): ?>
                
                <script>
                    alert('<?php echo e($errors->NoticeDelete->first()); ?>');
                </script>
            <?php endif; ?>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Bảng Khách hàng
                        </header>

                        <table id="ds_san_pham" class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon_profile"></i> Tên khách hàng</th>
                                    <th><i class="icon_calendar"></i> Email</th>
                                    <th><i class="icon_mail_alt"></i> Điểm tích lũy</th>
                                    <th><i class="icon_pin_alt"></i> Điện thoại</th>
                                    <th><i class="icon_mobile"></i> Loại tài khoản</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ds_khach_hang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khach_hang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($khach_hang->ten); ?></td>
                                        <td><?php echo e($khach_hang->email); ?></td>
                                        <td><?php echo e($khach_hang->diem_tich_luy); ?></td>
                                        <td><?php echo e($khach_hang->dien_thoai); ?></td>
                                        <td><?php echo e($khach_hang->ten_loai_user); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary"
                                                    href="/admin/ql-khach-hang/edit/<?php echo e($khach_hang->id); ?>"><i
                                                        class="icon_pencil"></i></a>
                                                <a class="btn btn-danger" onclick="return confirm_delete();"
                                                    id="<?php echo e($khach_hang->id); ?>"
                                                    href="/admin/ql-khach-hang/delete/<?php echo e($khach_hang->id); ?> "><i
                                                        class="icon_trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <script>
        document.getElementById('2').style.visibility = "hidden";
    </script>
    <script>
        $(document).ready(function() {
            $('#ds_san_pham').DataTable();
        });
    </script>
    <?php
    
    ?>

    <!--main content end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/page_admin/trang_ds_user.blade.php ENDPATH**/ ?>