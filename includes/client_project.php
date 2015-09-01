<?php
	/**
		* Description:	This is a class for instructor.
		* Author:		Joken Villanueva
		* Date Created:	June 8, 2013
		* Revised By:	Ally Bitebo
		* Date revised: February 07, 2015
	*/
	require_once(LIB_PATH.DS.'database.php');
	class Client_Project{
		
		protected static $tbl_name = "client_project";
		function db_fields(){
			global $mydb;
			return $mydb->getFieldsOnOneTable(self::$tbl_name);
		}
		
		/*	function find_all_instructor($name=""){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name." 
			WHERE  `displayname` ='{$name}'");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
		}*/
		
		function listAClient($project_id=0){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name." Where clnt_proj_project_id = {$project_id} LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
		}
		
		function Client_projects($client_id=0){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name."Where clnt_proj_client_id= {$client_id}");
			$cur = $mydb->executeQuery();
			$cur = $mydb->loadResultList();
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
		
		
		/*--Create,Update and Delete methods--*/
		public function save() {
			// A new record won't have an id yet.
			return isset($this->id) ? $this->update() : $this->create();
		}
		
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
		$sql .= " WHERE INST_ID=". $id;
		$mydb->setQuery($sql);
	 	if(!$mydb->executeQuery()) return false; 	
		
		}
		
		public function delete($id=0) {
		global $mydb;
		$sql = "DELETE FROM ".self::$tbl_name;
		$sql .= " WHERE INST_ID=". $id;
		$sql .= " LIMIT 1 ";
		$mydb->setQuery($sql);
		
		if(!$mydb->executeQuery()) return false; 	
		
		}
		
		
		}
		?>		