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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/sector/index.php" class="btn btn-info btn-xsm">
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
	$sector = new Sector();
	$list = $sector->single_sector($_GET['sectorId']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->sector_id; ?>" method="POST">
	
	<fieldset>
		<legend>Sector Information</legend>
		<div class="form-group" id="sector_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="sector_id">Sector Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="sector_id" name="sector_id" type="text" value="<?php echo $list->sector_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sector_name">Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="sector_id" name="sector_id" type="text" value="<?php echo $list->sector_name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		
		</center>
		
		<?php
			if($_SESSION['ACCOUNT_TYPE']=='sector'){
				echo '
				<div class="col-md-6" align="right">
				<button class="btn btn-primary" name="submit" type="submit" >Save</button>
				
				</div>';
			} ?>
			
	</div>
</div>

</form>
</div><!--End of container-->

