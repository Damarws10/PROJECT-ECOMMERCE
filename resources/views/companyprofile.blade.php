@extends('layouts.main')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
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
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="{{asset('storage/img/blog/details/details-hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>PT. Parsaoran Global Datatrans </h2>
                        <ul>
                            <li>Internet Services</li>
                            <li>Connectivity</li>
                            <li>Solution</li>
                            <li>Data Center</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Cari...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Kategori</h4>
                            <ul>
                                <li><a href="#">Semua</a></li>
                                <li><a href="#">Modem (20)</a></li>
                                <li><a href="#">Tiang (5)</a></li>
                                <li><a href="#">Kabel (9)</a></li>
                                <li><a href="#">Router (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Berita Terbaru</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{asset('storage/img/blog/sidebar/sr-1.jpg')}}" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Koneksi Jaringan</h6>
                                        <span>Sep 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{asset('storage/img/blog/sidebar/sr-2.jpg')}}" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Fiber Optic</h6>
                                        <span>Okt 21, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{asset('storage/img/blog/sidebar/sr-3.jpg')}}" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Jaringan 5G</h6>
                                        <span>Nov 05, 2022</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Cari</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Router</a>
                                <a href="#">HUB</a>
                                <a href="#">Access Point</a>
                                <a href="#">LAN CARD</a>
                                <a href="#">Switch</a>
                                <a href="#">Bridge</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="{{asset('storage/img/blog/details/details-pic.jpg')}}" alt="">
                        <p>Perkembangan IT & multimedia yang sangat cepat menjadikan Internet sebagai suatu sarana media yang sangat berperan dalam industri telekomunikasi dan bidang lainnya. Berangkat dari hal tersebut, HSPnet menyadari betul pentingnya jaringan internet terbentuk guna kepentingan industri dan bisnis

                            . Dengan memiliki jaringan yang terpadu maka kelancaran akan bisnis
                            dapat terjaga serta memudahkan bagi pengguna. Hal tersebut mendasari
                            visi HSPnet dan menjadi dorongan bagi segenap pendiri dan manajemen HSPnet untuk melangkah kedepan
                            menyongsong suatu abad modern yang maju dengan jaringan internet.</p>
                        <h3>PT. Parsaoran Global Datatrans dengan Branding HSPnet </h3>
                        <p>PT. Parsaoran Global Datatrans (HSPNet) menyediakan berbagai fasilitas dan inovasi seperti 
                            penyediaan layanan internet, solusi jaringan terintegrasi, peralatan komputer yang aman di Indonesia. 
                            Melalui berbagai layanan dan produk yang ditawarkan, kami mencoba menjadi penyedia layanan Internet yang berfokus 
                            pada hubungan yang erat antara masyarakat dan pelanggan dengan dunia luar sehingga menciptakan hubungan yang harmonis dengan kami.</p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Kategori:</span> Provider Internet</li>
                                        <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Post You May Like</h2>
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
                            <h5><a href="#">Kerjasama Infrastruktur Telekomunikasi & Multimedia
                                Di Modernland Industrial Estate</a></h5>
                            <p>Hari ini PT Parsaoran Global Datatrans (PT PGD) dengan PT Modernland Industrial Estat (MIE) melakukan 
                                penandatangan perjanjian kerjasama Penyediaan Infrastruktur Telekomunikasi dan Multimedia untuk di kawasan industri Modernland Cikande </p>
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
                            <p>Akhir Oktober lalu (25/10/2022) PT Parsaoran Global Datatrans (HSP) melakukan penandatangan kerjasama dengan PT Asia Sanprima Jaya (Mall Plaza Asia)Tasikmalaya 
                                untuk layanan Internet Broadband & Dedicated di kawasan Mall Plaza Asia. </p>
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
                            <p>Setelah 2 (dua) tahun tidak dapat menyelenggarakan acara Employee Gathering karena pandemic Covid-19. Di tahun ini keluarga besar HSP dan Jujung 
                                berkesempatan kembali menyelenggarakan acara Employee Gathering pada 25 hingga 27 Agustus 2022 berlokasi di kota Yogyakarta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

    @endsection