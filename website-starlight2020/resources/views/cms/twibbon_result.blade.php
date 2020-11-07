@extends('cms.template.base')
@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/twibbon.css') }}">
<link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
<style>
    body{
        background: url("{{ asset('images/bg-img/background_4.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection
@section('content')
<div class="container col-sm-8 pt-5 pb-5">
    <div style="margin-top: 100px; text-align: center;">
        <h1 class="f-carneval wow fadeInUp" style="letter-spacing: 5px;font-size: 55px;">TWIBBON STARLIGHT 2020</h1>
        <div class="mt-5 mx-3">
            <div class="wow fadeInUp" style ="max-width:400px;position: relative;margin:auto;padding:0;" id = "frame" >
                <img id = "photo" src = "{{ asset($photo) }}" alt = "photo">
                <canvas id = "canvas" style = "display: block"></canvas>
            </div>
            
            <div class="mt-3">
                <button class="btn starlight-btn mx-2 px-4 mb-3 mt-2" id = "download"><i class="fas fa-download wow fadeInUp"></i> Unduh Twibbon</button>
                <label for="uploadphoto">
                <span class="btn starlight-btn mx-1 mb-3 mt-2 wow fadeInUp" >
                <i class="fas fa-upload"></i> Unggah Foto Baru
                </span>
                <form action="{{ route('twibbonPost') }}" class="formfull" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg" name="uploadphoto" id="uploadphoto" />
                </form>
                </div>
            <div class="mx-auto">
                <div class="mt-1">
                    <h3 class="text-white mb-4 wow fadeInUp"> Silahkan Gunakan Caption ini: </h3>
                        <div class="paper wow fadeInUp">
                            <div class="paper-content">
                                <textarea id="caption" readonly>Prepare yourself for the biggest carnival & the final stage of Starlight 2020, Rio de Janeiro! 
From top of the mountains to the sea—
everywhere is a carnival, you'll see!

Olá, Starlighters!

I'm [name], and I'm inviting you to witness the rise of Sirius in Rio de janeiro Stage! 

📅 Saturday, 21 November 2020
⏰ 19.00 WIB
🎪 Starlight UMN's YouTube channel

See you there, ADIOS 👋🏼

—⁣⁣
Instagram: @starlightumn  ⁣⁣
LINE: @252uzsbl⁣⁣
Web: starlight.umn.ac.id⁣⁣
E-mail: starlight@umn.ac.id⁣⁣
#StarlightUMN #ExtendYourLight</textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="button" id="copyCaption" class="btn starlight-btn mx-3 wow fadeInUp">
                        Copy Caption <i class="fas fa-copy"></i>
                    </button>
                </div>
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
<script src="{{ asset('js/cms/sweetalert/sweetalert.js') }}"></script>
<script>
    $('form input').change(function() {
        $(this).closest('form').submit();
    });
    window.onload = function () {

        const img = new Image();
        const APP_URL = {!! json_encode(url('/')) !!}
        img.src = `${APP_URL}/images/gallery/twibbon_rio.png`;
        const photo = document.getElementById('photo');
        const min = Math.min(photo.width, photo.height);
        console.log(photo.width, photo.height);

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
                    saveAs(blob, "Twibbon Starlight 2020.png");
                }, "image/png");
            } else {
                const photo = document.createElement('canvas');
                photo.width = 1000;
                photo.height = 1000;
                photo.getContext('2d').drawImage(canvas, 0, 0, 1000, 1000);
                photo.getContext('2d').drawImage(img, 0, 0, 1000, 1000);
                photo.toBlobHD((blob) => {
                    saveAs(blob, "Twibbon Starlight 2020.png");
                }, "image/png");
            }
        });
    

    };
    
    $('#copyCaption').on('click', function() {
        var caption = document.getElementById("caption");
        caption.select();
        caption.setSelectionRange(0, 99999)
        document.execCommand("copy");
        Swal.fire(
            'Caption telah disalin!',
            'Jangan lupa gunakan caption ini untuk upload twibbon di instagram yaa!',
            'success',
        )
    })

</script>
@endsection
