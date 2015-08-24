
<?php 
	$bureau = new Bureau();
	$list = $bureau->single_bureau($_GET['bureauId']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->bureau_id; ?>" method="POST">
	
	<fieldset>
		<legend>Bureau Information</legend>
		
		
		<div class="form-group" id="bureau_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="bureau_id">Bureau Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="bureau_id" name="bureau_id" type="text" value="<?php echo $list->bureau_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="bureau_name">Bureau Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="bureau_name" name="bureau_name" type="text" value="<?php echo $list->name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="bureau_sname">Short Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="bureau_sname" name="bureau_sname" type="text" value="<?php echo $list->shortname; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="baddress">Address</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="bureau_address" name="bureau_address" type="text" value="<?php echo $list->address; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
	
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="stelephone">Telephone</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="bureau_id" name="bureau_id" type="text" value="<?php echo $list->telephone; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
	<div class="form-group">
		<div class="rows">
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="sday">Email</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="bureau_id" name="bureau_id" type="text" value="<?php echo $list->email; ?>" readonly>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="website">Website</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="wbureau_id" name="wbureau_id" type="text" value="<?php echo $list->website; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
					<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="extension">Extension: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="extension" name="extension" type="text" value="<?php echo $list->extension; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		</center>
		
		<?php
			if($_SESSION['ACCOUNT_TYPE']=='officer'){
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

