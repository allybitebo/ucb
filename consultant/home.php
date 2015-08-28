<?php
	//require_once(LIB_PATH.DS.'database.php');
	$account_id = $_SESSION['ACCOUNT_ID'];	
	//echo "id ". $account_id;
	
	global $mydb;
	$mydb->setQuery("SELECT consultant_id FROM `consultants` WHERE `consultant_user_account_id` ='" . $account_id . "' LIMIT 1");
	$cur = $mydb->executeQuery();		
	$row_count = $mydb->num_rows($cur);//get the number of count*/
	//echo "row ". $row_count;
	
	if($row_count == 1){
		//echo "Reg";

		$project = new Project();
		$projectnum = $project->ProjectsNumberByConsultant($_SESSION['CONSULTANT_ID']);
	?>
	
	
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo "Welcome " . $_SESSION['ACCOUNT_FNAME']; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>consultant/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
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
						<a href="<?php echo WEB_ROOT; ?>consultant/modules/project/index.php?view=ConsultantProject".>
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
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
								<div class="col-xs-9">
									<P><strong><h5>Cosultants</h5></strong></p>
								</div>
								<div class="col-xs-3 text-right">
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>consultant/modules/consultant/index.php".>
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
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
								<div class="col-xs-9">
									<P><strong><h5>Competence</h5></strong></p>
								</div>
								<div class="col-xs-3 text-right">
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>consultant/modules/consultant/index.php".>
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
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
								<div class="col-xs-9">
									<P><strong><h5>Edit your profile</h5></strong></p>
								</div>
								<div class="col-xs-3 text-right">
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>consultant/modules/consultant/index.php?view=edit".>
													<div class="panel-footer">
								<span class="pull-left">View Details</span>
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
<?php
}
else {
	//echo "Not Reg";
?>
<div class="container">
	<div class="panel panel-primary">
	<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo $_SESSION['ACCOUNT_FNAME']. " " .$_SESSION['ACCOUNT_LNAME']  ; ?></h5></strong></p></div>
				
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>

				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>consultant/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div>    
	
	<div class="panel-body" >
	
	<div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-9">
									<P><strong><h5>Edit Your Profile</h5></strong></p>
								</div>
								<div class="col-xs-3 text-right">
								</div>
							</div>
						</div>
						<a href="<?php echo WEB_ROOT; ?>consultant/modules/consultant/index.php?view=add".>
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
	</div>
	</div>                     
	</div> 
	</div><!--container-->;
	<?php
	}	
	
	?>