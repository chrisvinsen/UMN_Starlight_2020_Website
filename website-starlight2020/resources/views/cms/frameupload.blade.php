@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<!-- <link rel="stylesheet" href="{{ asset('css/cms/home.css') }}"> -->
<link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
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
.jcrop-widget .jcrop-handle{
    display:none;
    position:absolute;
    border:0px rgba(127,127,127,0.8) solid;
    width:10px;
    height:10px;
    box-sizing:border-box;
    background:transparent
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
              <div style = "position: relative" id = "frame" >
                <img id = "photo" src = "{{ $photo }}" alt = "photo">
                <canvas id = "canvas" style = "display: block"></canvas>
              </div>
            </div>
            <div class="item">
                <label for="uploadphoto">
                <span class="btn cvinsen-btn mt-50" >
                    Unggah Foto Baru
                </span>
                <form action="{{url('/framePost')}}" class="formfull" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg" name="uploadphoto" id="uploadphoto" />
                </form>
                <button class="btn cvinsen-btn mt-50" id = "download">Unduh</button>
            </div>
            <canvas id = "preview_canvas" style = "display: none"></canvas>
          </div>
        </div>
    </div>
</div>
<!-- End of all content -->
@endsection

@section('custom_js')
<!-- Custom js -->
<script src="https://unpkg.com/jcrop"></script>
<script src="{{ asset('js/cms/canvasToBlob.js') }}"></script>
<script src="{{ asset('js/cms/fileSaver.js') }}"></script>
<script>
    $('form input').change(function() {
        $(this).closest('form').submit();
    });

    const img = new Image();
    img.src = 'images/gallery/Venice Carnival Twibbon peserta.png';
    const photo = document.getElementById('photo');
    const min = Math.min(photo.width, photo.height);

    const canvas = document.getElementById('canvas');
    canvas.width = photo.width;
    canvas.height = photo.height;
    const context = canvas.getContext('2d');
    context.drawImage(photo, 0, 0, photo.width, photo.height);
    photo.style.display = 'none';

    class SvgWidget extends Jcrop.Widget {
        init () {
            super.init();
            this.el.appendChild(img);
        }
    }

    const jcrop = Jcrop.attach('frame',{
        aspectRatio: 1,
        allowResize: false,
        allowSelect: false,
        widgetConstructor: SvgWidget,
        setSelect: [0, 0, min, min]
    });
    jcrop.addClass('jcrop-ux-keep-current');

    const rect = Jcrop.Rect.create(0, 0, min, min);
    const options = { allowResize: false };
    jcrop.newWidget(rect, options);

    let flag = false;
    jcrop.listen('crop.update', (widget, e) => {
        const preview_canvas = document.getElementById('preview_canvas');
        preview_canvas.width = min;
        preview_canvas.height = min;
        preview_canvas.getContext('2d').drawImage(canvas, widget.pos.x, widget.pos.y, widget.pos.w, widget.pos.h, 0, 0, min, min);
        preview_canvas.getContext('2d').drawImage(img, 0, 0, 2000, 2000, 0, 0, min, min);
        flag = true;
    });

    document.getElementById('download').addEventListener('click', () => {
        if (flag) {
            const photo = document.getElementById('preview_canvas');
            photo.toBlobHD((blob) => {
                saveAs(blob, "STARLIGHT2020.png");
            }, "image/png");
        } else {
            const photo = document.createElement('canvas');
            photo.width = min;
            photo.height = min;
            photo.getContext('2d').drawImage(canvas, 0, 0, min, min, 0, 0, min, min);
            photo.getContext('2d').drawImage(img, 0, 0, 2000, 2000, 0, 0, min, min);
            photo.toBlobHD((blob) => {
                saveAs(blob, "STARLIGHT2020.png");
            }, "image/png");
        }
    });
</script>
<!-- <script src="{{ asset('js/cms/register.js') }}" type="text/javascript"></script> -->
@endsection
