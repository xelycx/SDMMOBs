<?php 
//http://localhost/SDMMobs/indexbugreportlist.php
	include_once("controller/BugReportController.php");

	$bugReportController = new BugReportController();
	$bugReportController->invoke();

?>