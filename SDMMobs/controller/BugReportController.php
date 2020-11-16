<?php
include_once("../../class.BugReport.php");

class BugReportController
{
	public $bugreport;
	
	public function __construct()  
    {  
        $this->bugreport = new BugReport();
    } 
	
	public function invoke()
	{
		if (!isset($_GET['bugreport']))
		{
			// no bugreport is requested, show a list of all bugreport
			$bugs = $this->bugreport->ViewBugReportList();
			//include 'boundary/BugReportListView.php';
		}
		else
		{
			// show the requested bug report
			$bug = $this->bugreport->ViewBugReport($_GET['bugreport']);
			//include 'boundary/BugReportView.php';
		}
	}
}

?>