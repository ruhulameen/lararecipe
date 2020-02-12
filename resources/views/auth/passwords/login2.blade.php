@extends('layouts.app')

@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="{{asset('assets/img/figure/inner-page-banner1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>User Login Page</h1>
                    <ul>
                        <li>
                            <a href="{{route('frontend.home')}}">Home</a>
                        </li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Login Area Start Here -->
<section class="login-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-12">
                <div class="login-box-layout1">
                    <div class="section-heading heading-dark">
                        <h2 class="item-heading">LOGIN FORM</h2>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-3">Username or Email Address</label>
                                <input id="email" type="email" class="main-input-box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Password</label>
                                <input id="password" type="password" class="main-input-box @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox1">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if (Route::has('password.request'))
                                        <label class="lost-password"><a href="{{ route('password.request') }}">Lost your password?</a></label>
                                @endif
                            </div>
                        </div>
                        <div class="btn-area">
                            <button class="btn-fill btn-primary" type="submit" value="Login">Login<i class="flaticon-next"></i></button>
                            @if (Route::has('register'))
                                <a class="btn-fill btn-dark" href="{{ route('register') }}"><i class="flaticon-next"></i> Creat an Accont</a>
                            @endif

                        </div>
                    </form>
                    <label>Or Connect With Social Networks</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Area End Here -->
@endsection
