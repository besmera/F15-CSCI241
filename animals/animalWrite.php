<?php

$animal = $_GET["animal"];

echo "<h1>$animal</h1><ul>";


$animalFile = fopen("info/" . $animal, "w");

if(!is_resource($animalFile))
{
	echo "Couldn't open the file";
	exit();
}

fwrite($animalFile, $_GET["message"]);

fclose($animalFile);