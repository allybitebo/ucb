
<?php 
	
	$user = new User();
	$cur = $user->single_user($_GET['id']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->user_account_id; ?>" method="POST">
	
	<fieldset>
		<legend>Edit user</legend>
		
		
		<div class="form-group" id="user_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="user_id">User Number *</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="user_id" name="user_id" placeholder="user Number" type="text" value="<?php echo $cur->user_account_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="name">First Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="firstname" name="firstname" type="text" placeholder="First Name" value="<?php echo $cur->user_first_name; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="MiddleName">Middle Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="middlename" name="middlename" placeholder="Middle Name" type="text" value="<?php echo $cur->user_middle_name; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="lastname">Last Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="lastname" name="lastname" placeholder="Last Name" type="text" value="<?php echo $cur->user_last_name; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
			<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="username">User Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="username" name="username" placeholder="Display Name" type="text" value="<?php echo $cur->user_name; ?>">
					</div>
				</div>
				
			</div>
		</div>
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="password">Password </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="password" name="password" placeholder="Password" type="text" value="<?php echo $cur->account_password; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="acctype">Account Type </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="acctype" name="acctype" placeholder="Account Type " type="text" value="<?php echo $cur->account_type; ?>">
					</div>
				</div>
				
			</div>
		</div>
		
		
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
