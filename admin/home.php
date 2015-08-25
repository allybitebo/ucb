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
		
		<div class="panel-body" >			
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Projects</h5></strong></p>	
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $projectnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/project/index.php?">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Bureaus</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge"><?php echo $total; ?></div>
								</div>
							</div>
							</div>
							<a href="<?php echo WEB_ROOT; ?>admin/modules/bureau/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</li></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						   </a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Consultants</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
									
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/consultant/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Departments</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>New Profile!</div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
	<div class="panel-body" >
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Domains</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
									<?php

									?>
                                    <div class="huge"><?php echo $projectnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/domain/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Subjects</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<?php
										
									?>
									<div class="huge"><?php echo $total; ?></div>
									
								</div>
							</div>
							</div>
							<a href="admin/modules/subject/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Installment</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
									
								</div>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5> Profile</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>New Profile!</div>
								</div>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>	
	<div class="panel-body" >
			<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Officers</h5></strong></p>
									
								</div>
                                <div class="col-xs-9 text-right">
									<?php
									
									?>
                                    <div class="huge"><?php echo $projectnum; ?></div>
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Payments</h5></strong></p>
								</div>
								<div class="col-xs-9 text-right">
									<?php

									?>
									<div class="huge"><?php echo $total; ?></div>
									
								</div>
							</div>
							</div>
							<a href="<?php echo WEB_ROOT; ?>admin/modules/payments/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Schools</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>	
								</div>
							</div>
						</div>
                        <a href="admin/modules/school/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
									<P><strong><h5>Sector</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>New Profile!</div>
								</div>
							</div>
						</div>
                        <a href="admin/modules/sector/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>                    

	</div>                     


