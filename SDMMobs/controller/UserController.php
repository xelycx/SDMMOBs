<?php
include_once("entity/class.User.php");

class UserController
{
	public $user;
	
	public function __construct()  
    {  
        $this->user = new User();
    } 
	
	public function GetUserNameById($user_id)
	{
		$userObj = $this->user->GetUser($user_id);
		return $userObj->username;
	}
	
}

?>
