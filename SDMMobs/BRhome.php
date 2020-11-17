<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.navbar 
{
    overflow: hidden;
    background-color: #333;
}

.navbar a 
{
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown 
{
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn 
{
    font-size: 16px;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn 
{
    background-color: red;
}

.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a 
{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover 
{
    background-color: #ddd;
}

.dropdown:hover .dropdown-content 
{
  display: block;
}

#searchButton 
{
  background-color: #EE8A6E;
  color: white;
  padding: 3px 10px;
  margin: 8px 0;
  border: 1PX;
  cursor: pointer;
  width: 10%;
}

button:hover 
{
    opacity: 0.8;
} 

.container 
{
    padding: 16px;
}

#bugReportTable { 
  border-collapse: collapse;
  width: 100%;
}

#bugReportTable td, #bugReportTable th 
{ 
  border: 1px solid #ddd;
  padding: 8px;
}

#bugReportTable tr:hover {background-color: #ddd;}

#bugReportTable th 
{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #EE8A6E;
  color: white;
}

#txtbox {
  width: 60%;
  padding: 3px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.custom-select 
{
    display: inline-block;
}

</style>
<body class="w3-light-grey">

<!-- Navigation bar -->
<div class="navbar">
  <a href="BRhome.php" class="w3-bar-item w3-button">Home <i class="fa fa-home"></i></a>
  <div class="dropdown">
    <button class="dropbtn">Bug Reporter Account <i class='fa fa-user'></i> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ReportBug.php">Report Bug</a>
      <a href="PostComment.php"> Generate Report</a>
    </div>
  </div> 
  <a href="logout.php" style="float: right">Logout</a>
</div>

 <!-- Header -->
<header class="w3-container w3-center w3-padding-30 w3-white">
  <h1 >Hi,<b> 
  <?php 
  session_start();
  if(isset($_SESSION["username"]) && $_SESSION["username"])
  {
    echo $_SESSION['username'];
  }
  ?></b>. Welcome to our site.</h1> 
</header>
  
<!-- Start of page content -->
<div class="w3-content" style="max-width:1550px">

<!-- Body --> 
<header class="w3-container w3-center w3-padding-48 w3-light-grey">
<form action="searchRent.php" method="post">
  <div class="container">
    Search by:
    <div class="custom-select">
      <select name="type">
        <option value="title">Title</option>
        <option value="keyword">Keyword</option>
        <option value="assignee">Assignee</option>    
       
    </select>
  </div>
    <input id="txtbox" type="text" name="search_word" required>
    <input id ="searchButton" type="submit" name="search" value="Search" />
</form>
<?php
// Create connection 
$mysqli = new mysqli('localhost', 'root', '', 'SDMMobs');

$sql = "SELECT * FROM bugreports WHERE bug_status = 'open'";

if ($res = $mysqli->query($sql))
{
	if($res->num_rows > 0)
	{
		// Create table to display results 
		echo "<h2>Bug Report</h2>";
		echo "<table id='bugReportTable'>\n";
		//  echo "<thead class=\"thead-light\">\n";
		echo "<tr>\n";
		echo "<th field=\"col\">ID</th>";
		echo "<th field=\"col\">Bug_Title</th>";
		echo "<th field=\"col\">Bug_Description</th>";
		echo "<th field=\"col\">Bug_keyword</th>";
		echo "<th field=\"col\">Bug_Status</th>";
		echo "<th field=\"col\">Bug_Open_Date</th>";
		echo "<th field=\"col\">Bug_Closed_Date</th>";
		echo "<th field=\"col\">Severity_level</th>";
		echo "<th field=\"col\">Action</th>";

		echo "</tr>\n";
		// echo "</thead>\n";

		while($row = $res->fetch_array())
		{
			echo "<tr>\n";
			echo "<th field=\"row\">". $row['bug_id']."</th>";
			echo "<td>".$row['bug_title']."</td>";
			echo "<td>".$row['bug_description']."</td>";
			echo "<td>".$row['bug_keyword']."</td>";
			echo "<td>".$row['bug_status']."</td>";
			echo "<td>".$row['bug_open_date']."</td>";
			echo "<td>".$row['bug_closed_date']."</td>";
			echo "<td>".$row['bug_severity_lvl']."</td>";
			echo "<td>";
			echo "<a href='read.php?bug_id=". $row['bug_id'] ."' title='View Report' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
			echo "<a href='update.php?bug_id=". $row['bug_id'] ."' title='Update Report' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
			echo "<a href='delete.php?bug_id=". $row['bug_id'] ."' title='Delete Report' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
			echo "<td>";
			echo "</tr>\n";
		}
	}
	else  {  echo "<h2>No Bug Report</h2>"; }
	echo "</table>\n";
	echo "<br>";
}
?>

<br />
</html>
