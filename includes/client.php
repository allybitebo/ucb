
<?php
/**
* Description:	This is a class for department.
* Author:		Joken Villanueva
* Date Created:	June 8, 2013
* Revised By:	Ally Bitebo
* Date edited: February, 07, 2015
*/
require_once(LIB_PATH.DS.'database.php');
class Client{
	
	protected static $tbl_name = "clients";
	function db_fields(){
		global $mydb;
		return $mydb->getFieldsOnOneTable(self::$tbl_name);
	}
	
	function find_all_client(){
			global $mydb;
			$mydb->setQuery("SELECT * 
							FROM  ".self::$tbl_name."");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
	}
	
	function listOfClients(){
			global $mydb;
			$mydb->setQuery("SELECT * 
							FROM  ".self::$tbl_name);
			$cur = $mydb->loadResultList();
			return $cur;
	}
	

/*--------------------------------for search functionlity ----------------------------------
	function listOfClients(){
			global $mydb;
			$mydb->setQuery("SELECT * 
							FROM  ".self::$tbl_name);
			$cur = $mydb->loadResultList();
			return $cur;
	}
--------------------------------------------------------------------------------------------*/
 
/*
	function listOfClients(){
		global $mydb;
			$mydb->setQuery("SELECT client_id,firstname,lastname,user_account_id FROM `clients`");
			$cur = $mydb->loadResultList();
			return $cur;
*/
	function listOfProjectClient($project_id){
			global $mydb;
			$mydb->setQuery("SELECT `client_id`,`client_name`, `project_id` 
							FROM ".self::$tbl_name."
							JOIN `client_project` ON `client_id` = `clnt_proj_client_id` 
							JOIN `projects` ON `project_id` = `clnt_proj_project_id`   
							WHERE project_id ='{$project_id}' LIMIT 1");
							
							//enhance this one to use only project_id fromclient project table
							
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
	
		function ProjectClientCheck($project_id){
			global $mydb;
			$mydb->setQuery("SELECT `client_id`,`client_name`, `project_id` 
							FROM ".self::$tbl_name."
							JOIN `client_project` ON `client_id` = `clnt_proj_client_id` 
							JOIN `projects` ON `project_id` = `clnt_proj_project_id`   
							WHERE project_id ='{$project_id}' LIMIT 1");
							
							//enhance this one to use only project_id fromclient project table
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
	}

	function single_client($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where client_id= {$id} LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}
	/*---Instantiation of Object dynamically---*/
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	/*--Cleaning the raw data before submitting to Database--*/
	private function has_attribute($attribute) {
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->db_fields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}

	
	/*--Create,Update and Delete methods--
	public function save() {
	  // A new record won't have an id yet.
	  return isset($this->id) ? $this->update() : $this->create();
	}
	*/
	public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tbl_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update($id=0) {
	  global $mydb;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$tbl_name." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE client_id=". $id;
	  $mydb->setQuery($sql);
	 	if(!$mydb->executeQuery()) return false; 	
		
	}
/*
	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tbl_name;
		  $sql .= " WHERE DEPT_ID=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
			if(!$mydb->executeQuery()) return false; 	
	
	}*/
	
	
}
?>