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
$PROJECTNUMBER = $_POST['projectnumber'];
$PROJECTNAME = $_POST['pname'];
$CLIENTNAME = $_POST['clientname'];
$CLIENTCONTACT = $_POST['clientcontact'];
$STARTDATE= $_POST['sday'];
$ENDDATE  = $_POST['eday'];
$DAYS  = $_POST['days'];
$AMOUNT= $_POST['amount'];
$STATUS= $_POST['status'];
$PROJECTSECTOR  = $_POST['psector'];
$PROJECTBUREAU = $_POST['pbureau'];
$PROJECTSCHOOL = $_POST['pschool'];
$PROJECTTYPEID =$_POST['projecttypeid'];

$project = new Project();
$project->project_number =$PROJECTNUMBER;
$project->project_name	=$PROJECTNAME;
$project->client_name=	$CLIENTNAME;
$project->client_contacts=$CLIENTCONTACT ;
$project-> start_date=	$STARTDATE;
$project->end_date		=$ENDDATE ;
$project->days	=	$DAYS;
$project->project_status=	$STATUS;
$project->total_amount	= $AMOUNT;
$project->project_sector_id= $PROJECTSECTOR;
$project->project_school_id= $PROJECTSCHOOL;
$project->project_bureau_id= $PROJECTBUREAU;
$project->project_type_id=$PROJECTTYPEID;
}
   if ($PROJECTNUMBER== "") {
			message('Project Number is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($PROJECTNAME == "") {
			message('Project Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTNAME == "") {
			message('Client Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTCONTACT == "") {
			message('Client Contact is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($STARTDATE == "") {
			message('Start Date is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($ENDDATE == "") {
			message('End Date is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($DAYS == "") {
			message('Days is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($STATUS == "") {
			message('Status is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($AMOUNT == "") {
			message('Amount is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($PROJECTSECTOR== "") {
			message('Sector ID is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($PROJECTSCHOOL == "") {
			message('School ID is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($PROJECTBUREAU== "") {
			message('Bureau ID is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($PROJECTTYPEID== "") {
			message('Project Type ID is required!', "error");
			redirect ('index.php?view=add');
			}else{
	$project->create(); 
	message('New project addedd successfully!', "success");
	redirect('index.php?view=list');	
}
}

	
	function doEdit(){
	if (isset($_POST['submit'])){
	    $PROJECTID=$_POST['projectid'];
		$PROJECTNUMBER=$_POST['projectnumber'];
		$NAME = $_POST['projectname'];
		$CLIENTNAME = $_POST['clientname'];
		$CLIENTCONTACTS = $_POST[''];
		$PROJECTTYPEID = $_POST['projecttype'];
		$STARTDATE= $_POST['startdate'];
		$ENDDATE= $_POST['enddate'];
		$DAYS= $_POST['days'];
		$AMOUNT= $_POST['amount'];
		$PROJECTSTATUS= $_POST['status'];
		$SECTOR  = $_POST['sector'];
		$BUREAU = $_POST['bureau'];
		$SCHOOL = $_POST['school'];

		
		$project = new Project();
		$project->project_id=$PROJECTID;
		$project->project_number=$PROJECTNUMBER;
		$project->project_name=$NAME;
		$project->client_contacts=$CLIENTCONTACTS;
		$project->project_type_id=$PROJECTTYPEID;
		$project->client_name=$CLIENTNAME;
		$project-> start_date=$STARTDATE;
		$project->end_date=$ENDDATE;
		$project->days=$DAYS;
		$project->total_amount=	$AMOUNT;
		$project->project_status=$PROJECTSTATUS;
		$project->project_bureau_id=$BUREAU;
		$project->project_school_id	= $SCHOOL;
		$project->project_sector_id=$SECTOR;
	}
	
	if ($PROJECTID == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($NAME== "") {
		message('Project Name is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($PROJECTNUMBER== "") {
		message('Project Number is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($CLIENTCONTACTS== "") {
		message('Client Contacts is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($PROJECTTYPEID== "") {
		message('Project type is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($CLIENTNAME == "") {
		message('Client is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($STARTDATE== "") {
		message('Start is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($ENDDATE== "") {
		message('End is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($AMOUNT == "") {
		message('Amount is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($DAYS == "") {
		message('Days is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($PROJECTSTATUS == "") {
		message('Project Status is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($BUREAU== "") {
		message('Bureau is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($SECTOR == "") {
		message('Sector is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		}elseif ($SCHOOL== "") {
		message('School is required!', "error");
		redirect ('index.php?view=edit&id='.$PROJECTID);
		
		}else{
		$project->update($_GET['id']);  
		message('Project information updated successfully!', "info");
		redirect('index.php');		
	}
}

?>