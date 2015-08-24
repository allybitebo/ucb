<div>
	<ul>
		<?php
		$department_id = $_GET['did'];
			/*$mydb->setQuery("SELECT  `department_id`, `department_name` 
			FROM  `departments`
			WHERE school_id = $school_id");
			$schoolList = $mydb->loadResultList();*/
			$consultant = new Consultant();
			$consultantList = $consultant->listOfDepartmentConsultant($department_id);
			foreach ($consultantList as $list) {
				echo '<li>';
				echo '<a href = "index.php?page=3&con_id='. $list->consultant_id. '&consultant_name='. $list->displayname . '" class="button green"><strong class="title">' . $list->displayname .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>