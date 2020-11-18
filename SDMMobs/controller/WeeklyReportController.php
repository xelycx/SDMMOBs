<?php

include_once("entity/class.Triager.php");

class WeeklyReportController {
	
	function WeeklyReport(){

		$tmp_weekly = new Triager();
		$result = $tmp_weekly->getWeeklyReport();
		
		return $result;
	}
	
	
	//?????????????
	function weeklyBugDate(){

		$tmp_weekly = new Triager();
		$result = $tmp_weekly->getWeeklyBugDate();
		
		return $result;
	}
}
?>