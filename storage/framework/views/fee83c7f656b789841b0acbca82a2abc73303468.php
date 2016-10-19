      
<?php $__env->startSection('content'); ?>
        <!-- *** LOGIN MODAL END *** -->

      
        <div id="content">
            <div class="container"style="background-color:white; padding-top:50px;">


                <div class="row">
                 
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-12" id="customer-orders" >
				<legend>	<b> <?php echo e(session('cat')); ?>  </b></legend><br><br>
    	<?php if(count($listjobs)>0): ?>
	  <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
									
                                           
                                            <th>S/N</th>
                                            <th>REF NO</th>
                                            <th>POSITION</th>
                                            <th>QUALIFICATION</th>
                                            <th>Apply</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
								<?php $index=1; ?>
									<?php foreach($listjobs as $job): ?>
                                        <tr>
                                            <th><?php echo e($index++); ?></th>
                                            <td><?php echo e($job->ref_no); ?></td>
                                            <td><?php echo e($job->position); ?></td>
                                            <td><?php echo e($job->qualification); ?></td>
                                            <td><?php if($job->type=="1"): ?> Graduate Trainee <?php else: ?> Experience Hire <?php endif; ?></td>
                                            <td><a href="<?php echo e(url('appliedfor')); ?>/<?php echo e(str_replace(' ','-',$job->position)); ?>/<?php echo e($job->id); ?>/<?php echo e($job->type); ?>" class="btn btn-success btn-md">Apply</a></td>
                                           </tr>
									<?php endforeach; ?>
									</tbody>
									</table>
                                    <?php echo $listjobs->render(); ?>


<?php else: ?>
	<p class="text-info text-center" style="font-size:40px; margin-top:5%; margin-bottom:7.5%;"><b> NO  OPEN POSITIONS CLICK <a href="/jobtype">HERE</a> TO GO BACK </p>


<?php endif; ?>


                      
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.box -->
<div class="col-md-12" style="padding-bottom:50px;"></div>
                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->



                    <!-- *** RIGHT COLUMN END *** -->

                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>