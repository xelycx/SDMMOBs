<?php
include_once("entity/class.Comment.php");

class CommentsController
{
	//public $comment;
	
	// public function __construct()  
    // {  
        // $this->comment = new comment();
    // } 
	
	public function DisplayComments($bug_id)
	{
		// show the comments
		$comment = new comment();
		$comments = $comment->GetCommentsByBugID($bug_id);
		include 'boundary/CommentsView.php';
	}

	public function CreateComment($bug_id, $commentTxt, $user_id)
	{
		// show the comments
		$commentObj = new comment();
		$commentObj->CreateComment($bug_id, $commentTxt, $user_id);
	}

}

?>