<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="header__logo">
                <a href="./"><img src="{{ asset('storage/img/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-6">
            <nav class="header__menu">
                <ul>
                    <li class="active"><a href="./">Home</a></li>
                    <li><a href="{{ route('shop-grid') }}">Shop</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="{{ route('shoping-cart') }}">Shoping Cart</a></li>
                            <li><a href="{{ route('checkout') }}">Check Out</a></li>
                            <li><a href="{{ route('companyprofile') }}">Company Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3">
            <div class="header__cart">
                <ul>
                    <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i> <span>1</span></a></li>
                    <li><a href="{{ route('shoping-cart') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="humberger__open">
        <i class="fa fa-bars"></i>
    </div>
</div>