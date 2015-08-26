
<?php 
	$project = new Project();
	$list = $project->single_project($_GET['projectId']);
	
?>
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
					<label class="col-md-4 control-label" for="ptype">Project Type ID</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->project_type_id; ?>" readonly>
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
						<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listSector->sector_name; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="pschool">Project School</label>
					
					<div class="col-md-8">
					<?php
						$school_id = $list->project_school_id;
						
							$school = new School();
							$listSchool = $school->single_school($school_id);
						
					?>
						<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listSchool->name; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
				
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="pschool">Project Bureau</label>
					
					<div class="col-md-8">
					<?php
						$project_bureau_id = $list->project_bureau_id;
						
							$bureau = new Bureau();
							$listBureau = $bureau->single_bureau($project_bureau_id);
						
					?>
						<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listBureau->name; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
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
		
		<?php
		
			/*if($_SESSION['ACCOUNT_TYPE']=='officer'){
				echo '
				<div class="col-md-6" align="right">
				<button class="btn btn-primary" name="submit" type="submit" >Save</button>
				
				</div>';
		      }*/ 
			?>
			
	</div>
</div>

</form>
<!--	</div><!--End of well-->

</div><!--End of container-->

