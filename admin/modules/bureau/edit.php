<?php 	$bureau = new Bureau();	$cur = $bureau->single_bureau($_GET['id']);	?><form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->bureau_id; ?>" method="POST">		<fieldset>		<legend>Edit bureau</legend>						<div class="form-group" id="bureau_id">			<div class="col-md-8">				<label class="col-md-4 control-label" for="bureau_id">Bureau Number *</label>								<div class="col-md-8">					<input class="form-control input-sm" id="bureau_id" name="bureau_id" placeholder="Bureau Number" type="text" value="<?php echo $cur->bureau_id; ?>" readonly>				</div>							</div>					</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="bureauname"> Name: </label>										<div class="col-md-8">						<input class="form-control input-sm" id="bureauname" name="bureauname" type="text" placeholder="Bureau Name" value="<?php echo $cur->name; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="shortname">Short Name: </label>										<div class="col-md-8">						<input class="form-control input-sm" id="shortname" name="shortname" type="text" placeholder="Short Name" value="<?php echo $cur->shortname; ?>">					</div>				</div>							</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="address">Address </label>										<div class="col-md-8">						<input class="form-control input-sm" id="address" name="address" placeholder="address" type="text" value="<?php echo $cur->address; ?>">					</div>				</div>							</div>		</div>					<div class="form-group">			<div class="row">			<div class="col-md-8">				<label class="col-md-4 control-label" for="telephone">Telephone </label>								<div class="col-md-8">					<input class="form-control input-sm" id="telephone" name="telephone" placeholder="Telephone" type="text" value="<?php echo $cur->telephone; ?>">				</div>							</div>					</div>		</div>					<div class="form-group">			<div class="row">			<div class="col-md-8">				<label class="col-md-4 control-label" for="extension">Extension </label>								<div class="col-md-8">					<input class="form-control input-sm" id="extension" name="extension" placeholder="Extension" type="text" value="<?php echo $cur->extension; ?>">				</div>							</div>					</div>		</div>				<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="email">Email </label>										<div class="col-md-8">						<input class="form-control input-sm" id="email" name="email" placeholder="Email" type="text" value="<?php echo $cur->email; ?>"></input>					</div>				</div>							</div>		</div>		<div class="form-group">			<div class="rows">				<div class="col-md-8">					<label class="col-md-4 control-label" for="website">Website</label>										<div class="col-md-8">						<input class="form-control input-sm" id="website" name="website" placeholder="Website" type="text" value="<?php echo $cur->website; ?>"></input>					</div>				</div>							</div>		</div>								<?php					if($_SESSION['ACCOUNT_TYPE']=='administrator'){						echo '						<div class="col-md-6" align="right">						<button class="btn btn-primary" name="submit" type="submit" >Save</button>												</div>';					} ?>								</div>		</div>			</form>	<!--	</div><!--End of well-->	</div><!--End of container-->