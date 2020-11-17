<?php
include_once("class.User.php");

class BugReporter extends User
{

	function __construct($userName)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		
		// Create query
		$stmt = mysqli_query($this->db_handle, "SELECT * FROM user WHERE username='$userName'");
		while ($row = mysqli_fetch_assoc($stmt)) {			
            // Success
            $this->user_id = $row['userID'];
            $this->username = $row['userName'];
            $this->password = $row['password'];
            $this->email = $row['email'];
            $this->userRole = $row['userRole'];
		}
        $stmt->close();
    }
	
	function getUsername() {
		return parent::get_userName();
	}


	function CreateBugReport()
	{
		//create bug report and insert into database table BugReport
	}
}


?>