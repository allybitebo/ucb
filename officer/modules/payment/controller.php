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

/*
	function doDelsy(){
		$paymentId=$_GET['paymentId'];
		
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
					redirect('index.php?view=view&paymentId='.$paymentId.'');
		}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&paymentId='.$paymentId.'');
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
			 	
			 	message("payments successfully enrolled! Assign now the payment's subjects.","success");
			 	// check_message();
			 	redirect('index.php?view=view&paymentId='.$idno.'');
				
			 }



			}
}	
*/
function doInsert(){
	
if (isset($_POST['save'])){
		
	//primary Details
$AMOUNT  = $_POST['amount'];
$DESCRIPTION = $_POST['description'];
$INSTALLMENT = $_POST['installment'];
$PROJECT = $_POST['project'];

$payment = new Payment();
//$payment->S_ID	= "null";
$payment->amount=	$AMOUNT;
$payment->description	=	$DESCRIPTION;
$payment->installment_number=	$INSTALLMENT;
$payment->project_id	=	$PROJECT;
}

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
	redirect ('newpayment.php');
}

*/  
//  
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newpayment.php');
}
*/
//$istrue = $requirements->create(); 
/*if ($istrue) {
	output_message('payment requirements successfully added!');
	redirect ('newpayment.php');
} 
*/

if ($AMOUNT == "") {
	message('Amount is required!', "error");
	redirect ('index.php?view=add');
}elseif ($DESCRIPTION == "") {
	message('Description is required!', "error");
	redirect ('index.php?view=add');
}elseif ($INSTALLMENT == "") {
	message('Installment number  is required!', "error");
	redirect ('index.php?view=add');
}elseif ($PROJECT == "") {
	message('project id is required!', "error");
	redirect ('index.php?view=add');
	
}else{

	$payment->create(); 
	#$sy->create();  
	//$studdetails->create();
	//$requirements->create(); 
	message('New payment addedd successfully!', "success");
	redirect('index.php?view=list');	
}

}

/*
function doEdit(){
	if (isset($_POST['submit'])){	

$project_id  = $_POST['project_id'];
$project_name = $_POST['project_name'];
$cName = $_POST['cName'];
$cContact = $_POST['cContact'];
$sday   = $_POST['sday'];
$eday  = $_POST['eday'];
$pDays  = $_POST['pDays'];
$total_amount  = $_POST['pDays'];
$pSector= $_POST['pSector'];
$pType= $_POST['pType'];
$status   = $_POST['status'];


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
	redirect ('newpayment.php');
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

$studdetails = new payment_details();
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

/* 
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newpayment.php');
}


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
	output_message('payment requirements successfully added!');
	redirect ('newpayment.php');
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

	$payment->update($_GET['id']); 
	//$sy->update($_GET['id']);  
	$studdetails->update($_GET['id']);
	$requirements->update($_GET['id']); 
	message('payment infomation updated successfully!', "info");
	redirect('index.php');	


}
}

		
}

function doDelete(){
 @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$payment = new payment();
		$payment->delete($id[$i]);
		$details = new payment_details();
		$details->delete($id[$i]);
		$sy = new Schoolyr();
		$sy->delete($id[$i]);
		$req = new Requirements();
		$req->delete($id[$i]);

	}
		message("payment has successfully deleted!","info");
		redirect('index.php');
	}
	function doAssignsubj(){
		global $mydb;
		$paymentId = $_GET['paymentId'];
		$SY = $_GET['SY'];
		$paymentId=$_GET['paymentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];


		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);

		if (!$subjectId==''){
		echo $selector , $selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$paymentId}'");
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
				$grades->IDNO				=	$paymentId;
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
		message("payment's subjects already Added!","info");
			redirect('index.php?view=subject&paymentId='.$paymentId.'&cid='.$cid.'&sy='.$sy.'');
		 
		}
		}else{
			message("Select first the subject(s) you want to Add!","error");
			redirect('index.php?view=subject&paymentId='.$paymentId.'&cid='.$cid.'&sy='.$sy.'');
		}

	}
	function doDelsubj(){
		$paymentId=$_GET['paymentId'];
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
					message("payment subject(s) already Deleted!","info");
					redirect('index.php?view=subject&paymentId='.$paymentId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
			message("Select your subject(s) first, if you want to delete it!","error");
			redirect('index.php?view=subject&paymentId='.$paymentId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}*/
?>