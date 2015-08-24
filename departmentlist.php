<div>
	<ul>
		<?php
		$school_id = $_GET['sid'];
			/*$mydb->setQuery("SELECT  `department_id`, `department_name` 
			FROM  `departments`
			WHERE school_id = $school_id");
			$schoolList = $mydb->loadResultList();*/
			$department = new Department();
			$departmentList = $department->listOfColDepartment($school_id);
			foreach ($departmentList as $list) {
				echo '<li>';
				echo '<a href = "index.php?page=2&did='. $list->department_id. '&department_name='. $list->name . '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>