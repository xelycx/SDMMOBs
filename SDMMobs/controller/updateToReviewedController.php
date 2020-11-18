<?php
include_once("entity/class.Reviewer.php");


class updateToReviewedController {
	
	function updateBugStatus($bugID) {
		$tmp_update = new Reviewer();
		$tmp_update->updateBugStatus($bugID);
	}
}
?>