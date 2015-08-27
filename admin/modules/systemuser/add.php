<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>Home</a><p>
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
		<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
			<fieldset>
				<legend>New System User</legend>
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
					</div> 
					<br />
					<br />					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="uname">User Name</label>
						<div class="col-md-8">
							<input class="form-control input-sm" id="uname" name="uname" placeholder="User Name" type="text" value="">
						</div>
					</div> 
					<br />
					<br /> 
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="password">Password</label>
						<div class="col-md-8">
							<input class="form-control input-sm" id="password" name="password" placeholder="Password" type="text" value="">
						</div>
					</div> <br />
					<br />
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="accountType">Account Type</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="accountType" name="accountType" placeholder="Acccount Type" type="text" value="">
						</div>
					</div>
					<br />
					<br />

                    <div class="col-md-8">
						<label class="col-md-4 control-label" for= "idno"></label>
						<div class="col-md-8">
							<button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div><!--End of container-->																			