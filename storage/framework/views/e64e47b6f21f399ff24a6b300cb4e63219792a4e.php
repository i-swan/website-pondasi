<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pondasi - Pondok Inspirasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('foto_icon/logo.png')); ?>">
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

    <?php $__env->startSection('css'); ?>

    <?php echo $__env->yieldSection(); ?>
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
                                <img src="<?php echo e(asset('foto_icon/logo.png')); ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="nav_mobile_menu">
                                <ul id="navigation">
                                <?php if($menu == 'home'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/pondasi#home')); ?>">Home</a>
                                    </li>
                                <?php if($menu == 'member'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/member')); ?>">Member</a>
                                    </li>
                                <?php if($menu == 'kegiatan'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan-pondasi')); ?>">Kegiatan</a>
                                    </li>                                  
                                <?php if($menu == 'prestasi'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/pondasi#price')); ?>">Prestasi</a>
                                    </li>
                                <?php if($menu == 'donasi'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/pondasi#download')); ?>">Donasi</a>
                                    </li>
                                <?php if($menu == 'kontak'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/pondasi#contact')); ?>">Kontak</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('/login')); ?>">Login</a>
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
    <?php echo $__env->yieldContent('content'); ?>

    <!-- footer area start -->
    <div class="footer-area ptb--50">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2020. All Rights Reserved.<strong>PONDASI BRO!</strong></p>
                <small>Modified from Lavaland Template</small>
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

</html><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/frontend/app.blade.php ENDPATH**/ ?>