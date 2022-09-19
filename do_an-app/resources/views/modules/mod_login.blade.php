<div class="container">

    <div class="account_grid">
        <div class=" login-right">
            <h3>REGISTERED CUSTOMERS</h3>
            <p>If you have an account with us, please log in.</p>

            {!! Form::open(['route' => 'savecreatenewaccount', 'class' => 'register_form', 'files' => true]) !!}

            <!-- Email -->
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}<br>

            <!-- password -->
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!} <br>
            <div>
                <a class="forgot" href="#">Forgot Your Password?</a><br><br>
                {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            {{-- <form>
                <div>
                    <span>Email Address<label>*</label></span>
                    <input type="text">
                </div>
                <div>
                    <span>Password<label>*</label></span>
                    <input type="text">
                </div>
                <a class="forgot" href="#">Forgot Your Password?</a>
                <input type="submit" value="Login">
            </form> --}}
        </div>
        <div class=" login-left">
            <h3>NEW CUSTOMERS</h3>
            <p>By creating an account with our store, you will be able to move through the checkout process faster,
                store multiple shipping addresses, view and track your orders in your account and more.</p>
            <a class="acount-btn" href="/register">Create an Account</a>
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

    <div class="clearfix"> </div>
</div>
<!---->
