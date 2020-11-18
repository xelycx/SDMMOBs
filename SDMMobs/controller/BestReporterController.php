<?php

include_once("entity/class.Triager.php");

class BestReporterController {

	function BestReporter(){

		$tmp_bestreporter = new Triager();
		$result = $tmp_bestreporter->getBestReporter();
		
		return $result;
	}
}
?>