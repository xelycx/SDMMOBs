<?php
include_once("entity/class.Triager.php");


class updateToCloseController {
	
	function solvedBugReport($bugID) {
		$update = new Triager();
		$update->solvedBugReport($bugID);
	}
}
?>