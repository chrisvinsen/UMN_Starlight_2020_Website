@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/cms/aboutus.css') }}">  
<style>
    #banner-aboutus{
        background-image: url('{{ asset('images/bg-img/H7.png') }}');
    }
</style>
@endsection

@section('content')
<!-- All Content -->
<div>
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" id="banner-aboutus">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title wow bounceInUp">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow bounceInLeft">
                                <li class="breadcrumb-item"><a href="/" >Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-8">
                    <div class="about-content-text mb-80 text-center">
                        <h6 class="wow bounceInUp text-light" data-wow-delay="300ms">About Starlight</h6>
                        <h3 class="wow bounceInUp f-carneval" data-wow-delay="300ms">What is Starlight?</h3>
                        <p class="wow bounceInUp f-poppins" data-wow-delay="300ms">
                            Starlight adalah salah satu acara terbesar di Universitas Multimedia Nusantara yang diadakan oleh Badan Eksekutif Mahasiswa Universitas Multimedia Nusantara. Yang telah menjadi acara tahunan di mana siswa dapat bersaing dengan menunjukkan kemampuan mereka untuk menunjukkan bakat mereka di acara ini. Starlight sendiri juga digunakan sebagai acara promosi untuk Unit Kegiatan dan Komunitas Siswa yang berdiri di setiap Universitas dan Sekolah Menengah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-countdown-area section-padding-100-0 bg-white">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-8">
                    <div class="about-content-text mb-80 text-center">
                        <h6 class="wow bounceInUp text-reddark" data-wow-delay="300ms">Our Tagline</h6>
                        <h3 class="wow bounceInUp f-carneval text-reddark" data-wow-delay="300ms">Extend Your Light</h3>
                        <p class="wow bounceInUp f-poppins text-reddark" data-wow-delay="300ms">
                            Arti dari EXTEND YOUR LIGHT adalah kami ingin para peserta dapat memancarkan lebih banyak cahaya di panggung Starlight bahkan memperluas atau memperluas cahaya. Yang kami maksud di sini adalah bakat dari masing-masing peserta dan antusiasme yang berasal dari panitia.
                            Kami berharap para peserta dapat mengembangkan bakat mereka lebih banyak lagi di panggung Starlight. Demikian juga dengan komite, kami berharap bahwa komite juga akan terus memancarkan antusiasme dan memberikan sepenuhnya kepada Starlight.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-offer-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-3 text-center wow bounceInUp" data-wow-delay="300ms">
                        <p>Starlight 2020</p>
                        <h4 class="f-carneval text-reddark">Our Goals</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-6 equal">
                    <div class="single-we-offer-content text-center wow bounceInLeft f-poppins" data-wow-delay="0.3s">
                        <div class="offer-icon">
                            <img src="{{ asset('images/core-img/icon.png') }}" alt="Our Vision">
                        </div>
                        <h5>Vision</h5>
                        <p>
                            Menjadi salah satu kegiatan kemahasiswaan yang penting di Universitas Multimedia Nusantara yang dapat memberikan pengalaman terbaik bagi panitia dan peserta.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-6 equal">
                    <div class="single-we-offer-content text-center wow bounceInRight" data-wow-delay="0.3s">
                        <div class="offer-icon">
                            <img src="{{ asset('images/core-img/icon-2.png') }}" alt="Our Mission">
                        </div>
                        <h5>Mission</h5>
                        <p>
                            Menyediakan ruang bagi peserta untuk bebas mengekspresikan diri 
                            <br>
                            Memperkenalkan Starlight ke luar UMN
                            <br>Membuat dampak yang baik pada komite dan peserta
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row elements-wrap">
            <div class="col-12">
                <div class="section-heading-3 text-center mb-5 wow bounceInUp" data-wow-delay="300ms">
                    <h4 class="f-carneval text-reddark">Frequently Asked Questions</h4>
                </div>
                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion-wrap type-accordion">
                                <h3 class="entry-title flex justify-content-between align-items-center active wow bounceInUp">Apa itu Starlight?<span class="arrow-r"></span></h3>
                                <div class="entry-content wow bounceInUp">
                                    <p class="py-0 px-3">Starlight merupakah acara tahunan Universitas Multimedia Nusantara yang menyediakan panggung bagi peserta yang ingin menunjukkan segala bakat dan potensi baik internal maupun eksternal.</p>
                                </div>

                                <h3 class="entry-title flex justify-content-between align-items-center wow bounceInUp">Apa tema Starlight 2020?<span class="arrow-r"></span></h3>

                                <div class="entry-content wow bounceInUp">
                                    <p class="py-0 px-3">Tahun ini, Starlight 2020 mengusung tema "Sirius" yang merupakan bintang paling terang di langit. Dengan tema ini, diharapkan para peserta Starlight 2020 mampu menunjukkan bakatnya dengan percaya diri seterang Sirius.</p>
                                </div>

                                <h3 class="entry-title flex justify-content-between align-items-center wow bounceInUp">Apa konsep Starlight 2020?<span class="arrow-r"></span></h3>

                                <div class="entry-content wow bounceInUp">
                                    <p class="py-0 px-3">Konsep yang diusung Starlight 2020 tahun ini adalah Carnival.  Konsep ini tentunya menyemarakan Starlight 2020 dengan  berbagai bakat yang menggabungkan konsep hiburan, musik dan talenta lainnya.</p>
                                </div>

                                <h3 class="entry-title flex justify-content-between align-items-center wow bounceInUp">Bagaimana cara mendaftarkan diri sebagai panitia Starlight 2020?<span class="arrow-r"></span></h3>

                                <div class="entry-content wow bounceInUp">
                                    <p class="py-0 px-3">Pendaftaran panitia akan segera dibuka. Pantau saja Instagram dan Line Official Account kami.</p>
                                </div>

                                <h3 class="entry-title flex justify-content-between align-items-center wow bounceInUp">Apa saja persyaratan untuk menjadi bagian dari panitia Starlight 2020?<span class="arrow-r"></span></h3>

                                <div class="entry-content wow bounceInUp">
                                    <p class="py-0 px-3">Menjagi bagian panitia Starlight adapun syarat, yakni:<br>
                                    - Mahasiswa angkatan tahun 2020<br>
                                    - Berkomitmen dan memiliki tanggung jawab hingga akhir acara</p>
                                </div>

                                <h3 class="entry-title flex justify-content-between align-items-center wow bounceInUp">Apa saja divisi yang tersedia dalam Starlight 2020?<span class="arrow-r"></span></h3>

                                <div class="entry-content wow bounceInUp">
                                    <p class="py-0 px-3">Starlight memiliki 12 divisi yang bisa Starlighters cek langsung di bagian tombol COMITTE RECRUITMENT.</p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-12 col-lg-6">
                            <div class="tabs">
                                <ul class="tabs-nav flex">
                                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>
                                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li>
                                </ul>

                                <div class="tabs-container">
                                    <div id="tab_details" class="tab-content">
                                        <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia volutpat urna. Maecenas ut aliquam purus, quis sodales dolor.</p>
                                    </div>

                                    <div id="tab_venue" class="tab-content">
                                        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                                    </div>

                                    <div id="tab_organizers" class="tab-content">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of all content -->
@endsection

@section('custom_js')   
<!-- Custom js -->
<script src="{{ asset('js/cms/aboutus.js') }}"></script>
@endsection
