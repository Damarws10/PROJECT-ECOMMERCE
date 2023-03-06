 <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('backend/images/HspLogo.png') }}" alt="" height="60">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('backend/images/HspLogo.png') }}" alt="" height="30">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('backend/images/HspLogo.png') }}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('backend/images/HspLogo.png') }}" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">
 <!--- Sidemenu -->
 <ul class="side-nav">

<li class="side-nav-title side-nav-item">Navigation</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
        <i class="uil-home-alt"></i>
        <span class="badge bg-success float-end">4</span>
        <span> Dashboards </span>
    </a>
    <div class="collapse" id="sidebarDashboards">
        <ul class="side-nav-second-level">
            <li>
                <a href="{{route('dashboard')}}">Ecommerce</a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-title side-nav-item">Apps</li>

<li class="side-nav-item">
    <a href="#" class="side-nav-link">
        <i class="uil-calender"></i>
        <span> Calendar </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="apps-chat.html" class="side-nav-link">
        <i class="uil-comments-alt"></i>
        <span> Chat </span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
        <i class="uil-store"></i>
        <span> Ecommerce </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarEcommerce">
        <ul class="side-nav-second-level">
            <li>
                <a href="{{route('createproduct')}}">Products</a>
            </li>
            <li>
                <a href="apps-ecommerce-products-details.html">Products Details</a>
            </li>
            <li>
                <a href="{{route('ordersproduct')}}">Orders</a>
            </li>
            <li>
                <a href="apps-ecommerce-orders-details.html">Order Details</a>
            </li>
            <li>
                <a href="{{route('customers')}}">Customers</a>
            </li>
            <li>
                <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
            </li>
            <li>
                <a href="apps-ecommerce-checkout.html">Checkout</a>
            </li>
            <li>
                <a href="apps-ecommerce-sellers.html">Sellers</a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
        <i class="uil-envelope"></i>
        <span> Email </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarEmail">
        <ul class="side-nav-second-level">
            <li>
                <a href="apps-email-inbox.html">Inbox</a>
            </li>
            <li>
                <a href="apps-email-read.html">Read Email</a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="apps-social-feed.html" class="side-nav-link">
        <i class="uil-rss"></i>
        <span> Social Feed </span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
        <i class="uil-clipboard-alt"></i>
        <span> Tasks </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarTasks">
        <ul class="side-nav-second-level">
            <li>
                <a href="apps-tasks.html">List</a>
            </li>
            <li>
                <a href="apps-tasks-details.html">Details</a>
            </li>
            <li>
                <a href="apps-kanban.html">Kanban Board</a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="apps-file-manager.html" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> File Manager </span>
    </a>
</li>


