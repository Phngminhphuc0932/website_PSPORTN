<div class="container">

    <div class=" single_top">
        <div class="single_grid">

            <div class="grid images_3_of_2">
                <ul id="etalage">
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="images/{{ $thong_tin_san_pham->->hinh }}" class="img-responsive" />
                            <img class="etalage_source_image" src="images/{{ $thong_tin_san_pham->->hinh }}" class="img-responsive"
                                title="" />
                        </a>
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="images/{{ $thong_tin_san_pham->->hinh }}" class="img-responsive" />
                        <img class="etalage_source_image" src="images/{{ $thong_tin_san_pham->->hinh }}" class="img-responsive"
                            title="" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="images/{{ $thong_tin_san_pham->->hinh }}" class="img-responsive" />
                        <img class="etalage_source_image" src="images/{{ $thong_tin_san_pham->->hinh }}"class="img-responsive" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="images/{{ $thong_tin_san_pham->->hinh }}" class="img-responsive" />
                        <img class="etalage_source_image" src="images/{{ $thong_tin_san_pham->->hinh }}"class="img-responsive" />
                    </li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="desc1 span_3_of_2">

                {{-- name product --}}
                <h4>{{ $thong_tin_san_pham->ten_san_pham }}</h4>
                <div class="cart-b">
                    {{-- price --}}
                    <div class="left-n ">{{ $thong_tin_san_pham->don_gia }} VND</div>
                    <a class="now-get get-cart-in" href="#">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
                {{-- amount --}}
                <h6>100 items in stock</h6>
                <p>{{ $thong_tin_san_pham->gioi_thieu }}</p>
                {{-- @endforeach --}}
                <div class="share">
                    <h5>Share Product :</h5>
                    <ul class="share_nav">
                        <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                        <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                        <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                    </ul>
                </div>


            </div>
            <div class="clearfix"> </div>
        </div>
        <ul id="flexiselDemo1">
            @foreach ($list_sp as $sp)
                <li><img src="images/{{ $sp->hinh }}" />
                    <div class="grid-flex"><a href="#">Bloch</a>
                        <p>Rs 850</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>

        <div class="toogle">
            <h3 class="m_3">Product Details</h3>
            {{-- ghi mô tả sản phẩm --}}
            <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
                nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
        </div>
    </div>

    <!---->
    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">DANH MỤC </h3>
            <ul class="menu">
                <li class="item1"><a href="#">NỔI BẬT<img class="arrow-img" src="images/arrow1.png"
                            alt="" /> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="/product"> NIKE </a></li>
                        <li class="subitem2"><a href="/product"> JORDAN </a></li>
                        <li class="subitem3"><a href="/product"> PEAK SPORT </a></li>
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
                <li class="item4"><a href="#">SALES<img class="arrow-img img-left-arrow"
                            src="images/arrow1.png" alt="" /></a>
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
        <div class=" chain-grid menu-chain">
            <a href="/single"><img class="img-responsive chain" src="images/sneaker_bag.jpg" alt=" " /></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid"> 299,000 VND</span>
                <span class="reducedfrom">500,000 VND</span>
                <h6><a href="/single">Tee Nike Full Logo - Black</a></h6>
            </div>
        </div>
        <a class="view-all all-product" href="/product">VIEW ALL PRODUCTS<span> </span></a>
    </div>
    <div class="clearfix"> </div>
</div>
