<?php
include_once("entity/class.BugReporter.php");
include_once("entity/class.BugReport.php");

class CreateBugReportController
{
    function createBugReport($title, $description, $bug_severity_lvl)
	{
        $br = new BugReporter($_SESSION['username']);
        $bugReport = new BugReport();

        if($br->getUsername() == "")
            $check = false;
        else
            $check = $bugReport->createBugReport($br->getUsername(), $title, $description, $bug_severity_lvl);

        return $check;
    }
}
?>