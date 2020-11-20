<?php
	$sc = new getTitleSearchController();
	$bugs = $sc->SearchForBugByTitle($searchVal);
	include 'boundary/BugReportListView.php';
?>
