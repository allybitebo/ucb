<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New Domain</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="domainname">Domain Name</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="domainname" name="domainname" placeholder="Domain Name" type="text" value="">
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
                      <label class="col-md-4 control-label" for= "idno"></label>
                      <div class="col-md-8">
                        <button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  
			</form>
			
		<!--End of well-->
		<!--End of container-->
		
		</div><!--End of container-->																		