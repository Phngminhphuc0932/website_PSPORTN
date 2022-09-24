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
                                            <img class="img-responsive " src="images/{{ $sp_noi_bat->hinh }}"
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
                                <span class="actual">{{ $mau_ao_moi->gia_giam }}₫</span><br>
                                <span class="reducedfrom">{{ $mau_ao_moi->don_gia }}₫</span>
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
                            <a class="now-get get-cart" href="#">THÊM VÀO GIỎ HÀNG</a>
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
                            <span class="actual">{{ $mau_giay_moi->gia_giam }}₫</span>
                            <span class="reducedfrom">{{ $mau_giay_moi->don_gia }}₫</span>
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
<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate">DANH MỤC </h3>
        <ul class="menu">
            <li class="item1"><a href="#">NỔI BẬT<img class="arrow-img" src="images/arrow1.png"
                        alt="" /> </a>
                <ul class="cute">
                    <li class="subitem1"><a href="/product-nike"> NIKE </a></li>
                    <li class="subitem2"><a href="/product-jordan"> JORDAN </a></li>
                    <li class="subitem3"><a href="/product-peak"> PEAK SPORT </a></li>
                </ul>
            </li>
            <li class="item2"><a href="#">GIÀY DÉP<img class="arrow-img " src="images/arrow1.png"
                        alt="" /></a>
                <ul class="cute">
                    <li class="subitem1"><a href="/product">BASKETBALL </a></li>
                    <li class="subitem2"><a href="/product">SNEAKER </a></li>
                    <li class="subitem3"><a href="/product">RUNNING </a></li>
                    <li class="subitem3"><a href="/product">SLIDE & SANDALS </a></li>
                    <li class="subitem3"><a href="/product">PEAK SPORT </a></li>
                </ul>
            </li>
            <li class="item3"><a href="#">QUẦN ÁO<img class="arrow-img img-arrow" src="images/arrow1.png"
                        alt="" /> </a>
                <ul class="cute">
                    <li class="subitem1"><a href="/product">Cute Kittens </a></li>
                    <li class="subitem2"><a href="/product">Strange Stuff </a></li>
                    <li class="subitem3"><a href="/product">Automatic Fails</a></li>
                </ul>
            </li>
            <li class="item4"><a href="#">PHỤ KIỆN <img class="arrow-img img-left-arrow"
                        src="images/arrow1.png" alt="" /></a>
                <ul class="cute">
                    <li class="subitem1"><a href="/product">PROCOMBAT </a></li>
                    <li class="subitem2"><a href="/product">SOCKS </a></li>
                    <li class="subitem3"><a href="/product">BALL </a></li>
                    <li class="subitem3"><a href="/product">BACKPACKS </a></li>
                    <li class="subitem3"><a href="/product">OTHERS </a></li>
                </ul>
            </li>
            <li class="item4"><a href="#">SALES<img class="arrow-img img-left-arrow" src="images/arrow1.png"
                        alt="" /></a>
                <ul class="cute">
                    <li class="subitem1"><a href="/product">FOOTWARE SALES </a></li>
                    <li class="subitem2"><a href="/product">APPAREL SALES </a></li>
                    <li class="subitem3"><a href="/product">ACESSORIES SALES </a></li>
                </ul>
            </li>
            <ul class="kid-menu ">
                <li><a href="/product">SHOES CARE</a></li>
                <li class="menu-kid-left"><a href={{ url('contact') }}>CONTACT US</a></li>
            </ul>
        </ul>
    </div>
    <!--initiate accordion-->
    <div class=" chain-grid menu-chain">
        <a href="/single?id_sp={{$mau_giay_moi->ID}}"><img class="img-responsive chain" src="images/sneaker_bag.jpg" alt=" " /></a>
        <div class="grid-chain-bottom chain-watch">
            <span class="actual dolor-left-grid"> 299,000 VND</span>
            <span class="reducedfrom">500,000 VND</span>
            <h6><a href="/single?id_sp={{$mau_giay_moi->ID}}">Tee Nike Full Logo - Black</a></h6>
        </div>
    </div>
    <a class="view-all all-product" href="/product">VIEW ALL PRODUCTS<span> </span></a>
</div>
<div class="clearfix"> </div>
</div>

<script type="text/javascript">
    $(function() {
        var menu_ul = $('.menu > li > ul'),
            menu_a = $('.menu > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });
</script>
