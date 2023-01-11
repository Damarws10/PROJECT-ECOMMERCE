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

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        #myImg {
          border-radius: 5px;
          cursor: pointer;
          transition: 0.3s;
        }
        
        #myImg:hover {opacity: 0.7;}
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }
        
        /* Modal Content (image) */
        .modal-content {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
        }
        
        /* Caption of Modal Image */
        #caption {
          margin: auto;
          display: block;
          width: 80%;
          max-width: 700px;
          text-align: center;
          color: #ccc;
          padding: 10px 0;
          height: 150px;
        }
        
        /* Add Animation */
        .modal-content, #caption {  
          -webkit-animation-name: zoom;
          -webkit-animation-duration: 0.6s;
          animation-name: zoom;
          animation-duration: 0.6s;
        }
        
        @-webkit-keyframes zoom {
          from {-webkit-transform:scale(0)} 
          to {-webkit-transform:scale(1)}
        }
        
        @keyframes zoom {
          from {transform:scale(0)} 
          to {transform:scale(1)}
        }
        
        /* The Close Button */
        .close {
          position: absolute;
          top: 15px;
          right: 35px;
          color: #f1f1f1;
          font-size: 40px;
          font-weight: bold;
          transition: 0.3s;
        }
        
        .close:hover,
        .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
        }
        
        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
          .modal-content {
            width: 100%;
          }
        }
        </style>
</head>

<body>
<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
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
            <img src="{{ asset('storage/img/language.png') }}" alt="">
            <div>Indonesia</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
    
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./">Home</a></li>
            <li><a href="./shop-grid">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shoping-cart">Shoping Cart</a></li>
                    <li><a href="./checkout">Check Out</a></li>
                    <li><a href="./blog-details">Company Profile</a></li>
                </ul>
            </li>
            <li><a href="./blog">Blog</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> telemarketing@hsp.net.id</li>
            <li>Gratis pengiriman untuk semua pesanan</li>
        </ul>
    </div>
</div>
    <!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">

@include('partials.topnav')
@include('partials.navbar')

</header>
<!-- Header Section End -->

@yield('content')

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
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        
                        <ul>
                            <h4>JAKARTA SELATAN</h4>
                            <li>Alamat : Graha STK Jl. Taman Marga Satwa. Pasar Minggu, Jakarta Selatan 12550</li>
                            <li>No. Telp: (021) - 39703970</li>
                            <li>Email: telemarketing@hsp.net.id</li>
                        </ul>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                    <ul>
                        <h4>JAKARTA TIMUR</h4>
                        <li>Alamat : Jl. Tanah Merdeka No. 1 RT 010 RW 003 Rambutan Ciracas Jakarta Timur </li>
                        <li>No. Telp: (021) - 39703970</li>
                        <li>Email: telemarketing@hsp.net.id</li>
                    </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
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