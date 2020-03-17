<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Detail Prestasi <a href="<?php echo e(url('/prestasi/detail/'.$prestasi->id)); ?>"><?php echo e($prestasi->nama); ?></a></h3>
                        <div class="table-data-feature">
                            <form action="<?php echo e(url('/prestasi/edit/'.$prestasi->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('POST')); ?>

                                <input type="hidden"  name="tipe_hal" value="detail">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="<?php echo e(url('/prestasi/hapus/'.$prestasi->id)); ?>">
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
                        <img class="image img-100" alt="" src="<?php echo e(URL::to('/')); ?>/foto_prestasi/<?php echo e($prestasi->file_foto); ?>">
                        <hr>
                        <h3 class="text-sm-center"><a href="<?php echo e(url('/prestasi/detail/'.$prestasi->id)); ?>"><?php echo e($prestasi->nama); ?></a></h3>
                    <?php if($prestasi->jenis_prestasi->id == '1'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($prestasi->jenis_prestasi->nama_jenis); ?></span></h5>
                    <?php elseif($prestasi->jenis_prestasi->id == '2'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($prestasi->jenis_prestasi->nama_jenis); ?></span></h5>
                    <?php elseif($prestasi->jenis_prestasi->id == '3'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-warning"><?php echo e($prestasi->jenis_prestasi->nama_jenis); ?></span></h5>
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
                                        <td>Nama prestasi</td>
                                        <td> : </td>
                                        <td><a href="<?php echo e(url('/prestasi/detail/'.$prestasi->id)); ?>"><?php echo e($prestasi->nama); ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis prestasi</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->jenis_prestasi->nama_jenis); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ketua</td>
                                        <td> : </td>
                                    <?php if($prestasi->ketua_in != '' and $prestasi->ketua_ex != ''): ?>
                                        <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$prestasi->anggota->id)); ?>"><?php echo e($prestasi->anggota->nama); ?></a>  & <?php echo e($prestasi->ketua_ex); ?> (Non Member)</td>
                                    <?php elseif($prestasi->ketua_in != '' and $prestasi->ketua_ex == ''): ?>
                                        <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$prestasi->anggota->id)); ?>"><?php echo e($prestasi->anggota->nama); ?></a></td>
                                    <?php elseif(($prestasi->ketua_in == '' and $prestasi->ketua_ex != '')): ?>
                                        <td><?php echo e($prestasi->ketua_ex); ?> (Non Member)</td>
                                    <?php else: ?>
                                        <td> - </td>
                                    <?php endif; ?>
                                    </tr>
                                    <tr>
                                        <td>Anggota Internal</td>
                                        <td> : </td>
                                        <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ap->anggota_in != 0): ?>
                                            <td><a href="<?php echo e(url('/anggota/profil-lengkap/'.$ap->anggota->id)); ?>"><?php echo e($ap->anggota->nama); ?></a>, </td>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                    <tr>
                                        <td>Anggota Eksternal</td>
                                        <td> : </td>
                                        <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ap->anggota_ex != NULL): ?>
                                            <td><?php echo e($ap->anggota_ex); ?>, </td>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>                                                                        
                                    <tr>
                                        <td>Tuan Rumah Lomba</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->host); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->lokasi); ?></td>
                                    </tr>                                                                                                            
                                    <tr>
                                        <td>Tanggal</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->tanggal); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Judul Karya</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->judul_karya); ?></td>
                                    </tr>                                   
                                    <tr>
                                        <td>Juara Ke</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->juara_ke); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hadiah</td>
                                        <td> : </td>
                                        <td><?php echo e($prestasi->hadiah); ?></td>
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/prestasi/detail.blade.php ENDPATH**/ ?>