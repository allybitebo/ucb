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
		if (isset($_POST['submit'])){
			$FIRSTNAME = $_POST['firstname'];
			$MIDDLENAME = $_POST['middlename'];
			$LASTNAME = $_POST['lastname'];
			$DISPLAYNAME= $_POST['displayname'];
			$SEX   = $_POST['gender'];
			$QUALIFICATION  = $_POST['qualify'];
			$TITLE= $_POST['title'];
			$EMAIL   = $_POST['email'];
			$TELEPHONE= $_POST['telephone'];
			$MOBILE = $_POST['mobile'];
			$WEBSITE = $_POST['website'];
			$BUREAU = $_POST['bureau'];
			$SCHOOL = $_POST['school'];
			
			$officer = new Officer();
			$officer->firstname	=	$FIRSTNAME;
			$officer->middlename =	$MIDDLENAME;
			$officer->lastname	=	$LASTNAME ;
			$officer->gender =	$SEX;
			$officer->displayname	=	$DISPLAYNAME;
			$officer->qualification	 =	$QUALIFICATION ;
			$officer->title	 =	$TITLE;
			$officer->email	 =	$EMAIL ;
			$officer->telephone	 =	$TELEPHONE;
			$officer->mobile =	$MOBILE ;
			$officer->website	=	$WEBSITE;
			$officer->bureau_id =	$BUREAU;
			$officer->school_id	=	$SCHOOL;
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
			}elseif ($BUREAU== "") {
			message('Bureau is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SCHOOL== "") {
			message('School ID is required!', "error");
			redirect ('index.php?view=add');
			}else{
			$officer->create(); 
			message('New officer addedd successfully!', "success");
			redirect('index.php?view=list');	
		}
		
	}
	
	function doEdit(){
		if (isset($_POST['submit'])){	
		    //$officer_id=$_POST['officer_id'];
		    $FIRSTNAME = $_POST['firstname'];
			$MIDDLENAME = $_POST['middlename'];
			$LASTNAME = $_POST['lastname'];
			$DISPLAYNAME= $_POST['displayname'];
			$SEX   = $_POST['gender'];
			$QUALIFICATION  = $_POST['qualify'];
			$TITLE= $_POST['title'];
			$EMAIL   = $_POST['email'];
			$TELEPHONE= $_POST['telephone'];
			$MOBILE = $_POST['mobile'];
			$WEBSITE = $_POST['website'];
			$BUREAU = $_POST['bureau'];
			$SCHOOL = $_POST['school'];
			
			$officer = new Officer();
			//$officer->officer_id=$officer_id;
			$officer->firstname	=	$FIRSTNAME;
			$officer->middlename =	$MIDDLENAME;
			$officer->lastname	=	$LASTNAME ;
			$officer->gender =	$SEX;
			$officer->displayname	=	$DISPLAYNAME;
			$officer->qualification	 =	$QUALIFICATION ;
			$officer->title	 =	$TITLE;
			$officer->email	 =	$EMAIL ;
			$officer->telephone	 =	$TELEPHONE;
			$officer->mobile =	$MOBILE ;
			$officer->website	=	$WEBSITE;
			$officer->bureau_id =	$BUREAU;
			$officer->school_id	=	$SCHOOL;
		}
		/*
	if ($officer_id == "") {
				message('Officer ID is required!', "error");
				redirect ('index.php?view=edit&id='.$officer_id);
		   elseif ($FIRSTNAME== "") {
			message('First name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);}
			
			}elseif ($LASTNAME == "") {
			message('Last Name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);}
			
			}elseif ($MIDDLENAME == "") {
			message('Middle Name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($SEX == "") {
			message('Gender Name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($DISPLAYNAME == "") {
			message('Display name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($QUALIFICATION == "") {
			message('Qualification is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($TITLE == "") {
			message('Title is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($EMAIL == "") {
			message('Email address is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($TELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($MOBILE== "") {
			message('Mobile is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($BUREAU== "") {
			message('Bureau is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($SCHOOL== "") {
			message('School ID is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}
			*/
			
			
			$officer->update($_GET['officer_id']); 
				message('Officer infomation updated successfully!', "info");
				redirect('../../index.php?page=1');	
		
		
	}
	?>		