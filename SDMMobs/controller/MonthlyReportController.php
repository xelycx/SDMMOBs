<?php

include_once("entity/class.Triager.php");


class MonthlyReportController {
	
	function MonthlyReport(){

		$tmp_monthly = new Triager();
		$result = $tmp_monthly->getMonthlyReport();
		
		return $result;
	}
}
?>