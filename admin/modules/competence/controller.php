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


	function doDelsy(){
		$competenceId=$_GET['competenceId'];
		
		  @$id=$_POST['selector'];
		  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$sy = new Schoolyr();
				$sy->delete($id[$i]);
			}
					message("Schoolyear is successfully deleted!","info");
					redirect('index.php?view=view&competenceId='.$competenceId.'');
		}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&competenceId='.$competenceId.'');
		}
	}
function doEnroll(){

	if (isset($_POST['savestep1'])){

 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				 $idno  =  $_POST['idno'];
				 $Status = $_POST['Status'];
				 $course = $_POST['course'];
				 $ay 	 = $_POST['ay'];
				 $Semester = $_POST['Semester'];

				$sy = new Schoolyr();
				$sy->AY = $ay;
				$sy->STATUS = $Status;
				$sy->SEMESTER = $Semester;
				$sy->COURSE_ID = $course;
				$sy->IDNO = $idno;
				$sy->DATE_RESERVED = $created;
				
				 $istrue = $sy->create();
			 if ($istrue == 1){
			 	
			 	message("competences successfully enrolled! Assign now the competence's subjects.","success");
			 	// check_message();
			 	redirect('index.php?view=view&competenceId='.$idno.'');
				
			 }



			}
}	
function doInsert(){
		if (isset($_POST['submit'])){
$COMPETENCENAME  = $_POST['name'];
$DESCRIPTION = $_POST['description'];
$SECTOR = $_POST['psector'];
$DOMAIN = $_POST['domain'];
//$SUBJECT   = $_POST['subject'];

$competence = new Competence();
$competence->name =	$COMPETENCENAME ;
$competence->description =	$DESCRIPTION;
$competence->sector_id	= $SECTOR;
$competence->domain_id=	$DOMAIN;
$competence->subject_id= $DOMAIN;
}

if ($COMPETENCENAME  == "") {
	message('Competence Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($DESCRIPTION == "") {
	message('Description is required!', "error");
	redirect ('index.php?view=add');
}elseif ($SECTOR == "") {
	message('Sector Id is required!', "error");
	redirect ('index.php?view=add');
}elseif ($DOMAIN == "") {
	message('Domain Name is required!', "error");
	redirect ('index.php?view=add');
}/*elseif ($SUBJECT == "") {
	message('Subject Id is required!', "error");
	redirect ('index.php?view=add');
	
}*/else{

    $competence->create(); 
	message('New competence addedd successfully!', "success");
	redirect('index.php?view=list');	
}

}

function doEdit(){
	if (isset($_POST['submit'])){
		$COMPETENCEID=$_POST['competenceId'];
		$COMPETENCENAME=$_POST['competencename'];
		$DESCRIPTION=$_POST['description'];
		$SECTOR=$_POST['sector'];
		$DOMAIN=$_POST['domain'];
		//$SUBJECT=$_POST['subject'];
		
	    
		
		
$competence = new Competence();
$competence->name =	$COMPETENCENAME ;
$competence->description =	$DESCRIPTION;
$competence->sector_id	= $SECTOR;
$competence->domain_id=	$DOMAIN;

$competence->subject_id= $DOMAIN;
		
	}
	
	if ($COMPETENCEID == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=edit&id='.$COMPETENCEID);
		}elseif ($COMPETENCENAME== "") {
		message('School Name is required!', "error");
		redirect ('index.php?view=edit&id='.$COMPETENCEID);
		}elseif ($DESCRIPTION== "") {
		message('Short Name is required!', "error");
		redirect ('index.php?view=edit&id='.$COMPETENCEID);
		}elseif ($SECTOR == "") {
		message('Address is required!', "error");
		redirect ('index.php?view=edit&id='.$COMPETENCEID);
		}elseif ($DOMAIN == "") {
		message('Extension is required!', "error");
		redirect ('index.php?view=edit&id='.$COMPETENCEID);
	
		
		}else{
		$competence->update($_GET['id']);  
		message('School information updated successfully!', "info");
		redirect('index.php');		
	}
}

/*
$project = new Project();
//$competence->S_ID				= "null";
$project->project_id 				=	$project_id;
$project->project_name				=	$project_name;
$project->client_name				=	$cName;
$project->client_contact				= $cContact;
$project->start_date				=	$sday;
$project->end_date				=	$eday;
$project->days			=	$pDays;
$project->total_amount			= $total_amount ;
$project->project_status				=$$status;
$project->project_sector_id		=	$pSector;
$project->project_type_id			=	$pType;
$project->project_bureau_id		=	;
$project->project_school_id			=	;
$project->updated_at 			=	<?php echo NOW(); >?

//course infor
/*$course	= $_POST['course'];
$semester = $_POST['semester'];
$ay		= $_POST['AY'];
$sy = new Schoolyr();
$sy->AY 		= $ay;
$sy->SEMESTER 	= $semester;
$sy->COURSE_ID	= $course;
$sy->IDNO 		= $IDNO;*/
/*if ($istrue) {
	output_message('course info successfully added!');
	redirect ('newcompetence.php');
}


//secondary Details
$FATHER 			= $_POST['father'];
$FATHER_OCCU 		= $_POST['fOccu'];
$MOTHER 			= $_POST['mother'];
$MOTHER_OCCU 		= $_POST['mOccu'];
$BOARDING 			= $_POST['boarding'];
$WITH_FAMILY 		= $_POST['withfamily'];
$GUARDIAN 			=  $_POST['guardian'];
$GUARDIAN_ADDRESS 	=  $_POST['guardianAdd'];
$OTHER_PERSON_SUPPORT = $_POST['otherperson'];
$ADDRESS 			=  $_POST['otherAddress'];

$studdetails = new competence_details();
$studdetails->FATHER				=	$FATHER;
$studdetails->FATHER_OCCU			=	$FATHER_OCCU;
$studdetails->MOTHER				=	$MOTHER;
$studdetails->MOTHER_OCCU			=	$MOTHER_OCCU;
$studdetails->BOARDING			    =	$BOARDING;
$studdetails->WITH_FAMILY			=	$WITH_FAMILY;
$studdetails->GUARDIAN			    =	$GUARDIAN;
$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
$studdetails->OTHER_PERSON_SUPPORT	=	$OTHER_PERSON_SUPPORT;
$studdetails->ADDRESS				=	$ADDRESS;
$studdetails->IDNO 				    =	$IDNO;

//  
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newcompetence.php');
}

*/
/*

//requirements
$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

$requirements = new Requirements();

$requirements->NSO				 		= $nso;
$requirements->BAPTISMAL		   		= $bapt;
$requirements->ENTRANCE_TEST_RESULT		= $entrance;
$requirements->MARRIAGE_CONTRACT        = $mir_contract;
$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
$requirements->IDNO 			   		= $IDNO;
//$istrue = $requirements->create(); 
/*if ($istrue) {
	output_message('competence requirements successfully added!');
	redirect ('newcompetence.php');
} 


if ($IDNO == "") {
	message('ID Number is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
	
}else{

	$competence->update($_GET['id']); 
	//$sy->update($_GET['id']);  
	$studdetails->update($_GET['id']);
	$requirements->update($_GET['id']); 
	message('competence infomation updated successfully!', "info");
	redirect('index.php');	


}
}

		
}

function doDelete(){
 @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$competence = new competence();
		$competence->delete($id[$i]);
		$details = new competence_details();
		$details->delete($id[$i]);
		$sy = new Schoolyr();
		$sy->delete($id[$i]);
		$req = new Requirements();
		$req->delete($id[$i]);

	}
		message("competence has successfully deleted!","info");
		redirect('index.php');
	}
	function doAssignsubj(){
		global $mydb;
		$competenceId = $_GET['competenceId'];
		$SY = $_GET['SY'];
		$competenceId=$_GET['competenceId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];


		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);

		if (!$subjectId==''){
		echo $selector , $selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$competenceId}'");
		$res = $mydb->loadSingleResult();

		//echo $res->SYID . '<br/>';
		for ($i=0;$i<$subjId; $i++){
			$mydb->setQuery("SELECT  * 
							FROM  `subject` s ,`course` c 
							WHERE  s.`COURSE_ID`=c.`COURSE_ID` AND SUBJ_ID='{$subjectId[$i]}'");
			$cur = $mydb->loadResultlist();

			foreach ($cur as  $result) {
		  
		 		$grades = New Grades();
				$grades->SUBJ_ID			=	$result->SUBJ_ID;
				$grades->IDNO				=	$competenceId;
				$grades->INST_ID			=	'NONE';
				$grades->SYID				=	$res->SYID;
				$grades->PRE				=	'NONE';
				$grades->MID				=	'NONE';
				$grades->FIN				=	'NONE';
				$grades->FIN_AVE			=	'NONE';
				$grades->DAY				=	'NONE';
				$grades->G_TIME				=	'NONE';
				$grades->REMARKS			=	'NONE';
				$grades->create();
			}
		message("competence's subjects already Added!","info");
			redirect('index.php?view=subject&competenceId='.$competenceId.'&cid='.$cid.'&sy='.$sy.'');
		 
		}
		}else{
			message("Select first the subject(s) you want to Add!","error");
			redirect('index.php?view=subject&competenceId='.$competenceId.'&cid='.$cid.'&sy='.$sy.'');
		}

	}
	function doDelsubj(){
		$competenceId=$_GET['competenceId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
	  @$id=$_POST['selector'];
	  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$studSubjects = NEW Grades();
				$studSubjects->delete($id[$i]);
			}
					message("competence subject(s) already Deleted!","info");
					redirect('index.php?view=subject&competenceId='.$competenceId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
			message("Select your subject(s) first, if you want to delete it!","error");
			redirect('index.php?view=subject&competenceId='.$competenceId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}*/
?>
