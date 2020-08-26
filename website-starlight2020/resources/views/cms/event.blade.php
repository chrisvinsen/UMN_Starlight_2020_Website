@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/event.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/splide-2.4.11/splide.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/swiper-6.1.2/swiper-bundle.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/swiper-6.1.2/swiper-bundle.min.css') }}">
@endsection

@section('content')
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" id="banner-event" style="background:url({{ asset('images/bg-img/bg_8.jpg') }})">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title wow bounceInUp">Event</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb wow bounceInLeft">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="concept-container col-lg-8 mx-auto pt-5">
  <div class="title-top" style="text-align:center;letter-spacing: 5px;">
    <h1><b>KONSEP BESAR STARLIGHT 2020</b></h1>
  </div>
  <div class="content-1">
    <div class="about-stars mt-4" style="text-align:center;">
      Pada Starlight 2020, tema yang akan digunakan adalah <b>SIRIUS</b>. Sirius adalah sebuah bintang yang memiliki intensitas cahaya paling terang dan berjarak 90 hari cahaya dari <b>PLANET STARLIGHT</b>. <b>PLANET STARLIGHT</b> adalah sebuah planet yang dikelilingi <b>13 Bintang (Divisi)</b>. Ke-13 Bintang (Divisi) tersebut memiliki nama dibawah : 
    </div>
  </div>
  <div class="splide-body mt-5">
    <div class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="splide__slide__container">
              <img src="{{ asset('images/committee/logo_achernar.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_acturus.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_aldebaran.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_alpheratz.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_altair.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_antares.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_centauri.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_columba.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_orion.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_polaris.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_procyon.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_vega.png') }}" alt="">
          </li>
          <li class="splide__slide">
            <img src="{{ asset('images/committee/logo_wirastri.jpg') }}" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content-2 mt-5">
    <div class="about-stars-2" style="text-align:center;">
      Ke-13 bintang yang mengelilingi <b>PLANET STARLIGHT</b>, masing-masing memiliki anggota yang dinamakan <b>CANTAVIT</b>. Nama Cantavit diambil dari bahasa latin, yang berarti panitia. Para Cantavit akan bertugas memandu bintang-bintang di sekitar Planet Starlight <b>VERGILIA</b> yang akan berdatangan ke Planet Starlight karena adanya Carnaval yang sangat meriah <b>(Grand Opening - CARIBANA)</b>. <br><br>

      Cantavit akan bertugas untuk memandu perjalanan yang akan dilakukan oleh <b>VERGILIA</b>. Vergilia diambil dari bahasa latin yang berarti Pleiades. Pleiades adalah sebuah nama cluster atau kumpulan dari berbagai bintang-bintang. Bintang-bintang tersebut adalah bintang muda yang berwarna biru, kemudian bintang tersebut akan menjadi merah, seiring dengan berjalannya waktu. <br><br>

      Para Vergilia tentunya akan melewati 3 tahap untuk dapat menjadi seorang <b>SIRIUS</b> (Seorang bintang yang paling terang). Ke-3 tahap tersebut adalah sebagai berikut :  <br><br>
    </div>
  </div>
</div>
<div class="time-container">
    <div class="timeline">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url({{ asset('images/bg-img/stage_1.jpg') }}" data-year="CARIBANA">
            <div class="swiper-slide-content"><span class="timeline-year">GRAND OPENING</span>
              <h4 class="timeline-title">CARIBANA</h4>
              <p class="timeline-text">
                Perjalanan Starlight 2020 akan dimulai dengan adanya Grand Opening yang bernama Caribana. Caribana akan dilaksanakan selama 2 hari, yaitu pada hari Senin, 31 Agustus 2020 dan Rabu, 2 September 2020. Caribana akan menampilkan performers yang berasal dari Starlight 2019 sebagai pembukaan dari Starlight 2020. Selain itu, terdapat acara mini talkshow yang berdurasi kurang lebih 20 menit per-harinya. Mini Talkshow ini dinamakan dengan Stargazing, yaitu pembahasan mengenai bagaimana generasi muda dapat mencari dan memperdalam talenta dalam diri melalui motivasi dari narasumber. Dengan memiliki 2 tema yang berbeda yaitu “Ignite Your Light with (narasumber)” untuk hari pertama dan bertema “How to Extend Your Light with (narasumber)” untuk hari kedua.
                </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url({{ asset('images/bg-img/stage_2.jpg') }}" data-year="VENICEA">
            <div class="swiper-slide-content"><span class="timeline-year">FIRST STAGE</span>
              <h4 class="timeline-title">VENICEA</h4>
              <p class="timeline-text">
                Venicea Stage merupakan tahap awal bagi para calon peserta Starlight 2020 yang menggunakan media sosial Instagram sebagai salah satu persyaratan untuk mendaftarkan diri. Tahap ini dimulai dari para peserta mendaftarkan diri dan mengumpulkan hasil karyanya dalam bentuk video. Seleksi di dalam tahap Venicea Stage dilakukan oleh para panitia Starlight 2020 beserta beberapa perwakilan dari pihak Universitas Multimedia Nusantara. Pada tahap ini, terdapat 30 peserta sebagai target yang ditetapkan oleh panitia Starlight 2020.
              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url({{ asset('images/bg-img/stage_3.jpg') }}" data-year="MARDI GRAS">
            <div class="swiper-slide-content"><span class="timeline-year">SECOND STAGE</span>
              <h4 class="timeline-title">MARDI GRAS</h4>
              <p class="timeline-text">
              Sebelum melaksanakan Mardi Gras Stage, terdapat Technical Meeting untuk membahas keberlangsungan acara dan peraturan serta regulasi untuk peserta lomba. Panitia berharap agar acara Starlight 2020 dapat dipandang sebagai ajang lomba yang adil dan jujur. Oleh karena itu, kami mengundang lima juri dari pihak eksternal atau internal UMN. Juri yang didatangkan merupakan juri yang memang sudah ahli dengan bidangnya dan sudah berpengalaman. <br><br>
              Media yang digunakan dalam Mardi Gras Stage berupa YouTube Live, dan akan menggunakan sistem Live Recorded. Pada tahap ini, terdapat 15 peserta/tim yang akan menampilkan bakatnya. Kemudian peserta tersebut akan diseleksi untuk lolos ke tahap selanjutnya yaitu, Rio de Janeiro Stage.

              </p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url({{ asset('images/bg-img/stage_4.jpg') }}" data-year="RIO DE JANEIRO">
            <div class="swiper-slide-content"><span class="timeline-year">FINAL STAGE</span>
              <h4 class="timeline-title">RIO DE JANEIRO</h4>
              <p class="timeline-text">
              Rio de Janeiro Stage (Final Stage) merupakan acara puncak dari Starlight 2020 di mana semua peserta yang telah lolos hingga tahap ini akan menunjukkan penampilannya di panggung Starlight 2020. Sebelum melaksanakan Rio de Janeiro Stage, terdapat Technical Meeting untuk membahas keberlangsungan acara dan peraturan serta regulasi untuk peserta lomba. Media yang digunakan dalam Rio de Janeiro Stage sendiri berupa YouTube Live, dan akan menggunakan sistem Live Recorded. <br><br>
              Rangkaian acara Rio de Janeiro dibuka dengan adanya kata sambutan dari ketua Starlight 2020 hingga beberapa tamu undangan untuk mengawali keberlangsungan acara. Kemudian 10 peserta/tim yang telah dinyatakan lolos dari Mardi Gras Stage akan memberikan penampilannya berupa video. Selama Rio de Janeiro Stage, akan diumumkan dan diberikan penghargaan kepada para pemenang, sesuai dengan keputusan juri, panitia, serta penonton dengan hak suara mereka dalam mendukung peserta pilihannya. Juri yang terdapat di Rio de Janeiro Stage, merupakan juri yang juga berada di Mardi Gras Stage.


              </p>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev" style="--swiper-theme-color: none;--swiper-navigation-size: 0px;"></div>
        <div class="swiper-button-next" style="--swiper-theme-color: none;--swiper-navigation-size: 0px;"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
<!-- End of all content -->
@endsection

@section('custom_js')
<!-- Custom js -->
<script src="{{ asset('js/cms/swiper-6.1.2/swiper-bundlejs') }}"></script>
<script src="{{ asset('js/cms/swiper-6.1.2/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/cms/event.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cms/splide-2.4.11/splide.min.js') }}" type="text/javascript"></script>
<script>
	document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
      perPage   : 6,
      fixedHeight    : '9rem',
      fixedWidth  : '9rem',
      gap       : '1rem',
      cover     : true,
      pagination : false,
      breakpoints: {
        600: {
          perPage: 1,
          fixedHeight    : '5rem',
          fixedWidth    : '5rem',
        }
      },
      padding:{
        left: '1.2rem',
      }
    } ).mount();
} );
</script>

@endsection