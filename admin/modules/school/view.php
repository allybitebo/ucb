<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>
				</div>
				
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/school/index.php" class="btn btn-info btn-xsm">
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
<?php 
	$school = new School();
	$list = $school->single_school($_GET['schoolId']);
?>
<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->school_id; ?>" method="POST">
	
	<fieldset>
		<legend>School Information</legend>
		
		
		<div class="form-group" id="school_id">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="school_id">School Number </label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->school_id; ?>" readonly>
				</div>
				
			</div>
			
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="school_name">School Name: </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->name; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cName">Short Name </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->shortname; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="cContact">Address </label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->address; ?>" readonly>
					</div>
				</div>
				
			</div>
		</div>
		
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Telephone</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->telephone; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Fax</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->fax; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
			
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="extension">Extension</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->extension; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Directline</label>
					
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->directline; ?>" readonly>
						
					</div>
				</div>
			</div>
		</div>
	<div class="form-group">
		<div class="rows">
			
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="sday">Email</label>
				
				<div class="col-md-8">
					<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->email; ?>" readonly>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Website</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->website; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Facebook</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->facebook; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Tweeter</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->tweeter; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Gplus</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->gplus; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Youtube</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->youtube; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Linkedin</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->linkedin; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			<div class="rows">
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="sday">Skype</label>
	
					<div class="col-md-8">
						<input class="form-control input-sm" id="school_id" name="school_id" type="text" value="<?php echo $list->skype; ?>" readonly>
							
						</div>
					</div>
				</div>
			</div>
		</center>
		
		<?php
			if($_SESSION['ACCOUNT_TYPE']=='administrator'){
				echo '
				<div class="col-md-6" align="right">
				<button class="btn btn-primary" name="submit" type="submit" >Save</button>
				
				</div>';
			} ?>
			
	</div>
<br />
<br />
</form>
</div><!--End of well-->
</div><!--End of container-->

