<?php 	
	$project = new Project();
	$cur = $project->single_project($_GET['id']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->project_id; ?>" method="POST">
	
	<fieldset>
		<legend>Edit Project</legend>
								<div class="form-group" id="project_id">			<div class="col-md-8">				<label class="col-md-4 control-label" for="project_id">Project ID *</label>								<div class="col-md-8">					<input class="form-control input-sm" id="projectid" name="projectid" placeholder="Project Number" type="text" value="<?php echo $cur->project_id; ?>" readonly>				</div>							</div>					</div>
		
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="project_id">Project Number *</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="projectnumber" name="projectnumber" placeholder="Project Number" type="text" value="<?php echo $cur->project_number; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="project_name">Project Name: *</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="projectname" name="projectname" type="text" placeholder="Project Name" value="<?php echo $cur->project_name; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cName">Client Name </label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="clientname" name="clientname" placeholder="Client Name" type="text" value="<?php echo $cur->client_name; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cContact">Client Contacts </label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="clientcontacts" name="clientcontacts" placeholder="Client Contact" type="text" value="<?php echo $cur->client_contacts;?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">		  <div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Start Date</label>					<div class="col-md-8">
						<div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
							<input class="form-control" size="11" type="text" value="<?php echo $cur->start_date; ?>" readonly name="startdate" id="startdate">
							<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					</div>
				</div>			</div>			</div>				<div class="form-group">	   <div class="rows">			<div class="col-md-8">
					<label class="col-md-4 control-label" for="eday">End Date</label>			<div class="col-md-8">
						<div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
							<input class="form-control" size="11" type="text" value="<?php echo $cur->end_date; ?>" readonly name="enddate" id="enddate">
							<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					</div>
				</div>				</div>				</div>				<div class="form-group">			<div class="rows">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="pType">Project Type</label>
				
				<div class="col-md-8">
					
					<input class="form-control input-sm" id="projecttype" name="projecttype" type="text" placeholder="Project Type" value="<?php echo $cur->project_type_id; ?>">	
				</div>
			</div>			</div>			</div>
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="status">Project Status </label>
					<div class="col-md-8">
						<select class="form-control input-sm" name="status" id="status">
							<option value=""><?php echo $cur->project_status; ?></option>
							<option value="Ongoing">On going </option>
							<option value="Complete">Completed</option>	
						</select>	
					</div>
				</div>					</div>
				<br />
				<br />
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="pDays">Project Days </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="days" name="days" type="text" placeholder="Days" value="<?php echo $cur->days; ?>">
					</div>
				</div>
				<br /> <br />								<div class="col-md-8">					<label class="col-md-4 control-label" for="pAmount">Project Amount</label>										<div class="col-md-8">												<input class="form-control input-sm" id="amount" name="amount" type="text" placeholder="Project Amount" value="<?php echo $cur->total_amount; ?>">					</div>				</div>				<br /> <br />							<div class="col-md-8">				<label class="col-md-4 control-label" for="pSector">Project Sector</label>				<div class="col-md-8">					<select class="form-control input-sm" name="sector" id="sector">						<?php							$sector = new Sector();							$cur = $sector->listOfSectors();								foreach ($cur as $sector) {								echo '<option value="'. $sector->sector_id .'">'. $sector->sector_name .'</option>';							}													?>											</select>					</div>			</div>			<br />			<br />											<div class="col-md-8">				<label class="col-md-4 control-label" for="school">Project School</label>				<div class="col-md-8">					<select class="form-control input-sm" name="school" id="school">						<?php							$school = new School();							$cur = $school->listOfSchools();								foreach ($cur as $school) {								echo '<option value="'. $school->school_id .'">'. $school->name .'</option>';							}													?>											</select>					</div>			</div>			<br />			<br />									<div class="col-md-8">				<label class="col-md-4 control-label" for="pSector">Project Bureau</label>				<div class="col-md-8">					<select class="form-control input-sm" name="bureau" id="bureau">						<?php							$bureau = new Bureau();							$cur = $bureau->listOfBureau();								foreach ($cur as $bureau) {								echo '<option value="'. $bureau->bureau_id .'">'. $bureau->name .'</option>';							}													?>											</select>					</div>			</div>			<br />			<br />				
				<?php
					if($_SESSION['ACCOUNT_TYPE']=='administrator'){
						echo '
						<div class="col-md-6" align="right">
						<button class="btn btn-primary" name="submit" type="submit" >Save</button>
						
						</div>';
					} ?>
					
			</div>
		</div>
		
	</form>
	<!--	</div><!--End of well-->
	
</div><!--End of container-->

