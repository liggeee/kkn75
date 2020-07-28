<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    <!-- Styles -->

    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <div class="card bg-primary rounded-circle shadow-xl mymenu menu-account" id="myaccount" style="position: fixed" >
            <i class="fa fa-user icon m-auto" style=" color: white;" aria-hidden="true"></i>
        </div>
        <main class="pt-4" style="padding-bottom: 100px">
            @yield('content')
        </main>
        <nav class="p-3 fixed-bottom bg-white shadow-xl" style="box-shadow: 5px -5px 10px #888888">
            <div class="container">
                <div class="d-flex justify-content-around">
                    
                    <a class="mynav-item mymenu" id="myhome" href="#home"><i class="fa fa-home m-auto" style="font-size: 300%;" aria-hidden="true"></i></a>
                    <a class="mynav-item mymenu" id="adddata" href="#data">
                        <div class="card bg-primary rounded-circle shadow-xl" style="width: 75px;height: 75px;margin-top: -50px;box-shadow: 5px -5px 10px #888888">
                            <i class="fa fa-plus m-auto" style="font-size: 300%; color: white" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a class="mynav-item mymenu" id="notification" href="#notification"><i class="fa fa-bell m-auto" style="font-size: 300%;" aria-hidden="true"></i></a>
                </div>
            </div>
        </nav>
    </div>
</body>

<script>
    $('.mymenu').on('click',function() {
        var route = '/'+$(this).attr('id');
        var div = $('#content');
        var spinner = $('#spinner');
        $.ajax({
            type:'GET',
            url: route,
            cache: false,
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                swal("Sorry !", 'Halaman Tidak Ditemukan', "error");
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        })   
    })

    $('.create-surat').on('click',function() {
        var route = "/mail";
        var div = $('#content');
        var spinner = $('#spinner');
        var id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: route,
            data: {id:id},
            cache:false,
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                swal("Sorry !", 'Halaman Tidak Ditemukan', "error");
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        });
    })

    $('.edit-data').on('click',function() {
        var route = "/adddata/edit";
        var div = $('#content');
        var spinner = $('#spinner');
        var id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: route,
            data: {id:id},
            cache:false,
            beforeSend: function(data) { // Are not working with dataType:'jsonp'
                spinner.show();
                div.hide();
            },
            error: function(xhr, status, error) {
                swal("Sorry !", 'Halaman Tidak Ditemukan', "error");
                spinner.hide();
                div.show();
            },
            success: function(data) {
                div.html(data);
                div.show();
                spinner.hide();
            }
        });
    })
</script>
</html>