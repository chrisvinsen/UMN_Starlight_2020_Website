@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/vote.css') }}">
<style>
    .box{
        background: url("{{ asset('images/bg-img/Background_Content.png') }}");
        background-color: #042339;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-position-y: 50px;
    }
    @media(max-width:990px){
        .drum{
            display:none;
        }
        .leafleft{
            width: 80%!important;
        }
    }
    @media(max-width:767px){
        .drum{
            display:none;
        }
        .leafleft{
            display:none;
        }
        .box{
            background-image: url("{{ asset('images/bg-img/leaf_left.png') }}")!important;
        }
    }
</style>
@endsection
@section('content')
<div class="box pt-5" style="min-height:1000px;position:relative;overflow:hidden;">
    <!-- <img src="{{ asset('images/bg-img/Background_Content.png') }}" alt="" style="position:absolute;"> -->
    <img class="drum" src="{{ asset('images/bg-img/Drum_Leaf.png') }}" alt="" style="position:absolute;bottom:0;width:40%;width: 80%;right: -20%;">
    <!-- <img src="{{ asset('images/bg-img/Leaf_Right.png') }}" alt="" style="position:absolute;bottom:0;"> -->
    <img class="leafleft" src="{{ asset('images/bg-img/Leaf_Left.png') }}" alt="" style="position:absolute;bottom:0;width:40%;left:0;">
    <div class="container mt-100">
        <img class="mt-100 mx-auto d-block" style="width:600px;position: relative;" src="{{asset('images/core-img/Tulisan-Rio.png')}}" alt="">
        <div class="col-sm-8 mx-auto title-container" style="text-align:center;">
            <h1>STELLAR</h1>
            <h5>Crowd Pleaser</h5>
            <p style="color:white;">Stellar is a star that's usually expressed as a preeminent performer. This year, on Planet Starlight, one Vergilia will become a Stellar because of it's ability to amaze everyone on The Trinus of Vergilia. The star showed an outstanding performance of their talent. It shined brightly, the crowed fell in love. Nonetheless, only one can be entitled as the Stellar. The citizens of Planet Starlight have entrusted you to incite the rise of Stellar. Now's the time to cast your votes!</p>
            <!-- <h5>-COUNTDOWN TUTUP VOTING STELLAR (Pk 19.00 WIB - Pk 22.00 WIB)-</h5> -->
            <!-- <h5 class="mt-5">-FOTO&VOTE VERGILIA-</h5> -->
        </div>
        <div class="about-us-countdown-area wow fadeInUp">
            <div class="countdown-up-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-3 text-center mb-3">
                            <!-- Countdown Text -->
                            <div class="countdown-content-text mb-10" data-wow-delay="300ms">
                                <h6>Countdown Voting Stellar</h6>
                                <!-- <h4 style="color: #270000">Countdown Voting Stellar</h4> -->
                            </div>
                        </div>

                        <div class="col-12 col-md-9 mb-4">
                            <div class="countdown-timer mb-10" data-wow-delay="300ms">
                                <div id="clock"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 mx-auto vote-container mt-5 row pb-5" style="text-align:center;">
        @foreach ($stagename_list as $user)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="display:flex;">
                <div class="card" style="width: 100%;">
                    <img src="{{ asset('images/gallery/twibbon_mardigras.png') }}" class="card-img-top">
                    <!-- <div class="card-img-top" style="background-image:url({{ asset('images/gallery/twibbon_mardigras.png') }})"></div> -->
                    <div class="card-body">
                        <div class="card-text">
                        <!-- 4.5 -->
                            <div class="name" style="color:black;line-height:6rem;">
                                <span style="display: inline-block;vertical-align: middle;line-height: normal;letter-spacing:0.5px">
                                    {{Str::limit($user->stagename, 20)}}
                                </span>
                            </div>
                            <button id="{{$user->id}}-{{$user->stagename}}" class="btn vote-btn mt-3 voteButton vote-btnbfr" style="width: 80%;" href="{{ route('registration') }}"><div class="voteText">Vote</div></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
@section('custom_js')
<script src="{{ asset('js/cms/sweetalert/sweetalert.js') }}"></script>
<script>
    $(".card-img-top").on({
    "mouseover" : function() {
        this.src = "{{asset('images/gallery/twibbon_venicea.png')}}";
    },
    "mouseout" : function() {
        this.src="{{ asset('images/gallery/twibbon_mardigras.png') }}";
    }
    });
    $(".voteButton").click(function(){
        id_name = $(this).attr('id');
        id_name_split = id_name.split('-');
        id = id_name_split[0];
        name = id_name_split[1];
        base_url = "{{asset('images/gallery')}}";

        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn starlight-btn mt-2 mr-1 wd',
            cancelButton: 'btn starlight-btn mt-2 ml-1 wd'
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            imageUrl: base_url + "/twibbon_venicea.png",
            title: 'You fully support (' + name + ') in becoming Stellar?',
            imageWidth: 250,
            showCancelButton: true,
            cancelButtonText: 'No',
            // footer: '<button class="btn vote-btn mr-1" onclick="voteSuccess()" style="width:30%;" >Yes</button><a class="btn vote-btn ml-1" style="width:30%;" href="/">No</a>',
            allowEnterKey: false,
            showConfirmButton: true,
            confirmButtonText: 'Yes',
        }).then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                    icon: 'success',
                    title: 'Thank you for casting your vote!',
                    html: 'Await the revelation of Stellar on: <div class="about-us-countdown-area mt-3"><div class="countdown-up-area"><div class="container"><div class="row align-items-center"><div class="col-lg-12"><div class="countdown-timer mb-10"><div class="clockOthers" style="color:black;"><div style="font-size: 17px!important;border: 2px solid rgb(0 0 0 / 15%)!important;"> <span class="mb-10">Day</span>21</div> <div style="font-size: 17px!important;border: 2px solid rgb(0 0 0 / 15%)!important;"> <span class="mb-10">Month</span>10</div> <div style="font-size: 17px!important;border: 2px solid rgb(0 0 0 / 15%)!important;"> <span class="mb-10">Year</span>2020</div> <div style="font-size: 17px!important;border: 2px solid rgb(0 0 0 / 15%)!important;"> <span class="mb-10">Time</span>12:00</div> </div></div></div></div></div></div></div>',
                    allowEnterKey: false,
                    showConfirmButton: false,
                });
                voteSuccess();
                $(this).addClass("voted");
                $(this).children('.voteText').replaceWith("Voted");
            }
        });
    });

    function voteSuccess(){
        $(".voteButton").removeClass("vote-btnbfr");
        $(".voteButton").attr("disabled", true);
    }
</script>
@endsection
