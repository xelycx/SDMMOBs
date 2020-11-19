<?php
include_once('entity/class.BugReport.php');

class Results
{
	public function searchByTitle($title)
	{
		$br = new BugReport();
		$result = $br->SearchForBugByTitle($title);
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
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
	}
	
	public function searchByKeyword($keyword)
	{
		$br = new BugReport();
		$result = $br->SearchForBugByKeyword($keyword);
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
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
	}
	
	public function searchByAssignee($assignee)
	{
		$br = new BugReport();
		$result = $br->SearchForBugByAssignee($assignee);
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
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
	}
	
}