<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;
	case 'assign' :
	doAssignsubj();
	break;
	case 'delsubj' :
	doDelsubj();
	break;
	case 'enroll' :
	doEnroll();
	break;
	case 'delsy' :
		doDelsy();
	break;

	}
	
function doInsert(){
		if (isset($_POST['save'])){
$NAME = $_POST['subjectname'];
$DESCRIPTION = $_POST['description'];
$SECTOR = $_POST['sector'];
$DOMAIN = $_POST['domain'];

$subject = new subject();
$subject->name =$NAME;
$subject->description=$DESCRIPTION;
$subject->sector_id=$SECTOR;
$subject->domain_id=$DOMAIN ;

}
   if ($NAME== "") {
	message('Subject Name is required!', "error");
	redirect ('index.php?view=add');
	}elseif ($DESCRIPTION== "") {
	message('Description is required!', "error");
	redirect ('index.php?view=add');
	}elseif ($SECTOR == "") {
	message('Sector ID is required!', "error");
	redirect ('index.php?view=add');
	}elseif ($DOMAIN== "") {
	message('Domain ID is required!', "error");
	redirect ('index.php?view=add');

			}else{
	$subject->create(); 
	message('New subject addedd successfully!', "success");
	redirect('index.php?view=list');	
}
}
?>