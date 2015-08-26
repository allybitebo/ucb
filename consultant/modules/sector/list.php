
		<div class="wells">
				<h3 align="left"><legend>List of Sectors</legend></h3>
			    <form action="controller.php?action=list" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Sector #</th>
				  		<th>Sector name</th>
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
						if($account_username!= Null ) {
								$sector = new Sector();
								$sectorList = $sector->listOfSectors();
								foreach ($sectorList as $list) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->sector_id. '"/>';
								echo '<td width="60%" >'. $list->name.'</td>';
								 echo '<td width="10%" ><a href = "index.php?view=edit&id='.$list->sector_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
								echo '<td><a href = "index.php?view=view&sectorId='.$list->sector_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
								}

							//} 
						} else {
				
								$sector = new sector();
								$sectorList = $sector->listOfsectors();
								foreach ($sectorList as $list) {
								echo '<tr>';

								echo "nothing to display";
								echo '</tr>';
								}

							}
				  	?>


				  </tbody>
				 
				</table>
		
				<?php 
						if($_SESSION['ACCOUNT_TYPE']=='consultant'){
							echo '
							<div class="btn-group">
							<a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  Add New sector</a>
							</div>';
							}else{
							//redirect to home page
						}
					?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->