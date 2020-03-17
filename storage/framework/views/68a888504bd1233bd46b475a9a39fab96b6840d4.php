<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- USER DATA-->
                    <div class="user-data">
                        <div class="row">
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="overview-wrap">
                                    <h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Data Donasi</h3>
                                    <div>
                                        <ul class="nav nav-pills">
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Export </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="<?php echo e(url('/donasi/cetak-pdf')); ?>" target="_blank">PDF</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo e(url('/donasi/export-excel')); ?>" target="_blank">Excel</a>
                                                </div>
                                            </li>
                                        </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 m-b-10 pl-5 pr-5">
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
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="overview-wrap">
                                    <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Nama Donasi/Jenis/Tanggal" />
                                        <button class="au-btn--submit" type="submit" disabled>
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
                                    <div>
                                    <a href="<?php echo e(url('/donasi/tambah')); ?>">
                                        <button class="btn btn-primary"><i class="zmdi zmdi-plus"></i> Add Donasi</button>
                                    </a>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 pl-5 pr-5">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Donatur</th>
                                                <th>No Rek Donatur</th>
                                                <th>Jumlah</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$key+($donasi->perPage()*($donasi->currentPage()-1))); ?></td>
                                                <td><a href="<?php echo e(url('/donasi/detail/'.$a->id)); ?>"><?php echo e($a->nama); ?></a></td>
                                                <td><?php echo e($a->no_rek_asal); ?></td>
                                                <td><?php echo e($a->jumlah); ?></td>
                                                <td><?php echo e($a->tanggal); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <form action="<?php echo e(url('/donasi/edit/'.$a->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <?php echo e(csrf_field()); ?>

                                                            <?php echo e(method_field('POST')); ?>

                                                            <input type="hidden"  name="tipe_hal" value="index">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                                                </button>
                                                        </form>
                                                        <a href="<?php echo e(url('/donasi/hapus/'.$a->id)); ?>">
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
                    <div class="row m-t-25">
                        <div class="col-md-12">
                            <div class="au-card overview-wrap">
                                <?php echo e($donasi->links()); ?>

                                <div class="">
                                    Halaman : <?php echo e($donasi->currentPage()); ?> |
                                    Jumlah Data : <?php echo e($donasi->total()); ?> |
                                    Data Per Halaman : <?php echo e($donasi->perPage()); ?> |
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>        	
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/donasi/index.blade.php ENDPATH**/ ?>