
<?php 
	$competence = new Competence();
	$list = $competence->single_competence($_GET['competenceId']);
	
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->competence_id; ?>" method="POST">
	
	<fieldset>
		<legend>Competence Information</legend>
		
		
		<div class="form-group" id="competence_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="competence_id">Competence Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="competence_id" name="competence_id" type="text" value="<?php echo $list->competence_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="competence_name">Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="competence_id" name="competence_id" type="text" value="<?php echo $list->name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="competence_name">Description: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="competence_id" name="competence_id" type="text" value="<?php echo $list->description; ?>" readonly>
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
						$competence_sector_id = $list->competence_sector_id;
						
							$sector = new Sector();
							$listSector = $sector->single_sector($competence_sector_id);
						
					?>
						<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $list->competence_sector_id; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="psector"> Domain</label>
					
					<div class="col-md-8">
					<?php
						$competence_domain_id = $list->competence_domain_id;
						
							$domain = new Domain();
							$listdomain = $domain->single_domain($competence_domain_id);
						
					?>
						<input class="form-control input-sm" id="domain_id" name="domain_id" type="text" value="<?php echo $list->competence_domain_id; ?>" readonly>
						
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

