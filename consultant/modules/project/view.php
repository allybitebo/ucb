<?php 
	$projectFrom = $_GET['from'];
	
	$project = new Project();
	$list = $project->single_project($_GET['projectId']);
	
	$client = new Client();
	$clientCheck = $client->ProjectClientCheck($_GET['projectId']);
	If ($clientCheck > 0)
	{
		$clientInfo = $client->listOfProjectClient($_GET['projectId']);
	} else {
		$clientInfo = "add";
	}
	

	$consultant = new Consultant();
	$consultantInfos = $consultant->consultants_in_project($_GET['projectId']);
	
	$payment = New Payment();
	$paymentInfos = $payment->listOfProjectPayment($_GET['projectId']);
	
?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>consultant/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>
				</div>
				
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>consultant/modules/project/index.php?view=consultantProject" class="btn btn-info btn-xsm">
								<span class="glyphicon glyphicon-step-backward"></span>Back
								</a
								</p>
							</div>
							<div class="col-xs-6">
								<p align="right"><a href="<?php echo WEB_ROOT;?>consultant/logout.php"
								class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p>
							</div>
						</div>
					</div>
				</div>
				</div> 
		<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->project_id; ?>" method="POST">
			
			<fieldset>
				<legend>Project Information</legend>
				
				
				<div class="form-group" id="project_id">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="project_id">Project Number </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->project_number; ?>" readonly>
						</div>
						
					</div>
					
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="project_name">Project Name: </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->project_name; ?>" readonly>
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="ptype">Project Type</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->project_type_id; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="sday">Start Date</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->start_date; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="sday">End Date</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->end_date; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="pdays">Days </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->days; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="psector">Project Sector</label>
							
							<div class="col-md-8">
								<?php
									$project_sector_id = $list->project_sector_id;
									
									$sector = new Sector();
									$listSector = $sector->single_sector($project_sector_id);
									
								?>
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listSector->name; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<?php
					
					if($projectFrom == "school"){
						echo '<div class="form-group">
						<div class="rows">
						
						<div class="col-md-8">
						<label class="col-md-4 control-label" for="pschool">Project School</label>
						
						<div class="col-md-8">';
						$school_id = $list->project_school_id;
						
						$school = new School();
						$listSchool = $school->single_school($school_id);
						
						echo '<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="';
						echo $listSchool->name;
						echo '" readonly>
						
						</div>
						</div>
						</div>
						</div>';
						} else {				
						
						echo '<div class="form-group">
						<div class="rows">
						
						<div class="col-md-8">
						<label class="col-md-4 control-label" for="pschool">Project Bureau</label>
						
						<div class="col-md-8">';
						$project_bureau_id = $list->project_bureau_id;
						
						$bureau = new Bureau();
						$listBureau = $bureau->single_bureau($project_bureau_id);
						
						echo '<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="';
						echo $listBureau->name;
						echo '" readonly>
						
						</div>
						</div>
						</div>
						</div>';
					}
				?>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="sday">Project Status</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->project_status; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="sday">Project Amount</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->total_amount; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
			</center>
			
			<fieldset>
				<legend>Project Client Information</legend>
				
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="clientName">Client Name</label>
							
							<div class="col-md-8">
								<?php 
									if ($clientInfo == "add")
									{
										echo '<a href="index.php?view=addProjectClient&project_id='.$_GET['projectId'].'" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Add Project Client</a>';
										} else {
										echo '<input class="form-control input-sm" id="clientName" name="clientName" type="text" value="'.$clientInfo->client_name.'" readonly>';
									}
								?>
								</div>
						</div>
						
					</div>
					</div>
					
					</center>
					
					<fieldset>
					<legend>Project Consultants Information</legend>
					
									
									<div class="form-group" id="project_id">
									<div class="col-md-8">
						<label class="col-md-4 control-label" for="project_id">Project Consultants</label>
						
						<div class="col-md-8">
							<?php
								foreach ($consultantInfos as $constInfo) {
									echo '<li>'. $constInfo->displayname .'</li>';
								}
							?>
						</div>
						
					</div>
					
				</div>
			</center>
			
			<fieldset>
			<legend>Project Payment Information</legend>
			
			
			<div class="form-group" id="project_id">
			<div class="col-md-8">
			<label class="col-md-4 control-label" for="project_id">Project Payments </label>
			
			<div class="col-md-8">
			<?php
			foreach ($paymentInfos as $installmentInfo) {
			echo '<li> Installment number '. $installmentInfo->installment_number .'</li>';
			}
			?>
			</div>
			
			</div>
			
			</div>
			</center>
			
			</form>
			<!--	</div><!--End of well-->
			</div>
			</div><!--End of container-->
			
						