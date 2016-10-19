<?php $__env->startSection('content'); ?>

        <div id="content">
            <div class="container"style="background-color:white; padding-top:50px;">

            <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Stage 3 / Educational Background</h1>
                    </div>
                </div>
            </div>
        </div>

    
                <div class="row">
                 
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="row">
                    <div class="col-md-12">
                        <?php if(count($errors) > 0): ?>
                                <div class="alert alert-danger">
                            
                                    <strong>The system was unable to properly save your record.</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        <?php foreach($errors->all() as $error): ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                    </div>

                </div>
				<div >
            <div class="col-md-2">
                <div class="img-responsive">
                    <img class="img-thumbnail" alt="user_profile" src="<?php echo e(asset('upload')); ?>/<?php echo e(Auth::User()->image); ?>" style=" height:150px; width:150px;" >
                </div>
            </div>
        </div>
                    <div class="col-md-10" id="customer-orders" >
                        
				        <?php echo $__env->make('partials.trainee_education', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                      
                            <!-- /.table-responsive -->
                        <div class="space"></div>
                    </div>

                </div>

                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>