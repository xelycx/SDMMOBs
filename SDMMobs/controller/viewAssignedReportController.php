<?php
include_once("entity/class.BugReport.php");
session_start();
class viewAssignedReportController
{
	function getAssign()
	{
		$tmp_br = new BugReport();
		
		echo "<br><center><h1><B>".$_SESSION['username']."'s assigned bug reports</B></h1></center>";
		$bugs = $tmp_br->GetAssignedBugReport($_SESSION['username']);
		include 'boundary/BugReportListView.php';
	}
}

?>