<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate">DANH MỤC </h3>
        <ul class="menu">
            <?php for($i = 0; $i < count($ds_loai_sp); $i++): ?>
                <li <?php if(count($ds_loai_sp[$i]->ds_loai_con) > 0): ?> class="item1" <?php endif; ?>><a
                        href="#"><?php echo e($ds_loai_sp[$i]->ten_loai_sp); ?><img class="arrow-img" src="images/arrow1.png"
                            alt="" /></a>
                    <?php if(count($ds_loai_sp[$i]->ds_loai_con) > 0): ?>
                        <ul class="cute">
                            <?php for($j = 0; $j < count($ds_loai_sp[$i]->ds_loai_con); $j++): ?>
                                <li class="subitem1"><a
                                        href="/product-type?id_loai_sp=<?php echo e($ds_loai_sp[$i]->ds_loai_con[$j]->ID_loai_sp); ?>"><?php echo e($ds_loai_sp[$i]->ds_loai_con[$j]->ten_loai_sp); ?></a></li>
                            <?php endfor; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endfor; ?>
            <ul class="kid-menu ">
                <li class="menu-kid-left"><a href=<?php echo e(url('contact')); ?>>CONTACT US</a></li>
            </ul>
        </ul>
    </div>
    <div class=" chain-grid menu-chain">
        <a href="/single"><img class="img-responsive chain" src="images/sneaker_bag.jpg" alt=" " /></a>
        <div class="grid-chain-bottom chain-watch">
            <span class="actual dolor-left-grid">299,000 VND</span>
            <span class="reducedfrom">500,000 VND</span>
            <h6><a href="/single">Tee Nike Full Logo - Black</a></h6>
        </div>
    </div>
    <a class="view-all all-product" href="/product">VIEW ALL PRODUCTS<span> </span></a>
</div>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/modules/mod_sub_cate.blade.php ENDPATH**/ ?>