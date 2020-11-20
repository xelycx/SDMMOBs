<?php
	$sc = new getKeywordSearchController();
	$bugs = $sc->SearchForBugByKeyword($searchVal);
	include 'boundary/BugReportListView.php';
?>
