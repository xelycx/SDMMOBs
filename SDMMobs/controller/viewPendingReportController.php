<?php
include_once("entity/class.BugReport.php");

class viewPendingReportController
{
	function getPending()
	{
		$tmp_br = new BugReport();
		
		echo "<br><center><h1><B>Bug reports pending review</B></h1></center>";
		$bugs = $tmp_br->GetPendingReviewBugReport();
		include 'boundary/BugReportListView.php';
	}
}

?>