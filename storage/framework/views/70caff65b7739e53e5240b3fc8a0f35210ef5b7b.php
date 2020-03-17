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
		                        <form action="<?php echo e(url('/donasi/tambah/simpan')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	<?php echo e(csrf_field()); ?>

		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Add Donasi</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama Donatur</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" placeholder="ex Hamba Allah" class="form-control">
				                            <?php if($errors->has('nama')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('nama')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>	                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">No Rekening Donatur</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="no_rek_asal" placeholder="ex 0000" class="form-control">
		                                    <?php if($errors->has('no_rek_asal')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('no_rek_asal')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Jumlah</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="jumlah" placeholder="ex 1000000 (tanpa titik)" class="form-control">
				                            <?php if($errors->has('jumlah')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('jumlah')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Rekening Pondasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="rekening_id">
		                                		<option value="default" selected>--Pilih Rekening--</option>
	                                		<?php $__currentLoopData = $jenis_rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                			<option value="<?php echo e($jr->id); ?>"><?php echo e($jr->no_rek); ?>( <?php echo e($jr->nama); ?> )</option>
	                                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                	</select>
		                                	<?php if($errors->has('rekening_id')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('rekening_id')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>			                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tanggal</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="tanggal" placeholder="Tanggal donasi" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
		                                        <?php if($errors->has('tanggal')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('tanggal')); ?>

					                                </div>
					                            <?php endif; ?>
					                        </div>		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">keterangan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <textarea name="keterangan" placeholder="keterangan" class="form-control"></textarea>
	                                        <?php if($errors->has('keterangan')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('keterangan')); ?>

				                                </div>
				                            <?php endif; ?>                                    
		                                </div>
		                            </div>                         
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Foto</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="file"  name="file_foto">
	                                        <?php if($errors->has('file_foto')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('file_foto')); ?>

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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/donasi/tambah.blade.php ENDPATH**/ ?>