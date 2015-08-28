<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo $_SESSION['ACCOUNT_FNAME']. " " .$_SESSION['ACCOUNT_LNAME']  ; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>/consultant/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></p></div>
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT; ?>consultant/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</a></p></div>
			</div>
		</div>  
		
		<div class="panel-body" >
		<div class="wells">
				<h3 align="left">List of Projects</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Project #</th>
				  		<th>Project Title</th>

				  		<th>Details</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
						//$account_username = $_SESSION['ACCOUNT_USERNAME'];
						//$account_password = $_SESSION['ACCOUNT_PASSWORD'];
						//$account_type = $_SESSION['ACCOUNT_TYPE'];
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
								$project = new Project();
								$projectList = $project->listOfprojects();
								foreach ($projectList as $list) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->project_id. '"/>';
								echo '<td width="55%" >'. $list->project_name.'</td>';
								
								echo '<td><a href = "index.php?view=view&projectId='.$list->project_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
								}

							//} 
						//} 
						
						
				  	  	
				  	
				  	?>
					
					


				  </tbody>
				</table>
				
		<div class="form-group">
			<div class="col-md-8">
				<label class="col-md-4 control-label" for="address">New Project:</label>
				<div class="col-md-4" >
					<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/project/index.php?view=add"> Add </a></li>
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
					}elseif($_SESSION['ACCOUNT_TYPE']=='Officer') {
						echo '
						<div class="btn-group">
						  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
						</div>';
					}

				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->