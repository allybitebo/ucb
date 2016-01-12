<div>
	<ul>
		<?php 
			$bureau = new Bureau();
			$bureauList = $bureau->listOfBureau();
			foreach ($bureauList as $list) {
				echo '<li>';
				echo '<a href = "index.php?view=listSchProj&&sid=null&bid='. $list->bureau_id. '&bureau_name='. $list->name. '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>