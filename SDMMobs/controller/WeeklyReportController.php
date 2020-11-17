<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Triager.php';


class WeeklyReportController {
	
	function WeeklyReport(){

		$fetchWeekly = new Triager();
		$result = $fetchWeekly->getWeeklyReport();
		
		return $result;
	}
	
	
	//?????????????
	function weeklyBugDate(){

		$fetchWeekly = new Triager();
		$result = $fetchWeekly->getWeeklyBugDate();
		
		return $result;
	}
}
?>