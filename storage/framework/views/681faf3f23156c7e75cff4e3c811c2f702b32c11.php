<?php $__env->startSection('content'); ?>
	<script src="<?php echo e(asset('js/jquery.js')); ?>" ></script>
<script>

function populate(val){
	//alert (val());

			 if(val=="Abuja"){
				 $('#centers').html('<option value="center1">Abuja</option>');
				 
			 }
			else if(val=="Portharcourt"){
				 $('#centers').html('<option value="center1">Portharcourt</option>');
				
			}
			else if(val=="Lagos"){
				 $('#centers').html('<option value="unilag">Unilag</option>');
				
			}
			
			else {
				 $('#centers').html('<option value="center1">Kano</option>');
				
			}
			
		
	
}

</script>
        <!-- *** LOGIN MODAL END *** -->
<?php $url=$_SERVER['PHP_SELF']; 
function assigncolor($score){
	
	if($score<=40){
		echo '<span style="color:red">'.$score.'</span>';
	}
	elseif($score>=40 && $score<=50){
		echo '<span style="color:#a59827">'.$score.'</span>';
	}
	else{
		
		echo '<span style="color:green">'.$score.'</span>';
	
	}
}
$url=explode('/',$url);
?>
    <?php  $states= ["1"=>"Abia","2"=>"Adamawa","3"=>"Akwa Ibom","4"=>"Anambra","5"=>"Bauchi","6"=>"Bayelsa","7"=>"Benue","8"=>"Borno","9"=>"Cross River","10"=>"Delta","11"=>"Ebonyi","12"=>"Edo","13"=>"Ekiti","14"=>"Enugu","15"=>"Abuja","16"=>"Gombe","17"=>"Imo","18"=>"Jigawa","19"=>"Kaduna","20"=>"Kano","21"=>"Katsina","22"=>"Kebbi","23"=>"Kogi","24"=>"Kwara","25"=>"Lagos","26"=>"Nasawara","27"=>"Niger","28"=>"Ogun","29"=>"Ondo","30"=>"Osun","31"=>"Oyo","32"=>"Plateau","33"=>"Rivers","34"=>"Sokoto","35"=>"Taraba","36"=>"Yobe","37"=>"Zamfara"];
		?>

        <div id="content">
            <div class="container" style="background-color:white; padding-top:50px;">


                <div class="row">
                   <?php echo $__env->make('dpr.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->
			
								
			 	<form class="form-horizontal" action="/decision" method="post">
				<?php if(count($applicants)>0): ?>
				
				<div >
			
			
		     <?php if($url[2]=="searchapp"): ?>
			<div class="col-md-3">
				<b>Showing result <?php echo e(session('count')); ?>	 of <?php echo e(session('counttotal')); ?> total applicant</b>
			</div>
			<div class="col-md-1"></div>
				<?php else: ?>
					<div class="col-md-2">
				<select class="form-control" id="perpage" >
							<option value="10">10 Per page</option>
							<option value="50">50 Per page</option>
							<option value="100">100 Per page</option>
							</select>
								</div>
								<div class="col-md-2"></div>
							 <?php endif; ?>
			
				
				
<div class="col-md-2">
								<input type="hidden"id="token" name="_token" value="<?php echo e(csrf_token()); ?>">
								<select class="form-control" name="approval" >
							<option value="1">Accept  Selected</option>
							<option value="2">Reject Selected</option>
							<input type="hidden" value="1" name="type" />
							
							</select>
							
								</div>
								
								<div class="col-md-3"><button class="btn btn-success">Apply</button>
									
												<button  type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fw fa-file-excel-o"></i>Export</button>
										
										</div>
											
												</div>
												<?php endif; ?>
                    <div class="col-md-9 col-sm-8" id="customer-orders">
				        
                      <div class="">
              
							<?php if(count($applicants)>0): ?>
								
							

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
									
                                            <th><input type="checkbox"  id="checkall" ></th>
                                            <th>S/N</th>
                                            <th>FULLNAME</th>
                                            <th>APPLIED FOR</th>
                                            <th>DEGREE</th>
                                            <th>STATUS</th>
                                          
                                            <th>Exam 1</th>
                                            <th>Exam 2</th>
                                            <th>ACCEPT/REJECT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($applicants as $applicant): ?>
                                        <tr>
										
                                            <th><input type="checkbox" name="select[]" value="<?php echo e($applicant->email); ?>"/></th>
                                            <th><?php echo e($index++); ?></th>
                                            <td><?php echo e($applicant->f_name); ?> <?php echo e($applicant->l_name); ?> <?php echo e($applicant->m_name); ?></td>
                                            <td><?php echo e($applicant->position); ?></td>
                                            <td style="text-transform:uppercase;"><?php echo e($applicant->degree); ?></td>
                                            <td><?php if($applicant->approved=="0"): ?><span class="label label-warning">Pending</span>
                                            <?php elseif($applicant->approved=='1'): ?>
											<span class="label label-success">Approved</span>
											<?php else: ?>
												<span class="label label-danger">Rejected</span>
											<?php endif; ?>
                                            </td>
											
											<td style="text-align:center; font-size:15px;"><b><?php echo e(assigncolor($applicant->exam_init)); ?></b></td>
											<td style="text-align:center; font-size:15px;"><b><?php echo e(assigncolor($applicant->textscore)); ?></b></td>
                                          <!--  <td><a href="/download/<?php echo e($applicant->id); ?>" class="btn btn-template-main btn-sm"><I class="fa fa-download"></i>Download</a> </td> -->
											
											<td>
											<div class="btn-group">
  <button type="button" class="btn btn-sm btn-success" onclick="approve('<?php echo e($applicant->email); ?>','1','1')"><i class="fa fw fa-check-square"></i>A</button>
  <button type="button" class="btn btn-danger btn-sm" onclick="approve('<?php echo e($applicant->email); ?>','2','1')"><i class="fa fw fa-times"></i>R</button>
											</div>
                                            </td>
                                        </tr>
                                         <?php endforeach; ?>
										 </form>
                                    </tbody>
                                </table>
                            </div>
						<?php else: ?>
							<div class="col-md-12"><p class="text-center text-info "style="margin-top:10%; font-size:30px;"> <?php if(isset($message)): ?> No Result Found Click  <a href="/panel" >Here</a> to return home <?php else: ?> No Applicants Yet <?php endif; ?></p></div>
							<?php endif; ?>
                            <!-- /.table-responsive -->
						<div class="pull-right">	<?php echo $applicants->render(); ?> </div>
                        </div>
						<!-- /.table-responsive -->

                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->
<div id="myModal" class="modal fade" role="dialog" style="padding-top:10%;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Import Question From Exel</h4>
      </div>
      <div class="modal-body">
        <form action="export" method="get" enctype="multipart/form-data" />
		<h4>Upload Question</h3>
		<input type="file" name="file" class="form-control" />
		<br>
		
		<br>
		<button class="btn btn-md btn-success" value="export"><i class="fa fw fa-file-excel-o"></i>Import Question</button>
			
			</form>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


                    <!-- *** RIGHT COLUMN END *** -->

                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


   <?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>