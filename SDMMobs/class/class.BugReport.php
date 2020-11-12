<?php

class BugReport
{
	//Attributes
	public $id;
	public $title;
	public $description;
	public $status;//(open, pending, reviewed, closed)
	public $assignee;//assigned to developer, store by user id or string
	public $createDate; //need the create date for listing new/ recent bugs, search by date,best reporter
	public $closeDate; //for tracking closed bugs for best developer
	public $comments;//using string for now, should be list of comments from another table, maybe removing later
	
	//Constructor
	function __construct($id, $title, $description, $status, $assignee, $createDate, $closeDate, $comments)
	{
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->status = $status;
		$this->assignee = $assignee;
		$this->createDate = $createDate;
		$this->closeDate = $closeDate;
		$this->comments = $comments;
	}
	
	//Setters
	function set_id($id) { $this->id = $id; }
	
	function set_title($title) { $this->title = $title; }
	
	function set_description($description) { $this->description = $description; }
	
	function set_status($status) { $this->status = $status; }
	
	function set_assignee($assignee) { $this->assignee = $assignee; }
	
	function set_createDate($createDate) { $this->createDate = $createDate; }
	
	function set_closeDate($closeDate) { $this->closeDate = $closeDate; }
	
	function set_comments($comments) { $this->comments = $comments; }
	
	//Getters
	
	function get_id() { return $this->id; }
	
	function get_title() { return $this->title; }
	
	function get_description() { return $this->description; }
	
	function get_status() { return $this->status; }
	
	function get_assignee() { return $this->assignee; }
	
	function get_createDate() { return $this->createDate; }
	
	function get_closeDate() { return $this->closeDate; }
	
	function get_comments() { return $this->comments; }
	
	//Functions
	//basic CRUD
	function CreateBugReport() {}
	
	function ReadBugReport() {}
	
	function UpdateBugReport() {}
	
	function DeleteBugReport() {}
	
	//other functions
	function ViewBugReports() {}
	
	function SearchForBugByKeyword() {}
	
	function SearchForBugByTitle() {}
	
	function SearchForBugByAssignee() {}
	
	function AddComment() {}
	
}

?>