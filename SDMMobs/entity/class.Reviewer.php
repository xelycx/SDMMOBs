<?php
include_once("class.User.php");

class Reviewer extends User
{
	function ViewPendingBugs()
	{
		//search database BugReport table by id and list all the bug reports
	}
	
	function UpdateBugStatusReviewed($id)
	{
		//search database BugReport table by id change status to reviewed
		$this->db_handle = (new DataBaseConfig())->getConnection();
		$reviewer = $_SESSION['userName'];
		
		// Create query
		$update_stmt = mysqli_query($this->db_handle, "UPDATE bugreport SET reviewedBy='$reviewer', status='Reviewed' WHERE id='$id'");
	}
}

?>