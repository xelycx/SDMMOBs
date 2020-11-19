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



#txtbox {
  width: 60%;
  padding: 3px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#txtbox2 {
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

table.SearchTable
{
  width: 60%;
  margin-left: auto;
  margin-right: auto;
}

</style>
<?php
// Start the session
session_start();

include_once('Results.php');
$result = new Results();

if (isset($_POST['search'])) {
	$type = $_POST['type'];
	$search_word = $_POST['search_word'];
	$title = "title";
	$keyword = "keyword";
}

?>

<body class="w3-light-grey">

<!-- Navigation bar -->
<div class="navbar">
  <a href="BRhome.php" class="w3-bar-item w3-button">Home <i class="fa fa-home"></i></a>
<!--  <div class="dropdown">
    <button class="dropbtn">Bug Reporter Account <i class='fa fa-user'></i> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ReportBug.php">Report Bug</a>
      <a href="PostComment.php"> Generate Report</a>
    </div>
  </div> -->
     <?php
                  if ($_SESSION['user_role'] == "triager")
                  {
                    echo'
                     <div class="dropdown">
                          <button class="dropbtn">Bug Triager Account <i class=\'fa fa-user\'></i> 
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                            <a href="generateReport.php"> Generate Report</a>
                            <a href="open.php">open</a>
                            <a href="reviewed.php">reviewed</a>
                            <a href="closed.php">Closed</a>   
                          </div>
                        </div> 
                        ';
                  }

                  else if ($_SESSION['user_role'] == "developer")
                  {
                    echo'
                      <div class="dropdown">
                          <button class="dropbtn">Bug Developer Account <i class=\'fa fa-user\'></i> 
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                            <a href="generateReport.php"> Generate Report</a>
                            <a href="pendingAssign.php">Pending Assignment</a>            
                          </div>
                        </div> 
            
                    ';
                  }
                  else if ($_SESSION['user_role'] == "reviewer")
                  {
                    echo'
                      <div class="dropdown">
                          <button class="dropbtn">Bug  Reviewer Account <i class=\'fa fa-user\'></i> 
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                            <a href="generateReport.php"> Generate Report</a>
                            <a href="pendingReview.php">Pending Review</a>
                            
                          </div>
                        </div> 
              
                    ';
                  }
                  else if ($_SESSION['user_role'] == "bugreporter")
                  {
                    echo'
                    <div class="dropdown">
                          <button class="dropbtn">Bug  Reporter Account <i class=\'fa fa-user\'></i> 
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdown-content">
                           <a href="reportBug.php"> Report Bug</a>
                            <a href="generateReport.php"> Generate Report</a>
                            
                          </div>
                        </div>
                
                    ';
                  }    
              ?>
  
  <a href="index.php" style="float: right">Logout</a>
</div>

 <!-- Header -->
<header class="w3-container w3-center w3-padding-30 w3-white">
  <h1 >Hi,<b> 
  <?php 
  if(isset($_SESSION["username"]) && $_SESSION["username"])
  {
    echo $_SESSION['username'];
	echo $_SESSION['user_role'];
  }
  ?></b>. Welcome to bug report system.</h1> 
</header>
  
<!-- Start of page content -->
<div class="w3-content" style="max-width:1920px">

<!-- Body --> 
<header class="w3-container w3-center w3-padding-48 w3-light-grey">
<!-- <form action="searchRent.php" method="post">
  <div class="container">
    Search by:
    <div class="custom-select">
      <select name="searchType">
        <option value="title">Title</option>
        <option value="keyword">Keyword</option>
        <option value="assignee">Assignee</option>
      </select>
  </div>
    <input id="txtbox" type="text" name="search_word" required>
    <input id ="searchButton" type="submit" name="search" value="Search" />
</form> -->

<form action="result.php" method="post">
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
    <input id ="button" type="submit" name="search" value="Search" />
</form>

<button onclick="document.location='createBugReport.php'">Create Bug Report</button>

<!-- select change form -->
<table class = "SearchTable">
  <tr>
    <!-- <td>Search By</td> -->
    <td>
    <select onchange="changeOptions(this)">
      <option value="form_1">Title</option>
      <option value="form_2">Keyword</option>
      <option value="form_3">Assignee</option>
    </select>
    </td>
    <td>
    <form class="className" name="form_1" id="form_1" action="searchByTitle.php" method="post" style="display:block;">
      <!---- THIS IS FORM 1---->
      <input id="txtbox2" type="text" name="search_word" required>
      <input id ="searchButton2" type="submit" name="search" value="Search" />
    </form>
    </td>
    <td>
    <form class="className" name="form_2" id="form_2" action="searchByKeyword.php" method="post" style="display:none">
      <!---- THIS IS FORM 2---->
      <input id="txtbox2" type="text" name="search_word" required>
      <input id ="searchButton2" type="submit" name="search" value="Search" />
    </form>
    </td>
    <td>
    <form class="className" name="form_3" id="form_3" action="searchByAssignee.php" method="post" style="display:none">
      <!---- THIS IS FORM 3---->
      <input id="txtbox2" type="text" name="search_word" required>
      <input id ="searchButton2" type="submit" name="search" value="Search" />
    </form>
    </td>
  </tr>
</table>
<!-- select change form js -->
<script>
function changeOptions(selectEl) {
  let selectedValue = selectEl.options[selectEl.selectedIndex].value;
  let subForms = document.getElementsByClassName('className')
  for (let i = 0; i < subForms.length; i += 1) {
    if (selectedValue === subForms[i].name) {
      subForms[i].setAttribute('style', 'display:block')
    } else {
      subForms[i].setAttribute('style', 'display:none') 
    }
  }
}
</script>

<?php
  include_once("controller/BugReportController.php");

  $bugReportController = new BugReportController();
  $bugReportController->invoke();
  
  

if ($type == $title)
{
	echo $result->searchByTitle($search_word);
}
else if ($type == $keyword)
{
	echo $result->searchByKeyword($search_word);
}
else if ($type == $Assignee)
{
	echo $result->searchByAssignee($search_word);
}

// // Create connection 
// $mysqli = new mysqli('localhost', 'root', '', 'SDMMobs');

// $sql = "SELECT * FROM bugreports WHERE bug_status = 'open'";

// if ($res = $mysqli->query($sql))
// {
//   if($res->num_rows > 0)
//   {
//     // Create table to display results 
//     echo "<h3><B>Bug Reports<B></h3>";
//     echo "<table id='bugReportTable'>\n";
//     //  echo "<thead class=\"thead-light\">\n";
//     echo "<tr>\n";
//     echo "<th field=\"col\">ID</th>";
//     echo "<th field=\"col\">Title</th>";
//     echo "<th field=\"col\">Description</th>";
//     echo "<th field=\"col\">Status</th>";
//     echo "<th field=\"col\">Open Date</th>";
//     echo "<th field=\"col\">Close Date</th>";
//     echo "<th field=\"col\">Severity level</th>";
//     echo "<th field=\"col\">Action</th>";

//     echo "</tr>\n";
//     // echo "</thead>\n";

//     while($row = $res->fetch_array())
//     {
//       echo "<tr>\n";
//       echo "<td>".$row['bug_id']."</td>";
//       echo "<td>".$row['bug_title']."</td>";
//       echo "<td>".$row['bug_description']."</td>";
//       echo "<td>".$row['bug_status']."</td>";
//       echo "<td>".$row['bug_open_date']."</td>";
//       echo "<td>".$row['bug_close_date']."</td>";
//       echo "<td>".$row['bug_severity_lvl']."</td>";
//       echo "<td>";
//         echo "<a href='read.php?bug_id=". $row['bug_id'] ."' title='View Report' data-toggle='tooltip'><img src=\"./assets./eye.png\"  style=\"width:20px;height:20px;\"/></a>&nbsp&nbsp";
//         echo "<a href='update.php?bug_id=". $row['bug_id'] ."' title='Update Report' data-toggle='tooltip'><img src=\"./assets./pencil.png\"  style=\"width:20px;height:20px;\"/></a>&nbsp&nbsp";
//         echo "<a href='delete.php?bug_id=". $row['bug_id'] ."' title='Delete Report' data-toggle='tooltip'><img src=\"./assets./bin.png\"  style=\"width:20px;height:20px;\"/></a>";
//       echo "</td>";
//       echo "</tr>\n";
//     }
//   }
//   else  {  echo "<h2>No Bug Report</h2>"; }
//   echo "</table>\n";
//   echo "<br>";
// }
?>

<br />
</html>
