<?php //echo "sessb". $_SESSION['BUREAU_ID']. "lessS".$_SESSION['SCHOOL_ID']; //FOR LOGIN ANG ACCOUNT CHECKING ?> 

<?php
	if ($_SESSION['BUREAU_ID'] != NULL){
	//For Number of Projects
	$project = new Project();
	$projectnum = $project->ProjectsNumberBureau($_SESSION['BUREAU_ID']);
	
	//For Consultants -- NEEDS IMPROVEMENTS
	$projectList = $project->listOfprojectsBureau($_SESSION['BUREAU_ID']);
	$TotalconlNumberPerProj = 0;
	$consultant = new Consultant();
	foreach ($projectList as $list) {
		$proj_id = $list->project_id;
		$conlNumberPerProj = $consultant->number_consultant_project($proj_id);
		$TotalconlNumberPerProj = $TotalconlNumberPerProj + $conlNumberPerProj;
	}
	$totalCons = $TotalconlNumberPerProj;
	
	//For Installments
	$TotalInstNumberPerProj = 0;
	$payment = new Payment();
	foreach ($projectList as $list) {
		$proj_id = $list->project_id;
		$InstNumberPerProj = $payment->number_installment_project($proj_id);
		$TotalInstNumberPerProj = $TotalInstNumberPerProj + $InstNumberPerProj;
	}
	$totalInst = $TotalInstNumberPerProj;
	
	} else{
	//For Projects
	$project = new Project();
	$projectnum = $project->ProjectsNumberSchool($_SESSION['SCHOOL_ID']);
	
	//For Consultants -- NEEDS IMPROVEMENTS
	$projectList = $project->listOfprojectsSchool($_SESSION['SCHOOL_ID']);
	$TotalconlNumberPerProj = 0;
	$consultant = new Consultant();
	foreach ($projectList as $list) {
		$proj_id = $list->project_id;
		$conlNumberPerProj = $consultant->number_consultant_project($proj_id);
		$TotalconlNumberPerProj = $TotalconlNumberPerProj + $conlNumberPerProj;
	}
	$totalCons = $TotalconlNumberPerProj;
	
	//For Installments
	$TotalInstNumberPerProj = 0;
	$payment = new Payment();
	foreach ($projectList as $list) {
		$proj_id = $list->project_id;
		$InstNumberPerProj = $payment->number_installment_project($proj_id);
		$TotalInstNumberPerProj = $TotalInstNumberPerProj + $InstNumberPerProj;
	}
	$totalInst = $TotalInstNumberPerProj;
}
?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo $_SESSION['ACCOUNT_FNAME']. " " .$_SESSION['ACCOUNT_LNAME']  ; ?></h5></strong></p></div>
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
										/*if ($_SESSION['BUREAU_ID'] != NULL){
											$project = new Project();
											$projectnum = $project->ProjectsNumberBureau($_SESSION['BUREAU_ID']); 
											} else{
											$project = new Project();
											$projectnum = $project->ProjectsNumberSchool($_SESSION['SCHOOL_ID']); 
										}*/
									?>
									
                                    <div class="huge"><?php echo $projectnum; ?></div>
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>officer/modules/project/index.php?view=ProjectConsultant">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
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
										
										/*if ($_SESSION['BUREAU_ID'] != NULL){
											$project = new Project();
											$projectList = $project->listOfprojectsBureau($_SESSION['BUREAU_ID']);
											$TotalconlNumberPerProj = 0;
											$consultant = new Consultant();
											foreach ($projectList as $list) {
											$proj_id = $list->project_id;
											$conlNumberPerProj = $consultant->number_consultant_project($proj_id);
											$TotalconlNumberPerProj = $TotalconlNumberPerProj + $conlNumberPerProj;
											}
											$totalCons = $TotalconlNumberPerProj;
											} else{
											$project = new Project();
											$projectList = $project->listOfprojectsSchool($_SESSION['SCHOOL_ID']);
											$TotalconlNumberPerProj = 0;
											$consultant = new Consultant();
											foreach ($projectList as $list) {
											$proj_id = $list->project_id;
											$conlNumberPerProj = $consultant->number_consultant_project($proj_id);
											$TotalconlNumberPerProj = $TotalconlNumberPerProj + $conlNumberPerProj;
											}
											$totalCons = $TotalconlNumberPerProj;
										}*/
									?>
									<div class="huge"><?php echo $totalCons; ?></div>
									
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>officer/modules/consultant/index.php?view=unitConsultant">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
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
									<?php
										/* ($_SESSION['BUREAU_ID'] != NULL){
											$project = new Project();
											$projectList = $project->listOfprojectsBureau($_SESSION['BUREAU_ID']);
											$TotalInstNumberPerProj = 0;
											$payment = new Payment();
											foreach ($projectList as $list) {
											$proj_id = $list->project_id;
											$InstNumberPerProj = $payment->number_installment_project($proj_id);
											$TotalInstNumberPerProj = $TotalInstNumberPerProj + $InstNumberPerProj;
											}
											$totalInst = $TotalInstNumberPerProj;
											} else{
											$project = new Project();
											$projectList = $project->listOfprojectsSchool($_SESSION['SCHOOL_ID']);
											$TotalInstNumberPerProj = 0;
											$payment = new Payment();
											foreach ($projectList as $list) {
											$proj_id = $list->project_id;
											$InstNumberPerProj = $payment->number_installment_project($proj_id);
											$TotalInstNumberPerProj = $TotalInstNumberPerProj + $InstNumberPerProj;
											}
											$totalInst = $TotalInstNumberPerProj;
										}*/
									?>
									<div class="huge"><?php echo $totalInst; ?></div>
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
								<div class="col-xs-9">
									<P><strong><h5>Edit Your Profile</h5></strong></p>
								</div>
								<div class="col-xs-3 text-right">
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>officer/modules/officer/index.php?view=edit&officer_id=".>
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
</div><!--container-->