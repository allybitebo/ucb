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
		$domainId=$_GET['domainId'];
		
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
			redirect('index.php?view=view&domainId='.$domainId.'');
			}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&domainId='.$domainId.'');
		}
	}
	
	function doInsert(){
		if (isset($_POST['save'])){
			
			//primary Details
			$DOMAINNAME  = $_POST['domainname'];
			$DESCRIPTION = $_POST['description'];
			$SECTOR = $_POST['sector'];
			
			$domain = new Domain();
			$domain->domain_name=	$DOMAINNAME;
			$domain->description=	$DESCRIPTION;
			$domain->sector_id=	$SECTOR;
			
		}
		
		
		if ($DOMAINNAME == "") {
			message('Domain name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($DESCRIPTION == "") {
			message('Description is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SECTOR == "") {
			message('Sector is required!', "error");
			redirect ('index.php?view=add');
			
			}else{
			
			$domain->create(); 
			message('New domain addedd successfully!', "success");
			redirect('index.php?view=list');	
			
			
		}
		
	}

	function doEdit(){
		if (isset($_POST['submit'])){	
			
			$domain_id  = $_POST['domain_id'];
			$domainname = $_POST['domainname'];
			$description = $_POST['description'];
			$sector = $_POST['psector'];
			
			
			$domain = new Domain();
			$domain->domain_id	=	$domain_id;
			$domain->domain_name =	$domainname;
			$domain->description =$description;
			$domain->sector_id	= $sector;
		}
			
			if ($domain_id == "") {
				message('Domain ID is required!', "error");
				redirect ('index.php?view=edit&id='.$domain_id);
				}elseif ($domainname == "") {
				message('Domain Name is required!', "error");
				redirect ('index.php?view=edit&id='.$domain_id);
				}elseif ($description == "") {
				message('Description is required!', "error");
				redirect ('index.php?view=edit&id='.$domain_id);
				}elseif ($sector == "") {
				message('Sector is required!', "error");
				redirect ('index.php?view=edit&id='.$domain_id);
				}else{ 
				$domain->update($_GET['id']); 
				message('Domain infomation updated successfully!', "info");
				redirect('index.php');	
		}
		
	}
?>