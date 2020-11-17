<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Triager.php';



class updateToCloseController {
	
	function solvedBugReport($bugID) {
		$update = new Triager();
		$update->solvedBugReport($bugID);
	}
}
?>