
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
						<input class="form-control input-sm" id="sector_id" name="sector_id" type="text" value="<?php echo $list->name; ?>" readonly>
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
<!--	</div><!--End of well-->

</div><!--End of container-->

