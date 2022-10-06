<div class="container">
    <div class="shoes-grid">
            <div class="wrap-in">
                <div class="wmuSlider example1 slide-grid">
                    @if (isset($list_sp_noi_bat))
                        @foreach ($list_sp_noi_bat as $sp_noi_bat)
                            <div class="wmuSliderWrapper">
                                <article style="position: absolute; width: 100%; opacity: 0;">

                                    <div class="banner-matter">

                                        <div class="col-md-5 banner-bag">
                                            <img class="img-responsive " src="images/hinh_sp/{{ $sp_noi_bat->hinh }}"
                                                alt=" " />
                                        </div>


                                        <div class="col-md-7 banner-off">
                                            <h2>FLASH SALE 50% 0FF</h2>
                                            <label><b>VỚI TẤT CẢ HÓA ĐƠN</b> MUA HÀNG</label>
                                            <p>Thanh toán trực tiếp tại cửa hàng bằng tiền mặt / thẻ tín dụng / chuyển
                                                khoản (*)
                                                / Cổng thanh toán VNPay hoặc Ví điện tử Momo (**). </p>
                                            <a href="/single?id_sp={{$sp_noi_bat->ID}}">
                                                <span class="on-get">Mua Ngay</span>
                                            </a>

                                        </div>

                                        <div class="clearfix"> </div>

                                    </div>

                                </article>

                            </div>
                        @endforeach
                    @endif
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

    <a href="#">
        <div class="col-md-6 con-sed-grid">

            <div class=" elit-grid">
                <label>ÁO THUN NIKE FARROW & BALL</label>
                <p>MẪU ÁO PHÔNG MANG LẠI SỰ TRẺ TRUNG NĂNG ĐỘNG <br> PHỐI MÀU GREY/BLACK </p>
                <span class="on-get">MUA NGAY</span>
            </div>
            <img class="img-responsive shoe-left" src="images/Tshirt_nike_farrow.jpg" alt=" " />

            <div class="clearfix"> </div>

        </div>
    </a>

    <a href="#">
        <div class="col-md-6 con-sed-grid sed-left-top">
            <div class=" elit-grid">
                <label>ÁO THUN NIKE FTWR DSTRD BM</label>
                <p>MẪU ÁO PHÔNG MỚI NHẤT BST THU ĐÔNG CỦA NIKE <br> PHỐI MÀU BLACK/RED</p>
                <span class="on-get">MUA NGAY</span>
            </div>
            <img class="img-responsive shoe-left" src="images/nike_ftwr_dstrd.jpg" alt=" " />

            <div class="clearfix"> </div>
        </div>
    </a>
</div>
<div class="products">
    <h5 class="latest-product">MẪU ÁO MỚI NHẤT</h5>
    <a class="view-all" href="/product">XEM TẤT CẢ<span> </span></a>
</div>

<div class="product-left">
        @if (isset($list_mau_ao_moi))
            @foreach ($list_mau_ao_moi as $mau_ao_moi)
                <div class="col-md-4 chain-grid">
                    <a href="/single?id_sp={{$mau_ao_moi->ID}}"><img class="img-responsive chain" src="images/{{ $mau_ao_moi->hinh }}"
                            alt=" " /></a>
                    <span class="star"></span>
                    <div class="grid-chain-bottom">
                        <h6>
                                <a href="/single?id_sp={{$mau_ao_moi->ID}}">{{ $mau_ao_moi->ten_san_pham }}</a>
                        </h6>
                        <div class="star-price">
                            <div class="dolor-grid">
                                <span class="actual">@VND_monney($mau_ao_moi->don_gia) ₫</span><br>
                                <span class="reducedfrom">@VND_monney($mau_ao_moi->gia_giam) ₫</span>
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
                            <a class="now-get get-cart" href="gio-hang?id_sp={{ $mau_ao_moi->ID }}"
                                data-id-sp="{{ $mau_ao_moi->ID }}">THÊM VÀO GIỎ HÀNG</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>

                </div>
            @endforeach
        @endif


    <div class="clearfix"> </div>

</div>

<div class="products">
    <h5 class="latest-product">MẪU GIÀY MỚI NHẤT</h5>
    <a class="view-all" href="/product">XEM TẤT CẢ<span> </span></a>
</div>
<div class="product-left">
    @if (isset($list_mau_giay_moi))
        @foreach ($list_mau_giay_moi as $mau_giay_moi)
            <div class="col-md-4 chain-grid">
                <a href="/single?id_sp={{$mau_giay_moi->ID}}"><img class="img-responsive chain" src="images/{{ $mau_giay_moi->hinh }}"
                        alt=" " /></a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a href="/single?id_sp={{$mau_giay_moi->ID}}">{{ $mau_giay_moi->ten_san_pham }}</a></h6>
                    <div class="star-price">
                        <div class="dolor-grid">
                            <span class="actual">@VND_monney($mau_giay_moi->gia_giam) ₫</span><br>
                            <span class="reducedfrom">@VND_monney($mau_giay_moi->don_gia) ₫</span>
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
                        <a class="now-get get-cart" href="gio-hang?id_sp={{ $mau_giay_moi->ID }}"
                            data-id-sp="{{ $mau_giay_moi->ID }}">THÊM
                            VÀO GIỎ HÀNG</a>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>
</div>
@include('modules.mod_sub_cate')
<div class="clearfix"> </div>
</div>
