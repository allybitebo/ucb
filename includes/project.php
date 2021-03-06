<?php
	/**
		* Description:	This is a class for student.
		* Author:		Ally Bitebo
		* Date Created:	June 8, 2015
		* Revised By:		
		**/
	require_once(LIB_PATH.DS.'database.php');
	class Project{
		
		protected static $tbl_name = "projects";
		function db_fields(){
			global $mydb;
			return $mydb->getFieldsOnOneTable(self::$tbl_name);
		}
		
		
		
		//This function added by shio
		
		function ProjectsNumberSchool($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name. " WHERE project_school_id = {$id}");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
		}
		
		function ProjectsNumberBureau($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name. " WHERE project_bureau_id = {$id}");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
		}
		
		function ProjectsNumberByConsultant($consultant_id=0){
			global $mydb;
			$mydb->setQuery("SELECT `cons_proj_project_id`, `project_number`, `project_name` 
			FROM `consultant_project` JOIN `projects` ON `cons_proj_project_id` = `project_id` 
			WHERE `cons_proj_consultant_id` = '{$consultant_id}'");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
		}
		
		function ProjectsByConsultant($consultant_id=0){
			global $mydb;
			$mydb->setQuery("SELECT `cons_proj_project_id`, `project_number`, `project_name` ,`project_id`
			FROM `consultant_project` JOIN `projects` ON `cons_proj_project_id` = `project_id` 
			WHERE `cons_proj_consultant_id` = '{$consultant_id}'");
			$cur = $mydb->loadResultList();
			return $cur;
		}
		
		function find_all_project($project_name="", $course_level="",$course_major="" ){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name."");
			$cur = $mydb->executeQuery();
			$row_count = $mydb->num_rows($cur);//get the number of count
			return $row_count;
		}
		
		function listOfprojects(){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name);
			$cur = $mydb->loadResultList();
			return $cur;
		}
		
		function listOfprojectsBureau($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM ".self::$tbl_name. " WHERE project_bureau_id = {$id}");
			$cur = $mydb->loadResultList();
			return $cur;
		}
		
		function listOfprojectsSchool($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * 
			FROM  ".self::$tbl_name. " WHERE project_school_id = {$id}");
			$cur = $mydb->loadResultList();
			return $cur;
		}
		
		
		/*function listOfDistinctcourse(){
			global $mydb;
			$mydb->setQuery("SELECT DISTINCT  `COURSE_NAME` ,  `COURSE_ID` 
			FROM  ".self::$tbl_name);
			$cur = $mydb->loadResultList();
			return $cur;
		}*/
		function single_project($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where project_id = {$id} LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
		}
		function project_sector($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tbl_name." Where project_sector_id = {$id}");
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
			$sql .= " WHERE project_id=". $id;
			$mydb->setQuery($sql);
			if(!$mydb->executeQuery()) return false; 	
			
		}
		
		public function delete($id=0) {
			global $mydb;
			$sql = "DELETE FROM ".self::$tbl_name;
			$sql .= " WHERE project_id=". $id;
			$sql .= " LIMIT 1 ";
			$mydb->setQuery($sql);
			
			if(!$mydb->executeQuery()) return false; 	
			
		}
		
		
	}
?>