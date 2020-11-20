<?php
include_once("entity/class.BugReport.php");

class viewReviewedReportController
{
	function getReviewed()
	{
		$tmp_br = new BugReport();
		
		echo "<br><center><h1><B>Reviewed Bug Reports</B></h1></center>";
		$bugs = $tmp_br->GetReviewedBugReport();
		include 'boundary/BugReportListView.php';
	}
}

?>