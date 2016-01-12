<?php 
 function school(){
?>
  <div>
	<ul>
		<?php 
			$school = new School();
			$schoolList = $school->listOfSchools();
			foreach ($schoolList as $list) {
				echo '<li>';
				echo '<a href = "index.php?view=listProj&bid=null&&sid='. $list->school_id. '&school_name='. $list->name. '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>
<?php }
function bureau(){
?>
  <div>
	<ul>
		<?php 
			$bureau = new Bureau();
			$bureauList = $bureau->listOfBureau();
			foreach ($bureauList as $list) {
				echo '<li>';
				echo '<a href = "index.php?view=listProj&&sid=null&bid='. $list->bureau_id. '&bureau_name='. $list->name. '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>
<?php }
?>
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
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				
				<div class="panel panel-primary">
					<br />
					<div class="panel-heading"><h5><strong>Project in Schools</strong></h5></div>
					<?php school(); ?>
					
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6">
				
				<div class="panel panel-primary">
					<br />
					<div class="panel-heading"><h5><strong>Projects in Bureaus</strong></h5></div>
					<?php bureau();?>
					
				</div>
			</div>
			
		</div>
	</div>	
</div>
<!--/.container-->
