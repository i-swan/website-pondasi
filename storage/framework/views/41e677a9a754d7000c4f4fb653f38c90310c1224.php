<?php $__env->startSection('content'); ?>            
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 m-b-10">
                    <?php if($message = Session::get('edit_akun')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong><?php echo e($message); ?></strong>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($anggota); ?></h2>
                                    <a href="<?php echo e(url('/anggota')); ?>"><span>Member</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-view-list-alt"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($kegiatan); ?></h2>
                                    <a href="<?php echo e(url('/kegiatan')); ?>"><span>Kegiatan /<br> Acara</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-star-circle"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($prestasi); ?></h2>
                                    <a href="<?php echo e(url('/prestasi')); ?>"><span>Prestasi</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($donasi); ?></h2>
                                    <a href="<?php echo e(url('/donasi')); ?>"><span>Donasi</span></a>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
            <div class="row">
                <div class="col-lg-5">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="text-sm-center"><i class="zmdi zmdi-account-calendar"></i> About Pondasi</h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 m-b-10">
                                    <?php if($message = Session::get('hapus')): ?>
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong><?php echo e($message); ?></strong>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($message = Session::get('tambah') or $message = Session::get('edit')): ?>
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong><?php echo e($message); ?></strong>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-12 m-b-30">
                                    <div class="overview__inner">
                                        <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                        <p class="text-sm-center"></i>Pondok Inspirasi</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <a href="<?php echo e(url('/admin/tambah/profil-visi-misi')); ?>">
                                            <button class="btn btn-sm btn-primary"><i class="zmdi zmdi-plus"></i> Add Profil/Visi/Misi</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h3 class="title-2">Profil</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <?php $__currentLoopData = $data['profil']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($p->about); ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?php echo e(url('/admin/edit/profil-visi-misi/'.$p->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="<?php echo e(url('/admin/hapus/profil-visi-misi/'.$p->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>                                                    
                                                </tr>  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                            
                            <h3 class="title-2">Visi</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <?php $__currentLoopData = $data['visi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(++$key.'. '.$v->about); ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?php echo e(url('/admin/edit/profil-visi-misi/'.$v->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="<?php echo e(url('/admin/hapus/profil-visi-misi/'.$v->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>                                                    
                                                </tr>  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title-2">Misi</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <?php $__currentLoopData = $data['misi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(++$key.'. '.$m->about); ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?php echo e(url('/admin/edit/profil-visi-misi/'.$m->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="<?php echo e(url('/admin/hapus/profil-visi-misi/'.$m->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>                                                    
                                                </tr>  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="au-card">
                        <div class="au-card-inner">
                            <h3 class="text-sm-center"><i class="zmdi zmdi-account-calendar"></i> Update Terbaru</h3>
                            <hr>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Acara <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Prestasi <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="donasi-tab" data-toggle="tab" href="#donasi" role="tab" aria-controls="donasi" aria-selected="false">Donasi <span class="badge badge-pill badge-danger"> 3 </span></a>
                                </li>                            
                            </ul>
                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Member Terakhir.
                                    </div>
                                <?php $__currentLoopData = $anggota_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($al->id % 2 == 0): ?>
                                    <div class="au-task__item au-task__item--danger">
                                <?php else: ?>
                                    <div class="au-task__item au-task__item--success">
                                <?php endif; ?>
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($al->file_foto); ?>" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="<?php echo e(url('/anggota/profil-lengkap/'.$al->id)); ?>"><?php echo e($al->nama); ?></a></h5>
                                                    <br>
                                                <?php if($al->status == 'pengurus'): ?>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($al->status); ?></span></h5>
                                                <?php elseif($al->status == 'member'): ?>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($al->status); ?></span></h5>
                                                <?php else: ?>
                                                    <h5 class="text-sm-center"><span> b aja </span></h5>
                                                <?php endif; ?>
                                                    <br>
                                                    <h5 class="text-sm-center time"><span><?php echo e($al->masuk_pondasi); ?></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                             
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Kegiatan/Acara Terakhir.
                                    </div>
                                <?php $__currentLoopData = $kegiatan_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($kl->id % 2 == 0): ?>
                                    <div class="au-task__item au-task__item--danger">
                                <?php else: ?>
                                    <div class="au-task__item au-task__item--success">
                                <?php endif; ?>
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="<?php echo e(URL::to('/')); ?>/foto_kegiatan/<?php echo e($kl->file_foto); ?>" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="<?php echo e(url('/kegiatan/detail/'.$kl->id)); ?>"><?php echo e($kl->nama); ?></a></h5>
                                                    <br>
                                                    <h5 class="text-sm-center">PJ : <a href="<?php echo e(url('/anggota/profil-lengkap/'.$kl->anggota_pj->id)); ?>"><?php echo e($kl->anggota_pj->nama); ?></a></h5>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($kl->anggota_pj->status); ?></span></h5>
                                                    <h5 class="text-sm-center time"><span><?php echo e($kl->tanggal); ?></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Prestasi Terakhir.
                                    </div>
                                <?php $__currentLoopData = $prestasi_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($pl->id % 2 == 0): ?>
                                    <div class="au-task__item au-task__item--danger">
                                <?php else: ?>
                                    <div class="au-task__item au-task__item--success">
                                <?php endif; ?>
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="<?php echo e(URL::to('/')); ?>/foto_prestasi/<?php echo e($pl->file_foto); ?>" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="<?php echo e(url('/prestasi/detail/'.$pl->id)); ?>"><?php echo e($pl->nama); ?></a></h5>
                                                    <br>
                                                    <h5 class="text-sm-center">Ketua :
                                                <?php if($pl->ketua_in != '' and $pl->ketua_ex != ''): ?>
                                                    <a href="<?php echo e(url('/anggota/profil-lengkap/'.$pl->anggota->id)); ?>"><?php echo e($pl->anggota->nama); ?></a>  & <?php echo e($pl->ketua_ex); ?> (Non Member)
                                                <?php elseif($pl->ketua_in != '' and $pl->ketua_ex == ''): ?>
                                                    <a href="<?php echo e(url('/anggota/profil-lengkap/'.$pl->anggota->id)); ?>"><?php echo e($pl->anggota->nama); ?></a>
                                                <?php elseif(($pl->ketua_in == '' and $pl->ketua_ex != '')): ?>
                                                    <?php echo e($pl->ketua_ex); ?> (Non Member)
                                                <?php else: ?>
                                                     -
                                                <?php endif; ?> 
                                                    </h5>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success">Juara Ke: <?php echo e($pl->juara_ke); ?></span></h5>
                                                    <h5 class="text-sm-center time"><span><?php echo e($pl->tanggal); ?></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                     
                                </div>
                                <div class="tab-pane fade" id="donasi" role="tabpanel" aria-labelledby="donasi-tab">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">3</span>
                                         Donasi Terakhir.
                                    </div>
                                <?php $__currentLoopData = $donasi_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($dl->id % 2 == 0): ?>
                                    <div class="au-task__item au-task__item--danger">
                                <?php else: ?>
                                    <div class="au-task__item au-task__item--success">
                                <?php endif; ?>
                                        <div class="au-task__item-inner">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="overview__inner">
                                                        <img class="image img-100" src="<?php echo e(URL::to('/')); ?>/foto_donasi/<?php echo e($dl->file_foto); ?>" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-sm-center"><a href="<?php echo e(url('/donasi/detail/'.$dl->id)); ?>"><?php echo e($dl->nama); ?></a></h5>
                                                    <br>
                                                    <h5 class="text-sm-center"><?php echo e($dl->no_rek_asal); ?></h5>
                                                    <h5 class="text-sm-center"><span class="badge badge-pill badge-success">Rp<?php echo e($dl->jumlah); ?></span></h5>
                                                    <h5 class="text-sm-center time"><span><?php echo e($dl->tanggal); ?></span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                        
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/admin.blade.php ENDPATH**/ ?>