<?php
include_once("entity/class.BugReport.php");

class viewOpenReportController
{
	function getOpen()
	{
		$tmp_br = new BugReport();
		echo "<br><center><h1><B>Open Bug Reports</B></h1></center>";
		$bugs = $tmp_br->GetOpenBugReport();
		include 'boundary/BugReportListView.php';
	}
}

?>