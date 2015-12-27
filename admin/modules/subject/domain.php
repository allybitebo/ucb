<div>
	<ul>
		<?php 
			$domain = new Domain();
			$domainList = $domain->listOfDomains();
			foreach ($domainList as $list) {
				echo '<li>';
				echo '<a href = "index.php?view=listSubDomain&sid='. $list->domain_id. '&domain_name='. $list->name. '" class="button green"><strong class="title">' . $list->name .'</a></strong>';
				echo '</li>';
			}
		?>
	</ul>
</div>