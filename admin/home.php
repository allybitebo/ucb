
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

	</div>                     
</div> 
</div>
</div><!--container-->

