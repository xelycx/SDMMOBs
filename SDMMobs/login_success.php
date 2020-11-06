<?php
session_start();
echo '<h3>Homepage, SDMMOBS ' .$_SESSION["username"].'</h3>';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="topnav">
  <label>Search (Enter keyword/title/assignee here):</label> <br/>
 <input type="text" name="search" class="form-control" />  
  <input type="submit" name="search" class="btn btn-info" value="Search" /><br/>
  
  <label class="container">Title
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
  <label class="container">Keyword
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
  <label class="container">Assignee
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
  
  
  
</label>
</div>

<div style="padding-left:16px">
  
</div>

</body>
</html>



