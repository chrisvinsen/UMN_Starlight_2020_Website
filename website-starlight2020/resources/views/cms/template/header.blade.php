<!-- Custom CSS -->
<header class="header-area" id="hdr">
    <link rel="icon" tngype="image/gif/png" href="{{ asset('images/core-img/log.png') }}">
        <title>Starlight 2020 - {{ $title }}</title>
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ route('home') }}"><img src="{{ asset('images/core-img/Logo_starlight_fix.png') }}" alt="Logo Starlight" width="75px"></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div> 
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav" style="cursor:pointer;">
                            <li id="nav_home" class="nav_ f-poppins @if ($nav_menu == 'home') active @endif"><a href="{{ route('home') }}" > Home </a></li>
                            <li id="nav_about" class="nav_ f-poppins @if ($nav_menu == 'aboutus') active @endif"><a href="{{ route('aboutus') }}" > About Us </a></li>
                            <li id="nav_recruitment" class="nav_ f-poppins @if ($nav_menu == 'committee') active @endif"><a href="{{ route('committee') }}" > Committee </a></li>
                            <li id="nav_contact" class="nav_ f-poppins @if ($nav_menu == 'contact') active @endif"><a href="{{ route('contact') }}" > Contact </a></li>
                        </ul>

                        <!-- Get Tickets Button -->
                        <a class="btn cvinsen-btn mt-3 mt-lg-0 ml-3 ml-lg-5" href="{{ route('registration') }}"> Registration <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
