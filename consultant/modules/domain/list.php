
		<div class="wells">
				<h3 align="left"><legend>List of Domains</legend></h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Domain #</th>
				  		<th>Domain Name</th>
				  		<th>Description</th>
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
				       // echo 'account type =   '. $account_type;
						//echo 'password =   '. $account_password;
						if($account_username!= Null ) {
								$domain = new Domain();
								$domainList = $domain->listOfDomains();
								foreach ($domainList as $list) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->domain_id. '"/>';
								echo '<td width="25%" >'. $list->name.'</td>';
								echo '<td width="25%" >'. $list->description.'</td>';
								echo '<td width="15%" ><a href = "index.php?view=edit&id='.$list->domain_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
								echo '<td><a href = "index.php?view=view&domainId='.$list->domain_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
								}

							//} 
						} else {
							
								
								echo "wrong info";
								}

							
						
				  	  	
				  	
				  	?>


				  </tbody>
				 
				</table>
				
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="address">New Domain:</label>
				<div class="col-md-4" >
					<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/domain/index.php?view=add"> Add </a></li>
				</div>
			</div>
		</div>
				<?php 
					if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
						<div class="btn-group">
						  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
						   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
						</div>';
					}elseif($_SESSION['ACCOUNT_TYPE']=='consultant') {
						echo '
						<div class="btn-group">
						  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
						</div>';
					}

				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->