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


	}
function doInsert(){
		
if (isset($_POST['save'])){
		
		$FIRSTNAME	= $_POST['firstname'];
		$MIDDLENAME   = $_POST['middlename'];
		$LASTNAME 	= $_POST['lname'];
		$USERNAME = $_POST['uname'];
        $PASSWORD = $_POST['password'];
		 $ACCOUNTTYPE= $_POST['accountType'];
		 
		$systemuser = new Systemuser();
$systemuser->user_first_name =$FIRSTNAME;
$systemuser->user_middle_name =$MIDDLENAME;
$systemuser->user_last_name =	$LASTNAME ;
$systemuser->user_name=$USERNAME;
$systemuser->account_type =$PASSWORD ;
$systemuser->account_password=$ACCOUNTTYPE;
}

if ($FIRSTNAME == "") {
	message('First Name name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($MIDDLENAME == "") {
	message('Middle Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($LASTNAME == "") {
	message('Last Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($USERNAME == "") {
	message('Username is required!', "error");
	redirect ('index.php?view=add');
	}elseif ($PASSWORD == "") {
	message('Password is required!', "error");
	redirect ('index.php?view=add');
}elseif ($ACCOUNTTYPE== "") {
	message('Account Type is required!', "error");
	redirect ('index.php?view=add');
	
}else{

	$systemuser->create(); 
	message('New systemuser addedd successfully!', "success");
	redirect('index.php?view=list');	


}

}

function doEdit(){
	if (isset($_POST['submit'])){
	    $ACCOUNTID=$_POST['user_id'];
		$FNAME = $_POST['firstname'];
		$MNAME = $_POST['middlename'];
		$ACCOUNTPASS = $_POST['password'];
		$ACCOUNTTYPE = $_POST['acctype'];
		$UNAME= $_POST['username'];
		$LNAME= $_POST['lastname'];
		
		
		
		$systemuser = new Systemuser();
		$systemuser->user_account_id=$ACCOUNTID;
		$systemuser->user_first_name =$FNAME;
		$systemuser->user_middle_name=$MNAME;
		$systemuser->user_last_name=$LNAME;
		$systemuser->account_password=$ACCOUNTPASS;
		$systemuser->account_type=$ACCOUNTTYPE;
		$systemuser->user_name=$UNAME;
		
	}
	
	if ($ACCOUNTID == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		}elseif ($FNAME== "") {
		message('First Name is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		}elseif ($MNAME== "") {
		message('Middle Name is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		}elseif ($LNAME == "") {
		message('Last Name is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		}elseif ($UNAME == "") {
		message('user Name is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		}elseif ($ACCOUNTPASS== "") {
		message('Password is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		}elseif ($ACCOUNTTYPE == "") {
		message('Account Type is required!', "error");
		redirect ('index.php?view=edit&id='.$ACCOUNTID);
		
		}else{
		$systemuser->update($_GET['id']);  
		message('User information updated successfully!', "info");
		redirect('index.php');		
	}
}



?>