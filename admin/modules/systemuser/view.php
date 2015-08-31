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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/systemuser/index.php" class="btn btn-info btn-xsm">
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
<?php 
	$user = new User();
	$list = $user->single_user($_GET['userId']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->user_id; ?>" method="POST">
	
	<fieldset>
		<legend>User Information</legend>
		
		
		<div class="form-group" id="user_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="user_id">User Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->user_account_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="user_name">First Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->user_first_name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cName">Middle Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->user_middle_name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="lname">Last Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->user_last_name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="dname">Dispaly Name</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->user_name; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>		
	<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="type">Account Type</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->account_type; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
		</center>
		
		<?php
			if($_SESSION['ACCOUNT_TYPE']=='user'){
				echo '
				<div class="col-md-6" align="right">
				<button class="btn btn-primary" name="submit" type="submit" >Save</button>
				
				</div>';
			} ?>
			
	</div>

</form>
</div><!--End of well-->
</div><!--End of container-->

