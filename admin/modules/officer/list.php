
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>Home</a><p>
				</div>
				
				<div class="col-xs-9">
					<div class="col-xs-8">
						<p ><strong><h5 align="right">
						<?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME'];?></h5></strong></p>
					</div>
					<div class="col-xs-4">
						<div class="col-xs-6">
							<p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm">
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
		<div class="wells">
			<h3 align="left">List of Officer</h3>
			<form action="controller.php?action=list" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					
					<thead>
						<tr>
							<th>No.</th>
							<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Select All</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Edit </th>
							<th>Details</th>
						</tr>	
					</thead>
					<tbody>
						<?php
							$account_username = $_SESSION['ACCOUNT_USERNAME'];
							//	$account_password = $_SESSION['ACCOUNT_PASSWORD'];
							
							//if($account_password!= Null) {
							
							$officer = new Officer();
							$officerList = $officer->listOfOfficer();
							foreach ($officerList as $list) {
								//echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->officer_id. '"/>';
								echo '<td width="35%" >'. $list->firstname.'</td>';
								echo '<td width="25%" >'. $list->lastname.'</td>';
								echo '<td width="10%" ><a href = "index.php?view=edit&id='.$list->officer_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
								echo '<td><a href = "index.php?view=view&officerId='.$list->officer_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
								echo '</tr>';
							}
							
							//} 
							//}
							
							
						?>
						
					</tbody>
					
				</table>
				
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="address">New Officer:</label>
						<div class="col-md-4" >
							<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php?view=addinschool"> Add in School</a></li>
							<li class="leaf"><a href="<?php echo WEB_ROOT; ?>admin/modules/officer/index.php?view=addinbureau"> Add in Bureau</a></li>
						</div>
					</div>
				</div>
				
				<?php 
					if($_SESSION['ACCOUNT_TYPE']=='administrator'){
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
		</div>
	</div>
</div>
</div>