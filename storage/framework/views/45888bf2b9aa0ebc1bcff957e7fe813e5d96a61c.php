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
            <h2>Daftar Member Pondasi</h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-trainer trainer_s_three">
                    <div class="thumb">
                        <img src="<?php echo e(URL::to('/')); ?>/foto_member/<?php echo e($a->file_foto); ?>" alt="image">
                    </div>
                    <div class="content">
                        <a href="<?php echo e(url('/member/profil/'.$a->id)); ?>"><h2><?php echo e($a->nama); ?></h2></a>
                        <p><?php echo e($a->jurusan_ipb); ?> IPB Angkatan <?php echo e($a->angkatan_ipb); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
        </div>
        <div class="row">    
            <div class="pagination-area">
                <?php echo e($anggota->links()); ?>

            </div>
        </div>
    </div>
</section>
<!-- Member end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/frontend/anggota/index.blade.php ENDPATH**/ ?>