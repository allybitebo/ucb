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
			$SECTORNAME = $_POST['sector'];
			
			$sector = new Sector();
			$sector->sector_name = $SECTORNAME;
		}
		
		if ($SECTORNAME == "") {
			message('Sector name is required!', "error");
			redirect ('index.php?view=add');
			}else{
			$sector->create(); 
			message('New Sector addedd successfully!', "success");
			redirect('index.php?view=list');	
		}
		
	}
	//if ($_POST['deptname'] == "" OR $_POST['deptdesc'] == "") {
	//message("All field is required!", "error");
	//redirect('index.php?view=add');
	//}
	/*else{
		$dept = new Dept();
		$deptid		= $_POST['deptid'];
		$deptname   = $_POST['deptname'];
		$dept_desc 	= $_POST['deptdesc'];
		$res = $dept->find_all_dept($deptname);
		
		if ($res >=1) {
		message("Department name already exist!","error");
		redirect('index.php?view=add');
		
		}else{
		$dept->DEPARTMENT_NAME = $deptname;
		$dept->DEPARTMENT_DESC = $dept_desc;
		$istrue = $dept->create(); 
		if ($istrue == 1){
		
		message("New [". $deptname ."] Department created successfully!","success");
		redirect('index.php');
		
		}
		}	 
		
		
		}
		}
	}*/
	
function doEdit(){
	if (isset($_POST['submit'])){
		$SECTORID =$_POST['sector_id'];
		$SECTORNAME=$_POST['sectorname'];
		
		$sector = new Sector();
		$sector->sector_name = $SECTORNAME;
		$sector->sector_id =$SECTORID;
		}
		
		if ($SECTORID == "") {
			message('ID Number is required!', "error");
			redirect ('index.php?view=edit&id='.$SECTORID);
			}elseif ($SECTORNAME== "") {
			message('Sector Name is required!', "error");
			redirect ('index.php?view=edit&id='.$SECTORID);
			}else{
			
			$sector->update($_GET['id']);  
			message('Sector information updated successfully!', "info");
			redirect('index.php');	
		}
	}
	/*
		function doDelete(){
		
		@$id=$_POST['selector'];
		$key = count($id);
		//multi delete using checkbox as a selector
		
		for($i=0;$i<$key;$i++){
		
		$dept = new Dept();
	$dept->delete($id[$i]);
	}
	
	message("Department name(s) already Deleted!","info");
	redirect('index.php');
	
	}*/
	
?>	