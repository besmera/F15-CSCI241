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
	else {
		header("Location: /~acc.besmera2/F15-CSCI241/callList/callList.php");
	}

	//Display company details 

}
else
{
	echo "<ul>";
	foreach($companies as $company)
	{
		//$company[0] //id
		//$company[1] //Comany name
		
		echo "<li><a href='callList.php?company={$company[0]}'>{$company[1]}</a></li>";
	}
	// Display a list companies 
	echo "<ul>";
}

