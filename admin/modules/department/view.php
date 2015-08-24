
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
	$department = new Department();
	$list = $department->single_department($_GET['departmentId']);
	//echo $list->department_id;
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->department_id; ?>" method="POST">
	
	<fieldset>
		<legend>Department Information</legend>
		
		
		<div class="form-group" id="department_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="department_id">Department Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $list->department_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="department_name">Department Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $list->name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cName">Short Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $list->shortname; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cContact">Address </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $list->address; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Telephone</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $list->telephone; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="extension">Extension</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="extension" name="extension" type="text" value="<?php echo $list->extension; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
	<div class="form-group">
		<div class="rows">
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="email">Email</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="email" name="email" type="email" value="<?php echo $list->email; ?>" readonly>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="website">Website</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="department_id" name="department_id" type="text" value="<?php echo $list->website; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="school">School</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school" name="school" type="text" value="<?php echo $list->name; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>	
		</center>

</form>
</div>
</div>

