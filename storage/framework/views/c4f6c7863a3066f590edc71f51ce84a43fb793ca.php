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
		                        <form id="form-change-password" novalidate action="<?php echo e(url('/admin/edit/akun/simpan/'.$user->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <?php if($message = Session::get('full')): ?>
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong><?php echo e($message); ?></strong>
                                    </div>
                                    <?php endif; ?> 		                        	
                                    <div class="col-md-9">
                                    <?php if($message = Session::get('wrong_password')): ?>
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong><?php echo e($message); ?></strong>
                                    </div>
                                    <?php endif; ?>              
                                    <label for="current-password" class="col-sm-4 control-label">Current Password</label>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                                        <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
                                        <?php if($errors->has('current-password')): ?>
                                            <div  class="alert alert-danger" role="alert">
                                                <?php echo e($errors->first('current-password')); ?>

                                            </div>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <label for="password" class="col-sm-4 control-label">New Password</label>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        <?php if($errors->has('password')): ?>
                                            <div  class="alert alert-danger" role="alert">
                                                <?php echo e($errors->first('password')); ?>

                                            </div>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                                        <?php if($errors->has('password_confirmation')): ?>
                                            <div  class="alert alert-danger" role="alert">
                                                <?php echo e($errors->first('password_confirmation')); ?>

                                            </div>
                                        <?php endif; ?>        
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-5 col-sm-6">
                                      <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pondasi\resources\views/backend/akun/edit_akun.blade.php ENDPATH**/ ?>