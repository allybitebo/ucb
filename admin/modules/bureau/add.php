
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>Home</a><p>
				</div>
				
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/bureau/index.php" class="btn btn-info btn-xsm">
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
<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <form class="form-horizontal well span4" action="#.php" method="POST">

          <fieldset>
            <legend>New Bureau</legend>
                              

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="bureauname">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="bureauname" name="bureauname" placeholder="Bureau Name" type="text" value="">
                      </div>
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="shortname">Short Name:</label>
                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="shortname" name="shortname" placeholder="Short Name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="address">Current Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="address" name="address" placeholder="Current Address" type="text" value="">
                      </div>
                    </div>
                  </div>
 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="telephone">Telephone:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="telephone" name="telephone" placeholder= "telephone" type="text" value="">
                      </div>
                    </div>
                  </div>


            <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="email">Email :</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="email" name="email" placeholder="Email " type="email" value="">
                      </div>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="website">Website :</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="website" name="website" placeholder="Website " type="text" value="">
                      </div>
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="extension">Extension:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="extension" name="extension" placeholder="extension" type="text" value="">
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
        </div><!--End of container-->
