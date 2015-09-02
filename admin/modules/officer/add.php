<?php
	$Id=$officerFrom="school";
	//$officerId=$officerFrom="bureau";
?>
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
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/officer/index.php?view=list" class="btn btn-info btn-xsm">
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
				<div class="panel-body">			
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										
										<P><strong><center><h5>Add in School</h5></center></strong></p>	
										
										<div class="col-xs-9 text-right">
											<div class="huge"><?php echo $projectnum; ?></div>
										</div>
									</div>
								</div>
								<a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php?view=addinschool">
								<div class="panel-footer">
									<span class="pull-left">Details</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										
										<P><strong><center><h5>Add in Bureau</h5></center></strong></p>
										
										<div class="col-xs-9 text-right">
											<div class="huge"><?php echo $bureaunum; ?></div>
										</div>
									</div>
								</div>
								<a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php?view=addinbureau">
								<div class="panel-footer">
								<span class="pull-left">Details</li></span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
							</a>
						</div>
					</div>					