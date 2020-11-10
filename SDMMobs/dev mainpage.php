<?php
session_start();
echo '<h3>Developer Homepage, SDMMOBS ' .$_SESSION["username"].'</h3>';
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.reportbox {
    width: 300px;
    height: 300px;
	float: left;
    margin: auto;
    border: 1px solid black;
    overflow-y:auto;
}

.report {
    width: 275px;
    height: 52px;
    border: 1px solid black;
    font-size: 14px;
    margin: 2px;
    position: relative;
}

.description {
  color: black;
  cursor: pointer;
  width: 40px;
  height: 15px;
  border: 1px solid black;
  text-align: center;
  font-size: 10px;
}

.content {
  padding: 1px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

.openreport {
  color: black;
  cursor: pointer;
  width: 50px;
  height: 20px;
  border: 1px solid black;
  text-align: center;
  font-size: 12px;
  position: absolute;
  bottom: 1px;
  right: 1px;
}

.personalInfo {
	width: 300px;
    height: 100px;
	float: left;
    margin: auto;
    border: 1px solid black;
}
</style>
</head>
<body>

<div class="topnav">
  <label>Search (Enter keyword/title/assignee here):</label> <br/>
 <input type="text" name="search" size="31" class="form-control" />  
  <input type="submit" name="search" class="btn btn-info" value="Search" /><br/><br/>
  
  <label class="container">Title
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <label class="container">Keyword
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <label class="container">Assignee
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
  
</label>
<br/><br/>
<div class="reportbox">

	<div class="report">
    <td>Title: Bug Report 1</td><br>
    <td>Assignee: David Lee</td><br>
    <td>Description:</td>
    <button class="description">Open</button>
	<div class="content">
  	Upon trying to login to the website, i realised i could not type in my password for my account. please resolve this issue.
	</div>
    <div style="position: absolute; top: 0; right: 0; width: 97px; height: 20px; text-align:left;">
    Status:
    <input id="status" type="button" value="Pending" style=" width: 55px; height: 20px; border: 1px solid black; text-align: center; font-size: 10px;">
  	</div>
    <button class="openreport">Open</button>
    </div>
    
    <div class="report">
    </div>
    <div class="report">
    </div>
    <div class="report">
    </div>
    <div class="report">
    </div>
    <div class="report">
    </div>
</div>

<div style=" width: 300px; height: 20px; text-align:left;">
<th>Personal Info</th>

<div class="personalInfo">
<td>Name:</td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name" id="name" size="20" value="Darren Tay" readonly="readonly">
<input id="edit1" type="button" value="Edit" style=" width: 40px; height: 20px; border: 1px solid black; text-align: center; font-size: 10px; border:none">
<br/><br/>

<td>Specialties:</td>
<input type="text" name="specialty" id="specialty" size="20" value="Java, C++">
<input id="edit2" type="button" value="Edit" style=" width: 40px; height: 20px; border: 1px solid black; text-align: center; font-size: 10px; border:none">
<br/><br/>

<td>Status:</td><input id="availability" type="button" value="Available" style=" width: 80px; height: 20px; border: 1px solid black; text-align: center; font-size: 12px;">
</div>

<script>
var coll = document.getElementsByClassName("description");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

document.getElementById("status").addEventListener(
  "click",
  function(event) {
    if (event.target.value === "Pending") {
      event.target.value = "Reviewed";
    } else {
      event.target.value = "Pending";
    }
  },
  false
);

document.getElementById("edit1").addEventListener(
  "click",
  function(event) {
    if (event.target.value === "Edit") {
      event.target.value = "Save";
      document.getElementById('name').removeAttribute('readonly');
    } else {
      event.target.value = "Edit";
      document.getElementById('name').readOnly = true;
    }
  },
  false
);
  
document.getElementById("edit2").addEventListener(
  "click",
  function(event) {
    if (event.target.value === "Edit") {
      event.target.value = "Save";
      document.getElementById('specialty').removeAttribute('readonly');
    } else {
      event.target.value = "Edit";
      document.getElementById('specialty').readOnly = true;
    }
  },
  false
);

document.getElementById("availability").addEventListener(
  "click",
  function(event) {
    if (event.target.value === "Available") {
      event.target.value = "Unavailable";
    } else {
      event.target.value = "Available";
    }
  },
  false
);
</script>

</body>
</html>

