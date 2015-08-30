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
			$CLIENTNAME = $_POST['name'];
			$SHORTNAME = $_POST['shortname'];
			$ADDRESS= $_POST['address'];
			$EMAIL   = $_POST['email'];
			$TELEPHONE= $_POST['telephone'];
			$WEBSITE = $_POST['website'];
			$SECTOR = $_POST['sector'];
			
			
			$client = new Client();
			$client->client_name=$CLIENTNAME;
			$client->client_short_name =$SHORTNAME;
			$client->client_address = $ADDRESS;
			$client->client_email = $EMAIL ;
			$client->client_Telephone =	$TELEPHONE;
			$client->client_website	= $WEBSITE;
			$client->client_sector	= $SECTOR;
		}
		
		if ($CLIENTNAME== "") {
			message('Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SHORTNAME == "") {
			message('Short Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($ADDRESS == "") {
			message('Address Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SECTOR == "") {
			message('Sector name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($TELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($EMAIL == "") {
			message('Email is required!', "error");
			redirect ('index.php?view=add');
		}
		$client->create(); 
		message('New client addedd successfully!', "success");
		redirect('index.php?view=list');
	}
	
	function doEdit(){
		if (isset($_POST['submit'])){
			$CLIENT_ID= $_POST['client_id'];
			$CLIENTNAME = $_POST['name'];
			$SHORTNAME = $_POST['shortname'];
			$ADDRESS= $_POST['address'];
			$EMAIL   = $_POST['email'];
			$TELEPHONE= $_POST['telephone'];
			$WEBSITE = $_POST['website'];
			$SECTOR = $_POST['sector'];
			
			$client = new Client();
			$client->client_id=$CLIENT_ID;
			$client->client_name=$CLIENTNAME;
			$client->client_short_name =$SHORTNAME;
			$client->client_address =	$ADDRESS;
			$client->client_email	 =	$EMAIL ;
			$client->client_Telephone	 =	$TELEPHONE;
			$client->client_website	=	$WEBSITE;
			$client->client_sector	=	$SECTOR;
		}
		
		if ($CLIENT_ID == "") {
			message('Client ID is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($CLIENTNAME== "") {
			message('Name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($SHORTNAME == "") {
			message('Short Name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($ADDRESS == "") {
			message('Address is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($EMAIL == "") {
			message('Email is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($TELEPHONE == "") {
			message('Display name is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($WEBSITE == "") {
			message('Qualification is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
			}elseif ($SECTOR == "") {
			message('Title is required!', "error");
			redirect ('index.php?view=edit&id='.$client_id);
		}
		$client->update($_GET['id']); 
		message('Client information updated successfully!', "info");
		redirect('index.php');
	}

?>		