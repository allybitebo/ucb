<?php
	//require_once(LIB_PATH.DS.'database.php');
	
	$account_id = $_SESSION['ACCOUNT_ID'];	
	//echo "id ". $account_id;
	
	global $mydb;
	$mydb->setQuery("SELECT user_account_id FROM `consultants` WHERE `user_account_id` ='" . $account_id . "' LIMIT 1");
	$cur = $mydb->executeQuery();
	$row_count = $mydb->num_rows($cur);//get the number of count*/
	//echo "row ". $row_count;
	
	if($row_count == 1){
		//echo "Reg";
	?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading"><h5><strong>CONSULTANT CONTROL PANEL REGISTERED</strong></h5></div>    
			
			<div class="panel-body" >
				<li class="leaf"><a href="<?php echo WEB_ROOT; ?>consultant/modules/domain/index.php">Domain</a></li>
				<li class="leaf"><a href="<?php echo WEB_ROOT; ?>consultant/modules/consultant/index.php">Consultants</a></li>
				<li class="leaf"><a href="<?php echo WEB_ROOT; ?>consultant/modules/competence/index.php">Competence</a></li>
				<li class="leaf"><a href="<?php echo WEB_ROOT; ?>consultant/modules/sector/index.php">Project Sectors</a></li>
			</div>
		</div>                     
	</div> 
</div>
</div>
<?php
}
else {
	//echo "Not Reg";
?>
<div class="container">
	<div class="panel panel-primary">
	<div class="panel-heading"><h5><strong>CONSULTANT CONTROL PANEL</strong></h5></div>    
	
	<div class="panel-body" >
	<li class="leaf"><a href="<?php echo WEB_ROOT; ?>consultant/modules/consultant/index.php?view=add">Create Consultant Profile</a></li>
	
	</div>
	</div>                     
	</div> 
	</div><!--container-->;
	<?php
	}	
	
	?>
		