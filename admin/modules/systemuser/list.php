
		<div class="wells">
				<h3 align="left">List of User</h3>
			    <form action="controller.php?action=list" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">user #</th>
						 <th>First Name</th>
                         <th>Last Name</th>
						 <th>Edit</th>
				  		<th>Details</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
						$account_username = $_SESSION['ACCOUNT_USERNAME'];
					//	$account_password = $_SESSION['ACCOUNT_PASSWORD'];
					
						//if($account_password!= Null) {
			
								$user = new User();
								$userList = $user->listOfUsers();
								foreach ($userList as $list) {
								//echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->user_account_id. '"/>';
								echo '<td width="30%" >'. $list->user_first_name.'</td>';
								echo '<td width="30%" >'. $list->user_last_name.'</td>';
								echo '<td width="10%" ><a href = "index.php?view=edit&id='.$list->user_account_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
								echo '<td><a href = "index.php?view=view&userId='.$list->user_account_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
								}

							//} 
						
						
				  	
				  	?>

				  </tbody>
				 
				</table>
				
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="address">New System User:</label>
				<div class="col-md-4" >
					<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/systemuser/index.php?view=add"> Add </a></li>
				</div>
			</div>
		</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->