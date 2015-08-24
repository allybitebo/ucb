
		<div class="wells">
				<h3 align="left">List of Payments</h3>
			    <form action="controller.php?action=list" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Payment #</th>
				  		<th>Project Amount</th>
						<th>Edit</th>
				  		<th>Details</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
						$account_username = $_SESSION['ACCOUNT_USERNAME'];
						//$account_password = $_SESSION['ACCOUNT_PASSWORD'];
						$account_type = $_SESSION['ACCOUNT_TYPE'];
						//echo 'username =   '. $account_username;echo " \n";
				        //echo 'account type =   '. $account_type;
						//echo 'password =   '. $account_password;
						//if($account_password!= Null ) {
							//$mydb->setQuery("SELECT `project_id` , `project_number` ,`project_name` FROM `projects`");
							//loadresult();
				  	
							//function loadresult(){
								//global $mydb;
								//$cur = $mydb->loadResultList();
								//foreach ($cur as $project) {
								$payment = new Payment();
								$paymentList = $payment->listOfPayment();
								foreach ($paymentList as $list) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="35%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->payment_id. '"/>';
								echo '<td width="35%" >'. $list->amount.'</td>';
								echo '<td width="15%" ><a href = "index.php?view=edit&id='.$list->payment_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
								echo '<td><a href = "index.php?view=view&paymentId='.$list->payment_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
								}

							//} 

				  	  	
				  	
				  	?>


				  </tbody>
				 
				</table>
				
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="address">New Payment:</label>
				<div class="col-md-4" >
					<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/payment/index.php?view=add"> Add </a></li>
				</div>
			</div>
		</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->