<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME']; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div>  
		
		<div class="panel-body" >			
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Projects</h5></strong></p>	
								</div>
                                <div class="col-xs-9 text-right">
								
								<?php
								$project = new Project();
								$projectnum = $project->find_all_project();
								?>
                                    <div class="huge"><?php echo $projectnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/project/index.php?">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Bureaus</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
								     <?php
										$bureau = new Bureau();
										$bureaunum = $bureau->find_all_bureau();
									 ?>
									<div class="huge"><?php echo $bureaunum; ?></div>
								</div>
							</div>
							</div>
							<a href="<?php echo WEB_ROOT; ?>admin/modules/bureau/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</li></span>
                                <div class="clearfix"></div>
							</div>
						   </a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Consultants</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								<?php
									$consultant = new Consultant();
									$consultantnum = $consultant->find_all_consultant();
									?>
                                    <div class="huge"><?php echo $consultantnum; ?></div>	
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/consultant/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Departments</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								<?php 
									$department = new Department();
									$departmentnum = $department->find_all_department();
								?>
                                    <div class="huge"><?php echo $departmentnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>	
	<div class="panel-body" >
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Domains</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
									<?php
									$domain = new Domain();
									$domainnum = $domain->find_all_domain();
									?>
                                    <div class="huge"><?php echo $domainnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/domain/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Subjects</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<?php
									$subject = new Subject();
								    $subjectnum = $subject->find_all_subject();
									?>
									<div class="huge"><?php echo $subjectnum;; ?></div>
								</div>
							</div>
							</div>
							<a href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Clients</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
									
								</div>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5> Users</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								    <?php
									  $systemuser = new Systemuser();
									  $usernum = $systemuser->find_all_systemuser();
									?>
                                    <div class="huge"><?php echo $usernum; ?></div>                             
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/systemuser/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>	
	<div class="panel-body" >
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Officers</h5></strong></p>
									
								</div>
                                <div class="col-xs-9 text-right">
									<?php
									$officer = new Officer();
									$officernum = $officer->find_all_officer();
									?>
                                    <div class="huge"><?php echo $officernum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Payments</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<?php
                                       $payment =  new Payment();
									   $paymentnum = $payment->find_all_payment();
									?>
									<div class="huge"><?php echo $paymentnum; ?></div>
									
								</div>
							</div>
							</div>
							<a href="<?php echo WEB_ROOT; ?>admin/modules/payment/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Schools</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								     <?php
										 $school = new School();
										 $schoolnum = $school->find_all_school();
										 ?>
                                    <div class="huge"><?php echo $schoolnum?></div>	
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/school/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Sector</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								<?php
									$sector = new Sector();
									$sectornum = $sector->find_all_sector();
								?>
                                    <div class="huge"><?php echo $sectornum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/sector/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</div>                    
</div>                     


