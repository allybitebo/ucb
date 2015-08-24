
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME']; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div> 

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
			
</div>
</div>
		
</div>																		