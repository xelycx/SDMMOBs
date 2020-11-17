<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/Classes/Reviewer.php';



class updateToReviewedController {
	
	function updateBugStatus($bugID) {
		$update = new Reviewer();
		$update->updateBugStatus($bugID);
	}
}
?>