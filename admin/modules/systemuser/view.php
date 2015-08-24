
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
					<label class="col-md-4 control-label" for="password">Password</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="user_id" name="user_id" type="text" value="<?php echo $list->account_password; ?>" readonly>
						
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
</div>

</form>
<!--	</div><!--End of well-->

</div><!--End of container-->

