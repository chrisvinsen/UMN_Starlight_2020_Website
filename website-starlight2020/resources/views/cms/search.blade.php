@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/search.css') }}">
@endsection

@section('content')
<div class="container col-sm-8 pt-1 pb-5" style="min-height:60rem;">
    <div class="register-check" style="margin-top:100px; @if (session('msg')=='success' || session('msg')=='fail') display:none; @endif">
        <div class="img-logo img-hover-zoom overflow-visible wow jackInTheBox" style="visibility: visible; animation-delay: 750ms; animation-name: jackInTheBox;" data-wow-delay="750ms">
            <img class="mx-auto d-block" src="{{ asset('images/core-img/Logo_starlight_fix.png') }}" alt="Logo Starlight" width="400px">
        </div>
        <div class="mx-auto" style="text-align:center;" >
            <h1 style="color:white;">Starlight Registration Check</h1>
        </div>
        <form action="{{url('/searchPost')}}" method="post">
            {{csrf_field()}}
            <div class="input-field first col-sm-8 mx-auto mt-5" id="first" onclick="openInput()">
                <input class="input @if (Session::has('msg')) input-focus @endif" name="search" id="inputFocus" type="text" placeholder="Masukkan kode pendaftaran anda" />
            </div>
            @if (session('feedback'))
                <div class="invalid-feedback mt-2" role="alert" style="display:block;text-align:center;font-weight:bold;font-size: 1.5rem;">
                    {{ session('feedback') }}
                </div>
            @endif
            <div class="search-btn col-sm-4 pt-4 mx-auto">
                <input type="submit" style="@if (Session::has('msg')) display:block; @endif" class="btn btn-lg btn-block btn-outline-warning" id="submitbtn" value="Search"/>
            </div>
        </form>
    </div>
    <div class="results-success" style="@if (session('msg')=='success') display:block; @endif">
        <div class="congrats">
            <h1 style="color:white;" class="asd">Congratulations</h1>
        </div>
        <h4 style="color:white;margin-top:70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna at elementum rutrum, lacus sem tempor ante, a condimentum ante quam in lectus. Sed maximus augue a dolor blandit, ut maximus orci vestibulum. Nunc dictum dui mauris, sit amet vulputate ipsum consectetur nec. Fusce nunc turpis, tempor quis lorem a, porta eleifend felis. Nam vitae rhoncus libero.</h4>
    </div>
    <div class="results-fail" style="@if (session('msg')=='fail') display:block; @endif">
        <h2 style="color:white;">We are sorry</h2>
        <h4 style="color:white;margin-top:70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna at elementum rutrum, lacus sem tempor ante, a condimentum ante quam in lectus. Sed maximus augue a dolor blandit, ut maximus orci vestibulum. Nunc dictum dui mauris, sit amet vulputate ipsum consectetur nec. Fusce nunc turpis, tempor quis lorem a, porta eleifend felis. Nam vitae rhoncus libero.</h4>
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
@endsection