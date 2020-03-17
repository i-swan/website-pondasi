<?php $__env->startSection('content'); ?>

<!-- crumbs area start -->
<div class="crumbs-area">
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

<!-- Kegiatan area start -->
<div class="blog-post-area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="single-post">
                    <div class="blog-thumb">
                        <img src="<?php echo e(URL::to('/')); ?>/foto_kegiatan/<?php echo e($kegiatan->file_foto); ?>" alt="image">
                    </div>
                    <div class="post-content">
                        <h2>
                             <a href="<?php echo e(url('kegiatan-pondasi/detail/'.$kegiatan->id)); ?>"><h2><?php echo e($kegiatan->nama); ?></h2></a>
                        </h2>
                    <?php if($kegiatan->jenis_kegiatan->id == 1): ?>
                        <h5><span class="badge badge-pill badge-success"><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></span></h5>
                    <?php elseif($kegiatan->jenis_kegiatan->id == 2): ?>
                        <h5><span class="badge badge-pill badge-primary"><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></span></h5>
                    <?php elseif($kegiatan->jenis_kegiatan->id == 3): ?>
                        <h5><span class="badge badge-pill badge-warning"><?php echo e($kegiatan->jenis_kegiatan->nama_jenis); ?></span></h5>
                    <?php else: ?>
                        <h5><span> b aja </span></h5>
                    <?php endif; ?>
                        <div class="blog-meta"><?php echo e($kegiatan->tanggal); ?></div>
                        <p><?php echo e($kegiatan->ringkasan); ?></p>
                    </div>
                </div>
            </div>
            <!-- sidebar area start -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar single-trainer p-5">
                    <div class="widget widget-search">
                        <form>
                            <input class="form-control" placeholder="Search..." type="text">
                            <button>
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget-category">
                        <h5 class="widget-title">Kategori</h5>
                        <ul>
                            <li>
                            	<?php for($i = 1; $i < $jumlah_kategori->id+1 ; ++$i): ?>
								<?php
								$keys = array_keys($kategori);
								$values = array_flip($kategori);
								?>
                            	<?php if(in_array($i, $keys)): ?>
                                <a href="#">
                                	<?php $__currentLoopData = $jenis_kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                	<?php if($jk->id == $values[$kategori[$i]] ): ?>
	                                	<?php echo e($jk->nama_jenis); ?>

	                                	<span class="pull-right"><?php echo e($kategori[$i]); ?></span>
	                                	<?php endif; ?>
                                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </a>
                                <?php endif; ?>
                                <?php endfor; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- sidebar area end -->
        </div>
    </div>
</div>
<!-- Kegiatan area end -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/frontend/kegiatan/detail.blade.php ENDPATH**/ ?>