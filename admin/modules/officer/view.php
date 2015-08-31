
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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/officer/index.php" class="btn btn-info btn-xsm">
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
			$officer = new Officer();
			$list = $officer->single_officer($_GET['officerId']);
		?>
		<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->officer_id; ?>" method="POST">
			
			<fieldset>
				<legend>Officer Information</legend>
				
				
				<div class="form-group" id="officer_id">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="officer_id">Officer Number </label>
						
						<div class="col-md-8">
							<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->officer_id; ?>" readonly>
						</div>
						
					</div>
					
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="officer_name">First Name: </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->firstname; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="cName">Middle Name </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->middlename; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="lname">Last Name </label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->lastname; ?>" readonly>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="dname">Dispaly Name</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->displayname; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="gend">Gender</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->gender; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="qualify">Qualification</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->qualification; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="title">Title</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->title; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="email">Email</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->email; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="website">Website</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->website; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="bureau">Bureau</label>
							
							<div class="col-md-8">
								<?php
									$bureauId=$list->bureau_id;
									$bureau = new Bureau();
									$listBureau = $bureau->single_bureau($bureauId);
									
								?>
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $listBureau->name; ?>" readonly>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="school">School</label>
							
							<div class="col-md-8">
								
								<?php
									$listSchool=$list->school_id;
									$school = new School();
									$listSchool= $school->single_school($listSchool);
									
								?>
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $listSchool->name; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="mobile">Mobile</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->mobile; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="telephone">Telephone</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="officer_id" name="officer_id" type="text" value="<?php echo $list->telephone; ?>" readonly>
								
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
</div>
</form>
</div>

