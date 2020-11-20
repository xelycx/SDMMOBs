<?php
include_once("entity/class.BugReport.php");

class getTitleSearchController
{
	function SearchForBugByTitle($title)
	{
		$bugreports = new BugReport();
		return $bugreports->SearchForBugByTitle($title);
	}
}
?>