<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>officer/index.php?page=1" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>
				</div>
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>officer/index.php?page=1" class="btn btn-info btn-xsm">
								<span class="glyphicon glyphicon-step-backward"></span>Back
								</a
							</p>
							</div>
							<div class="col-xs-6">
								<p align="right"><a href="<?php echo WEB_ROOT;?>officer/logout.php"
								class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p>
							</div>
						</div>
					</div>
				</div>
				</div>  
				
				<!--<div class="panel-body" >-->
				<div class="wells">
					<h3 align="left">List of Payments</h3>
					<?php
						$account_username = $_SESSION['ACCOUNT_USERNAME'];
						//$account_password = $_SESSION['ACCOUNT_PASSWORD'];
						
						//if($account_password!= Null) {
						$project = new Project();
						$projectList = $project->listOfprojectsBureau($_SESSION['BUREAU_ID']);
						
						$payment = new Payment();
						foreach ($projectList as $pList) {
							
							echo '<h5 align="left">List of Payment Installments for <Strong>'. $pList->project_name.'</strong></h5>';
							
							$installment = $payment->listOfProjectPayment($pList->project_id);
							foreach ($installment as $ilist) {
							?>
							
							<form action="controller.php?action=list" Method="POST">  					
								<table id="example" class="table table-striped" cellspacing="0">
									
									<thead>
										<tr>
											<th>No.</th>
											<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Select All</th>
											<th>Project Amount</th>
											<th>Details</th>
										</tr>	
									</thead>
									<tbody>
										<?php
											echo '<tr>';
											echo '<td width="5%" align="center"></td>';
											echo '<td width="35%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$ilist->payment_id. '"/>';
											echo '<td width="35%" >'. $ilist->amount.'</td>';
											echo '<td><a href = "index.php?view=view&paymentId='.$ilist->payment_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
											echo '</tr>';
										}
										//} 
									}
								?>
								
							</tbody>
							
						</table>
					</form>
				</div><!--End of well-->
				
				</div><!--End of container-->
				</div>
			</div>
				