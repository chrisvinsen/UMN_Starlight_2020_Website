@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/home.css') }}">
@endsection

@section('content')
<!-- All Content -->
<div>
    <section class="welcome-area" id="welcome">
        <div class="welcome-slides owl-carousel">
            <div class="single-welcome-slide bg-img bg-overlay jarallax"
            style="background-image: url('{{ asset('images/bg-img/G2.JPG') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome-text-two text-center overflow-visible">
                                <div data-animation="fadeInUp" data-delay="300ms" class="w-50 mx-auto d-block img-hover-zoom overflow-visible wow bounceInUp">
                                    <img src="{{ asset('images/core-img/Font_starlight_2.png') }}" class="img-responsive">
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="300ms">EXTEND YOUR LIGHT</h2>
                                <div class="event-meta" data-animation="fadeInUp" data-delay="300ms">
                                    <a class="event-date"><i class="zmdi zmdi-alarm-check"></i> October 24, 2020</a>
                                    <a class="event-author"><i class="zmdi zmdi-home"></i> Multimedia Nusantara University</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url('{{ asset('images/bg-img/carousel_2.jpg') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome-text text-right row justify-content-center overflow-visible">
                                <!-- <h2 data-animation="fadeInUp" data-delay="300ms">Starlight</h2> -->
                                <div class="offset-sm-6 col-8 col-sm-6 float-right text-center d-block img-hover-zoom overflow-visible" data-animation="fadeInUp" data-delay="300ms">
                                    <img src="{{ asset('images/core-img/Font_starlight_2.png') }}" class="img-responsive">
                                    <h6 class="f-carneval" data-animation="fadeInUp" data-delay="300ms">Extend Your Light</h6>
                                    <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                        <a routerLink="/about" class="btn cvinsen-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url('{{ asset('images/bg-img/H2.png') }}');">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 overflow-visible">
                            <div class="welcome-text-two text-center overflow-visible">
                                <div data-animation="fadeInUp" data-delay="300ms" class="w-50 mx-auto d-block img-hover-zoom overflow-visible">
                                    <img src="{{ asset('images/core-img/Font_starlight_2.png') }}" class="img-responsive">
                                </div>
                                <!-- <h5 data-animation="fadeInUp" data-delay="100ms">Starlight 2020</h5> -->
                                <h2 data-animation="fadeInUp" data-delay="300ms">EXTEND YOUR LIGHT</h2>
                                <div class="event-meta" data-animation="fadeInUp" data-delay="300ms">
                                    <a class="event-date"><i class="zmdi zmdi-alarm-check"></i> October 24, 2020</a>
                                    <a class="event-author"><i class="zmdi zmdi-home"></i> Multimedia Nusantara University</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="icon-scroll" id="scrollDown"></div>

    </section>
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 order-2">
                    <div class="about-content-text text-center mb-80">
                        <h6 class="wow bounceInUp text-light" data-wow-delay="300ms">About Starlight</h6>
                        <h3 class="wow bounceInUp f-carneval" data-wow-delay="300ms">What is Starlight?</h3>
                        <h5 class="wow bounceInUp text-light f-poppins" data-wow-delay="300ms">
                            Starlight adalah salah satu acara terbesar di Universitas Multimedia Nusantara sebagai tempat untuk menunjukkan bakat dan keterampilan.
                        </h5>
                        <a href="{{ route('aboutus') }}" class="btn cvinsen-btn mt-50 wow bounceInLeft" data-wow-delay="300ms">Read more <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow jackInTheBox img-hover-zoom" data-wow-delay="750ms">
                        <img class="a" src="{{ asset('images/core-img/Logo_starlight_fix.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3 text-center mb-80">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-10 wow bounceInLeft" data-wow-delay="300ms">
                            <h6>Main Event</h6>
                            <h4>Count Every Second Until The Main Event</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9 mb-80">
                        <div class="countdown-timer mb-10 wow bounceInUp" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="homepage-featured-events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-events-wrap flex flex-wrap justify-content-between">
                        <div class="event-content-wrap positioning-event-1 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL4.png') }}" alt="1"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-2 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL2.png') }}" alt="2"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-3 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL8.png') }}" alt="3"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-4 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL1.png') }}" alt="4"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-5 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL14.png') }}" alt="5"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-6 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL3.png') }}" alt="6"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-7 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL9.png') }}" alt="7"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-8 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL11.png') }}" alt="8"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-9 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL15.png') }}" alt="9"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-10 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL7.png') }}" alt="10"></a>
                            </figure>
                        </div>
                        <div class="event-content-wrap positioning-event-11 wow bounceInUp" data-wow-delay="300ms">
                            <figure class="img-hover-zoom">
                                <a href="javascript:void(0)"><img class="rounded shadow" src="{{ asset('images/gallery/SL12.png') }}" alt="11"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of all content -->
@endsection

@section('custom_js')
<!-- Custom js -->
@endsection
