@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/announcement.css') }}">
@endsection

@section('content')
<div class = "container py-5">
    <div style="margin-top:100px;text-align:center;">
        <h1 class="title wow fadeInUp text-atas" >THE RESULT OF THE </h1>
        <h1 class="title wow fadeInUp text-atas" >STARLIGHT DECLARATION </h1>
        <h1 class="title wow fadeInUp text-bawah" >RIO DE JANERIO</h1>
        <div class="row col-12 mt-3 mx-0">
            <div class="col-lg-4 col-sm-6 order-lg-1 order-sm-2 order-2 mt-5" style="padding:15px">
                <div class="kotak" >
                    <h5 class="title wow fadeInUp juara-2" >Adara </h5>
                    <div class="kotak-dalam">
                        <img src="{{ asset('images/gallery/twibbon_rio_1.png') }}">
                    </div>
                    <h5 class="title wow fadeInUp juara-2" >Nama </h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1 order-1 offset-sm-3 offset-lg-0 "style="padding:15px">
                <div class="kotak">
                    <h5 class="title wow fadeInUp juara-1" >Sirius </h5>
                    <div class="kotak-dalam">
                        <img src="{{ asset('images/gallery/twibbon_rio_2.png') }}">
                    </div>
                    <h5 class="title wow fadeInUp juara-1" >Nama </h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-lg-3 order-sm-2 order-3 mt-5"style="padding:15px">
                <div class="kotak">
                    <h5 class="title wow fadeInUp juara-3" >Murzim </h5>
                    <div class="kotak-dalam">
                        <img src="{{ asset('images/gallery/twibbon_rio_3.png') }}">
                    </div>
                    <h5 class="title wow fadeInUp juara-3" >Nama </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-12 mt-3 mx-0 "style="justify-content: space-evenly">
            <div class="col-lg-4 col-sm-6" style="padding:15px">
                <div class="kotak">
                    <h3 class="title wow fadeInUp text-atas" >JUARA </h3>
                    <h1 class="title wow fadeInUp text-bawah" >STELLAR </h1>
                    <div class="kotak-dalam">
                        <img src="{{ asset('images/gallery/twibbon_rio_1.png') }}">
                    </div>
                    <h5 class="title wow fadeInUp juara-1" >Nama </h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6"style="padding:15px">
                <div class="kotak">
                    <h3 class="title wow fadeInUp text-atas" >JUARA </h3>
                    <h1 class="title wow fadeInUp text-bawah" >CASIOPEIA </h1>
                    <div class="kotak-dalam">
                        <img src="{{ asset('images/gallery/twibbon_rio_2.png') }}">
                    </div>
                    <h5 class="title wow fadeInUp juara-1" >Nama </h5>
                </div>
            </div>
        </div>
</div>


<!-- End of all content -->
@endsection

@section('custom_js')  

@endsection