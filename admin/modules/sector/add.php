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
		<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">
			
			
			<fieldset>
				<legend>New Sector</legend>
				
				<div class="form-group">
                    <div class="col-md-8">
						<label class="col-md-4 control-label" for="sector">Sector Name</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="sector" name="sector" placeholder="Sector Name" type="text" value="">
						</div>
					</div>
				</div>
				
				
				<div class="form-group">
                    <div class="col-md-8">
						<label class="col-md-4 control-label" for= "idno"></label>
						<div class="col-md-8">
							<button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
						</div>
					</div>
				</div>
				
				
			</fieldset> 
			
		</form>
	</div>
</div><!--End of container-->