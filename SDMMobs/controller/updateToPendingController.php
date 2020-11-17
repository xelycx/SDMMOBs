<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Developer.php';



class updateToPendingController {
	
	function updateBugStatus($bugID) {
		$update = new Developer();
		$update->updateBugStatus($bugID);
	}
}
?>