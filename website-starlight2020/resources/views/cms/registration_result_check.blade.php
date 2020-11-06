@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/registration_check.css') }}">
<style>
    #main {
        @if (session('msg')=='fail')  
            background: url("{{ asset('images/bg-img/gl_rio.jpg') }}");
            background-position: right !important;
            height: 100vh;
        @elseif (session('msg') == 'success')
            background-image: none;
            height: 100vh;
        @else 
            background: url("{{ asset('images/bg-img/background_2.jpg') }}");
        @endif
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    h1 {
        font-size: calc(20px + 2vw) !important;
    }
    h2 {
        font-size: calc(16px + 1.25vw) !important;
    }
    h3 {
        font-size: calc(14px + 1vw) !important;
    }
    .custom-font-size {
        font-size: calc(14px + 1vw) !important;
    }
</style>
@endsection

@section('content')
<div id="main">
    <div class="results-success-video @if (session('msg') != 'success') d-none @endif">
        <!--Taro VIDEO LOLOS-->
        <video id="video" src="{{ asset('images/bg-img/l_rio.mp4') }}"  no-controls autoplay loop style="object-fit:cover; width:100%; height:100%">
            ....
        </video>
    </div>
    <div class="container col-sm-8 pt-1 pb-5" style="min-height:60rem;">
        <div class="register-check" style="margin-top:100px; @if (session('msg')=='success' || session('msg')=='fail' || session('msg') == 'pending') display:none; @endif">
            <div class="img-logo img-hover-zoom overflow-visible wow jackInTheBox" style="visibility: visible; animation-delay: 750ms; animation-name: jackInTheBox;" data-wow-delay="750ms">
                <img class="mx-auto d-block" src="{{ asset('images/core-img/Logo_starlight_fix.png') }}" alt="Logo Starlight" width="325px">
            </div>
            <div class="mx-auto" style="text-align:center;" >
                <h1 class="f-carneval" style="color:white;letter-spacing: 5px;">STARLIGHT REGISTRATION CHECK</h1>
            </div>
            <form name="searchform" action="{{ route('searchPost') }}" method="post">
                {{csrf_field()}}
                <div class="input-field first col-lg-8 mx-auto mt-5" id="first" onclick="openInput()">
                    <input class="input @if (Session::has('msg')) input-focus @endif" name="search" id="inputFocus" type="text" placeholder="Masukkan kode pendaftaran anda" />
                </div>
                @if (session('feedback'))
                    <div class="invalid-feedback custom-font-size mt-3" role="alert" style="display:block;text-align:center;font-weight:bold;font-size: 1.5rem;">
                        {{ session('feedback') }}
                    </div>
                @endif
                    <div class="search-btn pt-4 mx-auto" id="submitbtn" style="@if (Session::has('msg')) display:block; @endif">
                        <span onclick="searchform.submit()">
                        <a href="#" class="mx-auto liquida">
                            <span>Search</span>
                            <div class="liquid"></div>
                        </a>
                        </span>
                    </div>
            </form>
        </div>
        <div class="results-pending @if (session('msg') != 'pending') d-none @endif">
            <h2 style="color:white;">Status Pending</h2>
            <h4 style="color:white;margin-top:70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna at elementum rutrum, lacus sem tempor ante, a condimentum ante quam in lectus. Sed maximus augue a dolor blandit, ut maximus orci vestibulum. Nunc dictum dui mauris, sit amet vulputate ipsum consectetur nec. Fusce nunc turpis, tempor quis lorem a, porta eleifend felis. Nam vitae rhoncus libero.</h4>
        </div>
        <div class="results-success @if (session('msg') != 'success') d-none @endif">
           <!--  <div class="group-wrapper">
                <div class="link-wrapper">
                    <a class="joingroup" href="#">Join line group</a>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                            <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
                        </svg>
                    </div>
                </div>
            </div> -->
            <div class="results-success-content"></div>
            <!-- <a class="btn starlight-btn mt-4 joingrouplink" href="{{ session('link') }}" style="display:none;"> Join Line Group <i class="fab fa-line"></i></a> -->
        </div>
        <div class="results-fail @if (session('msg') != 'fail') d-none @endif">
        </div>
    </div>
    <!-- End of all content -->
</div>
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
    var failContent1 = "Vergilia yang terhormat, Mewakili seluruh penduduk Planet Starlight";
    var failContent2 = "Kami memohon maaf karena ini adalah akhir dari perjalanan Anda."
    var failContent3 = "Kami berterimakasih atas usaha kalian yang luar biasa";
    var failContent4 = "dalam mengembangkan cahaya Anda dan membagikannya dengan kami.";
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
    var successContent1 = "Dear Vergilia, this is your captain speaking. Para Vergilia yang terhormat, ini kapten yang berbicara";
    var successContent2 = "On behalf of the entire crew, we would like to congrulate you for your incredible performance through the Mardi Grass Stage";
    var successContent3 = "Atas nama seluruh awak pesawat yang bertugas, kami mengucapkan selamat atas penampilan Anda yang luar biasa pada panggung Mardi Grass. Kami juga menyambut Anda untuk bergabung menuju destinasi selanjutnya, Rio De Janeiro!";
    var successContent4 = "As we continue our journey, please prepare your belongings, fasten your seatbelts, and be ready for take off. Thankyou for flying with Starlight Airlines.";    
    var successContent5 = "Sembari melanjutkan perjalanan, para penumpang diperkenankan untuk mempersiapkan barang-barang pribadi,";    
    var successContent6 = "mengencangkan sabuk pengaman, dan bersiap untuk lepas landas.";   
    var successContent7 = "Terimakasih atasp pilihan Anda untuk terbang bersama Starlight Airlines";
    var eleSuccess = "<h2 style='color:white;word-wrap: break-word;'>" + successContent1.split("").join("</h2><h2 style='color:white;word-wrap: break-word;'>") + "<br>" + successContent2.split("").join("</h2><h2 style='color:white;word-wrap: break-word;'>") + "<br><br>" +  successContent3.split("").join("</h2><h3 style='color:white;margin-top:17px;'>") + "<br>" + successContent4.split("").join("</h3><h3 style='color:white;margin-top:17px;'>") + "</h3>";
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
