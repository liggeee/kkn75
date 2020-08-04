<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    @include('layouts.style')
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <!-- Preloader inner -->
        <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="4" />
            </svg>
        </div>
        <!-- End preloader inner -->
    </div>
    <!-- End preloader-->
    <!--Wrapper-->
    <div class="wrapper">
        <div class="modal login fade" id="search" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="p-5">
                        <form class="d-flex">
                            <div class=" input-group form mr-2">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text form-icon">
                                        <span class="fa fa-search form-icon-inner"></span>
                                    </span>
                                </div>
                                <input class="form-control" name="search" placeholder="Search" type="text">
                            </div>
                            <button class="btn btn-primary" type="submit">
                                Go
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Header-->
        <header class="header">
            <div class="container ">
                <div class="floating-nav mt-lg-5 ">
                    <nav class="navbar navbar-expand-lg header-navbar ">
                        <div class="navbar-brand">
                            <a class=" navbar-brand navbar-logo" href="index.html">
                                <h3>{{ config('app.name', 'Laravel') }}</h3>
                            </a>
                        </div>
                        <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="nav-menu collapse navbar-collapse navbar-collapse justify-content-end py-0 ">
                            <ul class=" navbar-nav  header-navbar-nav">
                                <li><a class=" nav-link" href="index.html">Home</a></li>

                                <li class="btn-nav mr-lg-3"><a class="btn btn-primary btn-sm " href="#login"
                                        data-toggle="modal" data-target="#login"><span
                                            class="fa fa-user-circle mr-1"></span>Signin</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--End header-->
        <!--Hero section-->
        <section class="hero">
            <div class="background-img gradient-overlay gradient-overlay-dark">
                <img src="{{ asset('assets/img/1.jpg') }}" alt="">
            </div>
            <div class="container height-70vh">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-10 col-lg-10">
                        <h1 class="display-4 mb-3 text-white">Start your Business <span
                                class="typed font-weight-600"></span></h1>
                        <p class="lead mb-5 text-white">Build an online presence with this professional <br>bootstrap 4
                            template.</p>
                        {{-- <a class="btn btn-primary btn-sm " href="#login" data-toggle="modal" data-target="#login"><span
                                class="fa fa-user-circle mr-1"></span>Signin</a>
                        <a class="play-but text-center mt-3 popup-youtube"
                            href="https://www.youtube.com/watch?v=Gc2en3nHxA4">
                            <span class="play-icon play-icon-md">
                                <span class="fa fa-play play-icon-inner"></span>
                            </span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </section>
        <!--End hero section-->
        <section class="spacer-double-lg">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center">
                    <div class="col ">
                        <div class="mb-5  text-center">
                            <h1>Start your business easly with Foxebiz</h1>
                            <p class="w-md-75 mb-0 mx-auto">Foxebiz is global communication agency
                                adapting itself to every type of customer, our work with clients has always been at the
                                intersection of deep
                                industry expertise and extensive capabilities.
                            </p>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row justify-content-center text-center">
                    <div class="col">
                        <a class="btn btn-primary btn-wide mb-2 mb-md-0 mr-md-2" href="javascript:;">Start a project</a>
                        <a class="btn btn-blue-night btn-wide mb-2 mb-md-0" href="javascript:;">Learn More</a>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col">
                        <div class="mb-5 pb-5 mt-5 pt-5">
                            <hr>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-md-4 mb-4 mb-lg-0">
                        <div class="text-center px-3">
                            <img class="max-width-md mb-3" src="assets/svg/startup-icon.svg" alt="">
                            <h3 class="h5">Professional Design</h3>
                            <p class="mb-0">A mobile browser is a web browser designed for use on a mobile.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-lg-0">
                        <div class="text-center px-3">
                            <img class="max-width-md mb-3" src="assets/svg/idea-icon.svg" alt="">
                            <h3 class="h5">Modern Workflow</h3>
                            <p class="mb-0 ">A mobile browser is a web browser designed for use on a mobile.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center px-3">
                            <img class="max-width-md mb-3" src="assets/svg/target-icon.svg" alt="">
                            <h3 class="h5 ">Real-Time Results</h3>
                            <p class="mb-0  ">A mobile browser is a web browser designed for use on a mobile.</p>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            {{-- <div class="container  mt-5 pt-5">
                <!--Row-->
                <div class="row justify-content-center text-left">
                    <div class="col">
                        <div class="bg-azure p-5 rounded shadow-lg">
                            <div class="p-lg-4">
                                <img class="max-width-sm ml-sm-4 mb-4 " src="assets/svg/quote-icon.svg" alt="">
                                <div class="bg-review-slider flexslider p-sm-4 pt-0">
                                    <ul class="slides">
                                        <li>
                                            <blockquote class="h4 text-white font-weight-light mb-5">There was a
                                                constant flow of intellectual questioning about the truth of life. That
                                                was a time when every college student in this country read Be Here Now
                                                and Diet for a Small Planet there were about ten books</blockquote>
                                            <h3 class="h6 text-white mb-0">Steve Jobs</h3>
                                            <span class="d-block text-light font-size-14">Business magnate</span>
                                        </li>
                                        <li>
                                            <blockquote class="h4 text-white font-weight-light mb-5">There was a
                                                constant flow of intellectual questioning about the truth of life. That
                                                was a time when every college student in this country read Be Here Now
                                                and Diet for a Small Planet there were about ten books</blockquote>
                                            <h3 class="h6 text-white mb-0">Steve Jobs</h3>
                                            <span class="d-block text-light font-size-14">Business magnate</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
            </div> --}}
            <!--End container-->
        </section>

        <footer class="bg-dark spacer-double-md">
            <!--Container-->
            <div class="container">
                <!--row-->
                <div class="row justify-content-between">
                    <div class="col-lg-4 d-flex align-items-start flex-column">
                        <a class="d-inline-block mb-4" href="javascript:;">
                            <img src="assets/svg/logo-light.svg" class="footer-logo" alt="">
                        </a>
                        <p class="font-size-12 text-light">&copy; 2019 all rights reserved - MutationMedia. <br>A
                            product of mutationthemes.</p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-0">
                        <h3 class="h6 text-white mb-3 font-weight-600">About us</h3>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="javascript:;">About</a>
                            <a class="list-group-item list-group-item-action" href="javascript:;">Services</a>
                            <a class="list-group-item list-group-item-action" href="javascript:;">Hire us</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 mb-0">
                        <h3 class="h6 text-white mb-3 font-weight-600">Help &amp; Support</h3>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="javascript:;">Contact us</a>
                            <a class="list-group-item list-group-item-action" href="javascript:;">Legals</a>
                            <a class="list-group-item list-group-item-action" href="javascript:;">FAQ</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3  mb-0">
                        <h3 class="h6 text-white mb-3 font-weight-600">Social hubs</h3>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mb-2 mb-lg-0 mr-1"><a class="social-icon"
                                    href="javascript:;"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="list-inline-item mr-1"><a class="social-icon " href="javascript:;"><span
                                        class="fab fa-twitter"></span></a></li>
                            <li class="list-inline-item mr-1"><a class="social-icon " href="javascript:;"><span
                                        class="fab fa-youtube"></span></a></li>
                            <li class="list-inline-item"><a class="social-icon " href="javascript:;"><span
                                        class="fab fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </footer>
        <!--End footer-->
        <!-- Modal -->
        <div class="modal login fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="p-5">
                        <header class="text-center mb-5">
                            <h2 class="h4 mb-0">Login to Your Account</h2>
                        </header>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <div class=" input-group form">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text form-icon">
                                            <span class="fa fa-user form-icon-inner"></span>
                                        </span>
                                    </div>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class=" input-group form">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text form-icon">
                                            <span class="fa fa-user form-icon-inner"></span>
                                        </span>
                                    </div><input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-block btn-primary">Login to your
                                    account</button>

                            </div>
                        </form>

                        <div class="text-center mb-3">
                            <p class="text-muted small mb-0">
                                Dont have an account yet?
                                <a href="#" onclick="$('#login').modal('hide')" data-toggle="modal"
                                    data-target="#register">Create an Account</a>
                            </p>
                            @if (Route::has('password.request'))
                            <p>
                                Forgot your username or password?
                                <a href="{{ route('password.request') }}">
                                    Recover account
                                </a>
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal login fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="p-3">
                        <header class="text-center mb-5">
                            <h2 class="h4 mb-0">Register Your Account</h2>
                        </header>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <div class=" input-group form">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text form-icon">
                                            <span class="fa fa-user form-icon-inner"></span>
                                        </span>
                                    </div>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Nama">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- <input class="form-control " name="email" placeholder="Email" type="email"> --}}
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class=" input-group form">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text form-icon">
                                            <span class="fa fa-envelope form-icon-inner"></span>
                                        </span>
                                    </div>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- <input class="form-control " name="email" placeholder="Email" type="email"> --}}
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class=" input-group form">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text form-icon">
                                            <span class="fa fa-lock form-icon-inner"></span>
                                        </span>
                                    </div><input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- <input class="form-control " name="email" placeholder="Email" type="email"> --}}
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class=" input-group form">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text form-icon">
                                            <span class="fa fa-lock form-icon-inner"></span>
                                        </span>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password">

                                    {{-- <input class="form-control " name="email" placeholder="Email" type="email"> --}}
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-block btn-primary">Register to your
                                    account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal -->
        <!--To the top-->
        <a class="scroll-to-top scroll" href="#wrapper"><span class=" fa fa-angle-up top-icon "></span></a>
        <!-- End to the top -->
    </div>
</body>

<script>
    @if(Session::has('error'))
  		$('.top-right').notify({
        message: { text: "{{ Session::get('error') }}" },
        type:'danger'
      }).show();
      @php
        Session::forget('error');
      @endphp
  @endif
</script>

</html>