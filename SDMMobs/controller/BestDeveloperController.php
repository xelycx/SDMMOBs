<?php

include_once("entity/class.Triager.php");

class BestDeveloperController {

	function BestDeveloper(){

		$fetchDeveloper = new Triager();
		$result = $fetchDeveloper->getBestDeveloper();
		
		return $result;
	}
}
?>