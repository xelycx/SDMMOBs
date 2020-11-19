<?php
require_once ("DatabaseConfig.php");

class Comment
{
	private $db_handle;

	//Attributes
	protected $comment_id;
	protected $bug_id;
	protected $comment;
	private $comment_datetime;
	protected $user_id;
	
	//Constructor
	
	//Setters
	function set_comment_id($comment_id) { $this->comment_id = $comment_id; }
	
	function set_bug_id($bug_id) { $this->bug_id = $bug_id; }

	function set_comment($comment) { $this->comment = $comment; }
	
	function set_comment_datetime($comment_datetime) { $this->comment_datetime = $comment_datetime; }
	
	function set_user_id($user_id) { $this->user_id = $user_id; }
	
	//Getters
	function get_comment_id() { return $this->comment_id; }
	
	function get_bug_id() { return $this->bug_id; }

	function get_email() { return $this->email; }
	
	function get_password() { return $this->password; }
	
	function get_userRole() { return $this->user_role; }
	
	
	//Functions
	function CreateComment($comment_id, $bug_id, $comment, $user_id)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		if (!empty($comment_id) && !empty($bug_id) && !empty($comment) && !empty($user_id))
		{
			$commentDate = date('Y-m-d H:i:s');
			$sql = "INSERT INTO comments (comment_id, bug_id, comment, user_id, comment_datetime)
									VALUES ('$comment_id', '$bug_id', '$comment', '$user_id', '$commentDate')";

			if ($this->db_handle->query($sql) === TRUE)
			{
				//header("location: BRhome.php");//go refresh view
				return(1);
			}
			else { echo "Error: " . $sql . "<br>" . $this->db_handle->error; }
			$this->db_handle->close();
		}
		else { return(0); }
	}
	
	//Functions
	function GetCommentsByBugID($bug_id)
	{
		$this->db_handle = (new DataBaseConfig())->getConnection();
		//use the previous function to get all the bugreports and then we return the requested one.
		$query = "SELECT * FROM comments WHERE bug_id = $bug_id";
		$result = mysqli_query($this->db_handle, $query);
		
		$this->db_handle->close();
		return $result;
	}
	
}

?>