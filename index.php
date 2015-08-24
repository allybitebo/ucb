<?php
	require_once("includes/initialize.php");
	//total number of corses available
	/*$mydb->setQuery("SELECT  `course_id` 
	FROM  `courses`");
	$cur = $mydb->executeQuery();
	$total_courses = $mydb->num_rows($cur);*/
	
	//end of total courses query
	
	$content='home.php';
	$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	switch ($view) {
		case '1' :
		$title= $_GET['school_name'];	
		$content='departmentlist.php';		
		break;
		case '2' :
	    $title= $_GET['department_name'];	
		$content ='deptConsultantslist.php';
		break;
		case '3' :
	    $title=$_GET['consultant_name'] . "       Profile" ;	
		$content = 'consultant_profile.php';		
		break;
		
		case '4' :
	    $title="subject";	
 		$content ='studentsubject.php';		
		break;
		
		case '5' :
	    $title="Room Rates";	
		$content='rates.php';
		break;	
		
		case '7' :
	    $title="Location";	
		$content ='sitemap.php';
		break;
		default :
		$title="Consultant Directory";	
		$content ='home.php';
		/*if ($total_courses == 0){
			$title= $total_courses. "NO COURSES AVAILABLE - PLEASE VISIT AGAIN LATER";	
			$content ='courselist.php';	
		}elseif ($total_courses == 1){
			$title= $total_courses. "  COURSE";	
			$content ='courselist.php';
		}else
	    $title= $total_courses. "  COURSES";	
		$content ='courselist.php';		*/
	}
	
	require_once 'theme/frontendTemplate.php';
	?>
