<?php 
	$consultant_id = $_GET['con_id'];
	//echo $consultant_id;
	
	$competence = new Competence();
	$competenceList = $competence->listOfConsultantCompetence($consultant_id);
	
	$project = new Project();
	$projectList = $project->ProjectsByConsultant($consultant_id);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="well panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12 col-sm-4 text-center">
							<img src="img/Hashim.jpg" alt="" class="center-block img-circle img-thumbnail img-responsive">
						</div>
						<!--/col--> 
						<div class="col-xs-12 col-sm-8">
							<h2><?php echo $_GET['consultant_name']?></h2>
							<p><strong>Lecture </strong></p>
							<p><strong>College of Engineering and Technology: </strong> </p>
							<p><strong>Dar es Salaam </strong></p>
							<p><strong>Telephone:</strong>  +255766989150 </p>
							<p><strong>Email:</strong>  inocentvicent@udsm.tz</p>
						</div>
						
						<!--/col-->
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#">Biography</a></li>
								<li><a href="#"><strong>Competence</strong></a></li>
								<li><a href="#"><strong>Projects</strong></a></li>
								<li><a href="#"><strong>Publication</strong></a></li> 
							</ul>
						</div>
						<!--/col-->
						
						<!--/col-->
					</div>
					<!--/row-->
				</div>
				<!--/panel-body-->
			</div>
			<!--/panel-->
		</div>
		<!--/col--> 
	</div>
	<!--/row--> 
</div>
<!--/container-->		