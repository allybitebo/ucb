
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
		<?php 
			$consultant = new Consultant();
			$list = $consultant->single_consultant($_GET['consultantId']);
		?>
		<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->consultant_id; ?>" method="POST">
			
			<fieldset>
				<legend>Consultant Information</legend>
				
				
				<div class="form-group" id="consultant_id">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="consultant_id">Consultant Number </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->consultant_id; ?>" readonly>
						</div>
						
					</div>
					
				</div>
				
				<div class="form-group" id="consultant_id">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="userconsultant_id">User Account Id </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="userconsultant_id" name="userconsultant_id" type="text" value="<?php echo $list->user_account_id; ?>" readonly>
						</div>
						
					</div>
					
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="consultant_name">First Name: </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->firstname; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cName">Middle Name </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->middlename; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="lname">Last Name </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->lastname; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="dname">Dispaly Name</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->displayname; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="gend">Gender</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->gender; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="qualify">Qualification</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->qualification; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="title">Title</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="title" name="title" type="text" value="<?php echo $list->title; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="pschool">Department</label>
							
							<div class="col-md-8">
								<?php
									$department_id = $list->department_id;
									
									$department = new Department();
									$listDepartment = $department->single_department($department_id);
									
								?>
								<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $listDepartment->name; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="telephone">Telephone</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="telephone" name="telephone" type="text" value="<?php echo $list->telephone; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="email">Email</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->email; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="mobile">Mobile</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="consultant_id" name="consultant_id" type="text" value="<?php echo $list->mobile; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="website">Website</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="Website" name="Website" type="text" value="<?php echo $list->website; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
			</center>	
		</center>
	</form>
	<!--	</div><!--End of well-->
	
</div><!--End of container-->

