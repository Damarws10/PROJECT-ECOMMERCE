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
                    <div class="header__top__right__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                    
                    <div class="header__top__right__language">
                        <a class="d-inline" href="#"><i class="fa fa-user"></i></a>
                        <span class="arrow_carrot-down"></span>
                        <ul>
                        <li><a href="#"><i class="fa fa-user"> Profile </i></a></li>
                        <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                        <i class="fa fa-sign-out"> Logout </i></a>
                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf                   
                        </form></li>
                        </ul>
                        <div>{{ auth()->user()->name }}</div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>




