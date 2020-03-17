<?php $__env->startSection('content'); ?>

<!-- crumbs area start -->
<div class="crumbs-area crumbs-area-kegiatan">
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

<!-- Kegiatan strat -->
<section class="app-feature-area" id="feature">
    <div class="feature-blog ptb--100">
        <div class="container">
            <div class="h5-title section-title">
                <h2>Kegiatan di Pondasi</h2>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-blog">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="blog-thumb">
                                    <img src="<?php echo e(URL::to('/')); ?>/foto_kegiatan/<?php echo e($k->file_foto); ?>" alt="" style="max-height: 600px">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="blog-content">
                                    <h2>
                                        <b><a href="<?php echo e(url('/kegiatan-pondasi/detail/'.$k->id)); ?>"><?php echo e($k->nama); ?></a></b>
                                    </h2>
                                    <span><?php echo e($k->tanggal); ?></span>
                                </div>
                                <a href="<?php echo e(url('/kegiatan-pondasi/detail/'.$k->id)); ?>"><button class="btn btn-lg btn-success"> Baca Selengkapnya </button></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
                    <div class="pagination-area">
                        <?php echo e($kegiatan->links()); ?>

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
</section>
<!-- Kegiatan end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/frontend/kegiatan/index.blade.php ENDPATH**/ ?>