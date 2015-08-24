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
		$bureauId=$_GET['bureauId'];
		
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
			redirect('index.php?view=view&bureauId='.$bureauId.'');
			}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&bureauId='.$bureauId.'');
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
			 	
			 	message("bureaus successfully enrolled! Assign now the bureau's subjects.","success");
			 	// check_message();
			 	redirect('index.php?view=view&bureauId='.$idno.'');
				
			}
			
			
			
		}
	}	
	function doInsert(){
		if (isset($_POST['save'])){
			$BURENAME = $_POST['bureauname'];
			$BUREAUSHORTNAME = $_POST['shortname'];
			$BUREAUADRESS = $_POST['address'];
			$BUREAUTELEPHONE = $_POST['telephone'];
			$BUREAUEMAIL = $_POST['email'];
			$BUREAUWEBSITE = $_POST['website'];
			$EXTENSION=$_POST['extension'];
			
			$bureau = new Bureau();
			$bureau->name =$BURENAME;
			$bureau->shortname =$BUREAUSHORTNAME;
			$bureau->address =$BUREAUADRESS;
			$bureau->telephone =$BUREAUTELEPHONE;
			$bureau->email =$BUREAUEMAIL;
			$bureau->website =$BUREAUWEBSITE;
			$bureau->extension=$EXTENSION;
		}
		
		if ($BURENAME == "") {
			message('Bureau name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($BUREAUSHORTNAME == "") {
			message('Shortname is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($BUREAUADRESS == "") {
			message('Address is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($BUREAUTELEPHONE== "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($BUREAUWEBSITE== "") {
			message('Website is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($EXTENSION== "") {
			message('Extension is required!', "error");
			redirect ('index.php?view=add');
			
			}else{
			$bureau->create();  
			message('New bureau addedd successfully!', "success");
			redirect('index.php?view=list');	
		}
	}
	function doEdit(){
		if (isset($_POST['submit'])){
		    $BUREAUID = $_POST['bureau_id'];
			$BUREAUNAME = $_POST['bureauname'];
			$BUREAUSHORTNAME = $_POST['shortname'];
			$BUREAUADRESS = $_POST['address'];
			$BUREAUTELEPHONE = $_POST['telephone'];
			$BUREAUEMAIL = $_POST['email'];
			$BUREAUWEBSITE = $_POST['website'];
			$EXTENSION=$_POST['extension'];
			
			$bureau = new Bureau();
			$bureau->bureau_id=$BUREAUID;
			$bureau->name =$BUREAUNAME;
			$bureau->shortname =$BUREAUSHORTNAME;
			$bureau->address =$BUREAUADRESS;
			$bureau->telephone =$BUREAUTELEPHONE;
			$bureau->email =$BUREAUEMAIL;
			$bureau->website =$BUREAUWEBSITE;
			$bureau->extension=$EXTENSION;
		}
		
		if ($BUREAUID == "") {
			message('ID Number is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($BUREAUNAME == "") {
			message('Bureau Name is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($BUREAUSHORTNAME == "") {
			message('Short Name is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($BUREAUTELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($BUREAUADRESS == "") {
			message('Address is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($BUREAUEMAIL == "") {
			message('Email Address is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($BUREAUWEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}elseif ($EXTENSION == "") {
			message('Extension is required!', "error");
			redirect ('index.php?view=edit&id='.$BUREAUID);
			}else{
			$bureau->update($_GET['id']);  
			message('bureau information updated successfully!', "info");
			redirect('index.php');		
			}
		}
		
		
		
	
	function doDelete(){
		@$id=$_POST['selector'];
		$key = count($id);
		//multi delete using checkbox as a selector
		
		for($i=0;$i<$key;$i++){
			
			$bureau = new bureau();
			$bureau->delete($id[$i]);
			$details = new bureau_details();
			$details->delete($id[$i]);
			$sy = new Schoolyr();
			$sy->delete($id[$i]);
			$req = new Requirements();
			$req->delete($id[$i]);
			
		}
		message("bureau has successfully deleted!","info");
		redirect('index.php');
	}
	function doAssignsubj(){
		global $mydb;
		$bureauId = $_GET['bureauId'];
		$SY = $_GET['SY'];
		$bureauId=$_GET['bureauId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
		
		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);
		
		if (!$subjectId==''){
			echo $selector , $selector;
			$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$bureauId}'");
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
					$grades->IDNO				=	$bureauId;
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
				message("bureau's subjects already Added!","info");
				redirect('index.php?view=subject&bureauId='.$bureauId.'&cid='.$cid.'&sy='.$sy.'');
				
			}
			}else{
			message("Select first the subject(s) you want to Add!","error");
			redirect('index.php?view=subject&bureauId='.$bureauId.'&cid='.$cid.'&sy='.$sy.'');
		}
		
	}
	function doDelsubj(){
		$bureauId=$_GET['bureauId'];
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
		message("bureau subject(s) already Deleted!","info");
		redirect('index.php?view=subject&bureauId='.$bureauId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
		message("Select your subject(s) first, if you want to delete it!","error");
		redirect('index.php?view=subject&bureauId='.$bureauId.'&cid='.$cid.'&sy='.$sy.'');
		}
		}
		?>				