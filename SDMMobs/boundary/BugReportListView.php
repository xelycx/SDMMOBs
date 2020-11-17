<html>
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
            margin-right: 15px;
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
							echo "<table class='table table-bordered table-striped'>";
								echo "<thead>";
									echo "<tr>";
										echo "<th>id</th>";
										echo "<th>Title</th>";
										echo "<th>Description</th>";
										echo "<th>Status</th>";
										echo "<th>Assignee</th>";
										echo "<th>Create date</th>";
										echo "<th>Close date</th>";
										echo "<th>Severity level</th>";
										echo "<th>Action</th>";
									echo "</tr>";
								echo "</thead>";
								
								echo "<tbody>";
								while($row = mysqli_fetch_assoc($bugs))
								{
									echo "<tr>";
									echo "<td>" . $row['bug_id'] . "</td>";
									echo "<td>" . $row['bug_title'] . "</td>";
									echo "<td>" . $row['bug_description'] . "</td>";
									echo "<td>" . $row['bug_status'] . "</td>";
									echo "<td>" . $row['bug_developer'] . "</td>";
									echo "<td>" . $row['bug_open_date'] . "</td>";
									echo "<td>" . $row['bug_close_date'] . "</td>";
									echo "<td>" . $row['bug_severity_lvl'] . "</td>";
									echo "<td>";
										//echo implode(" ",$row);
										echo "<a href='indexbugreportlist.php?bug_id=". $row['bug_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
										echo "<a href='update.php?bug_id=". $row['bug_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
										echo "<a href='delete.php?bug_id=". $row['bug_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
									echo "</td>";
									
									echo "</tr>";
								}
								echo "</tbody>";
							echo "</table>";
							
							echo "Number of bug reports: " . mysqli_num_rows($bugs);
							
							// foreach ($bugs as $title => $bug)
							// {
								// echo '<tr>
								// <td>
								// <a href="indexbugreportlist.php?bug='.$bug->title.'">'.$bug->stripslashes(title).'
								// </a>
								// </td>
								// <td>'.$bug->description.'
								// </td>
								// <td>'.$bug->status.'
								// </td>
								// <td>'.$bug->assignee.'
								// </td>
								// <td>'.$bug->Status.'
								// </td>
								// <td>'.$bug->createDate.'
								// </td>
								// <td>'.$bug->closeDate.'
								// </td>
								// <td>'.$bug->severityLevel.'
								// </td>
								// </tr>';
							// }
							
						}

					?>
				</table>
			</div>
		</div>        
	</div>
</div>

</body>
</html>