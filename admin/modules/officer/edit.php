<div class="container">	<div class="panel panel-primary">		<div class="panel-heading">			<div class="row">				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>				</div>								<div class="col-xs-9">					<div class="col-xs-8">						<p ><strong><h5 align="right">						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>					</div>					<div class="col-xs-4">						<div class="col-xs-6">							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/officer/index.php" class="btn btn-info btn-xsm">								<span class="glyphicon glyphicon-step-backward"></span>Back								</a								</p>							</div>							<div class="col-xs-6">								<p align="right"><a href="<?php echo WEB_ROOT;?>admin/logout.php"								class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p>							</div>						</div>					</div>				</div>		</div> 		<?php 						$officer = new Officer();			$cur = $officer->single_officer($_GET['id']);		?>		<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->officer_id; ?>" method="POST">						<fieldset>				<legend>Edit officer</legend>												<div class="form-group" id="officer_id">					<div class="col-md-8">						<label class="col-md-4 control-label" for="officer_id">Officer Number *</label>												<div class="col-md-8">							<input class="form-control input-sm" id="officer_id" name="officer_id" placeholder="officer Number" type="text" value="<?php echo $cur->officer_id; ?>" readonly>						</div>											</div>									</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="firstname">First Name: </label>														<div class="col-md-8">								<input class="form-control input-sm" id="firstname" name="firstname" type="text" placeholder="First Name" value="<?php echo $cur->firstname; ?>">							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="middlename">Middle Name </label>														<div class="col-md-8">								<input class="form-control input-sm" id="middlename" name="middlename" placeholder="Middle Name" type="text" value="<?php echo $cur->middlename; ?>">							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="lastname">Last Name </label>														<div class="col-md-8">								<input class="form-control input-sm" id="lastname" name="lastname" placeholder="Last Name" type="text" value="<?php echo $cur->lastname; ?>">							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="displayname">Dispaly Name </label>														<div class="col-md-8">								<input class="form-control input-sm" id="displayname" name="displayname" placeholder="Display Name" type="text" value="<?php echo $cur->displayname; ?>">							</div>						</div>											</div>				</div>				<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="gender">Gender </label>														<div class="col-md-8">								<select class="form-control input-sm" name="gender" id="gender">									<option value=""><?php $cur->gender;?></option>									<option value="male">Male</option>									<option value="female">Female</option>									</select>							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="telephone">Telephone </label>														<div class="col-md-8">								<input class="form-control input-sm" id="telephone" name="telephone" placeholder="Telephone" type="text" value="<?php echo $cur->telephone; ?>">							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="qualify">Qualification </label>														<div class="col-md-8">								<input class="form-control input-sm" id="qualify" name="qualify" placeholder="Qualification" type="text" value="<?php echo $cur->qualification; ?>">							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="title">Title</label>														<div class="col-md-8">								<input class="form-control input-sm" id="title" name="title" placeholder="Title" type="text" value="<?php echo $cur->title; ?>">							</div>						</div>											</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label" for="email">Email</label>							<div class="col-md-8">								<input class="form-control input-sm" id="email" name="email" placeholder="Email" type="text" value="<?php echo $cur->email; ?>">							</div>						</div>						</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label " for="mobile">Mobile</label>							<div class="col-md-8">								<input class="form-control input-sm" id="mobile" name="mobile" placeholder="Mobile" type="text" value="<?php echo $cur->mobile;?>">							</div>						</div>					</div>				</div>								<div class="form-group">					<div class="rows">						<div class="col-md-8">							<label class="col-md-4 control-label " for="website">Website</label>							<div class="col-md-8">								<input class="form-control input-sm" id="website" name="website" placeholder="Website" type="text" value="<?php echo $cur->website;?>">							</div>						</div>					</div>				</div>								<div class="col-md-8">					<label class="col-md-4 control-label" for="bureau">Bureau </label>										<div class="col-md-8">						<select class="form-control input-sm" name="bureau" id="bureau">							<?php								$bureau = new Bureau();								$cur = $bureau->listOfBureau();									foreach ($cur as $bureau) {									echo '<option value="'. $bureau->bureau_id.'">'. $bureau->name .'</option>';								}															?>													</select>						</div>				</div>				<br /><br />								<div class="col-md-8">					<label class="col-md-4 control-label" for="school">School </label>										<div class="col-md-8">						<select class="form-control input-sm" name="school" id="school">							<?php								$school = new School();								$cur = $school->listOfSchools();									foreach ($cur as $school) {									echo '<option value="'. $school->school_id.'">'. $school->name .'</option>';								}															?>													</select>						</div>				</div>				<br /><br />										<?php					if($_SESSION['ACCOUNT_TYPE']=='administrator'){						echo '						<div class="col-md-6" align="right">						<button class="btn btn-primary" name="submit" type="submit" >Save</button>												</div>';					} ?>								</div>		</div>		</form>	</div>