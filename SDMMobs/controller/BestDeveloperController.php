<?php

include_once("entity/class.Triager.php");

class BestDeveloperController {

	function BestDeveloper(){

		$tmp_bestdev = new Triager();
		$result = $tmp_bestdev->getBestDeveloper();
		
		return $result;
	}
}
?>