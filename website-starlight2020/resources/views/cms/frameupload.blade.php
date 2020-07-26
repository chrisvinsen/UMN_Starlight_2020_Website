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
.item {
  width: 30%;
  display: inline-block;
  margin-top: 2rem;
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
          <div class="polaroid-wrapper">
            <div class="item">
              <div class="polaroid">
                <img src="{{ asset('images/gallery/TW1.png') }}">
              </div>
            </div>
            <div class="item">
                <label for="uploadphoto">
                <span class="btn cvinsen-btn mt-50" >
                    Unggah Foto Baru
                </span>
                <form action="{{url('/framePost')}}" class="formfull" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg"  name="uploadphoto" id="uploadphoto">
                </form>
                <a href="{{ asset('images/gallery/TW1.png') }}" class="btn cvinsen-btn mt-50" download>Unduh</a>
            </div>
          </div>          
        </div>
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
