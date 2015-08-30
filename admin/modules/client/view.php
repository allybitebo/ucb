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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/client/index.php" class="btn btn-info btn-xsm">
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
	$client = new Client();
	$list = $client->single_client($_GET['clientId']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->client_id; ?>" method="POST">
	<fieldset>
		<legend>client Information</legend>
		<div class="form-group" id="client_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="client_id">client Number </label>
				<div class="col-md-8">
					<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_id; ?>" readonly>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="client_name"> Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cName">Short Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_short_name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="lname">Email </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_email; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="dname">Website</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_website; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
			<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="mobile">Address</label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_address; ?>" readonly>	
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="telephone">Telephone</label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $list->client_Telephone; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sector">Sector</label>
					<div class="col-md-8">
					<?php
						$listsector=$list->client_sector;
						$sector = new Sector();
						$listsector= $sector->single_sector($listsector);
						
						?>
						<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $listsector->name; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
		</center>	
	</div>
</div>
</form>
</div><!--End of well-->
</div><!--End of container-->

