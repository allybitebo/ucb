
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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/domain/index.php" class="btn btn-info btn-xsm">
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
	$domain = new Domain();
	$list = $domain->single_domain($_GET['domainId']);
?>
<form class="form-horizontal well span9" action="controller.php?action=view&id=<?php echo $list->domain_id; ?>" method="POST">
	
	<fieldset>
		<legend>Domain Information</legend>
		
		
		<div class="form-group" id="domain_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="domain_id">Domain Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="domain_id" name="domain_id" type="text" value="<?php echo $list->domain_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group" id="domain_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="userdomain_id"> Name </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="userdomain_id" name="userdomain_id" type="text" value="<?php echo $list->domain_name; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="description">Description: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="description" name="description" type="text" value="<?php echo $list->description; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="psector"> Sector</label>
					
					<div class="col-md-8">
					<?php
						$domainSector_id = $list->sector_id;
						
							$sector = new Sector();
							$listSector = $sector->single_sector($domainSector_id);
						
					?>
						<input class="form-control input-sm" id="domain_id" name="domain_id" type="text" value="<?php echo $listSector->sector_name; ?>" readonly>
						
					</div>
				</div>
				</div>
		</div>
</center>
</form>
<!--	</div><!--End of well-->

</div><!--End of container-->

