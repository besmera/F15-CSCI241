<?php

$animal = $_GET["animal"];

echo "<h1>$animal</h1><ul>";

$animalFile = fopen("info/" . $animal, "r");

if(!is_resource($animalFile))
{
	echo "Couldn't open the file";
	exit();
}


while($line = fgets($animalFile))
{
	echo "<li>$line</li>";
}

echo "</ul>";


fclose($animalFile);