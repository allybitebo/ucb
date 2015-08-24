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
			$NAME = $_POST['deptname'];
			$SHORTNAME = $_POST['shortname'];
			$ADDRESS = $_POST['address'];
			$EMAIL= $_POST['email'];
			$TELEPHONE = $_POST['telephone'];
			$WEBSITE  = $_POST['website'];
			$SCHOOL= $_POST['school'];

			$department = new Department();
			$department->name	=	$NAME;
			$department->shortname =	$SHORTNAME;
			$department->address	=	$ADDRESS ;
			$department->email =	$EMAIL;
			$department->telephone	=	$TELEPHONE;
			$department->website	 =	$WEBSITE ;
			$department->school_id	 =	$SCHOOL;
		}
		
		if ($NAME== "") {
			message('Department name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SHORTNAME == "") {
			message('Short Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($ADDRESS == "") {
			message('Address is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($EMAIL == "") {
			message('Gender Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($TELEPHONE == "") {
			message(' Telephone is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SCHOOL == "") {
			message('School Name is required!', "error");
			redirect ('index.php?view=add');
			}else{
			
			$department->create(); 
			message('New department addedd successfully!', "success");
			redirect('index.php?view=list');	
			
			
		}
		
	}
	
	function doEdit(){
	if (isset($_POST['submit'])){
	    $DEPARTMENTID=$_POST['departmentid'];
		$NAME = $_POST['departmentname'];
		$SHORTNAME = $_POST['shortname'];
		$ADDRESS = $_POST['address'];
		$TELEPHONE = $_POST['telephone'];
		$SCHOOL= $_POST['school'];
		$EXTENSION= $_POST['extension'];
		$EMAIL= $_POST['email'];
		$WEBSITE= $_POST['website'];
		
		
		$department = new Department();
		$department->department_id=$DEPARTMENTID;
		$department->extension=$EXTENSION;
		$department->name =$NAME;
		$department->shortname=$SHORTNAME;
		$department->address=$ADDRESS;
		$department->telephone=$TELEPHONE ;
		$department-> website=	$WEBSITE;
		$department->school_id=$SCHOOL;
		$department->email=	$EMAIL;
		
	}
	
	if ($DEPARTMENTID == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($NAME== "") {
		message('Department Name is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($SHORTNAME== "") {
		message('Short Name is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($ADDRESS == "") {
		message('Address is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($EXTENSION == "") {
		message('Extension is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($TELEPHONE == "") {
		message('Telephone is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($WEBSITE == "") {
		message('Website is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($SCHOOL == "") {
		message('School is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		}elseif ($EMAIL == "") {
		message('Email is required!', "error");
		redirect ('index.php?view=edit&id='.$DEPARTMENTID);
		
		}else{
		$department->update($_GET['id']);  
		message('Department information updated successfully!', "info");
		redirect('index.php');		
	}
}
/*
		
		function doDelete(){
		@$id=$_POST['selector'];
		$key = count($id);
		//multi delete using checkbox as a selector
		
		for($i=0;$i<$key;$i++){
		
		$department = new department();
		$department->delete($id[$i]);
		$details = new department_details();
		$details->delete($id[$i]);
		$sy = new Schoolyr();
		$sy->delete($id[$i]);
		$req = new Requirements();
		$req->delete($id[$i]);
		
		}
		message("department has successfully deleted!","info");
		redirect('index.php');
		}
		function doAssignsubj(){
		global $mydb;
		$departmentId = $_GET['departmentId'];
		$SY = $_GET['SY'];
		$departmentId=$_GET['departmentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
		
		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);
		
		if (!$subjectId==''){
		echo $selector , $selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$departmentId}'");
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
		$grades->IDNO				=	$departmentId;
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
		message("department's subjects already Added!","info");
		redirect('index.php?view=subject&departmentId='.$departmentId.'&cid='.$cid.'&sy='.$sy.'');
		
		}
		}else{
		message("Select first the subject(s) you want to Add!","error");
		redirect('index.php?view=subject&departmentId='.$departmentId.'&cid='.$cid.'&sy='.$sy.'');
		}
		
		}
		function doDelsubj(){
		$departmentId=$_GET['departmentId'];
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
		message("department subject(s) already Deleted!","info");
		redirect('index.php?view=subject&departmentId='.$departmentId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
		message("Select your subject(s) first, if you want to delete it!","error");
		redirect('index.php?view=subject&departmentId='.$departmentId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}*/
?>	