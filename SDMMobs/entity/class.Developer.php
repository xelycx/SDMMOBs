<?php
include_once("class.User.php");

class Developer extends User
{
	function ViewAssignedBugs()
	{
		//search database BugReport table by id and list all the bug reports
	}
	
	function UpdateBugStatusPending($id)
	{
		//search database BugReport table by id and change status to pending
		$this->db_handle = (new DataBaseConfig())->getConnection();
		
		// Create query
		$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreport SET status='Pending' WHERE id='$id'");
	}
}

?>