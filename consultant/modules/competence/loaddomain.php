<select class="form-control input-sm" name="domain" id="domain">
<?php 
	include('config.php');
	
	$psector = $_GET['psector'];
	
	$query = mysql_query("SELECT * FROM domains WHERE sector_id = {$psector}");
	while($row = mysql_fetch_array($query)) {
	echo "<option value='$row[domain_id]'>$row[domain_name]</option>";
	}?>
</select>
<?php
	/*$domain = new Domain();
	$cur = $domain->domain_sector($psector);	
	foreach ($cur as $domain) {
		echo "<option value='".$domain->domain_id."'>".$domain->domain_name."</option>";
		
			$domain = new Domain();
		$cur = $domain->domain_sector($psector);	
		foreach ($cur as $domain) {
			echo "<option value='".$domain->domain_id."'>".$domain->domain_name."</option>";
		}
	}*/
?>