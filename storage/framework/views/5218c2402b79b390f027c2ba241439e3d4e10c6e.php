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
                                <h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Recycle Bin | Anggota</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 m-b-10 pl-5 pr-5">
                                <?php if($message = Session::get('restore')): ?>
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong><?php echo e($message); ?></strong>
                                </div>
                                <?php endif; ?>
                                <?php if($message = Session::get('hapus_permanen')): ?>
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong><?php echo e($message); ?></strong>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 pl-5 pr-5">
                                <div class="overview-wrap">
                                    <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Nama/Jurusan/No Hp" />
                                        <button class="au-btn--submit" type="submit" disabled="">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
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
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No Hp</th>
                                                <th>Jurusan IPB</th>
                                                <th>Angkatan IPB</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                 <td><?php echo e(++$key+($anggota->perPage()*($anggota->currentPage()-1))); ?></td>
                                                <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$a->id)); ?>"><?php echo e($a->nama); ?></a></td>
                                                <td><?php echo e($a->tanggal_lahir); ?></td>
                                                <td><?php echo e($a->no_hp); ?></td>
                                                <td><?php echo e($a->jurusan_ipb); ?></td>
                                                <td><?php echo e($a->angkatan_ipb); ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo e(url('/anggota/restore/'.$a->id)); ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Restore">
                                                                <i class="zmdi zmdi-refresh-sync"></i>
                                                            </button>
                                                        </a>
                                                        <a href="<?php echo e(url('/anggota/hapus-permanen/'.$a->id)); ?>">
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
                                <?php echo e($anggota->links()); ?>

                                <div class="">
                                    Halaman : <?php echo e($anggota->currentPage()); ?> |
                                    Jumlah Data : <?php echo e($anggota->total()); ?> |
                                    Data Per Halaman : <?php echo e($anggota->perPage()); ?> |
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/anggota/recycle_bin.blade.php ENDPATH**/ ?>