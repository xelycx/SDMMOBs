<?php
include 'entity/class.User.php'; 

/*
	List of functions in LoginController
	--------------------------------
	validateLogin($username, $password)
	session()
	
*/

class LoginController {
	
	function validateLogin($username, $password) {
		$user = new User();
		$user->set_userName($username);
		$user->set_password($password);
		
		if ($user->login())	{
		$_SESSION["username"] = $_POST["username"];
                
                //if ($_SESSION["user_role"] == "bugreporter")
				{
                      header("location:BRhome.php"); 
                      exit; 
                } 
                // else if ($_SESSION["user_role"] == "triager"){
                      // header("location:Thome.php"); 
                      // exit; 
                // }  else if ($_SESSION["user_role"] == "developer"){
                      // header("location:Dhome.php"); 
                      // exit; 
                // }  else if ($_SESSION["user_role"] == "reviewer"){
                      // header("location:Rhome.php"); 
                      // exit; 
                // } 
              
		}
		else {
			// Invalid user
			return FALSE;
		}
	}
	
	function session() {
		$user = new User();
		$user->get_userRole($user_role);
		if (!$user->session()) {
			header('location: index.php');
		}
	}
}
?>