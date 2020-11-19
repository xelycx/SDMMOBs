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
						include_once("controller/CommentsController.php");
						include_once("controller/UserController.php");
						
						if(mysqli_num_rows($comments)>0)
						{
							// Create table to display results 
						    echo "<h3><B>Comments<B></h3>";
						    echo "<table id='commentsTable'>\n";
							$userCtrl = new UserController();
						    while($row = mysqli_fetch_assoc($comments))
						    {
							  $uid = $row['user_id'];
						      echo "<tr>";
								  echo "<td>";
									//echo "User ID: ".$row['user_id']. " ";
									echo $userCtrl->GetUserNameById($uid);
								  echo "</td>";
								  echo "<td>" . "Comment Date: ".$row['comment_datetime']."</td>";
							  echo "</tr>";
							  echo "<tr>";
								  echo "<td>".$row['comment']."</td>";
							  echo "</tr>";
							  //echo "<br>";
							  //echo "<tr> fdg</tr>";
						    }
						  }
						  else  {  echo "<h2>No Bug Report</h2>"; }
						  echo "</table>\n";
						  echo "<br>";
						  echo "Total Comments: " . mysqli_num_rows($comments);
					?>
				</table>
			</div>
		</div>        
	</div>
</div>

</body>
</html>