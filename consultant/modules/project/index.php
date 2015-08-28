<?php
require_once ("../../../includes/initialize.php");
//checkConsultant();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;
    case 'view' :
		$content    = 'view.php';		
		break;
	case 'ConsultantProject' :
		$content    = 'ConsultantProject.php';		
		break;
	case 'assign' :
		$content    = 'assignsubj.php';		
		break;
	case 'delsubj' :
		$content    = 'assignsubj.php';		
		break;
	case 'enroll' :
		$content    = 'enrollment.php';		
		break;
	case 'editenrollment' :
	$content    = 'editenrollment.php';		
	break;

	default :
		$content    = 'list.php';
				
}

require_once '../../theme/frontendTemplateConsultant.php';
?>


  
