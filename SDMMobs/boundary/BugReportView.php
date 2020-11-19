<html>
<head></head>
<style>
.center
{
  margin: auto;
  /*text-align: center;*/
  width: 50%;
  /*border: 3px solid #73AD21;*/
  padding: 10px;
}
.button
{
  background-color: #4CAF50; /* Green */
  border: none;
  color: black;
  padding: 10px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.backButton
{
  background-color: #008CBA; 
  color: black; 
  border: 2px solid #008CBA;
  border-radius: 8px;
}

</style>
<body>

<div class="center">
	<div class="page-header">
		<h1><center>Bug Report #<?php echo "$bug->bug_id" ?></center></h1>
	</div>
	<?php 
		echo '<B>ID: </B>' . $bug->bug_id . '<br/><br/>';
		echo '<B>Title: </B>' . $bug->bug_title . '<br/><br/>';
		echo '<B>Description: </B>' . $bug->bug_description . '<br/><br/>';
		echo '<B>Status: </B>' . $bug->bug_status . '<br/><br/>';
		echo '<B>Create Date: </B>' . $bug->bug_open_date . '<br/><br/>';
		echo '<B>Close Date: </B>' . $bug->bug_close_date . '<br/><br/>';
		echo '<B>SeverityLevel: </B>' . $bug->bug_severity_lvl . '<br/><br/>';
		echo '<B>Bug Reporter: </B>' . $bug->bug_reporter . '<br/><br/>';
		echo '<B>Triager: </B>' . $bug->bug_triager . '<br/><br/>';
		echo '<B>Assignee: </B>' . $bug->bug_developer . '<br/><br/>';
		echo '<B>Reviewer: </B>' . $bug->bug_reviewer . '<br/><br/>';
		//echo '<B>Comments: </B>' . "" . '<br/><br/>';
		
		include_once("controller/CommentsController.php");
		$commentCtrl = new CommentsController();
		$commentCtrl->DisplayComments($bug->bug_id);
	?>
  
<button class="button backButton">
	<a href="#" onclick="location.href = document.referrer; return false;">Back</a>
</button>
</div>
</body>
</html>