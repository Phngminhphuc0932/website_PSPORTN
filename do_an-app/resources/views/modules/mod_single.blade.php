<div class="container">
    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <ul id="etalage">
                    @if (isset($sp_single))
                        @foreach ($sp_single as $sp_s)
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="images/{{$sp_s->hinh}}" class="img-responsive" />
                                    <img class="etalage_source_image" src="images/{{$sp_s->hinh}}" class="img-responsive"
                                        title="" />
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="desc1 span_3_of_2">


                <h4>{{$sp_s->ten_san_pham}}</h4>
                <div class="cart-b">
                    <div class="left-n ">{{$sp_s->don_gia}}</div>
                    <a class="now-get get-cart-in" href="#">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
                <h6>100 items in stock</h6>
                <p>{{$sp_s->gioi_thieu}}</p>
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
        <div class="toogle">
            <h3 class="m_3">Các sản phẩm khác</h3>
        </div>
        <ul id="flexiselDemo1">
            @if (isset($list_mau_ao_moi))
                @foreach ($list_mau_ao_moi as $sp)
                    <li><img src="images/{{ $sp->hinh }}" alt="" />
                        <div class="grid-flex"><a href="#">{{ $sp->ten_san_pham }}</a>
                            <p>{{ $sp->don_gia }}</p>
                        </div>
                    </li>
                @endforeach
        </ul>
        @endif
    </div>

    <!---->
    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">DANH MỤC </h3>
            <ul class="menu">
                <li class="item1"><a href="#">NỔI BẬT<img class="arrow-img" src="images/arrow1.png"
                            alt="" /> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="/product">NIKE </a></li>
                        <li class="subitem2"><a href="/product">JORDAN </a></li>
                        <li class="subitem3"><a href="/product">PEAK SPORT </a></li>
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
</div>
<div class="clearfix"> </div>
</div>
<!---->
