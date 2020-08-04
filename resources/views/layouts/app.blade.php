<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        @if (Auth::check())
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>

                            <div class="card-body d-flex justify-content-around">
                                <a href="{{ route('admin.penduduk',0) }}" class="btn btn-outline-primary">Data Penduduk
                                    dalam pengajuan : {{ $dpenduduk0 }}</a>
                                <a href="{{ route('admin.penduduk',2) }}" class="btn btn-outline-success">Data Penduduk
                                    Diterima : {{ $dpenduduk2 }}</a>
                                <a href="{{ route('admin.penduduk',1) }}" class="btn btn-outline-danger">Data Penduduk
                                    Ditolak : {{ $dpenduduk1 }}</a>
                            </div>
                            <div class="card-body d-flex justify-content-around">
                                <a href="{{ route('admin.surat',0) }}" class="btn btn-outline-primary">Surat Dalam
                                    Pengajuan : {{ $mail0 }}</a>
                                <a href="{{ route('admin.surat',2) }}" class="btn btn-outline-success">Surat
                                    Diverifikasi : {{ $mail2 }}</a>
                                <a href="{{ route('admin.surat',1) }}" class="btn btn-outline-danger">Surat Ditolak :
                                    {{ $mail1 }}</a>
                            </div>

                        </div>
                        @endif

                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script>
    $('.actions').on('click',function() {
        var id = $(this).attr('id');
        var route = '/admin/surat/ajax/'+id;
        var spinner = $('#sipinner');
        var div = $('#form-value');
        $.ajax({
            type:'GET',
            url: route,
            cache: false,
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        })
    });
    $('.formmail-verif').on('submit',function(e) {
        e.preventDefault();
        var form = $(this).serialize();
    });
</script>

</html>