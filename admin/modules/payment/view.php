<?php
	$payment = New Payment();
	$paymentInfos = $payment->listOfProjectPayment($_GET['projectId']);
	
	$project = new Project();
	$listname = $project->single_project($_GET['projectId']);
	
	$payment = new Payment();
	$list = $payment->single_payment($_GET['projectId']);
	
	$schl_id = $listname->project_bureau_id;
    $bur_id = $listname->project_school_id;
	
	if(isset($schl_id) and $schl_id!="null"){
		$myID = $schl_id;
		} else if(isset($bur_id) and $bur_id!="null"){
	$myID = $bur_id;}
	//echo $myID;
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
							
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/modules/payment/index.php?" class="btn btn-info btn-xsm">
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
				
				<form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $list->payment_id; ?>" method="POST">
					
					<fieldset>
						<legend>Payment Information</legend>
						
						<div class="form-group">
							<div class="rows">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="project_name">Project Name: </label>
									<div class="col-md-8">
										<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listname->project_name; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="rows">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="clientName">Client Name</label>
									<?php 
										$clientId = $list->payment_client_id;
										$client = new Client();
										$listclientInfo = $client->single_client($clientId);
									?>
									<div class="col-md-8">
										<input class="form-control input-sm" id="client_id" name="client_id" type="text" value="<?php echo $listclientInfo->client_name; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="rows">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="cName">Description </label>
									
									<div class="col-md-8">
										<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $list->description; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						
						<fieldset>
						<legend>Payment Details</legend>
						<div class="form-group" id="project_id">
							<div class="col-md-8">
								<label class="col-md-4 control-label" for="project_id">Project Payments </label>
								<div class="col-md-8">
									<?php
										foreach ($paymentInfos as $installmentInfo) {
											echo '<li> Installment number '. $installmentInfo->installment_number . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$installmentInfo->amount;'</li>';
										}
									?>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="rows">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="payment_name">Paid: </label>
									<div class="col-md-8">
										<?php
											$paid=0;
											foreach ($paymentInfos as $installmentInfo) {
												$paid = $paid + $installmentInfo->amount;
											}
										?>
										<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $paid; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="rows">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="payment_name">Balance: </label>
									<div class="col-md-8">
										<?php
											$total=$listname->total_amount;
											$balance = $total - $paid;
										?>
										<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $balance; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="rows">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="payment_name">Total: </label>
									<div class="col-md-8">
										<input class="form-control input-sm" id="payment_id" name="payment_id" type="text" value="<?php echo $listname->total_amount;; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						</fieldset>
						<fieldset>
						<legend>Project Status</legend>
						<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="sday">Start Date</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listname->start_date; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="rows">
						
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="sday">End Date</label>
							
							<div class="col-md-8">
								<input class="form-control input-sm" id="project_id" name="project_id" type="text" value="<?php echo $listname->end_date; ?>" readonly>
								
							</div>
						</div>
					</div>
				</div>
						</fieldset>
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
				<!--	</div><!--End of well-->
				
			</div><!--End of container-->
		</div>
		
		