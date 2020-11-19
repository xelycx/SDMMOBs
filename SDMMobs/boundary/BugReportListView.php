<html>
<style>
#bugReportTable { 
  border-collapse: collapse;
  width: 100%;
}

#bugReportTable td, #bugReportTable th 
{ 
  border: 2px solid #000;
  padding: 5px;
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
<style>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1300px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin: 0px 2px 0px 2px;
        }
    </style>
	
	<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>

<body>
<div class="wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table>
					<?php
						include_once("controller/BugReportController.php");
						// $rowtmp = mysqli_fetch_assoc($bugs);
						// echo $rowtmp['0'];
						if(mysqli_num_rows($bugs)>0)
						{
							// echo "<table class='table table-bordered table-striped'>";
							// 	echo "<thead>";
							// 		echo "<tr>";
							// 			echo "<th>id</th>";
							// 			echo "<th>Title</th>";
							// 			echo "<th>Description</th>";
							// 			echo "<th>Status</th>";
							// 			echo "<th>Assignee</th>";
							// 			echo "<th>Create date</th>";
							// 			echo "<th>Close date</th>";
							// 			echo "<th>Severity level</th>";
							// 			echo "<th>Action</th>";
							// 		echo "</tr>";
							// 	echo "</thead>";
								
							// 	echo "<tbody>";
							// 	while($row = mysqli_fetch_assoc($bugs))
							// 	{
							// 		echo "<tr>";
							// 		echo "<td>" . $row['bug_id'] . "</td>";
							// 		echo "<td>" . $row['bug_title'] . "</td>";
							// 		echo "<td>" . $row['bug_description'] . "</td>";
							// 		echo "<td>" . $row['bug_status'] . "</td>";
							// 		echo "<td>" . $row['bug_developer'] . "</td>";
							// 		echo "<td>" . $row['bug_open_date'] . "</td>";
							// 		echo "<td>" . $row['bug_close_date'] . "</td>";
							// 		echo "<td>" . $row['bug_severity_lvl'] . "</td>";
							// 		echo "<td>";
							// 			//echo implode(" ",$row);
							// 			echo "<a href='indexbugreportlist.php?bug_id=". $row['bug_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
							// 			echo "<a href='update.php?bug_id=". $row['bug_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
							// 			echo "<a href='delete.php?bug_id=". $row['bug_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
							// 		echo "</td>";
									
							// 		echo "</tr>";
							// 	}
							// 	echo "</tbody>";
							// echo "</table>";

							// Create table to display results 
						    echo "<h3><B>Bug Reports<B></h3>";
						    echo "<table id='bugReportTable'>\n";
						    //  echo "<thead class=\"thead-light\">\n";
						    echo "<tr>\n";
						    echo "<th field=\"col\">ID</th>";
						    echo "<th field=\"col\">Title</th>";
						    echo "<th field=\"col\">Description</th>";
						    echo "<th field=\"col\">Status</th>";
						    echo "<th field=\"col\">Open Date</th>";
						    echo "<th field=\"col\">Close Date</th>";
						    echo "<th field=\"col\">Severity level</th>";
						    echo "<th field=\"col\">Bug Reporter</th>";
						    echo "<th field=\"col\">Triager</th>";
						    echo "<th field=\"col\">Assignee</th>";
						    echo "<th field=\"col\">Reviewer</th>";
						    echo "<th field=\"col\">Action</th>";

						    echo "</tr>\n";
						    // echo "</thead>\n";

						    while($row = mysqli_fetch_assoc($bugs))
						    {
						      echo "<tr>\n";
						      echo "<td>".$row['bug_id']."</td>";
						      echo "<td>".$row['bug_title']."</td>";
						      echo "<td>".$row['bug_description']."</td>";
						      echo "<td>".$row['bug_status']."</td>";
						      echo "<td>".$row['bug_open_date']."</td>";
						      echo "<td>".$row['bug_close_date']."</td>";
						      echo "<td>".$row['bug_severity_lvl']."</td>";
						      echo "<td>".$row['bug_reporter']."</td>";
						      echo "<td>".$row['bug_triager']."</td>";
						      echo "<td>".$row['bug_developer']."</td>";
						      echo "<td>".$row['bug_reviewer']."</td>";
						      echo "<td>";
						        echo "<a href='indexbugreportlist.php?bug_id=". $row['bug_id'] ."' title='View Report' data-toggle='tooltip'><img src=\"./assets./eye.png\"  style=\"width:20px;height:20px;\"/></a>&nbsp&nbsp";
						        echo "<a href='updateBugReport.php?bug_id=". $row['bug_id'] ."' title='Update Report' data-toggle='tooltip'><img src=\"./assets./pencil.png\"  style=\"width:20px;height:20px;\"/></a>&nbsp&nbsp";
						        echo "<a href='deleteBugReport.php?bug_id=". $row['bug_id'] ."' title='Delete Report' data-toggle='tooltip'><img src=\"./assets./bin.png\"  style=\"width:20px;height:20px;\"/></a>";
						      echo "</td>";
						      echo "</tr>\n";
						    }
						  }
						  else  {  echo "<h2>No Bug Report</h2>"; }
						  echo "</table>\n";
						  echo "<br>";

						  echo "Number of bug reports: " . mysqli_num_rows($bugs);
					?>
				</table>
			</div>
		</div>        
	</div>
</div>

</body>
</html>