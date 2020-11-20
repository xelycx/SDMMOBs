<?php
include_once("entity/class.BugReport.php");

class viewClosedReportController
{
	function getClosed()
	{
		$tmp_br = new BugReport();
		
		echo "<br><center><h1><B>Closed Bug Reports</B></h1></center>";
		$bugs = $tmp_br->GetClosedBugReport();
		include 'boundary/BugReportListView.php';
	}
}

?>