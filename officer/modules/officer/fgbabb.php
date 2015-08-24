if ($officer_id == "") {
				message('Officer ID is required!', "error");
				redirect ('index.php?view=edit&id='.$officer_id);
		   elseif ($FIRSTNAME== "") {
			message('First name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
			}elseif ($LASTNAME == "") {
			message('Last Name is required!', "error");
			redirect ('index.php?view=edit&id='.$officer_id);
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
			}else{ 
			$officer->update($_GET['id']); 
				message('Officer infomation updated successfully!', "info");
				redirect('index.php');	
		}
		
	}