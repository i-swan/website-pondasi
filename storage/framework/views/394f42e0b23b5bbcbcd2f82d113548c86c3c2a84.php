<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Profil Lengkap <a href="<?php echo e(url('/anggota/profil-lengkap/'.$anggota->id)); ?>"><?php echo e($anggota->nama); ?></a></h3>
                        <div class="table-data-feature">
                            <form action="<?php echo e(url('/anggota/edit/'.$anggota->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('POST')); ?>

                                <input type="hidden"  name="tipe_hal" value="profil_lengkap">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="<?php echo e(url('/anggota/hapus/'.$anggota->id)); ?>">
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
                        <img class="image img-100" alt="" src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($anggota->file_foto); ?>">
                        <hr>
                        <h3 class="text-sm-center"><a href="<?php echo e(url('/anggota/profil-lengkap/'.$anggota->id)); ?>"><?php echo e($anggota->nama); ?></a></h3>
                    <?php if($anggota->status == 'pengurus'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($anggota->status); ?></span></h5>
                    <?php elseif($anggota->status == 'member'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($anggota->status); ?></span></h5>
                    <?php else: ?>
                        <h5 class="text-sm-center"><span> b aja </span></h5>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="au-card chart-percent-card">
                        <table class="table table-responsive table-borderless table-striped table-earning">
                            <tbody>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->jk); ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->tanggal_lahir); ?></td>
                                </tr>
                                <tr>
                                    <td>Daerah Asal</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->daerah_asal); ?></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->no_hp); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->email); ?></td>
                                </tr>                                
                                <tr>
                                    <td>Golongan Darah</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->gol_darah); ?></td>
                                </tr>
                                <tr>
                                    <td>Riwayat Sakit</td>
                                    <td> : </td>
                                    <td><?php echo e($anggota->riwayat_sakit); ?></td>
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
                                         <a href="<?php echo e(url('/prestasi/detail/'.$p->id)); ?>"><?php echo e($p->nama); ?></a>,
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Daftar Prestasi (Sebagai Anggota)</td>
                                    <td> : </td>
                                    <td>
                                    <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="<?php echo e(url('/prestasi/detail/'.$ap->prestasi_id)); ?>"><?php echo e($ap->prestasi->nama); ?></a>,
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
                                         <a href="<?php echo e(url('/kegiatan/detail/'.$a->id)); ?>"><?php echo e($a->nama); ?></a>,
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/anggota/profil_lengkap.blade.php ENDPATH**/ ?>