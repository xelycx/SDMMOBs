<?php

include_once("../../class.Triager.php");

class updateToCloseController {
	
	function solvedBugReport($bugID) {
		$update = new Triager();
		$update->solvedBugReport($bugID);
	}
}
?>