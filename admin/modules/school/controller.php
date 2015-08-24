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
			$NAME = $_POST['name'];
			$SHORTNAME = $_POST['shortname'];
			$ADDRESS = $_POST['address'];
			$TELEPHONE = $_POST['telephone'];
			$FAX= $_POST['fax'];
			$DIRECTLINE= $_POST['directline'];
			$EMAIL= $_POST['email'];
			$WEBSITE= $_POST['website'];
			$FACEBOOK= $_POST['facebook'];
			$TWEETER  = $_POST['tweeter'];
			$GPLUS = $_POST['gplus'];
			$YOUTUBE = $_POST['youtube'];
			$LINKEDIN =$_POST['linkedin'];
			$SKYPE =$_POST['skype'];
			$BUREAU =$_POST['bureau'];
			$EXTENSION=$_POST['extension'];
			
			$school = new School();
			$school->extension=$EXTENSION;
			$school->name =$NAME;
			$school->shortname=$SHORTNAME;
			$school->address=$ADDRESS;
			$school->telephone=$TELEPHONE ;
			$school-> fax=	$FAX;
			$school->directline=$DIRECTLINE;
			$school->email=	$EMAIL;
			$school->website=	$WEBSITE;
			$school->tweeter=$TWEETER;
			$school->facebook	= $FACEBOOK;
			$school->gplus= $GPLUS;
			$school->youtube= $YOUTUBE;
			$school->linkedin= $LINKEDIN;
			$school->skype=$SKYPE;
			$school->bureau_id=$BUREAU;
		}
		if ($NAME== "") {
			message('Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SHORTNAME== "") {
			message('Short Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($ADDRESS == "") {
			message('Short Name is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($EXTENSION == "") {
			message('Extension is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($TELEPHONE == "") {
			message('Telephone is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($FAX == "") {
			message('Fax is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($DIRECTLINE== "") {
			message('Directline is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($EMAIL == "") {
			message('Email is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($WEBSITE == "") {
			message('Website is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($TWEETER == "") {
			message('Tweeter is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($FACEBOOK== "") {
			message('Facebook ID is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($GPLUS == "") {
			message('Gplus is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($YOUTUBE== "") {
			message('Youtube is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($LINKEDIN== "") {
			message('Linkedin is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($SKYPE== "") {
			message('Skype is required!', "error");
			redirect ('index.php?view=add');
			}elseif ($BUREAU== "") {
			message('Bureau is required!', "error");
			redirect ('index.php?view=add');
			}else{
			$school->create(); 
			message('New school addedd successfully!', "success");
			redirect('index.php?view=list');	
		}
	}
	
	function doEdit(){
	if (isset($_POST['submit'])){
	    $SCHOOLID=$_POST['school_id'];
		$NAME = $_POST['schoolname'];
		$SHORTNAME = $_POST['shortname'];
		$ADDRESS = $_POST['address'];
		$TELEPHONE = $_POST['telephone'];
		$FAX= $_POST['fax'];
		$DIRECTLINE= $_POST['directline'];
		$EMAIL= $_POST['email'];
		$WEBSITE= $_POST['website'];
		$FACEBOOK= $_POST['facebook'];
		$TWEETER  = $_POST['tweeter'];
		$GPLUS = $_POST['gplus'];
		$YOUTUBE = $_POST['youtube'];
		$LINKEDIN =$_POST['linkedin'];
		$SKYPE =$_POST['skype'];
		$BUREAU =$_POST['bureau'];
		$EXTENSION=$_POST['extension'];
		
		$school = new School();
		$school->school_id=$SCHOOLID;
		$school->extension=$EXTENSION;
		$school->name =$NAME;
		$school->shortname=$SHORTNAME;
		$school->address=$ADDRESS;
		$school->telephone=$TELEPHONE ;
		$school-> fax=	$FAX;
		$school->directline=$DIRECTLINE;
		$school->email=	$EMAIL;
		$school->website=	$WEBSITE;
		$school->tweeter=$TWEETER;
		$school->facebook	= $FACEBOOK;
		$school->gplus= $GPLUS;
		$school->youtube= $YOUTUBE;
		$school->linkedin= $LINKEDIN;
		$school->skype=$SKYPE;
		$school->bureau_id=$BUREAU;
	}
	
	if ($SCHOOLID == "") {
		message('ID Number is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($NAME== "") {
		message('School Name is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($SHORTNAME== "") {
		message('Short Name is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($ADDRESS == "") {
		message('Address is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($EXTENSION == "") {
		message('Extension is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($TELEPHONE == "") {
		message('Telephone is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($FAX == "") {
		message('Fax is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($DIRECTLINE== "") {
		message('Directline is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($EMAIL == "") {
		message('Email is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($WEBSITE == "") {
		message('Website is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($TWEETER == "") {
		message('Tweeter is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($FACEBOOK== "") {
		message('Facebook ID is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($GPLUS == "") {
		message('Gplus is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($YOUTUBE== "") {
		message('Youtube is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($LINKEDIN== "") {
		message('Linkedin is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($SKYPE== "") {
		message('Skype is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}elseif ($BUREAU== "") {
		message('Bureau is required!', "error");
		redirect ('index.php?view=edit&id='.$SCHOOLID);
		}else{
		$school->update($_GET['id']);  
		message('School information updated successfully!', "info");
		redirect('index.php');		
	}
}

?>