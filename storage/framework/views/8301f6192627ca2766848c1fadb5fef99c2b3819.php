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
		                        <form action="<?php echo e(url('/prestasi/edit/simpan/'.$prestasi->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	<?php echo e(csrf_field()); ?>

		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Edit prestasi</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama prestasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" value="<?php echo e($prestasi->nama); ?>" placeholder="Nama Lomba/Konferensi" class="form-control">
				                            <?php if($errors->has('nama')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('nama')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Jenis prestasi</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
											<?php $__currentLoopData = $jenis_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											    <label for="inline-radio1" class="form-check-label ">
											        <input type="radio" id="'inline-radio'.<?php echo e($jp->id); ?>" name="jenis_prestasi_id" value="<?php echo e($jp->id); ?>"  class="form-check-input"  <?php echo e($prestasi->jenis_prestasi_id == $jp->id ? 'checked' : ''); ?>> <?php echo e($jp->nama_jenis); ?>  &nbsp
											    </label>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                        <?php if($errors->has('jenis_prestasi_id')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('jenis_prestasi_id')); ?>

					                                </div>
					                            <?php endif; ?>
		                                    </div>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Ketua </label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                	<select class="form-control" name="ketua_in">
		                                		<option value="default" selected>--Pilih Member--</option>
	                                		<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                			<option value="<?php echo e($a->id); ?>" <?php if($prestasi->anggota and $a->id==$prestasi->anggota->id): ?> selected="selected" <?php endif; ?> ><?php echo e($a->nama); ?></option>
	                                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                	</select>
		                                    <small class="form-text text-muted">Ketua dari internal pondasi (Jika ada)</small>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Ketua*</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="ketua_ex" value="<?php echo e($prestasi->ketua_ex); ?>" placeholder="Nama Ketua" class="form-control">
		                                    <small class="form-text text-muted">*Ketua dari external pondasi (Jika ada)</small>
		                                </div>
		                            </div>
		                            <hr>
								<?php for($i=0; $i<5; ++$i): ?>
								<?php
								$nama_in = 'anggota_in_'.strval($i);
								?>
								    <div class="row form-group">
									    <div class="col col-md-3">
									        <label for="text-input" class=" form-control-label">Anggota </label>
									    </div>
									    <div class="col-12 col-md-9">
									    	<select class="form-control" name="<?php echo e($nama_in); ?>">
									    		<option value="default" selected>--Pilih Member--</option>
											<?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_ap => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($a->id); ?>" <?php if($key_ap==$i and $a->id==$ap->anggota_in): ?> selected="selected" <?php endif; ?> ><?php echo e($a->nama); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									    	</select>
									        <small class="form-text text-muted">anggota dari internal pondasi (Jika ada)</small>
									        <input type="hidden"  name="id_anggota_prestasi_first" value="<?php echo e($anggota_prestasi->first()->id); ?>">
									        <input type="hidden"  name="prestasi_id" value="<?php echo e($anggota_prestasi->last()->prestasi_id); ?>">
									    </div>
									</div>
								<?php endfor; ?>
									<hr>
								<?php for($i=0; $i<5; ++$i): ?>
								<?php
								$nama_ex = 'anggota_ex_'.strval($i);
								?>
								    <div class="row form-group">
									    <div class="col col-md-3">
									        <label for="text-input" class=" form-control-label">Anggota </label>
									    </div>
									    <div class="col-12 col-md-9">
											<input type="text"  name="<?php echo e($nama_ex); ?>" placeholder="Nama anggota" class="form-control" <?php $__currentLoopData = $anggota_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($key==$i): ?> value="<?php echo e($ap->anggota_ex); ?>" <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
										    <small class="form-text text-muted">*anggota dari external pondasi (Jika ada)</small>
									    </div>
									</div>
								<?php endfor; ?>
									<hr>											                            		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tuan Rumah</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="host"  value="<?php echo e($prestasi->host); ?>" placeholder="Tuan Rumah Lomba/Konferensi" class="form-control">
				                            <?php if($errors->has('host')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('host')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Lokasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="lokasi" value="<?php echo e($prestasi->lokasi); ?>" placeholder="Lokasi" class="form-control">
	                                        <?php if($errors->has('lokasi')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('lokasi')); ?>

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
			                                    <input type="text"  name="tanggal" value="<?php echo e($prestasi->tanggal); ?>" placeholder="Tanggal prestasi" class="form-control">
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
		                                    <label for="text-input" class=" form-control-label">Judul Karya</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text" name="judul_karya" value="<?php echo e($prestasi->judul_karya); ?>" placeholder="Judul Karya" class="form-control">
	                                        <?php if($errors->has('judul_karya')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('judul_karya')); ?>

				                                </div>
				                            <?php endif; ?>                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Juara Ke</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="juara_ke" value="<?php echo e($prestasi->juara_ke); ?>" placeholder="Juara Ke" class="form-control"> 		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">hadiah</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="hadiah" value="<?php echo e($prestasi->hadiah); ?>" placeholder="hadiah prestasi" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
					                        </div>		                                    
		                                </div>
		                            </div>		                            		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Foto</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="file"  name="file_foto" value="<?php echo e($prestasi->file_foto); ?>">
		                                    <img src="<?php echo e(URL::to('/')); ?>/foto_prestasi/<?php echo e($prestasi->file_foto); ?>" class="img-thumbnail" width="100">
		                                    <input type="hidden"  name="hidden_image" value="<?php echo e($prestasi->file_foto); ?>">
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/prestasi/edit.blade.php ENDPATH**/ ?>