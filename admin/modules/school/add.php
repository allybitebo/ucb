<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New School</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="name"> Name </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="name" name="name" placeholder="Name" type="text" value="">
				</div>
			</div> <br /><br />

			<div class="col-md-8">
				<label class="col-md-4 control-label" for="shortname">Short Name</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="shortname" name="shortname" placeholder="Short Name" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="address">Address</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="address" name="address" placeholder="Address" type="text" value="">
				</div>
			</div> <br /><br /> 
			
				
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="telephone">Telephone</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="telephone" name="telephone" placeholder="Telephone" type="text" value="">
				</div>
			</div> <br /><br />
			
			
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="bureau">Bureau</label>
				
				<div class="col-md-8">
					<select class="form-control input-sm" name="bureau" id="bureau">
						<?php
							$bureau = new Bureau();
							$cur = $bureau->listOfBureau();	
							foreach ($cur as $bureau) {
								echo '<option value="'. $bureau->bureau_id.'">'. $bureau->name .'</option>';
							}
							
						?>
						
					</select>	
				</div>
			</div>
			<br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="fax">Fax</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="fax" name="fax" placeholder="Fax" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="directline">Directline</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="directline" name="directline" placeholder="Directline" type="text" value="">
				</div>
			</div> <br /><br />
			
						<div class="col-md-8">
				<label class="col-md-4 control-label" for="extension"> Extension </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="extension" name="extension" placeholder="Extension" type="text" value="">
				</div>
			</div> <br /><br />
			
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="email">Email</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="email" name="email" placeholder="email" type="email" value="">
				</div>
			</div> <br /><br />
			
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="website">Website</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="website" name="website" placeholder="Website" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="facebook">Facebook</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="facebook" name="facebook" placeholder="Facebook" type="text" value="">
				</div>
			</div> <br /><br />
			
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="tweeter">Tweeter</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="tweeter" name="tweeter" placeholder="Tweeter" type="text" value="">
				</div>
			</div> <br /><br />
			
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="gplus">Gplus</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="gplus" name="gplus" placeholder="Gplus" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="youtube">Youtube</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="youtube" name="youtube" placeholder="Youtube" type="text" value="">
				</div>
			</div> <br /><br />
			
				
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="linkedin">Linkedin</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="linkedin" name="linkedin" placeholder="Linkedin" type="text" value="">
				</div>
			</div> <br /><br />
			
				
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="skype">Skype</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="skype" name="skype" placeholder="skype" type="text" value="">
				</div>
			</div> <br /><br />
			
			
			
			  
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