<?php

include_once("../../class.Triager.php");

class BestReporterController {

	function BestReporter(){

		$fetchReporter = new Triager();
		$result = $fetchReporter->getBestReporter();
		
		return $result;
	}
}
?>