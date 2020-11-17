<html>
<head></head>

<body>

<?php 

	echo 'Id:' . $bug->bug_id . '<br/>';
	echo 'Title:' . $bug->bug_title . '<br/>';
	echo 'Description:' . $bug->bug_description . '<br/>';
	echo 'Status:' . $bug->bug_status . '<br/>';
	echo 'Assignee:' . $bug->bug_developer . '<br/>';
	echo 'CreateDate:' . $bug->bug_open_date . '<br/>';
	echo 'CloseDate:' . $bug->bug_close_date . '<br/>';
	echo 'SeverityLevel:' . $bug->bug_severity_lvl . '<br/>';
	
?>

</body>
</html>