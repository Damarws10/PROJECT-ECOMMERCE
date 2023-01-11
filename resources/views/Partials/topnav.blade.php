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
                    
                    <div class="header__top__right__language">
                        <a class="d-inline" href="#"></a>
                        <div><i class="fa fa-user">{{ auth()->user()->name }}</i></div>
                        <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                        <i class="fa fa-sign-out"> Logout </i></a>
                        <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf                   
                        </form>
                        
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>




