<?php 
	$consultant_id = $_GET['con_id'];
	//echo $consultant_id;
	
	$competence = new Competence();
	$competenceList = $competence->listOfConsultantCompetence($consultant_id);
	
	$project = new Project();
	$projectList = $project->ProjectsByConsultant($consultant_id);
	
	$consultant = new Consultant();
	$consultantList = $consultant->single_consultant($consultant_id);
	
	
	
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
					
					to upload foto ????
					<!--/col--> 
					<div class="col-xs-12 col-sm-8">
						<h2><?php echo $_GET['consultant_name']?></h2>
						<p><strong>Qualification: </strong><?php echo $consultantList->qualification;?></p>
						<p><strong>Title:  </strong><?php echo $consultantList->title;?> </p>
						<p><strong>Gender:  </strong><?php echo $consultantList->gender;?></p>
						<p><strong>Email:  </strong><?php echo $consultantList->email;?></p>
						<p><strong>Telephone:  </strong><?php echo $consultantList->telephone;?></p>
						<p><strong>Mobile:  </strong><?php echo $consultantList->mobile;?></p>
					</div>
					
					<!--/col-->					
					<ul class="nav nav-tabs">
						<br>
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