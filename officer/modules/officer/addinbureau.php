<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New Officer</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="firstname">First Name </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="firstname" name="firstname" placeholder="First Name" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="middlename">Middle Name </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="middlename" name="middlename" placeholder="Middle Name" type="text" value="">
				</div>
			</div> <br /><br /> 
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="lastname">Last Name</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="lastname" name="lastname" placeholder="Last Name" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="displayname">Display Name</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="displayname" name="displayname" placeholder="Display Name" type="text" value="">
				</div>
			</div> <br /><br /> 
			
			<div class="col-md-8">
					<label class="col-md-4 control-label" for="gender">Gender</label>
					
					<div class="col-md-8">
						<select class="form-control input-sm" name="gender" id="gender">
							<option value=""></option>
							<option value="male">Male</option>
							<option value="female">Female</option>	
						</select>	
					</div>
				</div><br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="qualify">Qualification</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="qualify" name="qualify" placeholder="Qualification" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="title">Title</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="title" name="title" placeholder="Title" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="email">Email</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="email" name="email" placeholder="email" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="telephone">Telephone</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="telephone" name="telephone" placeholder="Telephone" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="mobile">Mobile</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="mobile" name="mobile" placeholder="Mobile" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="website">Website</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="website" name="website" placeholder="Website" type="text" value="">
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
                      <label class="col-md-4 control-label" for= "idno"></label>
                      <div class="col-md-8">
                        <button class="btn btn-default" name="submit" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                
			
		
			</form>
			
		<!--End of well-->
		<!--End of container-->
		
		</div><!--End of container-->																		
