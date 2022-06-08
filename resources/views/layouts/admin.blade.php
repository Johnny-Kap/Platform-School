@include('includes.head')
<!-- Stylesheets -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">

@include('includes.styles')
@yield('styles')

<!-- END Stylesheets -->

<!-- Modernizr (browser feature detection library) -->
<script src="/adminn/js/vendor/modernizr.min.js"></script>
</head>

<body>
    <div id="page-wrapper" class="page-loading">
        <div class="preloader themed-background page-loading">
            <h1 class="push-top-bottom text-light text-center">
                <strong> {{ config('title', "Gestion Etablissement") }} </strong>
                Loading
            </h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie10"></div>
            </div>
        </div>
        <!-- END Preloader -->

        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations footer-fixed">
            <!-- Alternative Sidebar -->

            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            @include('includes.navigation')
            <!-- Main Container -->
            <div id="main-container">

                @include('includes.topnav')
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">

                    @include('includes.flash-message')

                    @yield('content')
                    <!-- END Dummy Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                @include('includes.footer')
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in /adminn/js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->

    <!-- END User Settings -->

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    @include('includes.scripts')
    @yield('scripts')
</body>

</html>