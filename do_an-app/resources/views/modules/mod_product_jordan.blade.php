<div class="container">
    <div class="women-product">
        <div class="w_content">
            <div class="women">
                <a href="#">
                    <h4>Enthecwear - <span>4449 itemms</span></h4>
                </a>
                <ul class="w_nav">
                    <li>Sort :</li>
                    <li><a class="active" href="#">popular</a></li>
                    |
                    <li><a href="#">new </a></li>
                    |
                    <li><a href="#">discount</a></li>
                    |
                    <li><a href="#">price: Low High </a></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- grids_of_4 -->
        <div class="grid-product">
            @foreach ($list_san_pham_jd as $san_pham_jd)
                <div class="product-grid">
                    <div class="content_box">
                        <a href="single.html"> </a>
                        <div class="left-grid-view grid-view-left">
                            <img src="images/{{ $san_pham_jd->hinh }}" class="img-responsive watch-right" alt="" />
                            <div class="mask">
                                <div class="info">Quick View</div>
                            </div>
                        </div>
                        <h4><a href="#"> {{ $san_pham_jd->ten_san_pham }}</a></h4>
                        <p>{{ $san_pham_jd->gioi_thieu }}</p>
                        Rs. 499
                    </div>
                </div>
            @endforeach
            {{-- <div class="product-grid">
                    <div class="content_box">
                        <a href="single.html"></a>
                        <div class="left-grid-view grid-view-left">
                            <img src="images/{{$san_pham->hinh}}" class="img-responsive watch-right" alt="" />
                            <div class="mask">
                                <div class="info">Quick View</div>
                            </div>
                        </div>
                        <h4><a href="#">{{$san_pham->ten_san_pham}}</a></h4>
                        <p>{{$san_pham->gioi_thieu}}</p>
                        Rs. 499
                    </div>
                </div>
           
             <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"></a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic3.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"></a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic4.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"></a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic6.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"> </a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic7.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"></a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic8.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"></a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic11.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div>
            <div class="product-grid">
                <div class="content_box">
                    <a href="single.html"> </a>
                    <div class="left-grid-view grid-view-left">
                        <img src="images/pic12.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                    </div>
                    <h4><a href="#"> Duis autem</a></h4>
                    <p>It is a long established fact that a reader</p>
                    Rs. 499
                </div>
            </div> --}}
            <div class="clearfix"></div>
        </div>
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
    <div class="clearfix"></div>
</div>
