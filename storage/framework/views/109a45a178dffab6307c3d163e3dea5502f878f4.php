<?php $__env->startSection('content'); ?>

<!-- crumbs area start -->
<div class="crumbs-area crumbs-area-member">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="crumbs-content">
                    <h2><?php echo e($judul); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- crumbs area end -->

<!-- Member start -->
<section class="trainer-area ptb--100 bg-gray">
    <div class="container">
        <div class="h5-title section-title">
            <a href="<?php echo e(url('/member/profil/'.$anggota->id)); ?>"><h2>Biodata <?php echo e($anggota->nama); ?></h2></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($anggota->file_foto); ?>" alt="image">
                    </div>
                    <div class="content">
                        <h2 class="text-sm-center"><?php echo e($anggota->nama); ?></h2>
                    <?php if($anggota->status == 'pengurus'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($anggota->status); ?></span></h5>
                    <?php elseif($anggota->status == 'member'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($anggota->status); ?></span></h5>
                    <?php else: ?>
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="single-trainer trainer_s_three">
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-earning">
                                <tbody>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->jk); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Daerah Asal</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->daerah_asal); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan IPB</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->jurusan_ipb); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Angkatan IPB</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->angkatan_ipb); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Prestasi</td>
                                        <td> : </td>
                                        <td> <?php echo e($jumlah_prestasi); ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Daftar Prestasi (Sebagai Ketua)</td>
                                        <td> : </td>
                                        <td>
                                        <?php $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <a href="<?php echo e(url('/prestasi-pondasi/detail/'.$p->id)); ?>"><?php echo e($p->nama); ?></a>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Daftar Prestasi (Sebagai Anggota)</td>
                                        <td> : </td>
                                        <td>
                                        <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(url('/prestasi-pondasi/detail/'.$ap->prestasi_id)); ?>"><?php echo e($ap->prestasi->nama); ?></a>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                    </tr>                                                                   
                                    <tr>
                                        <td>Jumlah Kegiatan (Sebagai PJ)</td>
                                        <td> : </td>
                                        <td> <?php echo e($jumlah_kegiatan); ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Daftar Kegiatan</td>
                                        <td> : </td>
                                        <td>
                                        <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <a href="<?php echo e(url('/kegiatan-pondasi/detail/'.$a->id)); ?>"><?php echo e($a->nama); ?></a>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                    </tr>                                                                   
                                    <tr>
                                        <td>Masuk Pondasi</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->masuk_pondasi); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Lulus Pondasi</td>
                                        <td> : </td>
                                        <td><?php echo e($anggota->lulus_pondasi); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>
<!-- Member end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/frontend/anggota/detail.blade.php ENDPATH**/ ?>