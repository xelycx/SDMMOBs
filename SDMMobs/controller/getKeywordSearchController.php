<?php
include_once("entity/class.BugReport.php");

class getKeywordSearchController
{
	function SearchForBugByKeyword($keyword)
	{
		$bugreports = new BugReport();
		return $bugreports->SearchForBugByKeyword($keyword);
	}
}
?>