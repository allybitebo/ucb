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
		
		<div class="panel-body" >
			<div class="wells">
				<h3 align="left">List of Consultants</h3>
				<form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
						
						<thead>
							<tr>
								<th>No.</th>
								<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">consultant #</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Edit</th>
								<th>Details</th>
							</tr>	
						</thead>
						<tbody>
							<?php
								$account_username = $_SESSION['ACCOUNT_USERNAME'];
								//$account_password = $_SESSION['ACCOUNT_PASSWORD'];
								
								//if($account_password!= Null) {
								
								$consultant = new Consultant();
								$consultantList = $consultant->listOfProjectConsultant(3);
								foreach ($consultantList as $list) {
									//echo '<tr>';
									echo '<td width="5%" align="center"></td>';
									echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->cons_proj_consultant_id. '"/>';
									echo '<td width="30%" >'. $list->firstname.'</td>';
									echo '<td width="30%" >'. $list->lastname.'</td>';
									echo '<td width="10%" ><a href = "index.php?view=edit&id='.$list->cons_proj_consultant_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
									echo '<td><a href = "index.php?view=view&consultantId='.$list->cons_proj_consultant_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
									echo '</tr>';
								}
								//} 
							?>
							
						</tbody>
						
					</table>
				</form>
			</div><!--End of well-->
			
		</div><!--End of container-->
	</div>
</div>
