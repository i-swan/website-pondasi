<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="section__content section__content--p5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- USER DATA-->
                    <div class="user-data">
                        <div class="row">
                        	<div class="col-lg-12 pl-5 pr-5">
		                        <form action="<?php echo e(url('/kegiatan/edit/jenis-kegiatan/simpan/'.$jenis_kegiatan->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	<?php echo e(csrf_field()); ?>

		                        	<?php echo e(method_field('POST')); ?>

		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit Jenis Kegiatan</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Jenis Kegiatan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama_jenis" value="<?php echo e($jenis_kegiatan->nama_jenis); ?>" placeholder="isi jenis kegiatan" class="form-control">
				                            <?php if($errors->has('nama_jenis')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('nama_jenis')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>	                            
		                            <hr>
			                        <div class="m-b-30">
										<input type="submit" class="btn btn-success" value="Submit">
										<input type="submit" class="btn btn-danger" value="Reset" disabled>
			                        </div>
			                        
			                    </form>
	                    	</div>
	                    </div>
            		</div>
                    <!-- END USER DATA-->
                </div>
            </div>        	
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/kegiatan/edit_jenis_kegiatan.blade.php ENDPATH**/ ?>