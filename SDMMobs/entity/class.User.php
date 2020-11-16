<?php
require_once ("DatabaseConfig.php");

class User
{
	private $db_handle;

	//Attributes
	protected $userID;
	protected $userName;
	protected $email;
	private $password;
	protected $userRole;
	protected $userStatus;
	protected $areaOfExpertise;
	
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
	function set_userID($userID) { $this->userID = $userID; }
	
	function set_userName($userName) { $this->userName = $userName; }

	function set_email($email) { $this->email = $email; }
	
	function set_password($password) { $this->password = $password; }
	
	function set_userRole($userRole) { $this->userRole = $userRole; }
	
	function set_userStatus($userStatus) { $this->userStatus = $userStatus; }
	
	function set_areaOfExpertise($areaOfExpertise) { $this->areaOfExpertise = $areaOfExpertise; }
	
	//Getters
	function get_userID() { return $this->userID; }
	
	function get_userName() { return $this->userName; }

	function get_email() { return $this->email; }
	
	function get_password() { return $this->password; }
	
	function get_userRole() { return $this->userRole; }
	
	function get_userStatus() { return $this->userStatus; }
	
	function get_areaOfExpertise() { return $this->areaOfExpertise; }
	
	//Functions
	function login()
	{
		$dbc = new DataBaseConfig();
		$this->db_handle = $dbc->getConnection();
		
		// Create query
		$stmt = mysqli_query($this->db_handle, "SELECT * FROM user WHERE userName='$this->userName' AND password='$this->password'");
		while ($row = mysqli_fetch_assoc($stmt)) {			
			// Check for num rows
			if ($stmt->num_rows == 1) {
				// Success
				$_SESSION['userName'] = $this->userName;
				$_SESSION['userRole'] = $row['userRole'];
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
	
	function GetUser($id)
	{
		$query = "SELECT * FROM Users WHERE id = $id";
		$result = mysqli_query($this->db_handle, $query);

		return $result;
	}
	
	function GetUserList()
	{
		$query = "SELECT * FROM Users";
		$result = mysqli_query($this->db_handle, $query);

		return $result;
	}
}

?>