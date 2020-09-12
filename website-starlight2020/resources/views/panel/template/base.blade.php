<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starlight 2020 - {{ $title }}</title>

    <!-- Icon Starlight -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/panel/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/panel/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('custom_css')
    <!-- END PAGE LEVEL STYLES -->
    @yield('custom_css')
</head>
<body class="sidebar-noneoverflow">
	<!-- BEGIN NAVBAR -->
  	@include('panel.template.navbar')  
    <!-- END NAVBAR -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        @include('panel.template.topbar')  
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!-- BEGIN FOOTER -->
        @include('panel.template.footer')  
        <!-- END FOOTER -->
        <!-- END CONTENT AREA -->      
    </div>     
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('js/panel/jquery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/panel/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/panel/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/panel/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/panel/app.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('js/panel/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('custom_js')
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>