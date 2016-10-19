<?php $__env->startSection('content'); ?>

        <div id="content">
            <div class="container"style="background-color:white; padding-top:50px;">


                <div class="row">
                 
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <h2 class="text-uppercase">New Application - <?php echo e($title); ?></h2>

                            <p class="lead"><b>WARNING!!!</b></p>
                            <p class="" style="color:red; font-size:30px" >
                                Candidates can only apply for one opening.
                            </p>

                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                    
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                <?php foreach($errors->all() as $error): ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                        </div>
                    </div>

                </div>

                    <div class="col-md-10" id="customer-orders" >
                        
				      
				            <?php echo $__env->make('partials.grad_train', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				      
                      
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
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>