@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<style>
    #banner-contact{
        background-image: url('{{ asset('images/bg-img/H3.png') }}');
    }
</style>
@endsection

@section('content')
<!-- All Content -->
<div>
    <section class="breadcrumb-area bg-inmg bg-gradient-overlay jarallax" id="banner-contact">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title wow bounceInUp" data-wow-delay="500ms">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow bounceInLeft" data-wow-delay="500ms">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact--us-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 p-4 text-center">
                    <div class="row my-2">
                        <div class="col-12 my-2 wow bounceInUp" data-wow-delay="300ms">
                            <img width="25px" src="{{ asset('images/core-img/logo_line.png') }}"> Line
                        </div>
                        <div class="col-12 mb-2 wow bounceInUp" data-wow-delay="300ms">
                            <a class="btn cvinsen-btn" href="http://line.me/ti/p/~@252uzsbl" >@252uzsbl</a>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 my-2 wow bounceInUp" data-wow-delay="300ms">
                            <img width="25px" src="{{ asset('images/core-img/logo_instagram.png') }}"> Instagram
                        </div>
                        <div class="col-12 mb-2 wow bounceInUp" data-wow-delay="300ms">
                            <a class="btn cvinsen-btn" href="http://www.instagram.com/starlightumn" >@starlightumn</a>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 my-2 wow bounceInUp" data-wow-delay="300ms">
                            <img width="25px" src="{{ asset('images/core-img/logo_email.png') }}"> Email
                        </div>
                        <div class="col-12 mb-2 wow bounceInUp" data-wow-delay="300ms">
                            <a class="btn cvinsen-btn" href="mailto:starlight@umn.ac.id?subject='Hii Starlight'">starlight@umn.ac.id</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 rounded">
                    <div class="row h-100 justify-content-center align-items-center rounded wow bounceInUp" data-wow-delay="500ms">
                        <iframe class="w-100 rounded" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0542998407896!2d106.61614361434098!3d-6.256577462997083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sMultimedia%20Nusantara%20University!5e0!3m2!1sen!2sid!4v1580572259340!5m2!1sen!2sid" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End of all content -->
@endsection

@section('custom_js')   
<!-- Custom js -->
@endsection
