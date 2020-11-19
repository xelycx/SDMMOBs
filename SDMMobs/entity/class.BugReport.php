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
	function CreateBugReport($reporter, $title, $description, $bug_severity_lvl)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		if (!empty($title) && !empty($description) && !empty($bug_severity_lvl) && !empty($reporter))
		{
			$bug_open_date = date('Y-m-d H:i:s');
			$sql = "INSERT INTO bugreports (bug_reporter, bug_developer, bug_triager, bug_reviewer, bug_title, bug_description, bug_status, bug_open_date, bug_severity_lvl)
									VALUES ('$reporter', '', '', '', '$title', '$description', 'Open', '$bug_open_date', '$bug_severity_lvl')";

			if ($this->db_handle->query($sql) === TRUE)
			{
				header("location: BRhome.php");//index.php
				return(1);
			}
			else { echo "Error: " . $sql . "<br>" . $this->db_handle->error; }
			$this->db_handle->close();
		}
		else { return(0); }
	}

	
	//function ReadBugReport() {}
	
	// function UpdateBugReport()
	// {
	// 	$this->db_handle = (new DataBaseConfig())->getConnection();
	// 	if (!empty($title) && !empty($keyword) && !empty($description))
	// 	{
	// 		$bug_created = date('Y-m-d H:i:s');
	// 		$sql = "INSERT INTO bugreports (bug_reporter, bug_developer, bug_triager, bug_reviewer, bug_title, bug_keyword, bug_description, bug_status, bug_open_date, bug_severity_lvl)
	// 								VALUES ('$reporter', '', '', '', '$title', '$keyword', '$description', 'Open', '$bug_created', '$bug_severity_lvl')";
			
	// 		if ($db_handle->query($sql) === TRUE) { return(1); }
	// 		else { echo "Error: " . $sql . "<br>" . $this->db_handle->error; }
	// 		$this->db_handle->close();
	// 	}
	// 	else { return(0); }
	// }

	function UpdateBugReport($id, $title, $description, $status, $openDate, $closeDate, $severityLevel, $reporter, $triager, $developer, $reviewer)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
	    // Check input errors before inserting in database
	    if(!empty($title) && !empty($description))
	    {
	        // Prepare an update statement
	        $sql = "UPDATE BugReports SET bug_title=?, bug_description=?, bug_status=?, bug_open_date=?, bug_close_date=?, bug_severity_lvl=?, bug_reporter=?, bug_triager=?, bug_developer=?, bug_reviewer=? WHERE bug_id=$id";

	        // $sql = "UPDATE BugReports SET bug_title=$title, bug_description=$description, bug_status=$status, bug_open_date=$openDate, bug_close_date=$closeDate, bug_severity_lvl=$severityLevel, bug_reporter=$reporter, bug_triager=$triager, bug_developer=$developer, bug_reviewer=$reviewer WHERE bug_id=$id";
	        echo $sql;
	        if($stmt = $this->db_handle->prepare($sql))
	        {
	            // Bind variables to the prepared statement as parameters
	            $stmt->bind_param("sssssissss", $param_title, $param_description, $param_status, $param_openDate, $param_closeDate, $param_severityLevel, $param_reporter, $param_triager, $param_developer, $param_reviewer);
	            
	            // Set parameters
	            $param_title = $title;
	            $param_description = $description;
	            $param_status = $status;
	            $param_openDate = $openDate;
	            $param_closeDate = $closeDate;
	            $param_severityLevel = $severityLevel;
	            $param_reporter = $reporter;
	            $param_triager = $triager;
	            $param_developer = $developer;
	            $param_reviewer = $reviewer;

	            // Attempt to execute the prepared statement
	            if($stmt->execute())
	            {
	                // Records updated successfully. Redirect to landing page
	                header("location: BRhome.php");//index.php
	                exit();
	            } else { echo "Something went wrong. Please try again later."; }
	        }
	         
	        // Close statement
	        $stmt->close();
	    }
	    // Close connection
    	$db_handle->close();
	}
	
	function DeleteBugReport()
	{
		//$this->db_handle = (new DataBaseConfig())->getConnection();
	    // Prepare a delete statement
	    $sql = "DELETE FROM BugReports WHERE bug_id = ?";
	    
	    if($stmt = $this->db_handle->prepare($sql)){
	        // Bind variables to the prepared statement as parameters
	        $stmt->bind_param("i", $param_id);
	        
	        // Set parameters
	        $param_id = $this->get_id();//trim($_POST["bug_id"]);
	        
	        // Attempt to execute the prepared statement
	        if($stmt->execute()){
	            // Records deleted successfully. Redirect to landing page
	            header("location: brhome.php");
	            exit();
	        } else{
	            echo "Oops! Something went wrong. Please try again later.";
	        }
	    }
	     
	    // Close statement
	    //$stmt->close();
	    
	    // Close connection
	    //$this->db_handle->close();
	}
	
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

		//$bugreport = mysqli_fetch_assoc($result);
		return $result;
	}
	
	function SearchForBugByTitle($title)
	{
		$query = "SELECT * FROM BugReports WHERE bug_title LIKE '%$title%' ";
		$result = mysqli_query($this->db_handle, $query);

		//$bugreport = mysqli_fetch_assoc($result);
		return $result;
	}
	
	function SearchForBugByAssignee($assignee)
	{
		$query = "SELECT * FROM BugReports WHERE bug_developer LIKE '%$assignee%' ";
		$result = mysqli_query($this->db_handle, $query);

		//$bugreport = mysqli_fetch_assoc($result);
		return $result;
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


	function GetMonthlyReport()
	{
		// Create query
		$sql = "SELECT * FROM bugreports";
		$result = $db_handle->query($sql);
		
		return $result;
	}
	
	function GetWeeklyReport()
	{
		// Create query
		$sql = "SELECT CONCAT(YEAR(bug_open_date), '/ Week ', WEEK(bug_open_date,1)) AS weeklies, COUNT(*) AS TOTAL FROM bugreports WHERE bug_status='Closed' GROUP BY weeklies";
		$result = $db_handle->query($sql);
		
		return $result;
	}
	
	function GetWeeklyBugDate()
	{
		// Create query
		$sql = "SELECT *, CONCAT(YEAR(bug_open_date), '/ Week ', WEEK(bug_open_date,1)) AS weeklies FROM bugreports WHERE bug_status='Closed'";
		$result = $db_handle->query($sql);
		
		return $result;
	}
	
	function GetBestReporter()
	{
		// Create query
		$sql = "SELECT bug_reporter, count(*) AS TOTAL FROM 'bugreports' WHERE bug_reporter != '' GROUP BY bug_reporter";
		$result = $db_handle->query($sql);
		
		return $result;
	}
	
	function GetBestDeveloper()
	{
		// Create query
		$sql = "SELECT bug_developer, count(*) AS TOTAL FROM 'bugreports' WHERE bug_developer != '' GROUP BY bug_developer";
		$result = $db_handle->query($sql);
		
		return $result;
	}

	function GetOpenBugReport()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$query = "SELECT * FROM BugReports WHERE bug_status = 'Open' ";
		$result = mysqli_query($this->db_handle, $query);
		//$this->db_handle->close();
		return $result;
	}

	function GetClosedBugReport()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$query = "SELECT * FROM BugReports WHERE bug_status = 'Closed' ";
		$result = mysqli_query($this->db_handle, $query);
		//$this->db_handle->close();
		return $result;
	}

	function GetReviewedBugReport()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$query = "SELECT * FROM BugReports WHERE bug_status = 'Reviewed' ";
		$result = mysqli_query($this->db_handle, $query);
		//$this->db_handle->close();
		return $result;
	}

	function GetAssignedBugReport($username)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$query = "SELECT * FROM BugReports WHERE bug_status = 'Assigned' AND bug_developer LIKE '%$username%' ";
		$result = mysqli_query($this->db_handle, $query);
		//$this->db_handle->close();
		return $result;
	}

	function GetPendingReviewBugReport()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$query = "SELECT * FROM BugReports WHERE bug_status = 'Pending Review' ";
		$result = mysqli_query($this->db_handle, $query);
		//$this->db_handle->close();
		return $result;
	}
}

?>