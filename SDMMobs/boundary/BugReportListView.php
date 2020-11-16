<html>
<head></head>

<body>

<table>
	<tr><td>id</td><td>Title</td><td>Description</td><td>Status</td><td>Assignee</td><td>Create date</td><td>Close Date</td><td>Severity level</td></tr>
	<?php 

		foreach ($bugs as $title => $bug)
		{
			echo '<tr><td><a href="index.php?bug='.$bug->title.'">'.$bug->title.'</a></td><td>'.$book->description.'</td><td>'.$book->status.'</td><td>'.$book->assignee.'</td><td>'.$book->Status.'</td><td>'.$book->createDate.'</td><td>'.$book->closeDate.'</td><td>'.$book->severityLevel.'</td></tr>';
		}

	?>
</table>

</body>
</html>