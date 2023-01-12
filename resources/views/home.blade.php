@extends('layouts.main')
@section('content')

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
    <div class="container" style="margin: 0 auto; margin-left: 10%;">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produk Terlaris</h2>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-1.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-2.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-3.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-4.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-5.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-6.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-7.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{asset('storage/img/featured/feature-8.jpg')}}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
    <div class="container" style="
    margin: 0 auto;
    margin-left: 10%;
">
        <div class="row">
            <div class="col-lg-4 col-md-6">
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
            <div class="col-lg-4 col-md-6">
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
            </div>
            <div class="col-lg-4 col-md-6">
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
            </div>
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
                        <h5><a href="#">Kerjasama Infrastruktur Telekomunikasi & Multimedia Di Modernland Industrial
                                Estate</a></h5>
                        <p>Hari ini PT Parsaoran Global Datatrans (PT PGD) dengan PT Modernland Industrial Estat (MIE)
                            melakukan penandatangan perjanjian kerjasama Penyediaan Infrastruktur Telekomunikasi dan
                            Multimedia untuk di kawasan industri Modernland Cikande</p>
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
                        <p>Akhir Oktober lalu (25/10/2022) PT Parsaoran Global Datatrans (HSP) melakukan penandatangan
                            kerjasama dengan PT Asia Sanprima Jaya (Mall Plaza Asia)Tasikmalaya untuk layanan Internet
                            Broadband & Dedicated di kawasan Mall Plaza Asia. </p>
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
                        <p>Di tahun ini keluarga besar HSP dan Jujung berkesempatan kembali menyelenggarakan acara
                            Employee Gathering pada 25 hingga 27 Agustus 2022 berlokasi di kota Yogyakarta. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection