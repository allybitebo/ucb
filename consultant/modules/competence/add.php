<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New Competence</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="name">Name</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="name" name="name" placeholder="Competence Name" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="description">Description</label>
				
				<div class="col-md-8">
					<textarea class="form-control input-sm" id="description" name="description" placeholder="Description" type="text" value=""></textarea>
				</div>
			</div> <br /><br /><br /><br />
			
			<form method="get">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="psector">Sector</label>
					
					<div class="col-md-8">
						<select class="form-control input-sm" name="psector" id="psector">
							<?php
								$sector = new Sector();
								$cur = $sector->listOfSectors();	
								foreach ($cur as $sector) {
									echo '<option value="'. $sector->sector_id.'">'. $sector->sector_name .'</option>';
								}
								
							?>
							
						</select>
					</div>
				</div>
				<br /><br />
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="domain">Domain</label>
					
					<div class="col-md-8">
					<select name="domain" id="domain"></select>
						<!--<select class="form-control input-sm" name="domain" id="domain">
							<?php
								/*$domain = new Domain();
									$cur = $domain->listOfDomains();	
									foreach ($cur as $domain) {
									echo '<option value="'. $domain->domain_id.'">'. $domain->domain_name .'</option>';
								}*/
								
							?>
							
						</select>-->
					</div>
				</div>
				<br /><br >
				
			</form>			

	<?php
					if($_SESSION['ACCOUNT_TYPE']=='administrator'){
						echo '
						<div class="col-md-6" align="right">
						<button class="btn btn-primary" name="submit" type="submit" >Save</button>
						
						</div>';
					} ?>

	</form>
						
					</div>
					</div><!--End of well-->
						<!--End of container-->
						</div><!--End of container-->																								