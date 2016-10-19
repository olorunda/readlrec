<?php $__env->startSection('content'); ?>


        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Have an Account / Sign in</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index">Home</a>
                            </li>
                            <li>Have an Account / Sign in</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" style="padding-bottom:40px;">

                <div class="row">
                    <div class="col-md-12" >
                        <div>
                            <h2 class="text-uppercase">Reset Password</h2>

                           
                            <hr>

                            <form method="POST" action="<?php echo e(url('/password/reset')); ?>">
									<?php echo e(csrf_field()); ?>

							

                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                                <div class="col-md-5 col-md-offset-3">

                                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                        <label for="email-login">E-Mail</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" id="email-login">
										 <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
										<?php endif; ?>
                                    </div>

                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                        <label for="password-login">Password</label>
                                        <input type="password" class="form-control" name="password" id="password-login">
										 <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
										<?php endif; ?>
                                    </div>
									<div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                        <label for="password-login">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password-login">
										 <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
										<?php endif; ?>
                                    </div>
                                   

                                    <div class="text">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Reset Password</button>
                                        &nbsp;
                                       
                                    </div>

                                </div>
                            </form>

                          
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>