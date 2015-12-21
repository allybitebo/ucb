<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
			<div class="col-xs-3"> <p><span class="glyphicon glyphicon-home"></span></p></div>
				<div class="col-xs-9">
				<div class="col-xs-8"><p ><strong><h5 align="right"><?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME']; ?></h5></strong></p></div>
				<div class="col-xs-4"><p align="right"><a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
			</div>
		</div>  
		<div class="panel-body" >			
			<div class="row">
                 <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <P><strong><h5>Consultants</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
								<?php
									$consultant = new Consultant();
									$consultantnum = $consultant->find_all_consultant();
									?>
                                    <div class="huge"><?php echo $consultantnum; ?></div>	
								</div>
							</div>
						</div>
                        <a href="<?php echo WEB_ROOT; ?>admin/modules/consultant/index.php?view=listOfConsultants">
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
                                <div class="col-xs-3">
                                    <P><strong><h5>Officers</h5></strong></p>
								</div>
                                <div class="col-xs-9 text-right">
									<?php
									$officer = new Officer();
									$officernum = $officer->find_all_officer();
									?>
                                    <div class="huge"><?php echo $officernum; ?></div>
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
			</div>
		</div>
			</div>
		</div>		
	</div>                    
</div>                     


