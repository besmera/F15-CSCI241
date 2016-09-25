<?php

$grades = array(
		"Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
		"Bob" => array("test1" => 90, "hw1" => 99, "hw2" => 80, "midterm" => 100)
	);


if($_SERVER["REQUEST_METHOD"] == "GET")
{
	//DOCT...
	if(isset($_GET["id"]))
	{
		//produce a detail screen
		echo "<h1>{$_GET['id']}</h1>";
		
		if(isset($grades[$_GET["id"]]))
		{
			echo "<ul>";
			foreach($grades[$_GET["id"]] as $assignmentName => $assignmentGrade)
			{
				echo "<li>$assignmentName : $assignmentGrade</li>";
			}
			echo "</ul>";
			
			echo "<a href='grades.php'>Back to list</a>";			
		}
		else
			{
				echo "That student doesn't exist in class... or maybe they just don't come.";
				echo "<a href='grades.php'>Back to list</a>";			
			}
		
		
	}
	else {
		echo "<ul>";
		foreach($grades as $studentName => $studentGrades)
		{
			echo "<li><a href='grades.php?id=$studentName'>$studentName</a></li>";
		}
		echo "</ul>";	
	}
	
}
		