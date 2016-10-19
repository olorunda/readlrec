 <div class="col-md-3 col-sm-4">
<?php $url=$_SERVER['PHP_SELF']; 

$url=explode('/',$url);
?>   


	<!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading" >
                                <h3 class="panel-title"style="width:100%">Admin Panel             </h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
								<b><h4>Manage Applicant Details</h4></b>
								 <li <?php if($url[2]=="panel"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('panel')); ?>"><i class="fa fa-home"></i> Home</a>
                                    </li>
                                    <li <?php if($url[2]=="manageposition"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('/manageposition')); ?>"><i class="fa fa-pencil "></i>Manage Positions</a>
                                    </li>
									<li <?php if($url[2]=="examscore"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('/examscore')); ?>"><i class="fa fa-superscript"></i>View Exam Score</a>
                                    </li>
									<li <?php if($url[2]=="allquestion"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('/allquestion')); ?>"><i class="fa fa-superscript"></i>Manage Text</a>
                                    </li>
                                    <li <?php if($url[2]=="sortapp"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('/sortapp')); ?>"><i class="fa fa-sort-alpha-asc"></i>Sorted Applicants</a>
                                    </li>
									<li <?php if($url[2]=="addapplicant"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('/addapplicant')); ?>"><i class="fa fa-plus "></i>Add Applicant</a>
                                    </li>
									<li <?php if($url[2]=="mailapplicant"){ ?> class='active' <?php } ?>>
                                        <a  style="cursor:pointer" data-toggle="modal" data-target="#quickmail"><i class="fa fa-envelope "></i>Mail Applicants</a>
                                    </li>
									<li <?php if($url[2]=="report"){ ?> class='active' <?php } ?>>
                                        <a href="<?php echo e(url('/report')); ?>"><i class="fa fa-microphone "></i>Report</a>
                                    </li>
									<b><h4>Search Filter</h4></b>
									<form class="form-horizontal" id="searchapp">
									
									<p>State</p> 
									<select class="form-control" style="margin-bottom:4px;" name="state" id="state">
										<option value="all">All</option>
									<?php foreach($states as $state): ?>
									<option ><?php echo $state ?></option>
									<?php endforeach; ?>
									</select>
									<p>Region</p> 
									<select class="form-control" style="margin-bottom:4px;" name="region" id="region">
									<option value="all">All</option>
									<option value="Abuja">Abuja</option>
									<option value="Portharcourt">Portharcourt</option>
									<option value="Lagos">Lagos</option>
									<option value="Kano">Kano</option>
									</select>

									<p>Sex</p> 
									<select class="form-control" style="margin-bottom:4px;" name="sex" id="sex">
									<option value="all">All</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
									</select>
									
									<p>Status</p> 
									<select class="form-control" style="margin-bottom:4px;" name="status" id="status">
									<option value="all">All</option>
									<option value="1">Accepted</option>
									<option value="2">Rejected</option>
									</select>
									
									<p>Grade</p>
                                                        <select class="chosen-select form-control" id="grade" >
                                                      
                                                                <option value="all">All</option>
                                                                <option value="1">First Class</option>
                                                                <option value="2">Second Class Upper</option>
                                                                <option value="3">Second Class Lower</option>
                                                              
                                                                <option value="5">Merit</option>
                                                                <option value="6">Distinction</option>
                                                               
                                                        </select>

										
									<p>Age</p>
									<div class="col-md-12" style="margin-left:-30px;">
									<div class="col-md-6">
									<select class="form-control" style="margin-bottom:4px;" name="age" id="age">
									
									<?php for($i=18;  $i<=30; $i++): ?>
									<option value="<?php echo e($i); ?>" ><?php echo e($i); ?></option>
									<?php endfor; ?>
									</select>
									</div>
									<span style="margin-right:25px">To</span>&nbsp;
									<div class="col-md-6">
									<select class="form-control" style="margin-top:-22px; margin-left:20px;" name="ageto" id="ageto">
									<?php for($i=18;  $i<=30; $i++): ?>
									<option value="<?php echo e($i); ?>" ><?php echo e($i); ?></option>
									<?php endfor; ?>
									</select>
									</div>
									</div>
									
									<p>Score</p>
									<div class="col-md-12" style="margin-left:-30px;">
									<div class="col-md-6">
									<select class="form-control" style="margin-bottom:4px;" name="score" id="scorefrom">
									
									<?php for($i=10;  $i<=100; $i=$i+10): ?>
									<option value="<?php echo e($i); ?>" ><?php echo e($i); ?></option>
									<?php endfor; ?>
									</select>
									</div>
									<span style="margin-right:25px">To</span>&nbsp;
									<div class="col-md-6">
									<select class="form-control" style="margin-top:-22px; margin-left:20px;" name="scoreto" id="scoreto">
									<?php for($i=10;  $i<=100; $i=$i+10): ?>
									<option value="<?php echo e($i); ?>" ><?php echo e($i); ?></option>
									<?php endfor; ?>
									</select>
									</div>
									</div>
									
									
									<div class="pull-right" style="margin-top:10px;">
									<input type="submit" class="btn btn-success btn-md" value="Search" />
									</div>
									</form>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                       <!-- *** CUSTOMER MENU END *** -->
                    </div>