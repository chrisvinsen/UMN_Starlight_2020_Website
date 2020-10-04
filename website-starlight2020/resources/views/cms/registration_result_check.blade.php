@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/registration_check.css') }}">
<style>
    body {
        @if (session('msg')=='fail')  
            background: url("{{ asset('images/bg-img/background_6.jpg') }}");

        @else
            background: url("{{ asset('images/bg-img/background_2.jpg') }}");

        @endif
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('content')
<div class="results-success-video" style="@if (session('msg')=='success') display:block; @endif">
    <video id="video" src="{{ asset('images/bg-img/background_7.mp4') }}" muted no-controls autoplay loop style="object-fit:cover; width:100%; height:100%">
        ....
    </video>
</div>
<div class="container col-sm-8 pt-1 pb-5" style="min-height:60rem;">
    <div class="register-check" style="margin-top:100px; @if (session('msg')=='success' || session('msg')=='fail' || session('msg') == 'pending') display:none; @endif">
        <div class="img-logo img-hover-zoom overflow-visible wow jackInTheBox" style="visibility: visible; animation-delay: 750ms; animation-name: jackInTheBox;" data-wow-delay="750ms">
            <img class="mx-auto d-block" src="{{ asset('images/core-img/Logo_starlight_fix.png') }}" alt="Logo Starlight" width="400px">
        </div>
        <div class="mx-auto" style="text-align:center;" >
            <h1 class="f-carneval" style="color:white;letter-spacing: 5px;">STARLIGHT REGISTRATION CHECK</h1>
        </div>
        <form name="searchform" action="{{ route('searchPost') }}" method="post">
            {{csrf_field()}}
            <div class="input-field first col-sm-8 mx-auto mt-5" id="first" onclick="openInput()">
                <input class="input @if (Session::has('msg')) input-focus @endif" name="search" id="inputFocus" type="text" placeholder="Masukkan kode pendaftaran anda" />
            </div>
            @if (session('feedback'))
                <div class="invalid-feedback mt-3" role="alert" style="display:block;text-align:center;font-weight:bold;font-size: 1.5rem;">
                    {{ session('feedback') }}
                </div>
            @endif
                <div class="search-btn col-sm-4 pt-4 mx-auto" id="submitbtn" style="@if (Session::has('msg')) display:block; @endif">
                    <span onclick="searchform.submit()">
                    <a href="#" class="mx-auto liquida">
                        <span>Search</span>
                        <div class="liquid"></div>
                    </a>
                    </span>
                </div>
        </form>
    </div>
    <div class="results-pending" style="@if (session('msg')=='pending') display:block; @endif">
        <h2 style="color:white;">Status Pending</h2>
        <h4 style="color:white;margin-top:70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna at elementum rutrum, lacus sem tempor ante, a condimentum ante quam in lectus. Sed maximus augue a dolor blandit, ut maximus orci vestibulum. Nunc dictum dui mauris, sit amet vulputate ipsum consectetur nec. Fusce nunc turpis, tempor quis lorem a, porta eleifend felis. Nam vitae rhoncus libero.</h4>
    </div>
    <div class="results-success" style="@if (session('msg')=='success') display:block; @endif">
        <div class="group-wrapper">
            <div class="link-wrapper">
                <a class="joingroup" href="#">Join line group</a>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                        <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="results-success-content"></div>
        <!-- <a class="btn starlight-btn mt-5 joingrouplink" href="{{ session('link') }}" style="display:none;"> Join Line Group <i class="fab fa-line"></i></a> -->
    </div>
    <div class="results-fail" style="@if (session('msg')=='fail') display:block; @endif">
    </div>
</div>
<!-- End of all content -->
@endsection

@section('custom_js')
<!-- Custom js -->
<script>
    function openInput(){
        $('#inputFocus').addClass('input-focus');
        $("#submitbtn").fadeIn("slow");
    }
</script>
@if (session('msg')=='fail')
<script>
    //Typewriter on fail
    var failContent1 = "Dear Vergilia, on behalf of the entire citizen,";
    var failContent2 = "we regret to inform you that this marks the end of your journey."
    var failContent3 = "We sincerely thank you for your tremendous effort in extending your light and sharing it with us ";
    var eleFail = "<h2 style='color:white;'>" + failContent1.split("").join("</h2><h2 style='color:white;'>") + "<br>" + "<h2 style='color:white;'>" + failContent2.split("").join("</h2><h2 style='color:white;'>") + "<br><br>" + "<h2 style='color:white;'>" + failContent3.split("").join("</h2><h2 style='color:white;'>") + "</h2>";
    $(eleFail).hide().appendTo(".results-fail").each(function (i) {
        $(this).delay(70 * i).css({
            display: "inline",
            opacity: 0
        }).animate( {opacity: 1}, 100);
    });
</script>
@endif
@if (session('msg')=='success')
<script>
    //Typewriter on success
    var successContent1 = "Arise Vergilia!";
    var successContent2 = "Congratulations, {{ session('name') }}!"
    var successContent3 = " You are now one step closer to winning the title of Sirius!";
    var successContent4 = "So, put on your seatbelts as we rise through the skies, to the land of Mardi Gras";
    var eleSuccess = "<h1 style='color:white;word-wrap: break-word;'>" + successContent1.split("").join("</h1><h1 style='color:white;word-wrap: break-word;'>") + "<br>" + successContent2.split("").join("</h1><h1 style='color:white;word-wrap: break-word;'>") + "<br><br>" +  successContent3.split("").join("</h1><h4 style='color:white;margin-top:17px;'>") + "<br>" + successContent4.split("").join("</h4><h4 style='color:white;margin-top:17px;'>") + "</h4>";
    $(eleSuccess).hide().appendTo(".results-success-content").each(function (i) {
        $(this).delay(70 * i).css({
            display: "inline",
            opacity: 0
        }).animate( {opacity: 1}, 100);
    });
    $(".joingrouplink").fadeIn(3000);
</script>
@endif
@endsection
