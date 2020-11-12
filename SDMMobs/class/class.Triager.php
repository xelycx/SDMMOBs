<?php

class Triager extends User
{
	function ViewOpenBugs()
	{
		
	}
	
	function AssignBugToDeveloper()
	{
		//search database BugReport table by id and change assignee field
	}
	
	function UpdateBugStatusClosed($id)
	{
		//search database BugReport table by id and set status as closed
	}
}


?>