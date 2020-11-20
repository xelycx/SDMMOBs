<?php
	$sc = new getAssigneeSearchController();
	$bugs = $sc->SearchForBugByAssignee($searchVal);
	include 'boundary/BugReportListView.php';
?>
