
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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/client/index.php" class="btn btn-info btn-xsm">
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
<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
		<legend>New Client</legend>
		
		<div class="form-group" id="idno">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="firstname">Name </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="name" name="name" placeholder=" Name" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="shortname">Short Name </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="shortname" name="shortname" placeholder=" Short Name" type="text" value="">
				</div>
			</div> <br /><br /> 
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="address">Address</label>
				
				<div class="col-md-8">
					<textarea class="form-control input-sm" id=" address" name="address" placeholder="Address" type="text" value=""></textarea>
				</div>
			</div> 
			<br />
			<br />
			<br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="telephone">Telephone</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="telephone" name="telephone" placeholder=" Telephone" type="text" value="">
				</div>
			</div> <br /><br /> 
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="email">Email</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="email" name="email" placeholder=" Email" type="text" value="">
				</div>
			</div> <br /><br />
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="website">Website</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="website" name="website" placeholder=" Website" type="text" value="">
				</div>
			</div> <br /><br />
			
					<div class="col-md-8">
				<label class="col-md-4 control-label" for="sector"> Sector</label>
				
				<div class="col-md-8">
					<select class="form-control input-sm" name="sector" id="sector">
					<option>Choose sector</option>
						<?php
							$sector = new Sector();
							$cur = $sector->listOfSectors();
							foreach ($cur as $sector) {
								echo '<option value="'. $sector->sector_id.'">'. $sector->name .'</option>';
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
			</div>
			</div>
		</div><!--End of container-->																		
