<html>
<head></head>

<body>

<?php 

	echo 'Id:' . $bug->id . '<br/>';
	echo 'Title:' . $bug->title . '<br/>';
	echo 'Description:' . $bug->description . '<br/>';
	echo 'Status:' . $bug->status . '<br/>';
	echo 'Assignee:' . $bug->assignee . '<br/>';
	echo 'CreateDate:' . $bug->createDate . '<br/>';
	echo 'CloseDate:' . $bug->closeDate . '<br/>';
	echo 'SeverityLevel:' . $bug->severityLevel . '<br/>';
	
?>

</body>
</html>