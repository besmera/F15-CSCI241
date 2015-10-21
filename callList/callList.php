<?php


$companiesFile = fopen("callList.csv", "r");

$companies = array();

if(!is_resource($companiesFile))
{
	echo "Could not open the companies file.";
	exit();
}


while($line = fgets($companiesFile))
{
	$companies[] = explode(",",$line);
	
}


fclose($companiesFile);


if(isset($_GET["company"]))
{
	$company = (int) $_GET["company"];
	
	if(isset($companies[$company - 1]))
	{
		echo "<p>Name: " . $companies[$company - 1][1]  . "</p>";
		echo "<p>Phone: " . $companies[$company - 1][2]  . "</p>";
	}
	
	//Display company details 
	
}
else
{
	$company = "";
	
	// Display a list companies 
}
	
