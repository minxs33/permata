<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>Permataku</title>

    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/permata.png">
    
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/backtop.css">

    <!-- Revolution Style -->
    <link rel="stylesheet" href="css/revolution/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/revolution/settings.css">
    <link rel="stylesheet" href="css/revolution/layers.css">
    <link rel="stylesheet" href="css/revolution/navigation.css">
</head>

<body>
    <!-- Our Website Content Goes Here -->
    <main>
        <header class="stck">
            <div class="container">
                <div class="mnu-sc">
                    <div class="logo">
                        <h1><a href="#" title=""><img src="images/logo.png" alt="" itemprop="image"
                                    style="margin-left: 4rem;"></a>
                        </h1>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="#home" title="">Home</a></li>
                            <li><a href="#" title="">Services</a></li>
                            <li><a href="#" title="">Event</a></li>
                            <li><a href="#" title="">Statik</a></li>
                            @guest
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @if(Route::has('register'))
                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                @endif
                            @else
                                @if(Auth()->user()->status == 'agen')
                                <li><a href="{{ url('agen/dashboard') }}">{{_('Dashboard')}}</a></li>
                                @endif
                            <li>
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
        </header><!-- Header -->
        <div class="rpnsv-hdr">
            <div class="rspnsv-lg-br">
                <div class="logo">
                    <h1><a href="index6.html" title=""><img src="images/logo.png" alt=""></a></h1>
                </div>
                <span class="mnu-btn brd-rd5"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="rspnsv-mnu blue-bg">
                <span class="cls-btn"><i class="fa fa-close"></i></span>
                <ul>
                    <li><a href="#home" title="">Home</a></li>
                    <li><a href="#services" title="">Services</a></li>
                    <li><a href="#about" title="">Event</a></li>
                    <li><a href="#team" title="">Statik</a></li>
                    @guest
                    	        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                            	<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        @endguest
                </ul>
            </div>
        </div><!-- Responsive Header -->
        @yield('content')

    </main>

    <!-- Vendor: Javascripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Our Website Javascripts -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/scroll-up-bar.min.js"></script>
    <script src="js/jquery.poptrox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4XGd9qpQIEkbfL6QpR6qk2jQ9S9_5Uww"></script>
    <script src="js/main.js"></script>

    <!-- Revolution JS Files -->
    <script src="js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Addons -->
    <script src="js/revolution/addons/revolution.addon.slicey.min.js"></script>

    <!-- Slider Revolution 5.0 Extensions -->
    <script src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="js/revolution/revolution.initialize3.js"></script>

    <script>
        /*Scroll to top when arrow up clicked BEGIN*/
        $(window).scroll(function () {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('#back2Top').fadeIn();
            } else {
                $('#back2Top').fadeOut();
            }
        });
        $(document).ready(function () {
            $("#back2Top").click(function (event) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });

        });
 /*Scroll to top when arrow up clicked END*/

    </script>

</body>

</html>