<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo $_SESSION['ACCOUNT_FNAME']. " " .$_SESSION['ACCOUNT_LNAME']  ; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>/officer/index.php?page=1" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></p></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>officer/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div> 
		<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
			<fieldset>
				<legend>New Client</legend>
				
				<div class="form-group" id="idno">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="cname">Client Name</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="cname" name="cname" placeholder="Client Name" type="text" value="">
						</div>
					</div> <br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="csname">Client Short Name</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="csname" name="csname" placeholder="Cleint Short Name" type="text" value="">
						</div>
					</div> <br /><br /> 
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="caddress">Client Address</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="caddress" name="caddress" placeholder="Client Address" type="text" value="">
						</div>
					</div> <br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="ctelephone">Client Telephone</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="ctelephone" name="ctelephone" placeholder="Client Telephone" type="text" value="">
						</div>
					</div> <br /><br /> 
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="cemail">Client Email</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="cemail" name="cemail" placeholder="Client Email" type="text" value="">
						</div>
					</div><br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="cwebsite">Client Website</label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="cwebsite" name="cwebsite" placeholder="Client Website" type="text" value="">
						</div>
					</div> <br /><br />
					
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="school">Client Sector</label>
						
						<div class="col-md-8">
							<select class="form-control input-sm" name="school" id="school">
								<?php
									$sector = new Sector();
									$cur = $sector->listOfSectors();	
									foreach ($cur as $sector) {
										echo '<option value="'. $sector->school_id.'">'. $sector->name .'</option>';
									}
									
								?>
								
							</select>	
						</div>
					</div>
				</div>
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for= "idno"></label>
					<div class="col-md-8">
						<button class="btn btn-default" name="submit" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
					</div>
				</div>
				<br /><br /><br />
			
			
		</form>
		<!--End of well-->
		<!--End of container-->
	</div>
</div><!--End of container-->																		
