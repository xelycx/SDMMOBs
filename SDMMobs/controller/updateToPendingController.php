<?php
include_once("entity/class.Developer.php");


class updateToPendingController {
	
	function updateBugStatus($bugID) {
		$update = new Developer();
		$update->updateBugStatus($bugID);
	}
}
?>