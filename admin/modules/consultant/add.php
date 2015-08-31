<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>
				</div>
				
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/consultant/index.php" class="btn btn-info btn-xsm">
								<span class="glyphicon glyphicon-step-backward"></span>Back
								</a
								</p>
							</div>
							<div class="col-xs-6">
								<p align="right"><a href="<?php echo WEB_ROOT;?>admin/logout.php"
								class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p>
							</div>
						</div>
					</div>
				</div>
				</div> 
				<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
					<fieldset>
						<legend>New Consultant</legend>
						
						<div class="form-group" id="idno">
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="firstname">First Name </label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="firstname" name="firstname" placeholder="First Name" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="middlename">Middle Name </label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="middlename" name="middlename" placeholder="Middle Name" type="text" value="">
								</div>
							</div> <br /><br /> 
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="lname">Last Name</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="lname" name="lname" placeholder="Last Name" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="displayname">Display Name</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="displayname" name="displayname" placeholder="Display Name" type="text" value="">
								</div>
							</div> <br /><br /> 
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="gender">Gender</label>
								
								<div class="col-md-8">
									<select class="form-control input-sm" name="gender" id="gender">
										<option value=""></option>
										<option value="male">Male</option>
										<option value="female">Female</option>	
									</select>	
								</div>
							</div><br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="qualify">Qualification</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="qualify" name="qualify" placeholder="Qualification" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="title">Title</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="title" name="title" placeholder="Title" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="email">Email</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="email" name="email" placeholder="email" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="telephone">Telephone</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="telephone" name="telephone" placeholder="Telephone" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="mobile">Mobile</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="mobile" name="mobile" placeholder="Mobile" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="website">Website</label>
								
								<div class="col-md-8">
									<input class="form-control input-sm" id="website" name="website" placeholder="Website" type="text" value="">
								</div>
							</div> <br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="deptid">Department </label>
								
								<div class="col-md-8">
									<select class="form-control input-sm" name="deptid" id="deptid">
										<?php
											$department = new Department();
											$cur = $department->listOfDepartment();	
											foreach ($cur as $department) {
												echo '<option value="'. $department->department_id .'">'. $department->name .'</option>';
											}
											
										?>
										
									</select>	
								</div>
							</div><br /><br />
							
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="systemuser">User Account Number</label>
								
								<div class="col-md-8">
									<select class="form-control input-sm" name="systemuser" id="systemuser">
										<?php
											$systemuser = new Systemuser();
											$cur = $systemuser->listOfSystemuser();	
											foreach ($cur as $systemuser ) {
												echo '<option value="'. $systemuser->user_account_id .'">'. $systemuser->user_account_id .'</option>';
											}
										?>
									</select>	
								</div>
							</div><br /><br />
							<div class="col-md-8">
								<label class="col-md-4 control-label" for= "idno"></label>
								<div class="col-md-8">
									<button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
				</div><!--End of container-->																						