@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/twibbon.css') }}">
<link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
<style>
    body{
        background: url("{{ asset('images/bg-img/twibbon_result.jpg') }}");
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
            <div class="container mx-auto" style = "position: relative" id = "frame" >
                <img id = "photo" src = "{{ $photo }}" alt = "photo">
                <canvas id = "canvas" style = "display: block"></canvas>
            </div>
            <div class="mx-auto">
                <div class="mt-3">
                    <button class="btn cvinsen-btn" id = "download">Unduh</button>
                </div>
                <label for="uploadphoto">
                <span class="btn cvinsen-btn mt-3" >
                Unggah Foto Baru
                </span>
                <form action="{{url('/twibbonPost')}}" class="formfull" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg" name="uploadphoto" id="uploadphoto" />
                </form>
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
    img.src = 'images/gallery/twibbon1kx1k.png';
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
        preview_canvas.width = 1000;
        preview_canvas.height = 1000;
        preview_canvas.getContext('2d').drawImage(canvas, widget.pos.x, widget.pos.y, widget.pos.w, widget.pos.h, 0, 0, 1000, 1000);
        preview_canvas.getContext('2d').drawImage(img, 0, 0, 1000, 1000, 0, 0, 1000, 1000);
        flag = true;
    });

    document.getElementById('download').addEventListener('click', () => {
        if (flag) {
            const photo = document.getElementById('preview_canvas');
            photo.toBlobHD((blob) => {
                saveAs(blob, "STARLIGHT2020.png");
            }, "image/png");
            // Miichael males nih 😣... hehehe
        } else {
            const photo = document.createElement('canvas');
            photo.width = 1000;
            photo.height = 1000;
            photo.getContext('2d').drawImage(canvas, 0, 0, 1000, 1000, 0, 0, 1000, 1000);
            photo.getContext('2d').drawImage(img, 0, 0, 1000, 1000, 0, 0, 1000, 1000);
            photo.toBlobHD((blob) => {
                saveAs(blob, "STARLIGHT2020.png");
            }, "image/png");
        }
    });

    // Happy Hacking! - Miichael 😎
</script>
@endsection
