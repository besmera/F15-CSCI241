<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		
	/*
$grades = array(88, 92, 75, 97);

var_dump($grades);
		*/
		/*
		$grades[] = 88;
var_dump($grades);
echo "<br>";		
$grades[] = 92;
var_dump($grades);
echo "<br>";
$grades[] = 75;
var_dump($grades);
echo "<br>";
$grades[] = 97;

var_dump($grades);
		*/
		
	/*	
	$grades = array(88, 92, 75, 97);
	unset($grades[0]);
		
	
	$grades[] = 100;
		
	var_dump($grades);
		*/
		
		/*
		
		 * $grades = array(88, 92, 75, 97);
		var_dump($grades);
		echo "<br>";
		
		foreach($grades as $grade)
		{
			echo $grade . "<br>";
		} 
		 */
		 /*
		  
		 
		 
		 $grades = array("test1" => 88, "test2" => 92, "hw1"=>75, "hw2" => 97);
		var_dump($grades);
		echo "<br>";
		
		foreach($grades as $assignmentName => $grade)
		{
			echo $assignmentName . ": " . $grade . "<br>";
		}
		  * 
		  */
		
		/*  
		$grades = array("Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97));
		echo "<pre>";
		var_dump($grades);
		echo "</pre>";
		*/
	/*	
		$grades =array(
			"Andrew" => array(
				"homeworks" => array("hw1" => 100),
				"tests" => array("test1" => 64, "midterm"=>100),
				"labs" => array("lab1"=> 70, "lab2"=>80)
			)
		);
		
		echo "<pre>";
		var_dump($grades);
		echo "</pre>";
		
		echo array_sum($grades["Andrew"]["tests"])/count($grades["Andrew"]["tests"]);
		
		*/
		
				  
		$grades = array(
			"Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
			"Bob" => array("test1" => 90, "hw1" => 99, "hw2" => 80, "midterm" => 100)
			);
		
		foreach($grades as $studentName => $studentGrades)
		{
				echo "<h1>$studentName Grades</h1>";
				echo "<ul>";
				foreach($studentGrades as $assignmentName => $grade )
				{
					echo "<li>$assignmentName : $grade</li>";
				}
				echo "</ul>";
		}
		
				
		?>
	</body>
</html>