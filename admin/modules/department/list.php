
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p ><strong><h5 align="left"><?php echo  $_SESSION['ACCOUNT_FNAME'] . " " . $_SESSION['ACCOUNT_LNAME']; ?></h5></strong></p></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-3"><p align="right"><a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-log-out"></span>Log out</a></p></div>
			</div>
		</div> 
	<h3 align="left">List of Departments</h3>
	<form action="controller.php?action=list" Method="POST">  					
		<table id="example" class="table table-striped" cellspacing="0">
			
			<thead>
				<tr>
					<th>No.</th>
					<th width="15%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Select All</th>
					<th>department name</th>
					<th>Short Name</th>
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
					$department = new Department();
					$departmentList = $department->listOfdepartment();
					foreach ($departmentList as $list) {
						echo '<tr>';
						echo '<td width="5%" align="center"></td>';
						echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->department_id. '"/>';
						echo '<td width="30%" >'. $list->name.'</td>';
						echo '<td width="25%" >'. $list->shortname.'</td>';
						echo '<td width="15%" ><a href = "index.php?view=edit&id='.$list->department_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
						echo '<td><a href = "index.php?view=view&departmentId='.$list->department_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
						echo '</tr>';
					}
					
					//} 
					
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
				}elseif($_SESSION['ACCOUNT_TYPE']=='Officer') {
				echo '
				<div class="btn-group">
				<a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				</div>';
			}
			
		?>
		<br />
		<br />
		
	</form>
</div><!--End of well-->

</div><!--End of container-->