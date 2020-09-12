<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Starlight 2020 - {{ $title }}</title>

    <!-- Icon Starlight -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- ---------- Style ---------- -->

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('css/cms/bootstrap.min.css') }}">
    <!-- Font awesome 5.12.1 -->
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/font-awesome.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/animate.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/custom_css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/material-design-iconic-font/material-design-iconic-font.min.css') }}">
    
    @yield('custom_css')
    <style>
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url({{ asset('images/loaders_starlight.gif') }}) center no-repeat #270000;
        }
    </style>
</head>
<body style="overflow-x: hidden !important;">
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <div class="se-pre-con"></div>

	<!-- Header -->
  	@include('cms.template.header')  
    
    <!-- Content -->
  	@yield('content')

    <!-- Footer -->
    @include('cms.template.footer')  

    <!-- ---------- Script ---------- -->

    <!-- jQuery 3.4.1 -->
    <script src="{{ asset('js/cms/jquery-3.4.1/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/cms/jquery-3.4.1/jquery.collapsible.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/cms/bootstrap4/bootstrap.min.js') }}"></script>
    <!-- Confer Bundle -->
    <script src="{{ asset('js/cms/confer.bundle.js') }}"></script>
    <!-- Default Assets -->
    <script src="{{ asset('js/cms/default-assets/active.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/cms/popper/popper.min.js') }}"></script>

    <script>
        // $(window).on('load', function () {
        //     $('#preloader').fadeOut('slow');
        // });
        $(window).on('load', function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

	@yield('custom_js')
</body>
</html>