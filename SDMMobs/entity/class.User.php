<?php
require_once ("DatabaseConfig.php");

class User
{
	private $db_handle;

	//Attributes
	protected $user_id;
	protected $username;
	protected $email;
	private $password;
	protected $user_role;
	protected $user_status;
	protected $area_of_expertise;
	
	//Constructor
/*	function __construct($userID, $userName, $password, $userRole)
	{
		$this->userID = $userID;
		$this->userName = $userName;
		$this->email = $email;
		$this->password = $password;
		$this->userRole = $userRole;
		$this->userStatus = $userStatus;
		$this->areaOfExpertise = $areaOfExpertise;
	}*/
	
	//Setters
	function set_userID($user_id) { $this->user_id = $user_id; }
	
	function set_userName($username) { $this->username = $username; }

	function set_email($email) { $this->email = $email; }
	
	function set_password($password) { $this->password = $password; }
	
	function set_userRole($user_role) { $this->user_role = $user_role; }
	
	function set_userStatus($user_status) { $this->user_status = $user_status; }
	
	function set_areaOfExpertise($area_of_expertise) { $this->area_of_expertise = $area_of_expertise; }
	
	//Getters
	function get_userID() { return $this->user_id; }
	
	function get_userName() { return $this->username; }

	function get_email() { return $this->email; }
	
	function get_password() { return $this->password; }
	
	function get_userRole() { return $this->user_role; }
	
	function get_userStatus() { return $this->user_status; }
	
	function get_areaOfExpertise() { return $this->area_of_expertise; }
	
	//Functions
	function login()
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		// Create query
		$stmt = mysqli_query($this->db_handle, "SELECT * FROM user WHERE username='$this->username' AND password='$this->password'");
		while ($row = mysqli_fetch_assoc($stmt)) {			
			// Check for num rows
			if ($stmt->num_rows == 1) {
				// Success
				$_SESSION['username'] = $this->username;
				$_SESSION['user_role'] = $row['user_role'];
				$_SESSION['isLoggedIn'] = TRUE;
				
				$stmt->close();
				return true;
			}
			else {
				// Failure
				$stmt->close();
				return false;
			}
		}
	}
	

	function logout()
	{  
		$_SESSION['isLoggedIn'] = FALSE;  
		session_unset();
		session_destroy();
		header("Location: index.php");
	}

	function session()
	{
		if (isset($_SESSION['isLoggedIn'])) {  
            return $_SESSION['isLoggedIn'];  
        }
	}
	
	function ViewBugReports() {}
	
	function SearchForBugByKeyword() {}
	
	function SearchForBugByTitle() {}
	
	function SearchForBugByAssignee() {}
	
	function AddComment() {}
	
	function GetUser($user_id)
	{
		$query = "SELECT * FROM user WHERE user_id = $user_id";
		$result = mysqli_query($this->db_handle, $query);

		return $result;
	}
	
	function GetUserList()
	{
		$query = "SELECT * FROM user";
		$result = mysqli_query($this->db_handle, $query);

		return $result;
	}
}

?>