<div>
	<ul>
		<?php 
			$sector = new Sector();
			$sectorList = $sector->listOfSectors();
			foreach ($sectorList as $list) {
				echo '<li>';
				echo '<a href = "index.php?view=listDomain&sid='. $list->sector_id. '&sector_name='. $list->name. '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>