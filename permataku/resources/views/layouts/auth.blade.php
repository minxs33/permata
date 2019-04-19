<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>Permata</title>

    <link rel="images/logo/logo.png" rel="icon" />
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
                            <li><a href="{{ URL::previous() }}" title="">Back</a></li>
                            @guest
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @if(Route::has('register'))
                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                @endif
                            @else
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
                    <li><a href="{{ URL::previous() }}" title="">Back</a></li>
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
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </main>
    <br>
    <br>
    <br>
        @yield('content')