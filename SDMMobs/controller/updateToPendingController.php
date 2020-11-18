<?php
include_once("entity/class.Developer.php");


class updateToPendingController {
	
	function updateBugStatus($bugID) {
		$tmp_update = new Developer();
		$tmp_update->updateBugStatus($bugID);
	}
}
?>