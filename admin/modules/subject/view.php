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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/subject/index.php" class="btn btn-info btn-xsm">
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
			$subject = new Subject();
			$list = $subject->single_subject($_GET['subjectId']);
		?>
		<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->subject_id; ?>" method="POST">
			<fieldset>
				<legend>Subject Information</legend>
				<div class="form-group" id="subject_id">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="subject_id">Subject Number </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="subject_id" name="subject_id" type="text" value="<?php echo $list->subject_id; ?>" readonly>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="subject_name">Subject Name: </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="subject_id" name="subject_id" type="text" value="<?php echo $list->name; ?>" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cContact">Description </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="subject_id" name="subject_id" type="text" value="<?php echo $list->description; ?>" readonly>
							</div>
						</div>	
					</div>
				</div>
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="psector"> Sector</label>
							<div class="col-md-8">
								<?php
									$sector_id = $list->sector_id;
									$sector = new Sector();
									$listSector = $sector->single_sector($sector_id);
								?>
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listSector->sector_name; ?>" readonly>
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="domain"> Domain</label>
							<div class="col-md-8">
								<?php
									$domain_id = $list->domain_id;
									$domain = new Domain();
									$listdomain = $domain->single_domain($domain_id);	
								?>
								<input class="form-control input-sm" id="domain" name="domai" type="text" value="<?php echo $listdomain->name; ?>" readonly>
							</div>
						</div>
					</div>
				</div>
				
			</center>
			
			<?php
				if($_SESSION['ACCOUNT_TYPE']=='officer'){
					echo '
					<div class="col-md-6" align="right">
					<button class="btn btn-primary" name="submit" type="submit" >Save</button>
					
					</div>';
				} ?>	
		</div>
	</form>
</div>
</div><!--End of container-->

