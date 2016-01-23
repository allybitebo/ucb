<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>consultant/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>
				</div>
				
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>consultant/index.php?page=2" class="btn btn-info btn-xsm">
								<span class="glyphicon glyphicon-step-backward"></span>Back
								</a
								</p>
							</div>
							<div class="col-xs-6">
								<p align="right"><a href="<?php echo WEB_ROOT;?>consultant/logout.php"
								class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p>
							</div>
						</div>
					</div>
				</div>
				</div>
			
		<div class="wells">
				<h3 align="left"><legend>List of Competence</legend></h3>
			    <form action="controller.php?action=list" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Competence #</th>
				  		<th>Competence Name</th>
						 <th>Edit </th>
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
						if($account_password!= Null ) {
							
								$competence = new Competence();
								$competenceList = $competence->listOfCompetence();
								foreach ($competenceList as $list) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->competence_id. '"/>';
								echo '<td width="55%" >'. $list->name.'</td>';
								echo '<td width="15%" ><a href = "index.php?view=edit&id='.$list->competence_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
								echo '<td><a href = "index.php?view=view&competenceId='.$list->competence_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
								}

							//} 
						} else {
			
								$competence = new Competence();
								//$competenceList = $competence->listOfCompetence($competence_id);
								foreach ($competenceList as $list) {
								echo '<tr>';

								
								echo '</tr>';
								}

							}
				  	?>
					
				  </tbody>
				</table>
				
				<?php 
					if($_SESSION['ACCOUNT_TYPE']=='administrator'){
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
</div>
</div><!--End of container-->
