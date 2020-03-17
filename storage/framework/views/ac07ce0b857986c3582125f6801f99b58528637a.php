<?php $__env->startSection('content'); ?>            
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">           
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
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
                                <div class="col-md-12">
                                    <div class="overview-wrap">
                                        <h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Jenis Rekening di Pondasi</h3>
                                        <div>
                                            <a href="<?php echo e(url('/donasi/tambah/jenis-rekening')); ?>">
                                                <button class="btn btn-primary"><i class="zmdi zmdi-plus"></i> Add Jenis Rekening</button>
                                            </a>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <h3 class="title-2">Jenis Rekening</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Bank</th>
                                                <th>No Rekening</th>
                                                <th>Atas Nama</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                            
                                            <tbody>
                                                <?php $__currentLoopData = $jenis_rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(++$key); ?></td>
                                                    <td><?php echo e($jr->bank); ?></td>
                                                    <td><?php echo e($jr->no_rek); ?></td>
                                                    <td><?php echo e($jr->nama); ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?php echo e(url('/donasi/edit/jenis-rekening/'.$jr->id)); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="<?php echo e(url('/donasi/hapus/jenis-rekening/'.$jr->id)); ?>">
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
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/donasi/jenis.blade.php ENDPATH**/ ?>