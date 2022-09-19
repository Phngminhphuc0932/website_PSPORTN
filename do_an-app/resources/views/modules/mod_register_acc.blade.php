<div class="container">

    <div class="register">
        <form>
            <div class="  register-top-grid">
                <h3> THÔNG TIN CÁ NHÂN </h3>
                <div class="mation">
                    {!! Form::open(['route' => 'savecreatenewaccount', 'class' => 'register_form', 'files' => true]) !!}

                    {!! Form::label('last_name', 'Họ') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}

                    {!! Form::label('first_name', 'Tên') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}

                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}

                    {{-- {!! Form::close() !!} --}}
                    {{-- <span>Họ<label>*</label></span>
                    <input type="text">

                    <span>Tên<label>*</label></span>
                    <input type="text">

                    <span>Địa chỉ Email<label>*</label></span>
                    <input type="text"> --}}
                </div>
                <div class="clearfix"> </div>
                <a class="news-letter" href="#">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Đăng
                        Ký</label>
                </a>
            </div>
            <div class="  register-bottom-grid">
                <h3>THÔNG TIN ĐĂNG NHẬP</h3>
                <div class="mation">
                    {{-- {!! Form::open(['route' => 'savecreatenewaccount', 'class' => 'register_form', 'files' => true]) !!} --}}

                    {!! Form::label('password', 'Mật khẩu') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}

                    {!! Form::label('re_password', 'Xác nhận mật khẩu') !!}
                    {!! Form::password('re_password', ['class' => 'form-control']) !!}

                    {{-- {!! Form::close() !!} --}}
                    {{-- <span>Mật Khẩu<label>*</label></span>
                    <input type="text">
                    <span>Xác Nhận Mật Khẩu<label>*</label></span>
                    <input type="text"> --}}
                </div>
            </div>
        </form>
        <div class="clearfix"> </div>
        <div class="register-but">
            {{-- {!! Form::open(['route' => 'savecreatenewaccount', 'class' => 'register_form', 'files' => true]) !!} --}}

            {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            {{-- <form>
                <input type="submit" value="submit">
                <div class="clearfix"> </div>
            </form> --}}
        </div>
    </div>
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
            <a href="single.html"><img class="img-responsive chain" src="images/sneaker_bag.jpg" alt=" " /></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid"> 299,000 VND</span>
                <span class="reducedfrom">500,000 VND</span>
                <h6><a href="single.html">Tee Nike Full Logo - Black</a></h6>
            </div>
        </div>
        <a class="view-all all-product" href="/product">VIEW ALL PRODUCTS<span> </span></a>
    </div>

    <a class="view-all all-product" href="/product">VIEW ALL PRODUCTS<span> </span></a>
</div>
</div>
