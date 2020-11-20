<?php
include_once("controller/getKeywordSearchController.php");
include_once("controller/getTitleSearchController.php");
include_once("controller/getAssigneeSearchController.php");

$type = $searchVal = $title = $keyword = "";
if (isset($_POST['search'])) {
	$type = $_POST['type'];
	$searchVal = $_POST['searchVal'];
	$title = "title";
	$keyword = "keyword";
}

?>

<style>
.container
{
  position: relative;
  text-align: center;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  text-align: center;
}

.button
{
  background-color: #555555;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
}

.buttonBack:hover
{
  background-color: #b1b1b1;
  color: black;
}
</style>

<form action="search.php" method="post">
<div class="container">
	<br><br><br>
	<div class="custom-select">
		Search by:
			<select name="type">
				<option value="title">Title</option>
				<option value="keyword">Keyword</option>
				<option value="assignee">Assignee</option>
			</select>
		<input id="txtbox" type="text" name="searchVal" size="50" required>
		<input id ="button" type="submit" name="search" value="Search" />
	</div>
</div>
    
</form>

<?php
	include_once("controller/BugReportController.php");
	if(!isset($_POST['search']) || $searchVal == "")
	{
		$bugReportController = new BugReportController();
		$bugReportController->display();
	}
	
	if (isset($_POST['search']))
	{
		$type = $_POST['type'];
		$searchVal = $_POST['searchVal'];
		$title = "title";
		$keyword = "keyword";
	}

	if ($type == $title)
	{
		include 'boundary/getTitleSearchUI.php';
	}
	else if ($type == $keyword)
	{
		include 'boundary/getKeywordSearchUI.php';
	}
	else
	{
		include 'boundary/getAssigneeSearchUI.php';
	}

?>

<br>
<div class="container">
    <button class="button buttonBack" value="Back" onclick="window.location.href='/SDMMobs/BRhome.php'">Back</button>
</div>
<br>