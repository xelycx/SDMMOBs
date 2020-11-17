<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Triager.php';



class MonthlyReportController {
	
	function MonthlyReport(){

		$fetchMonthly = new Triager();
		$result = $fetchMonthly->getMonthlyReport();
		
		return $result;
	}
}
?>