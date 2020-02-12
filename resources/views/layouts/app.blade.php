<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <!-- Modernizr Js -->
    <script src="{{asset('assets/js/modernizr-3.6.0.min.js')}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
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
</body>
</html>
