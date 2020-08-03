@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<!-- <link rel="stylesheet" href="{{ asset('css/cms/home.css') }}"> -->
<style>
body{
  background: linear-gradient(180deg, #270000 0%, #5A3A31 100%);
  background-size: cover !important;
  color:white;
}
.polaroid-wrapper {
  width: 100%;
  padding: 0 2rem;
  text-align: center;
}
.polaroid {
  background: #fff;
  padding: 0.5rem;
  box-shadow: 0 0.2rem 1.2rem rgba(0, 0, 0, 0.2);
}
.polaroid > img {
  max-width: 100%;
  height: auto;
}
.caption {
  font-size: 1.8rem;
  text-align: center;
  line-height: 2em;
}
.item {
  width: 30%;
  display: inline-block;
  margin-top: 2rem;
  filter: grayscale(100%);
}
.item .polaroid:before {
  content: "";
  position: absolute;
  z-index: -1;
  transition: all 0.35s;
}
.item:nth-of-type(4n + 1) {
  transform: scale(0.8, 0.8) rotate(5deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n + 1) .polaroid:before {
  transform: rotate(6deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  right: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0, 0, 0, 0.4);
}
.item:nth-of-type(4n + 2) {
  transform: scale(0.8, 0.8) rotate(-5deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n + 2) .polaroid:before {
  transform: rotate(-6deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  left: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0, 0, 0, 0.4);
}
.item:nth-of-type(4n + 4) {
  transform: scale(0.8, 0.8) rotate(3deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n + 4) .polaroid:before {
  transform: rotate(4deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  right: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0, 0, 0, 0.3);
}
.item:nth-of-type(4n + 3) {
  transform: scale(0.8, 0.8) rotate(-3deg);
  transition: all 0.35s;
}
.item:nth-of-type(4n + 3) .polaroid:before {
  transform: rotate(-4deg);
  height: 20%;
  width: 47%;
  bottom: 30px;
  left: 12px;
  box-shadow: 0 2.1rem 2rem rgba(0, 0, 0, 0.3);
}
.item:hover {
  filter: none;
  transform: scale(1, 1) rotate(0deg) !important;
  transition: all 0.35s;
}
.item:hover .polaroid:before {
  content: "";
  position: absolute;
  z-index: -1;
  transform: rotate(0deg);
  height: 90%;
  width: 90%;
  bottom: 0%;
  right: 5%;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.2);
  transition: all 0.35s;
}
h1{
  color:white;
}
</style>
@endsection

@section('content')
<div class="container col-sm-8 pt-5 pb-5">
    <div style="margin-top:100px;text-align:center;">
        <h1>Bingkai Starlight 2020</h1>
        <div class="mt-5"> 
        <pre style="color: #ffffff;"><b>ONE STEP CLOSER TO BE A VERGILIA!🌟</b>

Tunjukkan dirimu sebagai vergilia dalam first stage Starlight 2020 “VENICEA”🎪 
dengan menggunakan twibbon di bawah ini kemudian unggah ke Instagram-mu!✨

Semangat! ✨</pre>
        </div>
        <div class="mt-5">
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
        <pre style="color:white;">[STARLIGHT 2020 OFFICIALLY STARTED]

Hello! My name is (name) and I'm ready to join STARLIGHT 2020 🌟as a vergillia,
where I would like to proudly show you my marvelous (voice/movement/magic/...)✨
I would like to invite all of you to join our special Starlight Carnival Stage: 
Venicea🎪, Mardi Gras🎪, and Rio de Janeiro🎪 to support (me/us).

So stay tune on @starlightumn for any updates and pack your bags for a journey with (me/us)!✨

See you, Starlighters! 🙌🏻
—⁣⁣
Starlight!⁣⁣
Extend Your Light💫⁣⁣
—⁣⁣
Instagram: @starlightumn ⁣⁣
LINE: @252uzsbl⁣⁣
Web: starlight.umn.ac.id⁣⁣
E-mail: starlight@umn.ac.id⁣⁣
#starlightumn⁣⁣
#extendyourlight⁣⁣
#carnival

<b>ONE STEP CLOSER TO BE A VERGILIA!🌟</b>

Tunjukkan dirimu sebagai vergilia dalam first stage Starlight 2020 “VENICEA”🎪 
dengan menggunakan twibbon di bawah ini kemudian unggah ke Instagram-mu!✨

Semangat! ✨

</pre>
        </div>
        <label for="uploadphoto">
          <span class="btn cvinsen-btn mt-50">
            Upload Photo
          </span>
          <form action="{{url('/framePost')}}" class="formfull" method="POST" enctype="multipart/form-data">
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
<!-- <script src="{{ asset('js/cms/register.js') }}" type="text/javascript"></script> -->
@endsection
