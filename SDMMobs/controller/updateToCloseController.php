<?php
include_once("entity/class.Triager.php");


class updateToCloseController {
	
	function solvedBugReport($bugID) {
		$tmp_update = new Triager();
		$tmp_update->solvedBugReport($bugID);
	}
}
?>