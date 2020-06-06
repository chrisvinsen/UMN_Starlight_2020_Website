<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starlight 2020 - {{ $title }}</title>

    <!-- Icon Starlight -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- ---------- Style ---------- -->

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('css/cms/bootstrap4/bootstrap.min.css') }}">
    <!-- Font awesome 5.12.1 -->
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/fontawesome-5.12.1/font-awesome.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/animate/latest_animate.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/cms/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/custom_css.css') }}">
    @yield('custom_css')
</head>
<body style="overflow-x: hidden !important;">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
    
    <!-- Images Loaded -->
    <!-- <script src="{{ asset('js/cms/imagesloaded/imagesloaded.pkgd.min.js') }}"></script> -->
    <!-- Isotope -->
    <!-- <script src="{{ asset('js/cms/isotope/isotope.pkgd.min.js') }}"></script> -->
    <!-- Jarallax -->
    <!-- <script src="{{ asset('js/cms/jarallax/jarallax-video.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/cms/jarallax/jarallax.min.js') }}"></script> -->
    <!-- Owl Carousel -->
    <!-- <script src="{{ asset('js/cms/owl_carousel/owl.carousel.min.js') }}"></script> -->
    <!-- Way Points -->
    <!-- <script src="{{ asset('js/cms/waypoints/waypoints.min.js') }}"></script> -->
    <!-- WoW -->
    <!-- <script src="{{ asset('js/cms/wow/wow.min.js') }}"></script> -->

    <!-- Custom JS -->
    <script src="{{ asset('js/cms/script.js') }}"></script>

    <script>
        $(window).on('load', function () {
            $('#preloader').fadeOut('100', function () {
                $(this).remove();
            });
        });
    </script>

	@yield('custom_js')
</body>
</html>