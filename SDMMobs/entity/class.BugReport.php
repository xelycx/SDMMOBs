<?php
require_once ("DatabaseConfig.php");
//or use autoloader? //include "autoload.php"

class BugReport
{
    private $db_handle;
    
	//Attributes
	public $id;
	public $title;
	public $description;
	public $status;//(open, pending, reviewed, closed)
	public $assignee;//assigned to developer, store by user id or string
	public $createDate; //need the create date for listing new/ recent bugs, search by date,best reporter
	public $closeDate; //for tracking closed bugs for best developer
	public $severityLevel;
	public $comments;//using string for now, should be list of comments from another table, maybe removing later
	
	//Constructor
	function __construct($id, $title, $description, $status, $assignee, $createDate, $closeDate, $severityLevel, $comments)
	{
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->status = $status;
		$this->assignee = $assignee;
		$this->createDate = $createDate;
		$this->closeDate = $closeDate;
		$this->severityLevel = $severityLevel;
		$this->comments = $comments;
		
		//database
		$this->db_handle = new DBController();
	}
	
	//Setters
	function set_id($id) { $this->id = $id; }
	
	function set_title($title) { $this->title = $title; }
	
	function set_description($description) { $this->description = $description; }
	
	function set_status($status) { $this->status = $status; }
	
	function set_assignee($assignee) { $this->assignee = $assignee; }
	
	function set_createDate($createDate) { $this->createDate = $createDate; }
	
	function set_closeDate($closeDate) { $this->closeDate = $closeDate; }
	
	function set_severityLevel($severityLevel) { $this->severityLevel = $severityLevel; }
	
	function set_comments($comments) { $this->comments = $comments; }
	
	//Getters
	
	function get_id() { return $this->id; }
	
	function get_title() { return $this->title; }
	
	function get_description() { return $this->description; }
	
	function get_status() { return $this->status; }
	
	function get_assignee() { return $this->assignee; }
	
	function get_createDate() { return $this->createDate; }
	
	function get_closeDate() { return $this->closeDate; }
	
	function get_severityLevel() { return $this->severityLevel; }
	
	function get_comments() { return $this->comments; }
	
	//Functions
	//basic CRUD
	function CreateBugReport() {}
	
	function ReadBugReport() {}
	
	function UpdateBugReport() {}
	
	function DeleteBugReport() {}
	
	//other functions
	function ViewBugReports()
	{
		$query = "SELECT * FROM BugReport";
		$result = mysqli_query($this->db_handle, $query);

		return $result;
	}
	
	function SearchForBugByKeyword($keyword)
	{
		$query = "SELECT * FROM BugReport WHERE description LIKE '%$keyword%' ";
		$result = mysqli_query($this->db_handle, $query);

		$bugreport = mysqli_fetch_assoc($result);
		return $bugreport;
	}
	
	function SearchForBugByTitle($title)
	{
		$query = "SELECT * FROM BugReport WHERE title LIKE '%$title%' ";
		$result = mysqli_query($this->db_handle, $query);

		$bugreport = mysqli_fetch_assoc($result);
		return $bugreport;
	}
	
	function SearchForBugByAssignee($assignee)
	{
		$query = "SELECT * FROM BugReport WHERE assignee LIKE '%$assignee%' ";
		$result = mysqli_query($this->db_handle, $query);

		$bugreport = mysqli_fetch_assoc($result);
		return $bugreport;
	}
	
	function AddComment($comment)
	{	
		//maybe check in controller??
		// Check input errors before inserting in database
		if(empty($comment_err))
		{
			// Prepare an insert statement
			$sql = "INSERT INTO comments (comment, user_id, dateCreated, lastEdited) VALUES (?, ?, NOW(), NOW())";
			if($stmt = $mysqli->prepare($sql)){
				// Bind variables to the prepared statement as parameters
				$stmt->bind_param("si", $comment, $user_id);
				
				// Set parameters
				$param_name = $name;
				$param_address = $address;
				$param_salary = $salary;
				
				// Attempt to execute the prepared statement
				if($stmt->execute()){
					// Comment added successfully. //Redirect to landing page
					//header("location: index.php");
					exit();
				} else{
					echo "Something went wrong. Please try again later.";
				}
			}
			 
			// Close statement
			$stmt->close();
			
			/*
			// Close connection
			$this->db_handle->close();
			*/
		}
	}
}

?>