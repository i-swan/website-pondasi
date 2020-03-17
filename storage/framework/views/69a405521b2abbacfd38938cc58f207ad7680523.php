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
		                        <form action="<?php echo e(url('/anggota/tambah/simpan')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		                        	<?php echo e(csrf_field()); ?>

		                            <div class="row form-group m-b-10">
										<h3 class="title-3"><i class="zmdi zmdi-account-calendar"></i>Add Member</h3>
		                            </div>
		                            <hr>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Nama</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="nama" placeholder="Nama" class="form-control">
				                            <?php if($errors->has('nama')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('nama')); ?>

				                                </div>
				                            <?php endif; ?>
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Status</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
		                                        <label for="inline-radio1" class="form-check-label ">
		                                            <input type="radio" id="inline-radio1" name="status" value="pengurus" class="form-check-input"> Pengurus &nbsp
		                                        </label>
		                                        <label for="inline-radio2" class="form-check-label ">
		                                            <input type="radio" id="inline-radio2" name="status" value="member" class="form-check-input"> Member
		                                        </label>
		                                        <?php if($errors->has('status')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('status')); ?>

					                                </div>
					                            <?php endif; ?>
		                                    </div>
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Jenis Kelamin </label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
		                                        <label for="inline-radio1" class="form-check-label ">
		                                            <input type="radio" id="inline-radio1" name="jk" value="laki-laki" class="form-check-input"> Laki-Laki &nbsp
		                                        </label>
		                                        <label for="inline-radio2" class="form-check-label ">
		                                            <input type="radio" id="inline-radio2" name="jk" value="perempuan" class="form-check-input"> Perempuan
		                                        </label>
		                                        <?php if($errors->has('jk')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('jk')); ?>

					                                </div>
					                            <?php endif; ?>                                        
		                                    </div>
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
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
		                                </div>
		                                <div class="col-12 col-md-9 input-group-date">
		                                	<div class='input-group date' id='datetimepicker1'>
			                                    <input type="text"  name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
		                                        <?php if($errors->has('tanggal_lahir')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('tanggal_lahir')); ?>

					                                </div>
					                            <?php endif; ?>
					                        </div>		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Daerah Asal</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="daerah_asal" placeholder="Daerah Asal" class="form-control">
	                                        <?php if($errors->has('daerah_asal')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('daerah_asal')); ?>

				                                </div>
				                            <?php endif; ?>		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">No HP</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="no_hp" placeholder="Nomor HP" class="form-control">
		                                        <?php if($errors->has('no_hp')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('no_hp')); ?>

					                                </div>
					                            <?php endif; ?>		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Email</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="email" placeholder="Email" class="form-control">
		                                        <?php if($errors->has('email')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('email')); ?>

					                                </div>
					                            <?php endif; ?>		                                    
		                                </div>
		                            </div>		                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label class=" form-control-label">Golongan Darah</label>
		                                </div>
		                                <div class="col col-md-9">
		                                    <div class="form-check-inline form-check">
		                                        <label for="inline-radio1" class="form-check-label ">
		                                            <input type="radio" id="inline-radio1" name="gol_darah" value="A" class="form-check-input"> A &nbsp
		                                        </label>
		                                        <label for="inline-radio2" class="form-check-label ">
		                                            <input type="radio" id="inline-radio2" name="gol_darah" value="B" class="form-check-input"> B &nbsp
		                                        </label>
		                                        <label for="inline-radio3" class="form-check-label ">
		                                            <input type="radio" id="inline-radio3" name="gol_darah" value="AB" class="form-check-input">AB &nbsp
		                                        </label>
												<label for="inline-radio3" class="form-check-label ">
		                                            <input type="radio" id="inline-radio3" name="gol_darah" value="O" class="form-check-input"> O
		                                        </label>
		                                        <?php if($errors->has('gol_darah')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('gol_darah')); ?>

					                                </div>
					                            <?php endif; ?>		                                        	                                        
		                                    </div>
		                                </div>
		                            </div>	                            
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Riwayat Sakit</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="riwayat_sakit" placeholder="ex : Maag, Usus Buntu, dll" class="form-control">
	                                        <?php if($errors->has('riwayat_sakit')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('riwayat_sakit')); ?>

				                                </div>
				                            <?php endif; ?>                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Jurusan di IPB</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="jurusan_ipb" placeholder="ex : Agronomi dan Holtikultura" class="form-control">
	                                        <?php if($errors->has('jurusan_ipb')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('jurusan_ipb')); ?>

				                                </div>
				                            <?php endif; ?>    		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Angkatan di IPB</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <input type="text"  name="angkatan_ipb" placeholder="ex 43" class="form-control">
	                                        <?php if($errors->has('angkatan_ipb')): ?>
				                                <div  class="alert alert-danger" role="alert">
				                                    <?php echo e($errors->first('angkatan_ipb')); ?>

				                                </div>
				                            <?php endif; ?>    		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Masuk Pondasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <div class='input-group date' id='datetimepicker2'>
			                                    <input type="text"  name="masuk_pondasi" placeholder="Tanggal Masuk Pondasi" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
		                                        <?php if($errors->has('masuk_pondasi')): ?>
					                                <div  class="alert alert-danger" role="alert">
					                                    <?php echo e($errors->first('masuk_pondasi')); ?>

					                                </div>
					                            <?php endif; ?> 
					                        </div>   		                                    
		                                </div>
		                            </div>
		                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    <label for="text-input" class=" form-control-label">Lulus Pondasi</label>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <div class='input-group date' id='datetimepicker3'>
			                                    <input type="text"  name="lulus_pondasi" placeholder="Tanggal Lulus Pondasi" class="form-control">
			                                    <span class="input-group-addon">
	                        						<span class="glyphicon glyphicon-calendar"></span>
	                    						</span>
					                        </div>   		                                    
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/anggota/tambah.blade.php ENDPATH**/ ?>