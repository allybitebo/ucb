<?php 
	require_once ("../../../includes/initialize.php");
	$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
	
	switch ($action) {
		case 'add' :
		doInsert();
		break;
		
		case 'add' :
		doInsertS();
		break;
		
		case 'edit' :
		doEdit();
		break;
		
		case 'delete' :
		doDelete();
		break;
		case 'addClient' :
		doAddClient();
		break;
		case 'addConsultant' :
		doAddConsultant();
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
			$STARTDATE= $_POST['sday'];
			$ENDDATE  = $_POST['eday'];
			$DAYS  = $_POST['days'];
			$AMOUNT= $_POST['amount'];
			$STATUS= $_POST['status'];
			$PROJECTSECTOR  = $_POST['psector'];
			if($_SESSION['BUREAU_ID'] != NULL){
				
				$PROJECTBUREAU = $_SESSION['BUREAU_ID'];
				}else {
				$PROJECTSCHOOL =$_SESSION['SCHOOL_ID'];
			}
			$PROJECTTYPEID =$_POST['projecttypeid'];
			
			$project = new Project();
			$project->project_number =$PROJECTNUMBER;
			$project->project_name	=$PROJECTNAME;
			$project-> start_date=	$STARTDATE;
			$project->end_date		=$ENDDATE ;
			$project->days	=	$DAYS;
			$project->project_status=	$STATUS;
			$project->total_amount	= $AMOUNT;
			$project->project_sector_id= $PROJECTSECTOR;
			if($_SESSION['BUREAU_ID'] != NULL){
				
				$project->project_bureau_id= $PROJECTBUREAU;
				} else {
				$project->project_school_id= $PROJECTSCHOOL;
			}
			
			$project->project_type_id=$PROJECTTYPEID;
		}
		if($_SESSION['BUREAU_ID'] != NULL){
			
			if ($PROJECTNUMBER== "") {
				message('Project Number is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($PROJECTNAME == "") {
				message('Project Name is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($STARTDATE == "") {
				message('Start Date is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($ENDDATE == "") {
				message('End Date is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($DAYS == "") {
				message('Days is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($STATUS == "") {
				message('Status is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($AMOUNT == "") {
				message('Amount is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($PROJECTSECTOR== "") {
				message('Sector ID is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				}elseif ($PROJECTTYPEID== "") {
				message('Project Type ID is required!', "error");
				redirect ('index.php?view=add&from=bureau');
				} else{
				$project->create(); 
				message('New project addedd successfully!', "success");
				redirect('../../index.php?page=1');	
			}
			} else {
			if ($PROJECTNUMBER== "") {
				message('Project Number is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($PROJECTNAME == "") {
				message('Project Name is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($STARTDATE == "") {
				message('Start Date is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($ENDDATE == "") {
				message('End Date is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($DAYS == "") {
				message('Days is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($STATUS == "") {
				message('Status is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($AMOUNT == "") {
				message('Amount is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($PROJECTSECTOR== "") {
				message('Sector ID is required!', "error");
				redirect ('index.php?view=add&from=school');
				}elseif ($PROJECTTYPEID== "") {
				message('Project Type ID is required!', "error");
				redirect ('index.php?view=add&from=school');
				} else{
				$project->create(); 
				message('New project addedd successfully!', "success");
				redirect('../../index.php?page=1');	
			}
		}
	}
	
	function doAddClient(){
		if (isset($_POST['save'])){
			$PROJECTID = $_SESSION["project_id"];
			$CLIENTID = $_POST['pclient'];
			
			$client_project = new Client_Project();
			$client_project->clnt_proj_client_id = $CLIENTID;
			$client_project->clnt_proj_project_id = $PROJECTID;
		}
		if ($PROJECTID== "") {
			message('Project Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTID == "") {
			message('Client Name is required!', "error");
			redirect ('index.php?view=add');
			}else{
			$client_project->create(); 
			message('A client was addedd successfully!', "success");
			if($_SESSION['BUREAU_ID'] != NULL){
				
				redirect("index.php?view=view&projectId=$PROJECTID&from=bureau");
				} else {
				redirect("index.php?view=view&projectId=$PROJECTID&from=school");
			}
		}
	}
	
		function doAddConsultant(){
		if (isset($_POST['save'])){
			$PROJECTID = $_SESSION["project_id"];
			$CONSULTANTID = $_POST['pconsultant'];
			
			$client_project = new Consultant_Project();
			$client_project->cons_proj_consultant_id = $CONSULTANTID;
			$client_project->cons_proj_project_id = $PROJECTID;
		}
		if ($PROJECTID== "") {
			message('Project Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CONSULTANTID == "") {
			message('Consultant Name is required!', "error");
			redirect ('index.php?view=add');
			}else{
			$client_project->create(); 
			message('A Consultant was addedd successfully!', "success");
			if($_SESSION['BUREAU_ID'] != NULL){
				
				redirect("index.php?view=view&projectId=$PROJECTID&from=bureau");
				} else {
				redirect("index.php?view=view&projectId=$PROJECTID&from=school");
			}
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