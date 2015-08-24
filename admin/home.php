


<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo "Welcome " . $_SESSION['ACCOUNT_FNAME']; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>officer/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div>  
		
		<div class="panel-body" >
			<!--<li class="leaf"><h3> <?php echo "Welcome " . $_SESSION['ACCOUNT_FNAME']; ?><hr /></h3></li>
				<li class="leaf"><a href="<?php echo WEB_ROOT; ?>officer/modules/officer/index.php">Edit your Profile</a></li>
				<li class="leaf"><a href="<?php echo WEB_ROOT; ?>officer/modules/project/index.php">Projects</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>officer/logout.php">Logout</a></li>-->
			
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
										if ($_SESSION['BUREAU_ID'] != NULL){
											$project = new Project();
											$projectnum = $project->ProjectsNumberBureau($_SESSION['BUREAU_ID']); 
											} else{
											$project = new Project();
											$projectnum = $project->ProjectsNumberSchool($_SESSION['SCHOOL_ID']);
										}
									?>
									
                                    <div class="huge"><?php echo $projectnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><li class="leaf"><a href="<?php echo WEB_ROOT; ?>officer/modules/project/index.php?view=ProjectConsultant">Details</a></li></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Consultant</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<?php
										/*ENHANCE THIS CODE TO COUNT CORRCT NUMBER OF CONSULTANT
											
											WAY ONE QUERY BUILDING SCRIPT 
											EG: $ourSql = echo "SELECT DISTINCT (`cons_proj_consultant_id`) FROM consultant_project WHERE `cons_proj_project_id` = 4 OR `cons_proj_project_id` = 6 OR `cons_proj_project_id` = 8"
											ALLY BITEBO 19/08/2015
										*/
										
										if ($_SESSION['BUREAU_ID'] != NULL){
											$project = new Project();
											$projectList = $project->listOfprojectsBureau($_SESSION['BUREAU_ID']);
											$TotalconlNumberPerProj = 0;
											$consultant = new Consultant();
											foreach ($projectList as $list) {
												$proj_id = $list->project_id;
												$conlNumberPerProj = $consultant->number_consultant_project($proj_id);
												$TotalconlNumberPerProj = $TotalconlNumberPerProj + $conlNumberPerProj;
											}
											$total = $TotalconlNumberPerProj;
											} else{
											$project = new Project();
											$projectList = $project->listOfprojectsSchool($_SESSION['SCHOOL_ID']);
										}
									?>
									<div class="huge"><?php echo $total; ?></div>
									
								</div>
							</div>
							</div>
							<a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><li class="leaf"><a href="<?php echo WEB_ROOT; ?>officer/modules/officer/index.php">Details</a></li></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Installment</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
									
								</div>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5> Profile</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>New Profile!</div>
								</div>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>                    
	<div class="panel panel-primary">
		<div class="panel-heading"><h5><strong>ADMINISTRATOR CONTROL PANEL</strong></h5></div>    
		
		<div class="panel-body" >
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php">Officers</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/bureau/index.php">Bureaus</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/school/index.php">Schools</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/project/index.php">Projects</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">Subjects</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/domain/index.php">Domains</a></li>
            <li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/payment/index.php">Payments</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/consultant/index.php">Consultants</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/competence/index.php">Competence</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">Departments</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/systemuser/index.php">System Users</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/sector/index.php">Project Sectors</a></li>
			<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/client/index.php">Clients</a></li>
			
		</div>
	</div>                     
</div> 
</div>
</div><!--container-->

