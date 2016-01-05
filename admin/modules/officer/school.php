<div>
	<ul>
		<?php 
			$school = new School();
			$schoolList = $school->listOfSchools();
			foreach ($schoolList as $list) {
				echo '<li>';
				echo '<a href = "index.php?view=bureauSchool&sid='. $list->school_id. '&school_name='. $list->name. '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>