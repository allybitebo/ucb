<div>
	<ul>
		<?php
		$department_id = $_GET['did'];
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