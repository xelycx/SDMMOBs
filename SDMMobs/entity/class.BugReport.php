<?php
require_once ("DatabaseConfig.php");
//or use autoloader? //include "autoload.php"

class BugReport
{
    private $db_handle;
    
	//Attributes
	public $bug_id;
	public $bug_title;
	public $bug_description;
	public $bug_status;//(open, pending, reviewed, closed)
	public $bug_open_date; //need the create date for listing new/ recent bugs, search by date,best reporter
	public $bug_close_date; //for tracking closed bugs for best developer
	public $bug_severity_lvl;
	public $bug_reporter;
	public $bug_triager;
	public $bug_developer;
	public $bug_reviewer;

	//Constructor
	// function __construct($bug_id, $title, $description, $status, $assignee, $createDate, $closeDate, $severityLevel, $comments)
	// {
		// $this->bug_id = $bug_id;
		// $this->title = $title;
		// $this->description = $description;
		// $this->status = $status;
		// $this->assignee = $assignee;
		// $this->createDate = $createDate;
		// $this->closeDate = $closeDate;
		// $this->severityLevel = $severityLevel;
		// $this->comments = $comments;
		
		// //database
		// $this->db_handle = new DataBaseConfig();
	// }
	
	function __construct()
	{
		//database
		$dbc = new DataBaseConfig();
		$this->db_handle = $dbc->getConnection();
	}
	
	//Setters
	function set_id($bug_id) { $this->bug_id = $bug_id; }
	
	function set_title($bug_title) { $this->bug_title = $bug_title; }
	
	function set_description($bug_description) { $this->bug_description = $bug_description; }
	
	function set_status($bug_status) { $this->bug_status = $bug_status; }
	
	function set_assignee($bug_developer) { $this->bug_developer = $bug_developer; }
	
	function set_createDate($bug_open_date) { $this->bug_open_date = $bug_open_date; }
	
	function set_closeDate($bug_close_date) { $this->bug_close_date = $bug_close_date; }
	
	function set_severityLevel($bug_severity_lvl) { $this->bug_severity_lvl = $bug_severity_lvl; }
	
	function set_comments($comments) { $this->comments = $comments; }
	
	//Getters
	
	function get_id() { return $this->bug_id; }
	
	function get_title() { return $this->bug_title; }
	
	function get_description() { return $this->bug_description; }
	
	function get_status() { return $this->bug_status; }
	
	function get_assignee() { return $this->bug_developer; }
	
	function get_createDate() { return $this->bug_open_date; }
	
	function get_closeDate() { return $this->bug_close_date; }
	
	function get_severityLevel() { return $this->bug_severity_lvl; }
	
	function get_comments() { return $this->comments; }
	
	//Functions
	//basic CRUD
	function CreateBugReport() {}
	
	function ReadBugReport() {}
	
	function UpdateBugReport() {}
	
	function DeleteBugReport() {}
	
	//other functions
	
	// function ViewBugReport($id)
	// {
		// // Prepare a select statement
		// $sql = "SELECT * FROM employees WHERE id = ?";
		
		// if($stmt = $mysqli->prepare($sql)){
			// // Bind variables to the prepared statement as parameters
			// $stmt->bind_param("i", $param_id);
			
			// // Set parameters
			// $param_id = trim($_GET["id"]);
			
			// // Attempt to execute the prepared statement
			// if($stmt->execute()){
				// $result = $stmt->get_result();
				
				// if($result->num_rows == 1){
					// /* Fetch result row as an associative array. Since the result set
					// contains only one row, we don't need to use while loop */
					// $row = $result->fetch_array(MYSQLI_ASSOC);
					
					// // Retrieve individual field value
					// $name = $row["name"];
					// $address = $row["address"];
					// $salary = $row["salary"];
				// } else{
					// // URL doesn't contain valid id parameter. Redirect to error page
					// header("location: error.php");
					// exit();
				// }
				
			// } else{
				// echo "Oops! Something went wrong. Please try again later.";
			// }
		// }
		 
		// // Close statement
		// $stmt->close();
		
		// return $row;
		// // Close connection
		// //$mysqli->close();
	// }
	
	function ViewBugReport($bug_id)
	{
		//use the previous function to get all the bugreports and then we return the requested one.
		$query = "SELECT * FROM BugReports WHERE bug_id = $bug_id";
		$result = mysqli_query($this->db_handle, $query);
		$bugreport = mysqli_fetch_object($result);
		//$this->db_handle->close();
		return $bugreport;
	}
	
	function ViewBugReportList()
	{
		$query = "SELECT * FROM BugReports";
		$result = mysqli_query($this->db_handle, $query);

		return $result;
	}
	
	function SearchForBugByKeyword($keyword)
	{
		$query = "SELECT * FROM BugReports WHERE bug_description LIKE '%$keyword%' ";
		$result = mysqli_query($this->db_handle, $query);

		$bugreport = mysqli_fetch_assoc($result);
		return $bugreport;
	}
	
	function SearchForBugByTitle($title)
	{
		$query = "SELECT * FROM BugReports WHERE bug_title LIKE '%$title%' ";
		$result = mysqli_query($this->db_handle, $query);

		$bugreport = mysqli_fetch_assoc($result);
		return $bugreport;
	}
	
	function SearchForBugByAssignee($assignee)
	{
		$query = "SELECT * FROM BugReports WHERE bug_developer LIKE '%$assignee%' ";
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