<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <base href="http://localhost/pondasi/public/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Pondasi | Administrator</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo e(asset('css/font-face.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo e(asset('vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/wow/animate.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/slick/slick.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(asset('css/theme.css')); ?>" rel="stylesheet"  media="all">

    <?php $__env->startSection('css'); ?>

    <?php echo $__env->yieldSection(); ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo e(url('/admin')); ?>">
                            <img src="<?php echo e(asset('foto_icon/logo.png')); ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <?php if($menu == 'dashboard'): ?>
                        <li class="active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?> 
                            <a href="<?php echo e(url('/admin')); ?>"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a>
                        </li>
                    <?php if($menu == 'anggota' or $menu == 'anggota/detail' or $menu == 'anggota/recycle_bin' or $menu == 'anggota/profil'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-accounts"></i>Anggota</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'anggota/profil'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/anggota/profil')); ?>"><i class="zmdi zmdi-account-box"></i>Profil</a>
                                </li>                                
                                <?php if($menu == 'anggota'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/anggota')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                                <?php if($menu == 'anggota/recycle_bin'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/anggota/recycle-bin')); ?>"><i class="zmdi zmdi-delete"></i>Recycle Bin</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'kegiatan' or $menu == 'kegiatan/detail' or $menu == 'kegiatan/recycle_bin' or $menu == 'kegiatan/jenis'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-view-list-alt"></i>Kegiatan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'kegiatan/jenis'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan/jenis-kegiatan')); ?>"><i class="zmdi zmdi-tag-more"></i>Jenis Kegiatan</a>
                                </li>                                
                                <?php if($menu == 'kegiatan'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                                <?php if($menu == 'kegiatan/recycle_bin'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan/recycle-bin')); ?>"><i class="zmdi zmdi-delete"></i>Recycle Bin</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'prestasi' or $menu == 'prestasi/detail' or $menu == 'prestasi/recycle_bin' or $menu == 'prestasi/jenis'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-star-circle"></i>prestasi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'prestasi/jenis'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/prestasi/jenis-prestasi')); ?>"><i class="zmdi zmdi-tag-more"></i>Jenis prestasi</a>
                                </li>                                
                                <?php if($menu == 'prestasi'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/prestasi')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                                <?php if($menu == 'prestasi/recycle_bin'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/prestasi/recycle-bin')); ?>"><i class="zmdi zmdi-delete"></i>Recycle Bin</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'donasi' or $menu == 'donasi/detail'or $menu == 'donasi/jenis'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-money"></i>donasi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'donasi/jenis'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/donasi/jenis-rekening')); ?>"><i class="zmdi zmdi-tag-more"></i>Rekening Pondasi</a>
                                </li>                                
                                <?php if($menu == 'donasi'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/donasi')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'all-akun'): ?>
                        <li class="active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                        <?php if($admin->status == 'pengurus'): ?>
                            <a href="<?php echo e(url('/admin/akun')); ?>"><i class="zmdi zmdi-view-dashboard"></i>Akun All Member</a>
                        <?php endif; ?>
                        </li>                                            
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('foto_icon/logo.png')); ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <?php if($menu == 'dashboard'): ?>
                        <li class="active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?> 
                            <a href="<?php echo e(url('/admin')); ?>"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a>
                        </li>
                    <?php if($menu == 'anggota' or $menu == 'anggota/detail' or $menu == 'anggota/recycle_bin' or $menu == 'anggota/profil'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-accounts"></i>Anggota</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'anggota/profil'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/anggota/profil')); ?>"><i class="zmdi zmdi-account-box"></i>Profil</a>
                                </li>                                
                                <?php if($menu == 'anggota'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/anggota')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                                <?php if($menu == 'anggota/recycle_bin'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/anggota/recycle-bin')); ?>"><i class="zmdi zmdi-delete"></i>Recycle Bin</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'kegiatan' or $menu == 'kegiatan/detail' or $menu == 'kegiatan/recycle_bin' or $menu == 'kegiatan/jenis'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-view-list-alt"></i>Kegiatan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'kegiatan/jenis'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan/jenis-kegiatan')); ?>"><i class="zmdi zmdi-tag-more"></i>Jenis Kegiatan</a>
                                </li>                                
                                <?php if($menu == 'kegiatan'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                                <?php if($menu == 'kegiatan/recycle_bin'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/kegiatan/recycle-bin')); ?>"><i class="zmdi zmdi-delete"></i>Recycle Bin</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'prestasi' or $menu == 'prestasi/detail' or $menu == 'prestasi/recycle_bin' or $menu == 'prestasi/jenis'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-star-circle"></i>prestasi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'prestasi/jenis'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/prestasi/jenis-prestasi')); ?>"><i class="zmdi zmdi-tag-more"></i>Jenis prestasi</a>
                                </li>                                
                                <?php if($menu == 'prestasi'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/prestasi')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                                <?php if($menu == 'prestasi/recycle_bin'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/prestasi/recycle-bin')); ?>"><i class="zmdi zmdi-delete"></i>Recycle Bin</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'donasi' or $menu == 'donasi/detail'or $menu == 'donasi/jenis'): ?>
                        <li class="has-sub active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-money"></i>donasi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php if($menu == 'donasi/jenis'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/donasi/jenis-rekening')); ?>"><i class="zmdi zmdi-tag-more"></i>Rekening Pondasi</a>
                                </li>                                
                                <?php if($menu == 'donasi'): ?>
                                    <li class="active">
                                <?php else: ?>
                                    <li>
                                <?php endif; ?>
                                    <a href="<?php echo e(url('/donasi')); ?>"><i class="zmdi zmdi-view-web"></i>Table</a>
                                </li>
                            </ul>
                        </li>
                    <?php if($menu == 'all-akun'): ?>
                        <li class="active">
                    <?php else: ?>
                        <li>
                    <?php endif; ?>
                        <?php if($admin->status == 'pengurus'): ?>
                            <a href="<?php echo e(url('/admin/akun')); ?>"><i class="zmdi zmdi-view-dashboard"></i>Akun All Member</a>
                        <?php endif; ?>
                        </li>                                            
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit" disabled>
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img class="image img-10" src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($admin->file_foto); ?>" alt="Card image cap">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo e($login); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img class="image img-10" src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($admin->file_foto); ?>" alt="Card image cap">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name text-sm-center">
                                                        <a href="#"><?php echo e($login); ?></a>
                                                    </h5>
                                                <?php if($admin->status == 'pengurus'): ?>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($admin->status); ?></span></h5>
                                                <?php elseif($admin->status == 'member'): ?>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($admin->status); ?></span></h5>
                                                <?php else: ?>
                                                    <h5 class="text-sm-center"><span> b aja </span></h5>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?php echo e(url('/admin/edit/akun/'.$login_id)); ?>">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="submit" class="btn btn-success" value="ini logout">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <?php echo $__env->yieldContent('content'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2020 iswan-istein. All rights reserved. Template original design by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- tambahan buat input tanggal otomatis -->
<script type="text/javascript">
    $(function(){
        $('#datetimepicker1').datetimepicker({locale:'id'});   
    });
</script>
<!-- tambahan buat input tanggal otomatis -->
    <?php $__env->startSection('js'); ?>

    <?php echo $__env->yieldSection(); ?>
</body>

</html>
<!-- end document-->
<?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/app.blade.php ENDPATH**/ ?>