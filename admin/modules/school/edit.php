<?php 		$school = new School();	$cur = $school->single_school($_GET['id']);	?><form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->school_id; ?>" method="POST">		<fieldset>		<legend>Edit School</legend>						<div class="form-group" id="school_id">			<div class="col-md-8">				<label class="col-md-4 control-label" for="school_id">School Number *</label>								<div class="col-md-8">					<input class="form-control input-sm" id="school_id" name="school_id" placeholder="school Number" type="text" value="<?php echo $cur->school_id; ?>" readonly>				</div>							</div>					</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="school_name">School Name: *</label>										<div class="col-md-8">						<input class="form-control input-sm" id="schoolname" name="schoolname" type="text" placeholder="School Name" value="<?php echo $cur->name; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="shortname">Short Name </label>										<div class="col-md-8">						<input class="form-control input-sm" id="shortname" name="shortname" placeholder="Short Name" type="text" value="<?php echo $cur->shortname; ?>">					</div>				</div>							</div>		</div>			<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="address">Address </label>										<div class="col-md-8">						<input class="form-control input-sm" id="address" name="address" placeholder="Address" type="text" value="<?php echo $cur->address; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="telephone">Telephone </label>										<div class="col-md-8">						<input class="form-control input-sm" id="telephone" name="telephone" placeholder="School Telephone" type="text" value="<?php echo $cur->telephone; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="extension">Extension </label>										<div class="col-md-8">						<input class="form-control input-sm" id="extension" name="extension" placeholder="Extension" type="text" value="<?php echo $cur->extension; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="fax">Fax </label>										<div class="col-md-8">						<input class="form-control input-sm" id="fax" name="fax" placeholder="School Fax" type="text" value="<?php echo $cur->fax; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="directline">Directline </label>										<div class="col-md-8">						<input class="form-control input-sm" id="directline" name="directline" placeholder="School Directline" type="text" value="<?php echo $cur->directline; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="email">Email</label>					<div class="col-md-8">						<input class="form-control input-sm" id="email" name="email" placeholder="School Email" type="text" value="<?php echo $cur->email; ?>">					</div>				</div>				</div>		</div>		<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="website">Website</label>					<div class="col-md-8">						<input class="form-control input-sm" id="website" name="website" placeholder="School website" type="text" value="<?php echo $cur->website;?>">					</div>				</div>				</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label " for="facebook">Facebook</label>					<div class="col-md-8">						<input class="form-control input-sm" id="facebook" name="facebook" placeholder="facebook" type="text" value="<?php echo $cur->facebook;?>">					</div>				</div>			</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label " for="tweeter">Tweeter</label>					<div class="col-md-8">						<input class="form-control input-sm" id="tweeter" name="tweeter" placeholder="tweeter" type="text" value="<?php echo $cur->tweeter;?>">					</div>				</div>			</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label " for="gplus">gplus</label>					<div class="col-md-8">						<input class="form-control input-sm" id="gplus" name="gplus" placeholder="gplus" type="text" value="<?php echo $cur->gplus;?>">					</div>				</div>			</div>		</div>						<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label " for="youtube">Youtube</label>					<div class="col-md-8">						<input class="form-control input-sm" id="youtube" name="youtube" placeholder="youtube" type="text" value="<?php echo $cur->youtube;?>">					</div>				</div>			</div>		</div>						<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label " for="linkedin">Linkedin</label>					<div class="col-md-8">						<input class="form-control input-sm" id="linkedin" name="linkedin" placeholder="linkedin" type="text" value="<?php echo $cur->linkedin;?>">					</div>				</div>			</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label " for="skype">Skype</label>					<div class="col-md-8">						<input class="form-control input-sm" id="skype" name="skype" placeholder="Skype" type="text" value="<?php echo $cur->skype;?>">					</div>				</div>			</div>		</div>					<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="bureau">Bureau </label>										<div class="col-md-8">						<select class="form-control input-sm" name="bureau" id="bureau">							<?php								$bureau = new Bureau();								$cur = $bureau->listOfBureau();									foreach ($cur as $bureau) {									echo '<option value="'. $bureau->bureau_id.'">'. $bureau->name .'</option>';								}															?>													</select>						</div>				</div>			</div>		</div>				<?php			if($_SESSION['ACCOUNT_TYPE']=='administrator'){				echo '				<div class="col-md-6" align="right">				<button class="btn btn-primary" name="submit" type="submit" >Save</button>								</div>';			} ?>				</div></div></form><!--	</div><!--End of well--></div><!--End of container-->