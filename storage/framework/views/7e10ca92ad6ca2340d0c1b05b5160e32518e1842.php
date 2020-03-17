<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Detail Kegiatan <a href="<?php echo e(url('/kegiatan/detail/'.$kegiatan->id)); ?>"><?php echo e($kegiatan->nama); ?></a></h3>
                        <div class="table-data-feature">
                            <form action="<?php echo e(url('/kegiatan/edit/'.$kegiatan->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('POST')); ?>

                                <input type="hidden"  name="tipe_hal" value="detail">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="<?php echo e(url('/kegiatan/hapus/'.$kegiatan->id)); ?>">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if($message = Session::get('edit')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong><?php echo e($message); ?></strong>
                    </div>
                    <?php endif; ?> 
                </div>
            </div>            
            <div class="row">
                <div class="col-lg-3">
                    <div class="au-card recent-report">
                        <img class="image img-100" alt="" src="<?php echo e(URL::to('/')); ?>/foto_kegiatan/<?php echo e($kegiatan->file_foto); ?>">
                        <hr>
                        <h3 class="text-sm-center"><a href="<?php echo e(url('/kegiatan/detail/'.$kegiatan->id)); ?>"><?php echo e($kegiatan->nama); ?></a></h3>
                    <?php if($kegiatan->jenis_kegiatan->id == 1): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></span></h5>
                    <?php elseif($kegiatan->jenis_kegiatan->id == 2): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></span></h5>
                    <?php elseif($kegiatan->jenis_kegiatan->id == 3): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-warning"><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></span></h5>
                    <?php else: ?>
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="au-card chart-percent-card ">
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-earning">
                                <tbody>
                                    <tr>
                                        <td>Nama Kegiatan</td>
                                        <td> : </td>
                                        <td><a href="<?php echo e(url('/kegiatan/detail/'.$kegiatan->id)); ?>"><?php echo e($kegiatan->nama); ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kegiatan</td>
                                        <td> : </td>
                                        <td><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td> : </td>
                                        <td><?php echo e($kegiatan->tanggal); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td> : </td>
                                        <td><?php echo e($kegiatan->lokasi); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ringkasan Kegiatan</td>
                                        <td> : </td>
                                        <td><?php echo e($kegiatan->ringkasan); ?></td>
                                    </tr>                                   
                                    <tr>
                                        <td>Penanggung Jawab</td>
                                        <td> : </td>
                                        <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$kegiatan->anggota_pj->id)); ?>"><?php echo e($kegiatan->anggota_pj->nama); ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dibuat oleh</td>
                                        <td> : </td>
                                        <td><?php echo e($kegiatan->anggota->nama); ?></td>
                                    </tr>                                                                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/kegiatan/detail.blade.php ENDPATH**/ ?>