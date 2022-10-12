<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate">DANH MỤC </h3>
        <ul class="menu">
            <li class="item1"><a href="#">NỔI BẬT<img class="arrow-img" src="images/arrow1.png"
                        alt="" /> </a>
                <ul class="cute">
                    <li class="subitem1"><a href="/product-nike">NIKE </a></li>
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
                    <li class="subitem1"><a href="/product">PROCOMBAT</a></li>
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
            @for ($i = 0; $i < count($ds_loai_sp); $i++)
                <li @if (count($ds_loai_sp[$i]->ds_loai_con) > 0) class="item1" @endif><a
                        href="#">{{ $ds_loai_sp[$i]->ten_loai_sp }}<img class="arrow-img" src="images/arrow1.png"
                            alt="" /></a>
                    @if (count($ds_loai_sp[$i]->ds_loai_con) > 0)
                        <ul class="cute">
                            @for ($j = 0; $j < count($ds_loai_sp[$i]->ds_loai_con); $j++)
                                <li class="subitem1"><a
                                        href="#">{{ $ds_loai_sp[$i]->ds_loai_con[$j]->ten_loai_sp }}</a></li>
                            @endfor
                        </ul>
                    @endif
                </li>
            @endfor
            <ul class="kid-menu ">
                <li class="menu-kid-left"><a href={{ url('contact') }}>CONTACT US</a></li>
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
