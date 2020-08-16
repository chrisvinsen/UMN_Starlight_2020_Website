@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/twibbon.css') }}">
<style>
    body{
        background: url("{{ asset('images/bg-img/twibbon.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection
@section('content')
<div class="container col-sm-8 pt-5 pb-5">
    <div style="margin-top:100px;text-align:center;">
        <h1>Twibbon Starlight 2020</h1>
        <div class="mt-5">
            <b>ONE STEP CLOSER TO BE A VERGILIA!🌟</b> <br>

            Tunjukkan dirimu sebagai vergilia dalam first stage Starlight 2020 “VENICEA”🎪 <br>
            dengan menggunakan twibbon di bawah ini kemudian unggah ke Instagram-mu!✨ <br>

            Semangat! ✨
        </div>
        <div class="mt-3">
            <div class="polaroid-wrapper">
                <div class="item">
                    <div class="polaroid">
                        <img src="{{ asset('images/gallery/drea.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid">
                        <img src="{{ asset('images/gallery/brenda.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid">
                        <img src="{{ asset('images/gallery/rekha.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid">
                        <img src="{{ asset('images/gallery/adit.jpg') }}">
                    </div>
                </div>
                <div class="item">
                    <div class="polaroid">
                        <img src="{{ asset('images/gallery/theo.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            [STARLIGHT 2020 OFFICIALLY STARTED] <br> <br>

            Hello! My name is (name) and I'm ready to join STARLIGHT 2020 🌟as a vergillia, <br>
            where I would like to proudly show you my marvelous (voice/movement/magic/...)✨ <br>
            I would like to invite all of you to join our special Starlight Carnival Stage: <br>
            Venicea🎪, Mardi Gras🎪, and Rio de Janeiro🎪 to support (me/us). <br> <br>

            So stay tune on @starlightumn for any updates and pack your bags for a journey with (me/us)!✨ <br> <br>

            See you, Starlighters! 🙌🏻 <br>
            —⁣⁣ <br>
            Starlight!⁣⁣ <br>
            Extend Your Light💫⁣⁣ <br>
            —⁣⁣ <br>
            Instagram: @starlightumn ⁣⁣ <br>
            LINE: @252uzsbl⁣⁣ <br>
            Web: starlight.umn.ac.id⁣⁣ <br>
            E-mail: starlight@umn.ac.id⁣⁣ <br>
            #starlightumn⁣⁣ <br>
            #extendyourlight⁣⁣ <br>
            #carnival <br> <br>

            <b>ONE STEP CLOSER TO BE A VERGILIA!🌟</b> <br> <br>

            Tunjukkan dirimu sebagai vergilia dalam first stage Starlight 2020 “VENICEA”🎪 <br>
            dengan menggunakan twibbon di bawah ini kemudian unggah ke Instagram-mu!✨ <br> <br>

            Semangat! ✨
        </div>

        <label for="uploadphoto" class="mt-3">
            <span class='btn-cont'>
                <div class='bttn' href='#'>
                    Upload Photo
                    <span class='line-1'></span>
                    <span class='line-2'></span>
                    <span class='line-3'></span>
                    <span class='line-4'></span>
                </div>
            </span>
            <form action="{{url('/twibbonPost')}}" class="formfull" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg"  name="uploadphoto" id="uploadphoto">
            </form>
        </label>
    </div>
</div>
<!-- End of all content -->
@endsection
@section('custom_js')
<!-- Custom js -->
<script>
    $('form input').change(function() {
        $(this).closest('form').submit();
    });
</script>
@endsection
