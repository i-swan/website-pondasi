<?php $__env->startSection('content'); ?>

<!-- crumbs area start -->
<div class="crumbs-area crumbs-area-prestasi">
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

<!-- Prestasi start -->
<section class="trainer-area ptb--100 bg-gray">
    <div class="container">
        <div class="h5-title section-title">
            <a href="<?php echo e(url('/member/profil/'.$prestasi->id)); ?>"><h2>Prestasi <?php echo e($prestasi->nama); ?></h2></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="<?php echo e(URL::to('/')); ?>/foto_prestasi/<?php echo e($prestasi->file_foto); ?>" alt="image">
                    </div>
                    <div class="content">
                        <h2 class="text-sm-center"><?php echo e($prestasi->nama); ?></h2>
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
            </div>
            <div class="col-lg-9">
                    <div class="single-trainer trainer_s_three">
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-earning">
                                    <tbody>
                                        <tr>
                                            <td>Nama prestasi</td>
                                            <td> : </td>
                                            <td><a href="<?php echo e(url('/prestasi-pondasi/detail/'.$prestasi->id)); ?>"><?php echo e($prestasi->nama); ?></a></td>
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
                                            <td><a href="<?php echo e(url('/member/profil/'.$prestasi->anggota->id)); ?>"><?php echo e($prestasi->anggota->nama); ?></a>  & <?php echo e($prestasi->ketua_ex); ?> (Non Member)</td>
                                        <?php elseif($prestasi->ketua_in != '' and $prestasi->ketua_ex == ''): ?>
                                            <td><a href="<?php echo e(url('/member/profil/'.$prestasi->anggota->id)); ?>"><?php echo e($prestasi->anggota->nama); ?></a></td>
                                        <?php elseif(($prestasi->ketua_in == '' and $prestasi->ketua_ex != '')): ?>
                                            <td><?php echo e($prestasi->ketua_ex); ?> (Non Member)</td>
                                        <?php else: ?>
                                            <td> - </td>
                                        <?php endif; ?>
                                        </tr>
                                        <tr>
                                            <td>Anggota Internal</td>
                                            <td> : </td>
                                            <td>
                                            <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($ap->anggota_in != 0): ?>
                                                <a href="<?php echo e(url('/member/profil/'.$ap->anggota->id)); ?>"><?php echo e($ap->anggota->nama); ?></a>, 
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Anggota Eksternal</td>
                                            <td> : </td>
                                            <td>
                                            <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($ap->anggota_ex != NULL): ?>
                                                <?php echo e($ap->anggota_ex); ?>, 
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>        
    </div>
</section>
<!-- Prestasi end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/frontend/prestasi/detail.blade.php ENDPATH**/ ?>