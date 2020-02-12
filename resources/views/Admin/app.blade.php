<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@stack('page_title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/summernote.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    @stack('css')

    <!-- Modernizr Js -->
    <script src="{{asset('assets/js/modernizr-3.6.0.min.js')}}"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<!-- ScrollUp Start Here -->
<a href="#wrapper" data-type="section-switch" class="scrollup">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- ScrollUp End Here -->
<div id="wrapper" class="wrapper">
    <!-- Header Area Start Here -->
    <header class="header-one">
        <div id="header-main-menu" class="header-main-menu header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-3 col-sm-4 col-4 possition-static">
                        <div class="site-logo-mobile">
                            <a href="#" class="sticky-logo-light"><img src="{{asset('assets/img/logo-light.png')}}" alt="Site Logo"></a>
                            <a href="#" class="sticky-logo-dark"><img src="{{asset('assets/img/logo-dark.png')}}" alt="Site Logo"></a>
                        </div>
                        <nav class="site-nav">
                            <ul id="site-menu" class="site-menu">
                                <li>
                                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.author.index')}}">Authors</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.recipe.index')}}">Recipes</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.category.index')}}">Categories</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.tag.index')}}">Tags</a>
                                </li>
                                <li>
                                    <a href="#">Reviews</a>
                                </li>
                                <li>
                                    <a href="#">Subscribers</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                                <!--<li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Shop</a>
                                </li>-->
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                        <div class="nav-action-elements-layout1">
                            <ul>
                                @auth
                                    <li>
                                        <a href="{{route('frontend.home')}}" class="fill-btn">Homepage</a>
                                    </li>
                                @else
                                <li>
                                    <a class="login-btn" href="{{ route('login') }}"><i class="flaticon-profile"></i>Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a class="login-btn" href="{{ route('register') }}"><i class="flaticon-profile"></i>Register</a>
                                    </li>
                                @endif
                                @endauth
                            </ul>
                        </div>
                        <div class="mob-menu-open toggle-menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="nav-action-elements-layout2">
                            <ul class="nav-social">
                                <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#" title="skype"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#" title="rss"><i class="fas fa-rss"></i></a></li>
                                <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="site-logo-desktop">
                            <a href="#" class="main-logo"><img src="{{asset('assets/img/logo-dark.png')}}" alt="Site Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="nav-action-elements-layout3">
                            <ul>
                                <li>
                                    <div class="header-search-box">
                                        <a href="#search" title="Search" class="search-button">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('content')

<!-- Footer Area Start Here -->
    <footer class="ranna-bg-dark">
        <div class="container">
            <div class="footer-logo">
                <a href="#"><img src="{{asset('assets/img/logo-light.png')}}" class="img-fluid" alt="footer-logo"></a>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="#">FACEBOOK</a></li>
                    <li><a href="#">TWITTER</a></li>
                    <li><a href="#">INSTAGRAM</a></li>
                    <li><a href="#">PINTEREST</a></li>
                    <li><a href="#">GOOGLEPLUS</a></li>
                    <li><a href="#">YOUTUBE</a></li>
                </ul>
            </div>
            <div class="copyright">© All Right Reserved 2019</div>
        </div>
    </footer>
    <!-- Footer Area End Here -->

</div>
<!-- Search Box Start Here -->
<div id="search" class="search-wrap">
    <button type="button" class="close">×</button>
    <form class="search-form">
        <input type="search" id="ooooo" value="" placeholder="Type here........" />
        <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
    </form>
</div>
<!-- Search Box End Here -->


</body>
<!-- Jquery Js -->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins Js -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Owl Carousel Js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Summernote JS -->
<script src="{{asset('assets/js/summernote.min.js')}}"></script>
<!-- Select 2 Js -->
<script src="{{asset('assets/js/select2.full.min.js')}}"></script>
<!-- Smoothscroll Js -->
<script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('assets/js/main.js')}}"></script>

@stack('js')

</html>
