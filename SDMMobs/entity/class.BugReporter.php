<?php
include_once("class.User.php");

class BugReporter extends User
{

	function __construct($username)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		
		// Create query
		$stmt = mysqli_query($this->db_handle, "SELECT * FROM user WHERE username='$username'");
		while ($row = mysqli_fetch_assoc($stmt)) {			
            // Success
            $this->user_id = $row['user_id'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->email = $row['email'];
            $this->user_role = $row['user_role'];
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