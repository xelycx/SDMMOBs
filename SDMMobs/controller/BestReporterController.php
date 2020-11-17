<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Triager.php';


class BestReporterController {

	function BestReporter(){

		$fetchReporter = new Triager();
		$result = $fetchReporter->getBestReporter();
		
		return $result;
	}
}
?>