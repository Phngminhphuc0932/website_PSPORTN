<?php if(isset($NoticeSuccess)): ?>
    <script>
        alert("<?php echo e($NoticeSuccess); ?>");
    </script>
<?php endif; ?>
<div class="container">
    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form_them_san_pham">
            <div class="form-group">
                <legend>Thông tin sản phẩm</legend>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Tên sản phẩm
                </div>
                <div class="col-md-9">
                    <input type="text" name="ten_san_pham" id="ten_san_pham" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Loại sản phẩm
                </div>
                <div class="col-md-9">
                    <select name="id_loai_sp" id="id_loai_sp" class="form-control" value="" required="required"
                        name="" id="">
                        <?php if(isset($list_loai_sp)): ?>
                            <?php $__currentLoopData = $list_loai_sp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($l_sp->ID_loai_sp); ?>"><?php echo e($l_sp->ID_loai_sp); ?> -
                                    <span><?php echo e($l_sp->ten_loai_sp); ?></span></span>
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Nhà sản xuất
                </div>
                <div class="col-md-9">
                    <select name="id_nha_san_xuat" id="id_nha_san_xuat" class="form-control" value=""
                        required="required" name="" id="">
                        <?php if(isset($ds_nsx)): ?>
                            <?php $__currentLoopData = $ds_nsx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nsx->ID); ?>"><?php echo e($nsx->ID); ?> -
                                    <span><?php echo e($nsx->ten_nha_san_xuat); ?></span></span>
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Giới thiệu
                </div>
                <div class="col-md-9">
                    <textarea name="gioi_thieu" id="gioi_thieu" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Đơn giá
                </div>
                <div class="col-md-9">
                    <input type="text" name="don_gia" id="don_gia" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Giá giảm
                </div>
                <div class="col-md-9">
                    <input type="text" name="gia_giam" id="gia_giam" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    SKU
                </div>
                <div class="col-md-9">
                    <input type="text" name="sku" id="sku" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Nổi bật
                </div>
                <div class="col-md-9">
                    <Select name="noi_bat" id="noi_bat" class="form-control" value="" required="required">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </Select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Trạng thái
                </div>
                <div class="col-md-9">
                    <Select name="trang_thai" id="trang_thai" class="form-control" value="" required="required">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </Select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Hình sản phẩm
                </div>
                <div class="col-md-9">
                    <input type="file" name="hinh" id="hinh" class="form-control">
                    <div id="image-holder">
                        <img src="" alt="thumb-image">
                    </div>
                </div>
                <script>
                    $("#hinh").on('change', function() {

                        if (typeof(FileReader) != "undefined") {

                            var image_holder = $("#image-holder");
                            image_holder.empty();

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("<img />", {
                                    "src": e.target.result,
                                    "class": "thumb-image"
                                }).appendTo(image_holder);

                            }
                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[0]);
                        } else {
                            alert("This browser does not support FileReader.");
                        }
                    });
                </script>
            </div>

            <div class="form-group">
                <div class="col-md-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" style="padding: 5px 30px">Thêm sản phẩm</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/page_admin/modules/mod_them_sp.blade.php ENDPATH**/ ?>