@extends('frontend.app')

@section('content')
<!-- hero area start -->
<section class="hero-area app-slider pos-rel full-height d-flex align-items-center parallax" id="home" data-speed="3" data-bg-image="{{ asset('foto_background/home_new.jpg') }}">
    <div class="slider_overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="hero-content">
                    <h2>PONDASI</h2>
                    <h3>-Pondok Inspirasi-</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ut libero magnam. Ipsa libero
                        repudiandae dolor velit esse rem illum aliquid delectus, quidem aut voluptatum necessitatibus.
                        Porro veniam assumenda quibusdam!</p>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
    <a href="#app-feature" class="scrl_me_down">
        <span class="fa fa-angle-down"></span>
    </a>
</section>
<!-- hero area end -->
<!-- app-cta area start -->
<div class="app-cta-area pb--100" id="app-feature">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="mscreen-left effectupdown2">
                    <img src="{{URL::to('/')}}/foto_member/g_600_470_3.jpg" alt="image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="appcta-content appcta-left">
                    <h2>Apa si Pondasi itu ?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptates a quibusdam dicta deleniti
                        beatae?
                    </p>
                    <br>
                    <h4>Franco Windler</h4>
                    <span>Founder Pondasi</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- app-cta area end -->
<!-- Member start -->
<section class="trainer-area ptb--100 bg-gray" id="team">
    <div class="container">
        <div class="h5-title section-title">
            <h2>Member Pondasi</h2>
        </div>
        <div class="row">
            @foreach($anggota as $key => $a)
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="{{URL::to('/')}}/foto_member/{{ $a->file_foto }}" alt="image" style="max-height: 600px">
                    </div>
                    <div class="content">
                        <a href="{{ url('/member/profil/'.$a->id) }}"><h2>{{ $a->nama }}</h2></a>
                        <p>{{ $a->jurusan_ipb }} IPB Angkatan {{ $a->angkatan_ipb }}</p>
                    </div>
                </div>
            </div>
            @endforeach          
        </div>
        <div class="row">
            <div class="appcta-content  appcta-right">
                <div class="links links-left">
                    <a class="active" href="{{ url('/member') }}">Lihat Semua Member</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Member end -->
<!-- Kegiatan strat -->
<section class="app-feature-area" id="feature">
    <div class="feature-blog ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <h2>Kegiatan Terbaru di Pondasi</h2>
            </div>
            @foreach($kegiatan as $key => $k)
            <div class="single-blog">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-thumb">
                            <img src="{{URL::to('/')}}/foto_kegiatan/{{ $k->file_foto }}" alt="" style="max-height: 600px">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="blog-content">
                            <h2>
                                <b><a href="{{ url('/kegiatan-pondasi/detail/'.$k->id) }}">{{ $k->nama }}</a></b>
                            </h2>
                            <span>{{ $k->tanggal }}</span>
                        </div>
                        <a href="{{ url('/kegiatan-pondasi/detail/'.$k->id) }}"><button class="btn btn-lg btn-success"> Baca Selengkapnya </button></a>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            <div class="row">
                <div class="appcta-content  appcta-right">
                    <div class="links links-left">
                        <a class="active" href="{{ url('/kegiatan-pondasi') }}">Lihat Semua Kegiatan Pondasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Kegiatan end -->
<!-- Galery start -->
<section class="app-feature-area" id="galery">
    <div class="download-area screenshot-area bg-gray ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <span style="color: white;">Galeri</span>
                <h2 style="color: white;">Semua Kegiatan Pondasi</h2>
            </div>
            <div class="screenshot-carousel swiper-container">
                <div class="swiper-wrapper">
                    @foreach($galeri as $key => $g)
                    <div class="swiper-slide">
                        <img src="{{ asset('foto_kegiatan/'.$g->file_foto) }}" alt="screenshot">
                    </div>
                    @endforeach
                </div>
                <div class="screenshot-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- Galery end -->
<!-- Prestasi start -->
<section class="classes-area bg-gray ptb--100" id="price">
    <div class="container">
        <div class="h5-title section-title">
            <h2>Prestasi Pondasi</h2>
        </div>
        <div class="classes-carousel swiper-container">
            <div class="swiper-wrapper">
                @foreach($prestasi as $key => $p)
                <div class="swiper-slide">
                    <div class="class-item">
                        <div class="thumb">
                            <img src="{{URL::to('/')}}/foto_prestasi/{{ $p->file_foto }}" alt="" style="max-height: 600px">
                        </div>
                        <div class="class-content">
                            <div class="cls-top-meta">
                                <span class="cls-price">#1</span>
                            </div>
                            <h2>
                                <a href="{{ url('/prestasi-pondasi/detail/'.$p->id) }}">{{ $p->nama }}</a>
                            </h2>
                            <a href="{{ url('/prestasi-pondasi/detail/'.$p->id) }}" class="join-class">Selengkapnya</a>
                            <ul class="meta-info">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>{{ $p->tanggal }}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>{{ $p->host }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- Prestasi end -->
<!-- Donasi start -->
<section class="download-area" id="download">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="download-title">
                    <h2>Ingin Mendonasikan Rezeki Anda? </h2>
                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt
                        ut labore Lorem ipsum madolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="download-app">
                    <a class="single-download-links" href="#">
                        <div class="sdl-icon">
                            <i class="fa fa-windows"></i>
                        </div>
                        <div class="sdl-content">
                            <p>Whatsapp</p>
                            <h2>081234567890</h2>
                        </div>
                    </a>
                    <a class="single-download-links" href="#">
                        <div class="sdl-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <div class="sdl-content">
                            <p>Whatsapp</p>
                            <h2>081234567890</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donasi end -->
<!-- faq area start -->
<div class="faq-area  ptb--100">
    <div class="container">
        <div class="h5-title section-title">
            <h2>FAQ</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion-area" id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <span>1</span>
                                <button class="collapsed" data-toggle="collapse" data-target="#collapseOne">Apa si Pondasi itu ?</button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <span>2</span>
                                <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo">Bagaimana cara menjadi member Pondasi ?</button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <span>3</span>
                                <button class="collapsed" data-toggle="collapse" data-target="#collapseThree">Kapan Oprec Pondasi Diadakan?</button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <span>4</span>
                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFour">Apa Saja Syarat untuk Menjadi Member Pondasi?</button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <span>5</span>
                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFive">Siapa saja yang bisa mendaftar menjdai member pondasi ? </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei temporo incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq area end -->
<!-- contact area start -->
<section class="contact-area h5-contact bg-gray ptb--100" id="contact">
    <div class="container">
        <div class="h5-title section-title">
            <span>Locate Us</span>
            <h2>Kontak</h2>
        </div>
        <div class="row align">
            <div class="col-md-6">
                <div class="contact-content cnt-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Enter Your Name" name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Enter Your Email" name="email">
                            </div>
                            <div class="col-md-12">
                                <textarea name="msg" id="msg" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="send" value="send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align">
                    <div class="col-md-12">
                        <div class="contact-content cnt-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>ini alamat: </div>
                                </div>
                                <div class="col-md-12">
                                    <div>Jalan Panjang no : 99</div>
                                </div>
                                <div class="col-md-12">
                                    <div>Ds Bebekan, Kec Dramagon </div>
                                </div>
                                <div class="col-md-12">
                                    <div>Kab Bogor 11220 </div>
                                </div>
                                <div class="col-md-12">
                                    <div>Jawa Barat, Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="google_map"></div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
@endsection