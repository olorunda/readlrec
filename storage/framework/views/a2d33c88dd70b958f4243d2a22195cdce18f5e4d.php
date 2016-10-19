<?php $__env->startSection('content'); ?>

   
		<div id="content" style="padding-bottom:30px"><div id="heading-breadcrumbs">
            <div class="container" >
                <div class="row">
                    <div class="col-md-7" id="noprint">
					 <?php if(Auth::user()->complete=="0"): ?>   
						 <?php if(Auth::user()->type=="1"): ?>
							<h1> Modify / View Applicants Details </h1>
						 <?php else: ?>
                        <h1>Confirm Your Application</h1>
						      <?php endif; ?> 
							   <?php else: ?>
								   
								       <h1>Application Completed</h1>
								   <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
            <div class="container"style="background-color:#ececec; margin-top:-20px;">
			
 

    
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
			
                <!--
                ################################################
                //----------Added by zeus 24/08/2016------------
                ################################################
                -->
                
               
				<div class="col-md-1" style="margin-left:5%"></div>
				
                <div class="col-md-9 ">
                    <div class="heading text-center" >
                       <p><img style="width:100%;" alt="DPR LOGO" src="<?php echo e(asset('img/logo.jpg')); ?>"></p>
 <?php if(Auth::user()->type=='1'): ?>
									   
								 <h2>Applicant's Details</h2>
									   <?php else: ?>
									 <h2 id="noprint">Your Profile</h2>
								   <?php endif; ?>					  
                    </div>
				        <?php echo $__env->make('partials.applicantprofile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                      
                            <!-- /.table-responsive -->
                        <div class="space"></div>
                    </div>

                </div>
                <!--
                ################################################
                //----------End Added by zeus 24/08/2016------------
                ################################################
                -->
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>