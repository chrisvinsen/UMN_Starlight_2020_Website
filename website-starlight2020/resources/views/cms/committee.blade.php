@extends('cms.template.base')

@section('custom_css')
<!-- Custom CSS -->
<style>
    #banner-committee{
        background-image: url('{{ asset('images/bg-img/bg_5.png') }}');
    }
</style>
@endsection

@section('content')
<!-- All Content -->
<div>
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" id="banner-committee">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title wow bounceInUp" data-wow-delay="300ms">Committee</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow bounceInLeft" data-wow-delay="300ms">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Committee</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="our-blog-area section-padding-100 f-poppins">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rounded col-12 col-xl-8 col-lg-8 col-md-10 col-sm-12 mx-auto d-block">
                        <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="500ms">
                            <div class="row rounded">
                                <div class="col-md-6 col-12 d-flex justify-content-center align-items-center rounded">
                                    <div class="single-blog-thumb rounded">
                                        <img class="rounded my-auto" src="{{ asset('images/committee/logo_achernar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 rounded">
                                    <div class="single-blog-text text-center cus-pad">
                                        <a class="blog-title">Archernar</a>
                                        <div class="post-meta">
                                            <a class="post-author"><i class="zmdi zmdi-star"></i> BPH <i class="zmdi zmdi-star"></i></a>
                                        </div>
                                        <p>Bintang cemerlang yang berarti akar dari semua divisi. 
                                            Meskipun bintang ini tergolong terpencil namun tetap memancarkan cahaya yang cemerlang. 
                                            Begitu juga dengan BPH yang tidak terlihat namun tetap menerangi divisi lain</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 rounded wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_centauri.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Centauri</a>
                            <div class="post-meta">
          
                                <a class="post-author"><i class="zmdi zmdi-star"></i>Documentation <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang ini bisa dilihat mata telanjang oleh para manusia dan paling terang di rasinya.
                                 Bintang ini diibaratkan dengan hasil dari dokum akan langsung diliat oleh para mahasiswa 
                                 untuk menampilkan seluruh rangkaian acara. Dan bintang ini akan selalu berhubungan dengan Acturus.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/CENTAURI.pdf') }}" download="CENTAURI" class="btn download-pdf-btn custom-btn-DOC"><i class="zmdi zmdi-download"></i> Check Your Name!</a>  -->

                            <!--<a routerLink="./centauri" class="btn download-pdf-btn custom-btn-DOC">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_procyon.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Procyon</a>
                            <div class="post-meta">
                                
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Event <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang ini dianggap bintang tunggal dan tetangga dari berbagai bintang lainnya. 
                                Bintang ini mengibaratkan divisi acara seperti divisi tunggal karena akan 
                                menjadi kepala dari keberlangsungan acara Starlight namun tetap harus bekerja 
                                sama dengan bintang lain untuk menyelaraskan pikiran.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/PROCYON.pdf') }}" download="PROCYON" class="btn download-pdf-btn custom-btn-ACR"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./procyon" class="btn download-pdf-btn custom-btn-ACR">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp"  data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_alpheratz.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Alpheratz</a>
                            <div class="post-meta">
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Public Relation <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Dianggap bintang penghubung karena divisi Public Relations merupakan jembatan antara pihak 
                                internal Starlight dengan pihak eksternal yang diharapkan dapat menyampaikan informasi kepada 
                                pihak eksternal melalui social media yang ada secara akurat dan terpercaya.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/ALPHERATZ.pdf') }}" download="ALPHERATZ" class="btn download-pdf-btn custom-btn-PR"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./alpheratz" class="btn download-pdf-btn custom-btn-PR">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp"  data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_acturus.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Acturus</a>
                            <div class="post-meta">
                     
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Visual <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang ini dianggap bintang yang paling terang ketiga di langit malam. 
                                Sama seperti divisi visual dimana hasil dari divisi ini yang akan dilihat 
                                pertama kali oleh para mahasiswa melalui berbagai media yang dimiliki Starlight.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/ACTURUS.pdf') }}" download="ACTURUS" class="btn download-pdf-btn custom-btn-VSL"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./acturus" class="btn download-pdf-btn custom-btn-VSL">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_vega.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Vega</a>
                            <div class="post-meta">
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Media Partner <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Dianggap bintang tetangga. Tetangga yang dimaksud adalah pihak eksternal sehingga divisi ini
                                 diharapkan dapat menjadi perpanjangan tangan untuk Starlight kepada pihak-pihak luar, 
                                 terlebih menjalin hubungan dengan pihak eksternal dalam bekerja sama. </p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/VEGA.pdf') }}" download="VEGA" class="btn download-pdf-btn custom-btn-MDPR"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./vega" class="btn download-pdf-btn custom-btn-MDPR">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_orion.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Orion</a>
                            <div class="post-meta">
                            <!--<a class="post-date"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>-->
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Sponsorship <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang ini adalah bintang pemburu yang menggambarkan divisi sponsor 
                                seperti pemburu yang harus mencari target. Target yang dimaksud adalah pihak eksternal 
                                yang akan bekerja sama dengan Starlight untuk mendukung keberlangsungan acara.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/ORION.pdf') }}" download="ORION" class="btn download-pdf-btn custom-btn-SPR"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./orion" class="btn download-pdf-btn custom-btn-SPR">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_columba.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Columba</a>
                            <div class="post-meta">
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Website <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang ini merupakan bintang merpati di mana merpati memiliki tugas menyampaikan informasi.Sama seperti divisi Web yang menyampaikan informasi secara online melalui website agar mempermudah pihak lain dalam menerima pesan.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/COLUMBA.pdf') }}" download="COLUMBA" class="btn download-pdf-btn custom-btn-WEB"><i class="zmdi zmdi-download"></i> Check Your Name!</a>  -->

                            <!--<a routerLink="./columba" class="btn download-pdf-btn custom-btn-WEB">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_polaris.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Polaris</a>
                            <div class="post-meta">
                              
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Equipment <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang ini dianggap sistem multi bintang. Bintang ini menggambarkan divisi perlengkapan yang harus berhubungan dengan seluruh divisi untuk menyediakan seluruh perlengkapan maupun peralatan yang akan dipakai oleh divisi lain.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/POLARIS.pdf') }}" download="POLARIS" class="btn download-pdf-btn custom-btn-PRKP"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./polaris" class="btn download-pdf-btn custom-btn-PRKP">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp"  data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_altair.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Altair</a>
                            <div class="post-meta">
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Decoration <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Dianggap bintang yang sangat cepat seperti divisi dekorasi yang harus bergerak dengan cepat dan berpikir dengan tepat sesuai dengan konsep yang ada untuk dipertunjukkan dalam acara Starlight.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/ALTAIR.pdf') }}" download="ALTAIR" class="btn download-pdf-btn custom-btn-DCR"><i class="zmdi zmdi-download"></i> Check Your Name!</a> -->

                            <!--<a routerLink="./altair" class="btn download-pdf-btn custom-btn-DCR">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_aldebaran.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Aldebaran</a>
                            <div class="post-meta">
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Liaison Officer <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Dianggap bintang pengikut. Bintang ini menggambarkan divisi Liaison Officer yang akan terus mengikuti dan bekerja sama dengan divisi acara. Serta menjadi perantara untuk para peserta.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/ALDEBARAN.pdf') }}" download="ALDEBARAN" class="btn download-pdf-btn custom-btn-LO"><i class="zmdi zmdi-download"></i> Check Your Name! </a> -->

                            <!-- <a routerLink="./aldebaran" class="btn download-pdf-btn custom-btn-LO">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_wirastri.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Wirastri</a>
                            <div class="post-meta">
                  
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Insurer <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Dianggap bintang paling pemberani. Begitu juga diibaratkan dengan keamanan yang dimana tiap anggota harus berani dalam menjaga dan memastikan lancarnya keberlangsungan acara.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/WIRASTRI.pdf') }}" download="WIRASTRI" class="btn download-pdf-btn custom-btn-KEAM"><i class="zmdi zmdi-download"></i> Check Your Name! </a> -->

                            <!--<a routerLink="./wirastri" class="btn download-pdf-btn custom-btn-KEAM">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>

                <div class="rounded col-sm-6 col-md-4 col-lg-4 col-xl-3 equal">
                    <div class="rounded single-blog-area style-2 wow bounceInUp" data-wow-delay="300ms">
                        <!-- <div class="single-blog-thumb"> -->
                        <div class="rounded img-hover-zoom">
                            <img class="rounded" src="{{ asset('images/committee/logo_antares.png') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title">Antares</a>
                            <div class="post-meta">
                
                                <a class="post-author"><i class="zmdi zmdi-star"></i> Fresh Money <i class="zmdi zmdi-star"></i></a>
                            </div>
                            <p>Bintang yang paling besar. Sama seperti divisi Fresh Money yang memiliki 
                                pengaruh sangat besar dalam mengelola keuangan Starlight.</p>
                        </div>
                        <div class="blog-btn">
                            <!-- <a href="{{ asset('files/Committee Recruitment/ANTARES.pdf') }}" download="ANTARES" class="btn download-pdf-btn custom-btn-FM"><i class="zmdi zmdi-download"></i> Check Your Name! </a> -->

                            <!--<a routerLink="./antares" class="btn download-pdf-btn custom-btn-FM">Join <i class="fa fa-user-plus"></i></a>-->
                        </div>
                    </div>
                </div>

              <!--End Row-->
            </div>
        </div>
    </div>
</div>
<!-- End of all content -->
@endsection

@section('custom_js')   
<!-- Custom js -->
@endsection
