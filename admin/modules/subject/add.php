<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New Subject</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="subjectname">Subject Name</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="subjectname" name="subjectname" placeholder="Subject Name" type="text" value="">
				</div>
			</div> <br /><br />
		
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="description">Description </label>
				
				<div class="col-md-8">
					<textarea class="form-control input-sm" id="description" name="description" placeholder="Description" type="text" value="" ></textarea>
				</div>
			</div> <br /><br /><br /><br />

			<div class="col-md-8">
				<label class="col-md-4 control-label" for="sector">Sector </label>
				
				<div class="col-md-8">
					<select class="form-control input-sm" name="sector" id="sector">
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
				<label class="col-md-4 control-label" for="domain">Domain </label>
				
				<div class="col-md-8">
					<select class="form-control input-sm" name="domain" id="domain">
						<?php
							$domain = new Domain();
							$cur = $domain->listOfDomains();	
							foreach ($cur as $domain) {
								echo '<option value="'. $domain->domain_id.'">'. $domain->domain_name .'</option>';
							}
							
						?>
						
					</select>	
				</div>
			</div>
			<br /><br >
			
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for= "idno"></label>
                      <div class="col-md-8">
                        <button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
	
		
			</form>
			
		<!--End of well-->
		<!--End of container-->
		
		</div><!--End of container-->																		