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
		                        <form action="<?php echo e(url('/kegiatan/edit/simpan/'.$kegiatan->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	<?php echo e(csrf_field()); ?>

		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit Kegiatan</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama kegiatan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" value="<?php echo e($kegiatan->nama); ?>" placeholder="Nama" class="form-control">
				                            <?php if($errors->has('nama')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('nama')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Jenis Kegiatan</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
											<?php $__currentLoopData = $jenis_kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											    <label for="inline-radio1" class="form-check-label ">
											        <input type="radio" id="'inline-radio'.<?php echo e($jk->id); ?>" name="jenis_kegiatan_id" value="<?php echo e($jk->id); ?>"  class="form-check-input" <?php echo e($kegiatan->jenis_kegiatan_id == $jk->id ? 'checked' : ''); ?>> <?php echo e($jk->nama_jenis); ?>  &nbsp
											    </label>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                        <?php if($errors->has('jenis_kegiatan_id')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('jenis_kegiatan_id')); ?>

					                                </div>
					                            <?php endif; ?>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tanggal</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="tanggal" value="<?php echo e($kegiatan->tanggal); ?>" placeholder="Tanggal Kegiatan" class="form-control">
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
		                                    <label for="text-input" class=" form-control-label">Lokasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="lokasi" value="<?php echo e($kegiatan->lokasi); ?>" placeholder="Lokasi Kegiatan" class="form-control">
	                                        <?php if($errors->has('lokasi')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('lokasi')); ?>

				                                </div>
				                            <?php endif; ?>		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Foto</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="file"  name="file_foto" value="<?php echo e($kegiatan->file_foto); ?>">
		                                    <img src="<?php echo e(URL::to('/')); ?>/foto_kegiatan/<?php echo e($kegiatan->file_foto); ?>" class="img-thumbnail" width="100">
		                                    <input type="hidden"  name="hidden_image" value="<?php echo e($kegiatan->file_foto); ?>">
		                                        <?php if($errors->has('file_foto')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('file_foto')); ?>

					                                </div>
					                            <?php endif; ?>		                                    
		                                </div>
		                            </div>                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Ringkasan</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <textarea name="ringkasan"placeholder="Ringkasan Kegiatan" class="form-control"><?php echo e(old('ringkasan',$kegiatan->ringkasan)); ?></textarea>
	                                        <?php if($errors->has('ringkasan')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('ringkasan')); ?>

				                                </div>
				                            <?php endif; ?>                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Penanggung Jawab</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="pj">
		                                		<option value="default" selected>--Pilih Member--</option>
	                                		<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                			<option value="<?php echo e($a->id); ?>" <?php if($a->id==$kegiatan->anggota_pj->id): ?> selected="selected" <?php endif; ?> ><?php echo e($a->nama); ?></option>
	                                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                	</select>
		                                </div>
		                            </div>	                            
		                            <hr>
			                        <div class="m-b-30">
			                        	<input type="hidden"  name="tipe_hal" value="<?php echo e($tipe_hal); ?>">
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/Kegiatan/edit.blade.php ENDPATH**/ ?>