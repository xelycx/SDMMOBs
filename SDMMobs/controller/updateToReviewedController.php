<?php

include_once("../../class.Reviewer.php");

class updateToReviewedController {
	
	function updateBugStatus($bugID) {
		$update = new Reviewer();
		$update->updateBugStatus($bugID);
	}
}
?>