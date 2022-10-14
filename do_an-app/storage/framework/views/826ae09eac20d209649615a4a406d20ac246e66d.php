<div class="padding-bottom-3x mb-1 include_table_cart">
    <?php if(session()->has('gio_hang')): ?>
        <?php if(count(session('gio_hang')) > 0): ?>
            <!-- Shopping Cart-->
            <div class="table-responsive shopping-cart">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th class="text-center">Số lượng</th>
                            <?php if($allow_update_cart): ?>
                            <th class="text-center">Đơn giá</th>
                            <th class="text-center">Giá được giảm</th>
                            <?php endif; ?>
                            <th class="text-center">Thành tiền</th>
                            <?php if($allow_update_cart): ?>
                            <th class="text-center"><a class="btn btn-sm btn-outline-danger" onclick="xoa_gio_hang(event)"
                                    href="#">Xóa toàn bộ</a>
                            </th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = session('gio_hang'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp_gio_hang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="san_pham_<?php echo e($sp_gio_hang->ID); ?>">
                                <td>
                                    <div class="product-item">
                                        <a class="product-thumb" href="#"><img
                                                src="/images/hinh_sp/<?php echo e($sp_gio_hang->hinh); ?>" alt="Product"></a>
                                        <div class="product-info">
                                            <h4 class="product-title"><a
                                                    href="#"><?php echo e($sp_gio_hang->ten_san_pham); ?></a>
                                            </h4>
                                            <span><em>Size:</em>
                                                </span><span><em>Color:</em> Dark Blue</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="count-input">
                                        <?php if($allow_update_cart): ?>
                                        <input class="so_luong_input" id="so_luong_<?php echo e($sp_gio_hang->ID); ?>"
                                            onchange="thay_doi_so_luong_gio_hang(<?php echo e($sp_gio_hang->ID); ?>)" type="number"
                                            class="form-control" name="" id=""
                                            value="<?php echo e($sp_gio_hang->so_luong); ?>">
                                        <?php else: ?>
                                        <?php echo e($sp_gio_hang->so_luong); ?>

                                        <?php endif; ?>
                                    </div>
                                </td>
                                <?php if($allow_update_cart): ?>
                                    <td id="don_gia_<?php echo e($sp_gio_hang->ID); ?>" class="text-center text-lg text-medium">
                                        <?php echo number_format($sp_gio_hang->don_gia); ?> đ </td>
                                    <td
                                        id="gia_duoc_giam_<?php echo e($sp_gio_hang->ID); ?>"class="text-center text-lg text-medium">
                                        <?php echo number_format($sp_gio_hang->gia_giam); ?> đ</td>
                                <?php endif; ?>
                                <td class="thanh_tien" id="thanh_tien_<?php echo e($sp_gio_hang->ID); ?>"
                                    class="text-center text-lg text-medium">
                                    <?php echo number_format($sp_gio_hang->gia_giam * $sp_gio_hang->so_luong); ?> đ</td>
                                <?php if($allow_update_cart): ?>
                                    <td class="text-center"><a class="remove-from-cart"
                                            onclick="nut_thung_rac(event, <?php echo e($sp_gio_hang->ID); ?>)" href="#"
                                            data-toggle="tooltip" title="" data-original-title="Remove item"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <?php if($allow_update_cart): ?>
                <div class="shopping-cart-footer">
                    <div class="column">
                        <form class="coupon-form" method="post">
                            <input class="form-control form-control-sm" type="text" placeholder="MÃ GIẢM GIÁ"
                                required="">
                            <button class="btn btn-outline-primary btn-sm" type="submit">Nhập mã giảm giá</button>
                        </form>
                    </div>
            <?php endif; ?>
            <div class="column text-lg text-right" id="tong_tien">Tổng tiền: <span
                    class="text-medium"><?php echo number_format(session('tong_tien')); ?> đ</span>
            </div>
</div>
<?php if($allow_update_cart): ?>
    <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="#"><i
                    class="icon-arrow-left"></i>&nbsp;Quay lại trang chủ</a></div>
        <div class="column"><a class="btn btn-primary" href="/thanh-toan" data-toast="" data-toast-type="success"
                data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart"
                 href="/thanh-toan">Thanh toán</a></div>
    </div>
<?php endif; ?>
<?php else: ?>
<div class="container">
    <div class="notice">
        <h3>không có sản phẩm trong giỏ hàng</h3>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>
</div>
<script>
    function xoa_gio_hang(e) {
        e.preventDefault();
        var kq = confirm('Bạn có chắc chắn muốn xóa toàn bộ giỏ hàng');
        if (kq) {
            $.get('/xoa-gio-hang/')
                .done((data) => {
                    if (data) {
                        $('.number_item_cart').remove();
                        $('.include_table_cart').html(`<div class="container">
            <div class = "notice" >
                <h3> không có sản phẩm trong giỏ hàng </h3>
            </div>
            </div>`);
                    }
                })
                .fail(err => {
                    console.log(err);
                })



        } else {
            //khong lam gi het
        }
    }


    function process_gio_hang_client(id_sp, so_luong) {
        $('#thanh_tien_' + id_sp).html((parseInt($('#gia_duoc_giam_' + id_sp).html().replace(/,/gi , "")) * so_luong).toLocaleString('vi', {style : 'currency', currency : 'VND'}))
        var ds_thanh_tien = $('.thanh_tien');
        var ds_so_luong = $('.so_luong_input');

        var tong_tien = 0;
        var tong_so_luong = 0;

        for (var i = 0; i < ds_thanh_tien.length; i++) {
            tong_tien += parseInt($(ds_thanh_tien[i]).html().replace(/\./gi , ""));
            tong_so_luong += parseInt($(ds_so_luong[i]).val());
        }

        $('#tong_tien').html('Tổng tiền: ' + tong_tien.toLocaleString('vi', {style : 'currency', currency : 'VND'}) + '');
        $('.number_item_cart').html(tong_so_luong);
    }

    function nut_thung_rac(e, id_sp) {
        e.preventDefault();
        var kq = confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng?');
        if (kq) {
            $.get('/xoa-item-gio-hang/' + id_sp)
                .done((data) => {
                    if (data) {
                        $('#san_pham_' + id_sp).remove();
                        process_gio_hang_client(id_sp, 0);
                    }
                })
                .fail(err => {
                    console.log(err);
                })
        } else {
            //khong lam gi het
        }
    }

    function thay_doi_so_luong_gio_hang(id_sp) {
        var so_luong = $('#so_luong_' + id_sp).val();

        if (so_luong > 0) {
            $.get('/update-gio-hang/' + id_sp + '?so_luong=' + so_luong)
                .done((data) => {
                    if (data) {
                        // process_gio_hang_client(id_sp, so_luong);
                        process_gio_hang_client(id_sp, so_luong);
                    }
                })
                .fail(err => {
                    console.log(err);
                })
        } else {
            var kq = confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng?');
            if (kq) {
                $.get('/xoa-item-gio-hang/' + id_sp)
                    .done((data) => {
                        if (data) {
                            $('#san_pham_' + id_sp).remove();
                            process_gio_hang_client(id_sp, 0);
                        }
                    })
                    .fail(err => {
                        console.log(err);
                    })
            } else {
                $.get('/update-gio-hang/' + id_sp + '?so_luong=' + 1)
                    .done((data) => {
                        if (data) {
                            $('#so_luong_' + id_sp).val(1);
                            process_gio_hang_client(id_sp, 1);
                        }
                    })
                    .fail(err => {
                        console.log(err);
                    })
            }
        }
    }
</script>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_trang_gio_hang.blade.php ENDPATH**/ ?>