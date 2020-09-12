@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/twibbon.css') }}">
<style>
    body{
        background: url("{{ asset('images/bg-img/background_3.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection
@section('content')
<div class="container col-sm-8 pt-5 pb-5">
    <div style="margin-top:100px;text-align:center;">
        <h1 class="f-carneval wow fadeInUp" style="letter-spacing: 5px;font-size: 55px;">TWIBBON STARLIGHT 2020</h1>
        <div class="mt-5">
            <h5 class="text-white wow fadeInUp">ONE STEP CLOSER TO BE A VERGILIA!🌟</h5>
            <hr class="bg-white wow fadeInUp">
            <p class="text-white wow fadeInUp">
                Tunjukkan dirimu sebagai vergilia dalam first stage Starlight 2020 “VENICEA”🎪 dengan menggunakan twibbon di bawah ini kemudian unggah ke Instagram-mu!✨ Semangat! ✨
            </p>
        </div>
        <div class="mt-3">
            <div class="polaroid-wrapper">
                <div class="item">
                    <div class="polaroid wow fadeInUp">
                        <img src="{{ asset('images/gallery/twibbon_venicea_drea.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid wow fadeInUp">
                        <img src="{{ asset('images/gallery/twibbon_venicea_brenda.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid wow fadeInUp">
                        <img src="{{ asset('images/gallery/twibbon_venicea_rekha.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid wow fadeInUp">
                        <img src="{{ asset('images/gallery/twibbon_venicea_adit.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid wow fadeInUp">
                        <img src="{{ asset('images/gallery/twibbon_venicea_theo.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <label class="wow fadeInUp" for="uploadphoto">
            <span class="btn starlight-btn mt-5 mx-3">
                <i class="fas fa-upload"></i> Upload Photo</i>
            </span>
            <form action="{{ route('twibbonPost') }}" class="formfull" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg"  name="uploadphoto" id="uploadphoto">
            </form>
        </label>
    </div>
</div>
<!-- End of all content -->
@endsection
@section('custom_js')
<script src="{{ asset('js/cms/sweetalert/sweetalert.js') }}"></script>
@if (session('status') == 'success')
<script>
    Swal.fire(
        'Terima kasih telah mendaftar!',
        'Mohon menunggu E-mail dari Starlight untuk informasi selanjutnya. Jangan lupa untuk menggunakan Twibbon Starlight 2020 sebagai identitas Vergilia ya!',
        'success'
    )
</script>
@endif
<!-- Custom js -->
<script>
    $('form input').change(function() {
        $(this).closest('form').submit();
    });
</script>
@endsection
