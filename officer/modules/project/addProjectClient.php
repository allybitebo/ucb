<?php
	$_SESSION["project_id"] = $_GET['project_id'];
?>
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
		<form action="controller.php?action=addClient" class="form-horizontal well span9" method="post">
			<fieldset>
				<legend>Add Project's Client</legend>
				
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="pclient">Project Client</label>
					
					<div class="col-md-8">
						<select class="form-control input-sm" name="pclient" id="pclient">';
							<?php
								$client = new Client();
								$cur = $client->listOfClients();	
								foreach ($cur as $client) {
									echo '<option value="'. $client->client_id.'">'. $client->client_name .'</option>';
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
				<br /><br />
				
			</form>
			
			<legend>Create New Client</legend>
			<div class="col-md-8">
				<label class="col-md-4 control-label" for= "clienInfo">If client is not in the list</label>
				<div class="col-md-8">
					<a href="../client/index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Add New Client</a>
				</div>
			</div>	
			<br /><br /><br />
			
			<!--End of well-->
			<!--End of container-->
		</div>
	</div>
</div>
</div><!--End of container-->																				
