<?php

class User
{
	//Attributes
	public $id;
	public $first_name;
	public $last_name;
	public $password;
	public $role;
	
	//Constructor
	function __construct($id, $username, $password, $first_name, $last_name, $role)
	{
		$this->id = $id;
		$this->username = $username;
		$this->password = $password;
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->role = $role;
	}
	
	//Setters
	function set_id($id) { $this->id = $id; }
	
	function set_username($username) { $this->username = $username; }
	
	function set_password($password) { $this->password = $password; }
	
	function set_first_name($first_name) { $this->first_name = $first_name; }
	
	function set_last_name($last_name) { $this->last_name = $last_name; }
	
	function set_role($role) { $this->role = $role; }
	
	//Getters
	function get_id() { return $this->id; }
	
	function get_username() { return $this->username; }
	
	function get_password() { return $this->password; }
	
	function get_first_name() { return $this->first_name; }
	
	function get_last_name() { return $this->last_name; }
	
	function get_role() { return $this->role; }
	
	//Functions
	function ViewBugReports() {}
	
	function SearchForBugByKeyword() {}
	
	function SearchForBugByTitle() {}
	
	function SearchForBugByAssignee() {}
	
	function AddComment() {}
	
}

?>