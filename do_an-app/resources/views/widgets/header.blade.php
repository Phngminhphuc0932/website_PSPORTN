<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">Tổng đài hỗ trợ<span class="live"> 24/7 </span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Giao hàng miễn phí <span class="live">cho đơn đặt hàng trên 500 sản
                                phẩm</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="top-header-right">
                <div class="down-top">
                    <select class="in-drop">
                        <option value="VietNamese" class="in-of">VIETNAMESE</option>
                        <option value="Japanese" class="in-of">Japanese</option>
                        <option value="French" class="in-of">French</option>
                        <option value="German" class="in-of">English</option>
                    </select>
                </div>
                <div class="down-top top-down">
                    <select class="in-drop">

                        <option value="VND" class="in-of">VND</option>
                        <option value="Dollar" class="in-of">Dollar</option>
                        <option value="Euro" class="in-of">Euro</option>
                    </select>
                </div>
                <!---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="/index"><img src="images/logo.png" alt=" " /></a>
                </div>
                <div class="search">
                    <input type="text" value="" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value="SEARCH">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">
                <div class="account"><a href={{ url('login') }}><span> </span>TÀI KHOẢN CỦA BẠN</a></div>
                <ul class="login">
                    <li><a href={{ url('login') }}><span> </span>ĐĂNG NHẬP</a></li> |
                    <li><a href={{ url('register') }}>ĐĂNG KÝ</a></li>
                </ul>
                <div class="cart">

                    <div class="number_item_cart  @if (!session()->has('tong_so_luong')) hidden @endif">
                        @if (session()->has('tong_so_luong'))
                            {{ session('tong_so_luong') ?: '0' }}
                        @endif
                    </div>

                    <a href="/gio-hang"><span></span>GIỎ HÀNG</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
