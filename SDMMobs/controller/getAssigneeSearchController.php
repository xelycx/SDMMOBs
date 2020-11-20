<?php
include_once("entity/class.BugReport.php");

class getAssigneeSearchController
{
	function SearchForBugByAssignee($assignee)
	{
		$bugreports = new BugReport();
		return $bugreports->SearchForBugByAssignee($assignee);
	}
}
?>