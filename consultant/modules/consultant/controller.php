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
			$FIRSTNAME = $_POST['firstname'];
			$MIDDLENAME = $_POST['middlename'];
			$LASTNAME = $_POST['lname'];
			$DISPLAYNAME= $_POST['displayname'];
			$SEX   = $_POST['gender'];
			$QUALIFICATION  = $_POST['qualify'];
			$TITLE= $_POST['title'];
			$EMAIL   = $_POST['email'];
			$TELEPHONE= $_POST['telephone'];
			$MOBILE = $_POST['mobile'];
			$WEBSITE = $_POST['website'];
			$DEPARTMENT = $_POST['deptid'];
			$USER= $_SESSION['ACCOUNT_ID'];
			
			
			
			$consultant = new Consultant();
			$consultant->firstname	=	$FIRSTNAME;
			$consultant->middlename =	$MIDDLENAME;
			$consultant->lastname	=	$LASTNAME ;
			$consultant->gender =	$SEX;
			$consultant->displayname	=	$DISPLAYNAME;
			$consultant->qualification	 =	$QUALIFICATION ;
			$consultant->title	 =	$TITLE;
			$consultant->email	 =	$EMAIL ;
			$consultant->telephone	 =	$TELEPHONE;
			$consultant->mobile =	$MOBILE ;
			$consultant->website	=	$WEBSITE;
			$consultant->consultant_department_id=$DEPARTMENT;
			$consultant->consultant_user_account_id =	$USER;
		}
		
		if ($FIRSTNAME== "") {
			message('First name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($LASTNAME == "") {
			message('Last Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($MIDDLENAME == "") {
			message('Middle Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SEX == "") {
			message('Gender Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($DISPLAYNAME == "") {
			message('Display name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($QUALIFICATION == "") {
			message('Qualification is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($TITLE == "") {
			message('Title is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($EMAIL == "") {
			message('Email address is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($TELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($MOBILE== "") {
			message('Mobile is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($DEPARTMENT== "") {
			message('Department ID is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($USER== "") {
			message('User Account ID is required!', "error");
			redirect ('index.php?view=add');
			}else{
			
			$consultant->create(); 
			message('New consultant addedd successfully!', "success");
			redirect('index.php?view=list');	
			
			
		}
		
	}
	
	function doEdit(){
		if (isset($_POST['submit'])){
			$CONSULTANTID=$_POST['consultant_id'];
			$FIRSTNAME = $_POST['firstname'];
			$MIDDLENAME = $_POST['middlename'];
			$LASTNAME = $_POST['lastname'];
			$DISPLAYNAME= $_POST['displayname'];
			$SEX = $_POST['gender'];
			$QUALIFICATION  = $_POST['qualify'];
			$TITLE= $_POST['title'];
			$EMAIL   = $_POST['email'];
			$TELEPHONE= $_POST['telephone'];
			$MOBILE = $_POST['mobile'];
			$WEBSITE = $_POST['website'];
			$DEPARTMENT = $_POST['department'];
			
			
			$consultant = new Consultant();
			$consultant->consultant_id=$CONSULTANTID;
			$consultant->firstname	= $FIRSTNAME;
			$consultant->middlename = $MIDDLENAME;
			$consultant->lastname	= $LASTNAME ;
			$consultant->gender = $SEX;
			$consultant->displayname =	$DISPLAYNAME;
			$consultant->qualification	 =	$QUALIFICATION ;
			$consultant->title	= $TITLE;
			$consultant->email  = $EMAIL ;
			$consultant->telephone  = $TELEPHONE;
			$consultant->mobile = $MOBILE ;
			$consultant->website = $WEBSITE;
			$consultant->department_id=$DEPARTMENT;
		}
		
		
		if($CONSULTANTID==""){
			message('Consultant ID is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			
			}elseif ($FIRSTNAME== "") {
			message('First name is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($LASTNAME == "") {
			message('Last Name is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($MIDDLENAME == "") {
			message('Middle Name is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($SEX == "") {
			message('Gender Name is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($DISPLAYNAME == "") {
			message('Display name is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($QUALIFICATION == "") {
			message('Qualification is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($TITLE == "") {
			message('Title is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($EMAIL == "") {
			message('Email address is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($TELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($MOBILE== "") {
			message('Mobile is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}elseif ($DEPARTMENT== "") {
			message('Department ID is required!', "error");
			redirect ('index.php?view=edit&id='.$CONSULTANTID);
			}else{
			
			$consultant->update($_GET['id']); 
			message('Consultant information updated successfully!', "info");
			redirect('index.php');	
		}	
	}	
	
	
	/*
		function doDelete(){
		@$id=$_POST['selector'];
		$key = count($id);
		//multi delete using checkbox as a selector
		
		for($i=0;$i<$key;$i++){
		
		$consultant = new consultant();
		$consultant->delete($id[$i]);
		$details = new consultant_details();
		$details->delete($id[$i]);
		$sy = new Schoolyr();
		$sy->delete($id[$i]);
		$req = new Requirements();
		$req->delete($id[$i]);
		
		}
		message("consultant has successfully deleted!","info");
		redirect('index.php');
		}
		function doAssignsubj(){
		global $mydb;
		$consultantId = $_GET['consultantId'];
		$SY = $_GET['SY'];
		$consultantId=$_GET['consultantId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
		
		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);
		
		if (!$subjectId==''){
		echo $selector , $selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$consultantId}'");
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
		$grades->IDNO				=	$consultantId;
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
		message("consultant's subjects already Added!","info");
		redirect('index.php?view=subject&consultantId='.$consultantId.'&cid='.$cid.'&sy='.$sy.'');
		
		}
		}else{
		message("Select first the subject(s) you want to Add!","error");
		redirect('index.php?view=subject&consultantId='.$consultantId.'&cid='.$cid.'&sy='.$sy.'');
		}
		
		}
		function doDelsubj(){
		$consultantId=$_GET['consultantId'];
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
		message("consultant subject(s) already Deleted!","info");
		redirect('index.php?view=subject&consultantId='.$consultantId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
		message("Select your subject(s) first, if you want to delete it!","error");
		redirect('index.php?view=subject&consultantId='.$consultantId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}*/
	?>		