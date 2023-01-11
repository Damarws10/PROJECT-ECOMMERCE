<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSP | Ecommerce</title>

    <!-- Google Font -->
    <link href="{{asset('storage/img/favicon.png')}}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/elegant-icons.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/font-awesome.min.css')}}">
</head>

<body>
<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <li><i class="fa fa-envelope"></i> telemarketing@hsp.net.id</li>
                        <li>Gratis pengiriman untuk semua pesanan</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    <div class="humberger__menu__widget">
                    <div class="header__top__right__language">
                        <a class="d-inline" href="#"></a>
                        @if (Route::has('login'))
                        
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fa fa-user"> Home </i></a>

                            @else
                            <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fa fa-user"> Log In </i></a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fa fa-sign-out"> Register </i></a>

                        <ul>

                        <li>
                        
                            
                        </li>
                        
                        <li>
                        
                        </li>

                        <li>
                        
                        </li>
                        @endif
                        @endauth    
                        </ul>
                        @endif
                    </div>
                    </div>
                    <!-- Header -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <li><a href="./shop-grid">Shop</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="header__menu__dropdown">
                            <li><a href="{{ route('shoping-cart') }}">Shoping Cart</a></li>
                            <li><a href="{{ route('checkout') }}">Check Out</a></li>
                            <li><a href="{{ route('companyprofile') }}">Company Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="./blog">Blog</a></li>
                    <li><a href="./contact">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3">
            <div class="header__cart">
                <ul>
                    <li><a href="./wishlist"><i class="fa fa-heart"></i> <span>1</span></a></li>
                    <li><a href="./shoping-cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="humberger__open">
        <i class="fa fa-bars"></i>
    </div>
</div>
<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{asset('storage/img/language.png')}}" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="wishlist"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="shoping-cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">Harga: <span>Rp.1000</span></div>
    </div>
    <div class="humberger__menu__widget">
                    <div class="header__top__right__language">
                        <a class="d-inline" href="#"><i class="fa fa-user"></i> </a>
                        @if (Route::has('login'))
                        <span class="arrow_carrot-down"></span>
                        <ul>

                        <li>
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fa fa-user"> Home </i></a>
                        </li>
                        
                        <li>
                        @else
                            <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fa fa-user"> Log In </i></a>
                        </li>

                        <li>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                            <i class="fa fa-sign-out"> Register </i></a>
                        </li>
                        @endif
                        @endauth    
                        </ul>
                        @endif
                    </div>
                    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./">Home</a></li>
            <li><a href="./shop-grid">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="{{ route('shoping-cart') }}">Shoping Cart</a></li>
                    <li><a href="{{ route('checkout') }}">Check Out</a></li>
                    <li><a href="{{ route('companyprofile') }}">Company Profile</a></li>
                </ul>
            </li>
            <li><a href="./blog">Blog</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> telemarketing@hsp.net.id</li>
            <li>Gratis pengiriman untuk semua pesanan</li>
        </ul>
    </div>
</div>
    <!-- Humberger End -->
<!-- Content Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Semua Kategori</span>
                    </div>
                    <ul>
                        <li><a href="#">Router</a></li>
                        <li><a href="#">Wireless Card</a></li>
                        <li><a href="#">LAN Card</a></li>
                        <li><a href="#">Bridge</a></li>
                        <li><a href="#">HUB</a></li>
                        <li><a href="#">Switch</a></li>
                        <li><a href="#">Access Point</a></li>
                        <li><a href="#">Repeaters</a></li>
                        <li><a href="#">NIC</a></li>
                        <li><a href="#">Konektor</a></li>
                        <li><a href="#">Kabel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Semua Kategori
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="Apa yang kamu butuhkan?">
                            <button type="submit" class="site-btn">CARI</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0812-2222-7754</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="{{ asset('storage/img/hero/banner.jpg')}}">
                    <div class="hero__text">
                        <span>HSP E-COMMERCE</span>
                        <h2>MENJUAL<br />PERALATAN INTERNET</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">BELI SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="section-title">
            <h2>Barang Diskon</h2>
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('storage/img/categories/cat-1.jpg')}}">
                        <h5><a href="#">Router</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('storage/img/categories/cat-2.jpg')}}">
                        <h5><a href="#">Wireless card</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('storage/img/categories/cat-3.jpg')}}">
                        <h5><a href="#">Bridge</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('storage/img/categories/cat-4.jpg')}}">
                        <h5><a href="#">Access Point</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('storage/img/categories/cat-5.jpg')}}">
                        <h5><a href="#">Konektor RJ</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

    <!-- Produk Unggulan Begin -->
    <section class="featured spad">
        <div class="container" style="
        margin: 0 auto; margin-left: 10%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produk Unggulan</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".oranges">Router</li>
                            <li data-filter=".fresh-meat">Bridge</li>
                            <li data-filter=".vegetables">LAN Card</li>
                            <li data-filter=".fastfood">Access Point</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-1.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Router</a></h6>
                            <h5>Rp.150.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-2.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Wireless Card</a></h6>
                            <h5>Rp.300.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-3.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">LAN Card</a></h6>
                            <h5>Rp. 100.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-4.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Bridge</a></h6>
                            <h5>Rp. 270.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-5.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">HUB</a></h6>
                            <h5>Rp. 100.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-6.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Switch</a></h6>
                            <h5>Rp.120.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-7.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Access Point</a></h6>
                            <h5>Rp.200.000,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/img/featured/feature-8.jpg')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Kabel LAN</a></h6>
                            <h5>Rp.200.000,-</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk Unggulan End -->

    <!-- Banner Begin -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{asset('storage/img/banner/banner-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{asset('storage/img/banner/banner-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Banner End -->

    <!-- Produk Terbaru Section Begin -->
<section class="latest-product spad">
    <div class="container"style="
    margin: 0 auto;
    margin-left: 10%;
">
        <div class="row">
            <div class="offset-lg-2 col-lg-6 col-md-6">
                <div class="latest-product__text">
                    <h4>produk terbaru</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Router</h6>
                                    <span>Rp. 150.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>LAN Card</h6>
                                    <span> Rp.100.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kabel LAN</h6>
                                    <span>Rp. 200.000</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Router</h6>
                                    <span>Rp. 150.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>LAN Card</h6>
                                    <span> Rp.100.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kabel LAN</h6>
                                    <span>Rp. 200.000</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--HIDE<div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Produk Tingkat Teratas</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Router</h6>
                                    <span>Rp. 150.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>LAN Card</h6>
                                    <span> Rp.100.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kabel LAN</h6>
                                    <span>Rp. 200.000</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Router</h6>
                                    <span>Rp. 150.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>LAN Card</h6>
                                    <span> Rp.100.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kabel LAN</h6>
                                    <span>Rp. 200.000</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--HIDE<div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Router</h6>
                                    <span>Rp. 150.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>LAN Card</h6>
                                    <span> Rp.100.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kabel LAN</h6>
                                    <span>Rp. 200.000</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-1.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Router</h6>
                                    <span>Rp. 150.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-2.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>LAN Card</h6>
                                    <span> Rp.100.000</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{asset('storage/img/latest-product/lp-3.jpg')}}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Kabel LAN</h6>
                                    <span>Rp. 200.000</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</section>
<!-- Produk Terbaru Section End -->

<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('storage/img/blog/blog-1.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Jakarta, 05/08/2022</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Kerjasama Infrastruktur Telekomunikasi & Multimedia Di Modernland Industrial Estate</a></h5>
                        <p>Hari ini PT Parsaoran Global Datatrans (PT PGD) dengan PT Modernland Industrial Estat (MIE) melakukan penandatangan perjanjian kerjasama Penyediaan Infrastruktur Telekomunikasi dan Multimedia untuk di kawasan industri Modernland Cikande</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('storage/img/blog/blog-2.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Tasikmalaya, 25/10/2022</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Kolaborasi HSP & Plaza Asia Tasikmalaya</a></h5>
                        <p>Akhir Oktober lalu (25/10/2022) PT Parsaoran Global Datatrans (HSP) melakukan penandatangan kerjasama dengan PT Asia Sanprima Jaya (Mall Plaza Asia)Tasikmalaya untuk layanan Internet Broadband & Dedicated di kawasan Mall Plaza Asia. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="{{asset('storage/img/blog/blog-3.jpg')}}" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> Jakarta, 25/08/2022</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Employee Gathering 2022 & HUT HSP KE-12</a></h5>
                        <p>Di tahun ini keluarga besar HSP dan Jujung berkesempatan kembali menyelenggarakan acara Employee Gathering pada 25 hingga 27 Agustus 2022 berlokasi di kota Yogyakarta. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="footer__about__logo">
                <a href="./"><img src="{{asset('storage/img/logo.png')}}" alt=""></a>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="footer__about">
                    
                    <ul>
                        <h4>JAKARTA SELATAN</h4>
                        <li>Graha STK Jl. Taman Marga Satwa. Pasar Minggu, Jakarta Selatan 12550</li>
                        <li>No. Telp: (021) - 39703970</li>
                        <li>Email: telemarketing@hsp.net.id</li>
                    </ul>
                    <br>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="footer__about">
                <ul>
                    <h4>JAKARTA TIMUR</h4>
                    <li>Jl. Tanah Merdeka No. 1 RT 010 RW 003 Rambutan Ciracas Jakarta Timur </li>
                    <li>No. Telp: (021) - 39703970</li>
                    <li>Email: telemarketing@hsp.net.id</li>
                </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer__widget">
                    <h6>Link terkait</h6>
                    <ul>
                        <li><a href="#">Kebijakan Pribadi</a></li>
                        <li><a href="#">Informasi Pengiriman</a></li>
                        <li><a href="#">Peta Situs</a></li>
                        <li><a href="#">Testimoni</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Bergabunglah dengan Kami Sekarang</h6>
                    <p>Dapatkan update Email tentang toko terbaru kami dan penawaran khusus.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
    
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> HSP E-COMMERCE | </i> by <a href="https://hsp.net.id" target="_blank">HSPNET</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('storage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('storage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('storage/js/mixitup.min.js')}}"></script>
    <script src="{{asset('storage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('storage/js/main.js')}}"></script>

    </body>
</html>