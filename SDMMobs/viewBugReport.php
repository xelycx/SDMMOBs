<?php 
	include_once("controller/BugReportController.php");

	$bugReportController = new BugReportController();
	$bugReportController->display();
	include_once("BackButton.php");
?>