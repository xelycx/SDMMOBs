<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Triager.php';



class BestDeveloperController {

	function BestDeveloper(){

		$fetchDeveloper = new Triager();
		$result = $fetchDeveloper->getBestDeveloper();
		
		return $result;
	}
}
?>