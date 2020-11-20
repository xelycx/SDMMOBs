<?php
include_once("entity/class.BugReport.php");

class BugReportController
{
	public $bugreport;
	
	public function __construct()  
    {  
        $this->bugreport = new BugReport();
    } 
	
	public function display()
	{
		if (!isset($_GET['bug_id']))
		{
			// no bugreport is requested, show a list of all bugreport
			$bugs = $this->bugreport->ViewBugReportList();
			include 'boundary/BugReportListView.php';
		}
		else
		{
			// show the requested bug report
			$bug = $this->bugreport->ViewBugReport($_GET['bug_id']);
			include 'boundary/viewBugReportUI.php';
			
			// $bug = $this->bugreport->SearchForBugByKeyword("desc");
			// echo implode(" ",$bug);
		}
	}
}

?>