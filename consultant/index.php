<?php
require_once("../includes/initialize.php");
$content='login.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Login";	
		$content='login.php';		
		break;
	case '2' :
        $title="home";	
		$content='home.php';		
		break;
	case '3' :
        $title="add";	
		$content='add.php';		
		break;
	case '4' :
        $title="Instructor Class";	
		$content='instclass.php';		
		break;
	case '5' :
        $title="Grade";	
		$content='grades.php';		
		break;
	
	default :
	    $title="login";	
		$content ='login.php';		
}


require_once 'theme/frontendTemplateConsultant.php';
?>