<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lavaland - App Landing Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('images_new/icon/favicon.ico')); ?>">
    <!-- all css here -->
    <link href="<?php echo e(asset('css_new/bootstrap.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/magnific-popup.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/slicknav.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/swiper.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/typography.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/default-css.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/styles.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('css_new/responsive.css')); ?>" rel="stylesheet" media="all">
    <!-- modernizr css -->
    <script src="<?php echo e(asset('js_new/vendor/modernizr-2.8.3.min.js')); ?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->
    <!-- header area start -->
    <header>
        <div class="header-area h-style5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo e(asset('images_new/icon/logo-white.png')); ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="nav_mobile_menu">
                                <ul id="navigation">
                                    <li class="active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#feature">Feature</a>
                                    </li>
                                    <li>
                                        <a href="#team">Team</a>
                                    </li>
                                    <li>
                                        <a href="#price">Pricing Plan</a>
                                    </li>
                                    <li>
                                        <a href="#download">Download</a>
                                    </li>
                                    <li>
                                        <a href="#contact">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- hero area start -->
    <section class="hero-area app-slider pos-rel full-height d-flex align-items-center parallax" id="home" data-speed="3" data-bg-image="assets/images/slider/slider-bg3.jpg">
        <div class="slider_overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="hero-content">
                        <h2>GREAT APPS</h2>
                        <h3>MAKES GREAT
                            <span></span> EXPERIENCES</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ut libero magnam. Ipsa libero
                            repudiandae dolor velit esse rem illum aliquid delectus, quidem aut voluptatum necessitatibus.
                            Porro veniam assumenda quibusdam!</p>
                        <a href="#">Download App</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="screen-slides-area">
                        <img src="<?php echo e(asset('images_new/mobile-screen/mobile-mockup.png')); ?>" alt="image">
                        <div class="screen-slides swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen1.jpg')); ?>" alt="image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen2.jpg')); ?>" alt="image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen3.jpg')); ?>" alt="image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen4.jpg')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#app-feature" class="scrl_me_down">
            <span class="fa fa-angle-down"></span>
        </a>
    </section>
    <!-- hero area end -->
    <!-- service area start -->
    <div class="service-area pt--70 pb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-service">
                        <div class="icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h4>Easy to use</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime iure cumque quisquam?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service">
                        <div class="icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <h4>Awesome Design</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime iure cumque quisquam?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <h4>Totally Free</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime iure cumque quisquam?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- app-cta area start -->
    <div class="app-cta-area ptb--100 bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="appcta-content">
                        <h2>Best Mobile App for Your Business</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptates a quibusdam dicta deleniti
                            beatae?
                        </p>
                        <div class="links links-right">
                            <a href="#">Learn More</a>
                            <a class="active" href="#">Get App now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mscreen-right effectupdown">
                        <img src="<?php echo e(asset('images_new/mobile-screen/mobile-rotatescreen2.png')); ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- app-cta area end -->
    <!-- app-cta area start -->
    <div class="app-cta-area pb--100 bg-gray" id="app-feature">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="mscreen-left effectupdown2">
                        <img src="<?php echo e(asset('images_new/mobile-screen/mobile-rotatescreen1.png')); ?>" alt="image">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="appcta-content appcta-right">
                        <h2>It’s all about Promoting your Business</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptates a quibusdam dicta deleniti
                            beatae?
                        </p>
                        <div class="links links-left">
                            <a class="active" href="#">Learn More</a>
                            <a href="#">Get App now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- app-cta area end -->
    <!-- appfeature area strat -->
    <section class="app-feature-area ptb--100" id="feature">
        <div class="container">
            <div class="h5-title section-title">
                <span>Our Best</span>
                <h2>Feature</h2>
            </div>
            <div class="row">
                <div class="d-none d-lg-block col-lg-4 order-lg-1">
                    <div class="ft-device">
                        <img src="<?php echo e(asset('images_new/mobile-screen/mobile-mockup2.png')); ?>" alt="image">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 order-lg-0">
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="content">
                            <h4>Creative Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit perspiciatis cumque voluptates dolor
                                voluptatum
                            </p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="content">
                            <h4>Retina ready</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit perspiciatis cumque voluptates dolor
                                voluptatum
                            </p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="content">
                            <h4>full free chat</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit perspiciatis cumque voluptates dolor
                                voluptatum
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 order-lg-2 right-side">
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="content">
                            <h4>Security</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit perspiciatis cumque voluptates dolor
                                voluptatum
                            </p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa fa-bolt"></i>
                        </div>
                        <div class="content">
                            <h4>Fast</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit perspiciatis cumque voluptates dolor
                                voluptatum
                            </p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <div class="content">
                            <h4>Cloud</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit perspiciatis cumque voluptates dolor
                                voluptatum
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- appfeature area end -->
    <!-- appdemo-video area start -->
    <div class="appdemo-video-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="ad-video-box">
                        <a class="expand-video" href="https://www.youtube.com/watch?v=2zBwNqARNN8">
                            <i class="fa fa-play"></i>
                        </a>
                        <h3>Watch Video</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appdemo-video area end -->
    <!-- screenshot area start -->
    <div class="screenshot-area bg-gray ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <span>APP</span>
                <h2>Screenshots</h2>
            </div>
            <div class="screenshot-carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen1.jpg')); ?>" alt="screenshot">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen2.jpg')); ?>" alt="screenshot">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen3.jpg')); ?>" alt="screenshot">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('images_new/mobile-screen/screens/screen4.jpg')); ?>" alt="screenshot">
                    </div>
                </div>
                <div class="screenshot-pagination"></div>
            </div>
        </div>
    </div>
    <!-- screenshot area end -->
    <!-- trainer area start -->
    <section class="trainer-area ptb--100" id="team">
        <div class="container">
            <div class="h5-title section-title">
                <span>Meet</span>
                <h2>Our Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer trainer_s_three">
                        <div class="thumb">
                            <img src="<?php echo e(asset('images_new/team/team-img1.jpg')); ?>" alt="image">
                        </div>
                        <div class="content">
                            <h4>Rosa Dietrich</h4>
                            <p>Body Builder Trainer</p>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer trainer_s_three">
                        <div class="thumb">
                            <img src="<?php echo e(asset('images_new/team/team-img2.jpg')); ?>" alt="image">
                        </div>
                        <div class="content">
                            <h4>Rosa Dietrich</h4>
                            <p>Body Builder Trainer</p>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer trainer_s_three">
                        <div class="thumb">
                            <img src="<?php echo e(asset('images_new/team/team-img3.jpg')); ?>" alt="image">
                        </div>
                        <div class="content">
                            <h4>Rosa Dietrich</h4>
                            <p>Body Builder Trainer</p>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trainer area end -->
    <!-- testimonial-two area start -->
    <div class="testimonial-two">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="testimonials-carousel tst-two-carousel swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tst2-thumb">
                                    <img src="<?php echo e(asset('images_new/author/author-img1.jpg')); ?>" alt="image">
                                </div>
                                <div class="tst2-content">
                                    <h4>Franco Windler</h4>
                                    <span>Web Developer</span>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ex aut. Laborum
                                        delectus voluptates ut quaerat consectetur odit ipsum reiciendis non quibusdam, aspernatur,
                                        qui esse alias nobis. Doloribus, molestias in!</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tst2-thumb">
                                    <img src="<?php echo e(asset('images_new/author/author-img2.jpg')); ?>" alt="image">
                                </div>
                                <div class="tst2-content">
                                    <h4>Franco Windler</h4>
                                    <span>Web Developer</span>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ex aut. Laborum
                                        delectus voluptates ut quaerat consectetur odit ipsum reiciendis non quibusdam, aspernatur,
                                        qui esse alias nobis. Doloribus, molestias in!</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tst2-thumb">
                                    <img src="<?php echo e(asset('images_new/author/author-img3.jpg')); ?>" alt="image">
                                </div>
                                <div class="tst2-content">
                                    <h4>Franco Windler</h4>
                                    <span>Web Developer</span>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, ex aut. Laborum
                                        delectus voluptates ut quaerat consectetur odit ipsum reiciendis non quibusdam, aspernatur,
                                        qui esse alias nobis. Doloribus, molestias in!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-two area end -->
    <!-- pricing area start -->
    <section class="pricing-area ptb--100" id="price">
        <div class="container">
            <div class="h5-title section-title">
                <span>Our</span>
                <h2>Pricing Plan</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="prc-single">
                        <h2>Basic</h2>
                        <strong>
                            <sup>$</sup>33
                            <sub>/ Mon</sub>
                        </strong>
                        <ul class="prc-list">
                            <li>100mb Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>
                        <a href="#">purchase</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="prc-single">
                        <h2>Standard</h2>
                        <strong>
                            <sup>$</sup>66
                            <sub>/ Mon</sub>
                        </strong>
                        <ul class="prc-list">
                            <li>500mb Disk Space</li>
                            <li>10 Subdomains</li>
                            <li>20 Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>
                        <a class="active" href="#">purchase</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="prc-single">
                        <h2>Premium</h2>
                        <strong>
                            <sup>$</sup>99
                            <sub>/ Mon</sub>
                        </strong>
                        <ul class="prc-list">
                            <li>1000mb Disk Space</li>
                            <li>50 Subdomains</li>
                            <li>100 Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>
                        <a href="#">purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end -->
    <!-- faq area start -->
    <div class="faq-area">
        <div class="container">
            <div class="h5-title section-title">
                <h2>FAQ</h2>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="accordion-area" id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <h5>
                                    <span>1</span>
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseOne">Is my microwave giving me cancer ?</button>
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
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo">Is bird flu still a danger ?</button>
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
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseThree">How often do I really need to have?</button>
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
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseFour">Will staring at a computer all day make me blind?</button>
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
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseFive">Can diet soda kill me? </button>
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
                <div class="col-lg-4 d-md-none d-lg-block d offset-lg-1">
                    <div class="faq-left-thumb">
                        <img src="<?php echo e(asset('images_new/mobile-screen/mobile-mockup3.png')); ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->
    <!-- app-download area start -->
    <section class="download-area" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="download-title">
                        <h2>Download Lavaland Today</h2>
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
                                <p>Available On</p>
                                <h2>Windows</h2>
                            </div>
                        </a>
                        <a class="single-download-links" href="#">
                            <div class="sdl-icon">
                                <i class="fa fa-apple"></i>
                            </div>
                            <div class="sdl-content">
                                <p>Available On</p>
                                <h2>Apple</h2>
                            </div>
                        </a>
                        <a class="single-download-links" href="#">
                            <div class="sdl-icon">
                                <i class="fa fa-android"></i>
                            </div>
                            <div class="sdl-content">
                                <p>Available On</p>
                                <h2>Android</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- app-download area end -->
    <!-- feature blog area start -->
    <div class="feature-blog ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <span>Read</span>
                <h2>Our Letest News</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-content">
                            <h2>
                                <a href="blog.html">Everyday it provides me with exactly what I need</a>
                            </h2>
                            <span>June 18, 2017</span>
                        </div>
                        <div class="blog-thumb">
                            <img src="<?php echo e(asset('images_new/blog/mobileapp-blog/mobileapp-blog-img1.jpg')); ?>" alt="">
                            <a href="blog.html" class="read-more">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-content">
                            <h2>
                                <a href="blog.html">Everyday it provides me with exactly what I need</a>
                            </h2>
                            <span>June 18, 2017</span>
                        </div>
                        <div class="blog-thumb">
                            <img src="<?php echo e(asset('images_new/blog/mobileapp-blog/mobileapp-blog-img3.jpg')); ?>" alt="">
                            <a href="blog.html" class="read-more">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-content">
                            <h2>
                                <a href="blog.html">Everyday it provides me with exactly what I need</a>
                            </h2>
                            <span>June 18, 2017</span>
                        </div>
                        <div class="blog-thumb">
                            <img src="<?php echo e(asset('images_new/blog/mobileapp-blog/mobileapp-blog-img2.jpg')); ?>" alt="">
                            <a href="blog.html" class="read-more">Read More
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature blog area end -->
    <!-- contact area start -->
    <section class="contact-area h5-contact bg-gray ptb--100" id="contact">
        <div class="container">
            <div class="h5-title section-title">
                <span>Locate Us</span>
                <h2>Contact</h2>
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
                    <div id="google_map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
    <!-- footer area start -->
    <div class="footer-area ptb--50">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2018. All Rights Reserved.</p>
                <p>Landing Page Template Designed & Developed By:
                    <strong>Lavaland</strong>
                </p>
            </div>
        </div>
    </div>
    <!-- footer area end -->

    <!-- jquery latest version -->
    <script src="<?php echo e(asset('js_new/vendor/jquery-2.2.4.min.js')); ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo e(asset('js_new/bootstrap.min.js')); ?>"></script>
    <!-- others plugins -->
    <script src="<?php echo e(asset('js_new/jquery.slicknav.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/countdown.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/jquery.zoomslider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js_new/jquery.firefly.js')); ?>"></script>
    <!-- google map -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO_5h890WNShs_YLGivCBfs2U89qXR-7Y&callback=initMap') }}"></script>
    <script src="<?php echo e(asset('js_new/scripts.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/front.blade.php ENDPATH**/ ?>