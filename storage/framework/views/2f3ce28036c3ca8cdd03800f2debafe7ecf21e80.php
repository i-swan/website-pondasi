<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row m-b-25">
                <div class="col-md-12">
                    <div class="au-card overview-wrap">
                        <h3 class="text-sm-center"> Detail Donasi dari <a href="<?php echo e(url('/donasi/detail/'.$donasi->id)); ?>"><?php echo e($donasi->nama); ?></a></h3>
                        <div class="table-data-feature">
                            <form action="<?php echo e(url('/donasi/edit/'.$donasi->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('POST')); ?>

                                <input type="hidden"  name="tipe_hal" value="detail">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i><input type="submit" value="">
                                </button>
                            </form>
                            <a href="<?php echo e(url('/donasi/hapus/'.$donasi->id)); ?>">
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
                        <img class="image img-100" alt="" src="<?php echo e(URL::to('/')); ?>/foto_donasi/<?php echo e($donasi->file_foto); ?>">
                        <hr>
                        <h3 class="text-sm-center"><a href="<?php echo e(url('/donasi/detail/'.$donasi->id)); ?>"><?php echo e($donasi->nama); ?></a></h3>
                    <?php if($donasi->jenis_rekening->id == '1'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-success"><?php echo e($donasi->jenis_rekening->no_rek); ?> (a.n <?php echo e($donasi->jenis_rekening->nama); ?>)</span></h5>
                    <?php elseif($donasi->jenis_rekening->id == '2'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-primary"><?php echo e($donasi->jenis_rekening->no_rek); ?> (a.n <?php echo e($donasi->jenis_rekening->nama); ?>)</span></h5>
                    <?php elseif($donasi->jenis_rekening->id == '3'): ?>
                        <h5 class="text-sm-center"><span class="badge badge-pill badge-warning"><?php echo e($donasi->jenis_rekening->no_rek); ?> (a.n <?php echo e($donasi->jenis_rekening->nama); ?>)</span></h5>
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
                                        <td>Nama donasi</td>
                                        <td> : </td>
                                        <td><a href="<?php echo e(url('/donasi/detail/'.$donasi->id)); ?>"><?php echo e($donasi->nama); ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>No Rekening Donatur</td>
                                        <td> : </td>
                                        <td><?php echo e($donasi->no_rek_asal); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td> : </td>
                                        <td><?php echo e($donasi->jumlah); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td> : </td>
                                        <td><?php echo e($donasi->tanggal); ?></td>
                                    </tr>                                                                                                            
                                    <tr>
                                        <td>Rekening Pondasi</td>
                                        <td> : </td>
                                        <td><?php echo e($donasi->jenis_rekening->no_rek); ?></td>
                                    </tr>
                                    <tr>
                                        <td>File Foto Bukti Donasi</td>
                                        <td> : </td>
                                        <td><?php echo e($donasi->file_foto); ?></td>
                                    </tr>                                   
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> : </td>
                                        <td><?php echo e($donasi->keterangan); ?></td>
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/donasi/detail.blade.php ENDPATH**/ ?>