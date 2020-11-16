<html>
<head></head>

<body>

<table>
	<tr><td>id</td><td>Title</td><td>Description</td><td>Status</td><td>Assignee</td><td>Create date</td><td>Close Date</td><td>Severity level</td></tr>
	<?php 

		foreach ($bugs as $title => $bug)
		{
			echo '<tr><td><a href="indexbugreportlist.php?bug='.$bug->title.'">'.$bug->title.'</a></td><td>'.$bug->description.'</td><td>'.$bug->status.'</td><td>'.$bug->assignee.'</td><td>'.$bug->Status.'</td><td>'.$bug->createDate.'</td><td>'.$bug->closeDate.'</td><td>'.$bug->severityLevel.'</td></tr>';
		}

	?>
</table>

</body>
</html>