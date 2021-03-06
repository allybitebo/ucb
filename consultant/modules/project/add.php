<?php
	$projectFrom = $_GET['from'];
?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo $_SESSION['ACCOUNT_FNAME']. " " .$_SESSION['ACCOUNT_LNAME']  ; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>/officer/index.php?page=1" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></p></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>officer/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div> 
		<?php 
			/*if($projectFrom == "school"){
				echo '<form action="controller.php?action=addS" class="form-horizontal well span9" method="post">';
			} elseif ($projectFrom == "bureau"){
				echo '<form action="controller.php?action=addB" class="form-horizontal well span9" method="post">';
			}else {
				//Redirect
			}*/
		?>
		<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
			<fieldset>
				<legend>New Project</legend>
				
				<div class="form-group" id="idno">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="projectnumber">Project Number </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="projectnumber" name="projectnumber" placeholder="Project Number" type="text" value="">
						</div>
					</div> <br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="pname">Project Name </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="pname" name="pname" placeholder="Project Name" type="text" value="">
						</div>
					</div> <br /><br />
					
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="sday">Start Date</label>
						
						<div class="col-md-8">
							<div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
								<input class="form-control" size="11" type="text" value="<?php //echo $cur->start_date; ?>" readonly name="sday" id="sday">
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>
					</div>
					<br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="eday">End Date</label>
						
						<div class="col-md-8">
							<div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
								<input class="form-control" size="11" type="text" value="<?php //echo $cur->end_date; ?>" readonly name="eday" id="eday">
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>
					</div>
					<br /><br />
					
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="days">Days</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="days" name="days" placeholder="Days" type="number" value="">
						</div>
					</div> <br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="amount">Amount</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="amount" name="amount" placeholder="Amount" type="text" value="">
						</div>
					</div> <br /><br />
					
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="status">Status</label>
						<div class="col-md-8">
							<select class="form-control input-sm" name="status" id="status">
								<option value=""></option>
								<option value="Ongoing">On going </option>
								<option value="Complete">Completed</option>	
							</select>
						</div>
					</div> <br /><br />
					
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="projecttypeid">Project Type </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="projecttypeid" name="projecttypeid" placeholder="Project Type" type="text" value="">
						</div>
					</div> <br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="psector">Project-Sector</label>
						
						<div class="col-md-8">
							<select class="form-control input-sm" name="psector" id="psector">';
								<?php
									$sector = new Sector();
									$cur = $sector->listOfSectors();	
									foreach ($cur as $sector) {
										echo '<option value="'. $sector->sector_id.'">'. $sector->name .'</option>';
									}
								?>
								
							</select>	
						</div>
					</div>
					<br /><br />
					
					<?php
						if($projectFrom == "school"){
							echo '<div class="col-md-8">
							<label class="col-md-4 control-label" for="pschool">Project-School</label>
							
							<div class="col-md-8">
							<select class="form-control input-sm" name="pschool" id="pschool">';
							$school = new School();
							$cur = $school->listOfSchools();	
							foreach ($cur as $school) {
								echo '<option value="'. $school->school_id.'">'. $school->name.'</option>';
							}				
							echo '</select>	
							</div>
							</div>
							<br /><br />';
							
						} elseif ($projectFrom == "bureau"){
							
							echo '<div class="col-md-8">
							<label class="col-md-4 control-label" for="pbureau">Project-Bureau</label>
							
							<div class="col-md-8">
							<select class="form-control input-sm" name="pbureau" id="pbureau">';
							$bureau = new Bureau();
							$cur = $bureau->listOfBureau();	
							foreach ($cur as $bureau) {
								echo '<option value="'. $bureau->bureau_id.'">'. $bureau->name .'</option>';
							}
							
							echo '</select>	
							</div>
							</div>
							<br /><br />';
						} else {
							//redirect
						}
						?>
						
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for= "idno"></label>
							<div class="col-md-8">
								<button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
							</div>
						</div>
						
						
						
						
					</form>
					
					<!--End of well-->
					<!--End of container-->
				</div>
			</div>
		</div>
	</div><!--End of container-->																				
