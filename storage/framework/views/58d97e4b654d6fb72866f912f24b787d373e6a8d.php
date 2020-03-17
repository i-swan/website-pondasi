<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-t-25">
                <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-3">
                        <?php if($a->jk == 'perempuan'): ?>
                            <div class="overview-item overview-item--c2">
                        <?php else: ?>
                            <div class="overview-item overview-item--c3">
                        <?php endif; ?>
                        <div class="overview__inner">
                            <img class="rounded-circle mx-auto d-block" src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($a->file_foto); ?>" alt="Card image cap">
                            <h5 class="text-sm-center"><a href="<?php echo e(url('/anggota/profil-lengkap/'.$a->id)); ?>"><span class="badge badge-pill badge-warning"><?php echo e($a->nama); ?></span></a></h5>
                    <?php if($a->status == 'pengurus'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($a->status); ?></span></h5>
                    <?php elseif($a->status == 'member'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($a->status); ?></span></h5>
                    <?php else: ?>
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    <?php endif; ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-top-countries">
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    $date_in = new Datetime($a->masuk_pondasi) ;
                                                    $date_now = new Datetime($now);
                                                    $interval = $date_now->diff($date_in);
                                                    $durasi = $interval->format('%a');
                                                    ?>
                                                    <td>Lama di Pondasi</td>
                                                    <td class="text-right"><?php echo e($durasi); ?> Hari</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Prestasi <br> <small>(Ketua)</small></td>
                                                    <td class="text-right">
                                                    <?php if(in_array($a->id, array_keys($jumlah_prestasi_ketua))): ?>
                                                    <p><?php echo e($jumlah_prestasi_ketua[$a->id]); ?></p>
                                                    <?php else: ?>
                                                    <p>-</p>
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total Prestasi <br> <small>(Anggota)</small></td>
                                                    <td class="text-right">
                                                    <?php if(in_array($a->id, array_keys($jumlah_prestasi_anggota))): ?>
                                                    <p><?php echo e($jumlah_prestasi_anggota[$a->id]); ?></p>
                                                    <?php else: ?>
                                                    <p>-</p>
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Total PJ Kegiatan</td>
                                                    <td class="text-right">
                                                    <?php if(in_array($a->id, array_keys($jumlah_kegiatan))): ?>
                                                    <p><?php echo e($jumlah_kegiatan[$a->id]); ?></p>
                                                    <?php else: ?>
                                                    <p>-</p>
                                                    <?php endif; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/anggota/profil.blade.php ENDPATH**/ ?>