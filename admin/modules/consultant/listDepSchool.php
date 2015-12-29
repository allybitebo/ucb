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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm">
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
				<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="panel panel-primary"><br>
			<div class="panel-heading"><h5><strong>Addition</strong></h5></div>
		     </div>
			 </div>
		
			<div class="col-lg-8 col-md-8 col-sm-8">
				
				<div class="panel panel-primary">
					<br />
					<div class="panel-heading"><h5><strong>Derpartments</strong></h5></div>
					<?php require_once("department.php"); ?>
					
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
		</div>
			</div>
		
		</div>			</div>
		
		</div>