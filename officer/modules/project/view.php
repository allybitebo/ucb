<?php 
	$project = new Project();
	$list = $project->single_project($_GET['projectId']);
	$projectFrom = $_GET['from'];
?>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo $_SESSION['ACCOUNT_FNAME']. " " .$_SESSION['ACCOUNT_LNAME']  ; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>/officer/index.php?page=1" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></p></div>
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT; ?>officer/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</a></p></div>
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
						<label class="col-md-4 control-label" for="pschool">School</label>
						
						<div class="col-md-8">';
						
						$school_id = $list->project_school_id;
						
						$school = new School();
						$listSchool = $school->single_school($school_id);
						
						echo '<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="';
						echo $listSchool->name;
						echo '" readonly>';
						
						echo '</div>
						</div>
						</div>
						</div>';
						} elseif ($projectFrom == "bureau"){
						
						echo '<div class="form-group">
						<div class="rows">
						
						<div class="col-md-8">
						<label class="col-md-4 control-label" for="pschool">Bureau</label>
						
						<div class="col-md-8">';
						
						$project_bureau_id = $list->project_bureau_id;
						
						$bureau = new Bureau();
						$listBureau = $bureau->single_bureau($project_bureau_id);
						
						
						echo '<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="';
						echo $listBureau->name;
						echo '" readonly>';
						
						echo '</div>
						</div>
						</div>
						</div>';
						} else {
						//redirect
					echo "here";					}
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
			
			<br />
			<fieldset>
				<legend>Client Information</legend>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cName">Client Name </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->client_name; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cContact">Client Contacts </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->client_contacts; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
			</center>
			
			
			<br />
			<fieldset>
				<legend>Payment Information</legend>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cName">Payment Number</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->client_name; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cContact">Payment Amount</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->client_contacts; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
			</center>
			
			<br />
			<fieldset>
				<legend>Project Consultants</legend>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cName">Consultants Name</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->client_name; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
			</center>
			
			<?php
				
				/*if($_SESSION['ACCOUNT_TYPE']=='officer'){
					echo '
					<div class="col-md-6" align="right">
					<button class="btn btn-primary" name="submit" type="submit" >Save</button>
					
					</div>';
				}*/ 
			?>
			
		</div>
		
	</form>
	<!--	</div><!--End of well-->
</div><!--End of container-->

