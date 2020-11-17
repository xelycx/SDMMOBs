<?php
include_once("class.User.php");

class Triager extends User
{
	function GetOpenBugs()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$result = mysqli_query($this->db_handle, "SELECT * FROM BugReport WHERE status='$open'");
		return $result;
	}
	
	function AssignBugToDeveloper($id, $developer)
	{
		//search database BugReport table by id and change assignee field
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$triager = $_SESSION['userName'];
		
		// Create query
		$stmt = mysqli_query($this->db_handle, "SELECT * FROM user WHERE username='$developer' AND userRole='developer'");
		if($stmt)
		{
			$rowcount = mysqli_num_rows($stmt);
		
			if($rowcount > 0)
			{
				$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreport SET triagedBy='$triager', assignee='$developer', status='Pending' WHERE id='$id'");
				return (1);
			}
			else { return(0); }
		}
	}
	
	function UpdateBugStatusClosed($id)
	{
		//search database BugReport table by id and set status as closed
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreport SET status='Closed' WHERE id='$id'");
	}

	function checkDuplicateOrInvalid($id)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$triager = $_SESSION['userName'];
		
		// Create query
		$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreport SET triagedBy='$triager', status='Closed' WHERE id='$id'");
	}
}


?>