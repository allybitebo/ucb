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
						<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home"><strong>Biography</strong></a></li>
  <li><a data-toggle="tab" href="#competence"><strong>Competence</strong></a></li>
  <li><a data-toggle="tab" href="#projects"><strong>Projects</strong></a></li>
  <li><a data-toggle="tab" href="#publication"><strong>Publication</strong></a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <br>
    <p> <?php echo $_GET['consultant_name']?> is a blah blah .....(need to load info from somewhere)
		
		</p>
  </div>
  <div id="competence" class="tab-pane fade">
  <br>  
    <p><?php foreach ($competenceList as $comlist){
								echo '<li>';
								echo $comlist->name;
								echo '</li>';
							}?>
							</p>
  </div>
  <div id="projects" class="tab-pane fade">
  <br> 
  <p><?php foreach ($projectList as $proList){
								echo '<li>';
								echo $proList->project_name; 
								echo '</li>';
							}
							?>
							</p>
  </div>
  <div id="publication" class="tab-pane fade">
  <br>
    <p>No Publication</p>
  </div>
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