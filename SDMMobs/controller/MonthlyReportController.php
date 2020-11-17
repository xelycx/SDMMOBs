<?php

include_once("entity/class.Triager.php");


class MonthlyReportController {
	
	function MonthlyReport(){

		$fetchMonthly = new Triager();
		$result = $fetchMonthly->getMonthlyReport();
		
		return $result;
	}
}
?>