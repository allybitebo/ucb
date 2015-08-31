
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="row">
				<div class="col-xs-3"><p align="left"><a href="<?php echo WEB_ROOT;?>admin/index.php?page=2" class="btn btn-info btn-xsm"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a><p>
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
	<h3 align="left">List of Bureaus</h3>
	<form action="controller.php?action=list" Method="POST">  					
		<table id="example" class="table table-striped" cellspacing="0">
			
			<thead>
				<tr>
					<th>No.</th>
					<th width="5%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Select All</th>
					<th>Bureau name</th>
					<th>Short Name</th>
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
					//if($account_type=='dministrator') {
						$bureau = new Bureau();
						$bureauList = $bureau->listOfBureau();
						foreach ($bureauList as $list) {
							echo '<tr>';
							echo '<td width="5%" align="center"></td>';
							echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->bureau_id. '"/>';
							echo '<td width="40%" >'. $list->name.'</td>';
							echo '<td width="20%" >'. $list->shortname.'</td>';
							echo '<td width="10%" ><a href = "index.php?view=edit&id='.$list->bureau_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
							echo '<td><a href = "index.php?view=view&bureauId='.$list->bureau_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
							echo '</tr>';
						}
				         //} 
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