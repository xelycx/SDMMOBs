<?php
include_once("class.User.php");

class Triager extends User
{
	function GetOpenBugs()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$result = mysqli_query($this->db_handle, "SELECT * FROM BugReports WHERE bug_status='$open'");
		return $result;
	}
	
	function AssignBugToDeveloper($id, $developer)
	{
		//search database BugReport table by id and change assignee field
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$bug_triager = $_SESSION['username'];
		
		// Create query
		$stmt = mysqli_query($this->db_handle, "SELECT * FROM user WHERE username='$developer' AND user_role='developer'");
		if($stmt)
		{
			$rowcount = mysqli_num_rows($stmt);
		
			if($rowcount > 0)
			{
				$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreports SET bug_triager='$bug_triager', bug_developer='$developer', bug_status='Pending' WHERE bug_id='$bug_id'");
				return (1);
			}
			else { return(0); }
		}
	}
	
	function UpdateBugStatusClosed($bug_id)
	{
		//search database BugReport table by id and set status as closed
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreports SET bug_status='Closed' WHERE bug_id='$bug_id'");
	}

	function checkDuplicateOrInvalid($bug_id)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$bug_triager = $_SESSION['username'];
		
		// Create query
		$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreports SET bug_triager='$bug_triager', bug_status='Closed' WHERE bug_id='$bug_id'");
	}
}


?>