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
			$CLIENTNAME = $_POST['cname'];
			$CLIENTSHORTNAME = $_POST['csname'];
			$CLIENTADDRESS = $_POST['caddress'];
			$CLIENTTELEPHONE= $_POST['ctelephone'];
			$CLIENTEMAIL   = $_POST['cemail'];
			$CLIENTWEBSITE  = $_POST['cwebsite'];
			$CLIENTSECTOR= $_POST['csector'];
			
			$client = new client();
			$client->client_name	=	$CLIENTNAME;
			$client->client_short_name =	$CLIENTSHORTNAME;
			$client->client_address	=	$CLIENTADDRESS ;
			$client->client_telephone =	$CLIENTTELEPHONE;
			$client->client_email	=	$CLIENTEMAIL;
			$client->client_website	 =	$CLIENTWEBSITE ;
			$client->client_sector	 =	$CLIENTSECTOR;
		}
		
		if ($CLIENTNAME== "") {
			message('First name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTSHORTNAME == "") {
			message('Last Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTADDRESS == "") {
			message('Middle Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTTELEPHONE == "") {
			message('Gender Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTEMAIL == "") {
			message('Display name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTWEBSITE == "") {
			message('Qualification is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($CLIENTSECTOR == "") {
			message('Title is required!', "error");
			redirect ('index.php?view=add');
			}else{
			$client->create(); 
			message('New client addedd successfully!', "success");
			redirect('index.php?view=list');	
		}
		
	}
	
	function doEdit(){
		if (isset($_POST['submit'])){	
		    $client_id=$_POST['client_id'];
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
			
			$client = new client();
			$client->client_id=$client_id;
			$client->firstname	=	$FIRSTNAME;
			$client->middlename =	$MIDDLENAME;
			$client->lastname	=	$LASTNAME ;
			$client->gender =	$SEX;
			$client->displayname	=	$DISPLAYNAME;
			$client->qualification	 =	$QUALIFICATION ;
			$client->title	 =	$TITLE;
			$client->email	 =	$EMAIL ;
			$client->telephone	 =	$TELEPHONE;
			$client->mobile =	$MOBILE ;
			$client->website	=	$WEBSITE;
			$client->bureau_id =	$BUREAU;
			$client->school_id	=	$SCHOOL;
		}
		/*
	if ($client_id == "") {
				message('client ID is required!', "error");
				redirect ('index.php?view=edit&id='.$client_id);
		   elseif ($FIRSTNAME== "") {
			message('First name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);}
			
			}elseif ($LASTNAME == "") {
			message('Last Name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);}
			
			}elseif ($MIDDLENAME == "") {
			message('Middle Name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($SEX == "") {
			message('Gender Name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($DISPLAYNAME == "") {
			message('Display name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($QUALIFICATION == "") {
			message('Qualification is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($TITLE == "") {
			message('Title is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($EMAIL == "") {
			message('Email address is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($TELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($MOBILE== "") {
			message('Mobile is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($BUREAU== "") {
			message('Bureau is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($SCHOOL== "") {
			message('School ID is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}
			*/
			
			
			$client->update($_GET['id']); 
				message('client infomation updated successfully!', "info");
				redirect('index.php');	
		
		
	}
	?>		