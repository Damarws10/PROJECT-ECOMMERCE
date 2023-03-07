<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        
        <!-- third party css -->
        <link href="{{ asset('backend/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- third party css -->
        <link href="{{ asset('backend/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
        <!-- third party css end -->
    
        <!-- App product css -->
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('backend/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">

        <!-- third party css -->
        <link href="{{ asset('backend/css/vendor/fullcalendar.min.css') }}" rel="stylesheet" type="text/css">
        <!-- third party css end -->
        
    </head>
    <body class="hold-transition sidebar-mini layout-fixed loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="wrapper">
            <!-- Untuk navbar side left -->
            <div class="leftside-menu">
                @include('Partials.PartialAdmin.navbar')
            </div>

            <div class="content-page">
                <!-- untuk top navbar -->
                <div class="content">
                    @include('Partials.PartialAdmin.topbar')
                    <!-- isi dari konten -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- footer navbar -->
                <footer>
                    @include('Partials.PartialAdmin.footer')
                </footer>
            </div>
        </div>
        <!-- pengaturan di samping kanan -->
        @include('Partials.PartialAdmin.rightsidebar')


        <!-- bundle -->
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
        <script src="{{ asset('backend/js/app.min.js') }}"></script>

        <!-- third party js -->
        <script src="{{ asset('backend/js/vendor/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- third party js ends -->

        <!-- third party js -->
        <script src="{{ asset('backend/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/js/vendor/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('backend/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/js/vendor/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('backend/js/vendor/dataTables.checkboxes.min.js') }}"></script>

        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('backend/js/pages/demo.products.js') }}"></script>
        <!-- end demo js-->
        <!-- demo app -->
        <script src="{{ asset('backend/js/pages/demo.dashboard.js') }}"></script>
        <!-- end demo js-->

        <!-- third party js -->
        <script src="{{ asset('backend/js/vendor/fullcalendar.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('backend/js/pages/demo.calendar.js') }}"></script>
        <!-- end demo js-->
        <!-- bundle -->
    </body>
</html>