<?php

$line = "1,Dictum Eu Company,1-194-286-3041";

/*
$currentElement = "";

$lineArray = array();

for($ct = 0; $ct < strlen($line); $ct++)
{
	if($line[$ct] == ",")
	{
		// ready to insert into the array
		$lineArray[] = $currentElement;
		$currentElement = "";
	}
	else
	{
		$currentElement .= $line[$ct];
	}
	
	
}

if($currentElement != "")
{
	$lineArray[] = $currentElement;
	$currentElement = "";
}



var_dump($lineArray);
*/


$lineArray = explode(",", $line);

//var_dump($lineArray);

$line = implode("|", $lineArray);

echo $line;









