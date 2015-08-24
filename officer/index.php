<?php
require_once("../includes/initialize.php");
$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Consultancy Officer Home";	
		$content='home.php';		
		break;
	case '2' :
        $title="Project Details";	
		$content='projectDetail.php';		
		break;
	case '3' :
        $title="Consultant Officer Profile";	
		$content='instructorsubj.php';		
		break;

	
	default :
	    $title="Consultancy Officer Home";	
		$content ='home.php';		
}

require_once 'theme/frontendTemplateOfficer.php';
?>
