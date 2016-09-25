<?php

$companiesFile = fopen("callList.csv", "r");

$companies = array();

if(isset($_COOKIE['called']))
{
		
	$cookieData = $_COOKIE['called']; //MSwzLDU=
	$decodedCookieData = base64_decode($cookieData); //1,3,5
	$called = explode("," , $decodedCookieData); //[ 1 , 3, 5 ]
		
		
	//populate the array based on the cookie data
	
	//$called = explode(",", base64_decode($_COOKIE['called']));
	
}
else
{
	$called = array();
}

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

/*
var_dump($companies);
exit();
*/

if(isset($_GET["company"]))
{
	
	$company = (int) $_GET["company"];
	
	if(isset($companies[$company - 1]))
	{
		
		if(!in_array($company, $called))
		{
			$called[] = $company;
		}
		
		
		//header("Set-Cookie: called=" . base64_encode(implode(",", $called)) . "; Expires=Wed 28 Oct 2015 22:00:00 GMT");
		
		//header("Set-Cookie: called=" . base64_encode(implode(",", $called)) . "; Expires=Thu 01 Jan 1970 00:00:01 GMT");
		$name = "called";
		setrawcookie($name, base64_encode(implode(",", $called)), time() +  60*60*24);
		
		echo "<p>Name: " . $companies[$company - 1][1]  . "</p>";
		echo "<p>Phone: " . $companies[$company - 1][2]  . "</p>";
		echo "<a href='callList.php'>Home</a>";
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
		
		
		
		if(!in_array($company[0], $called))
		{
		echo "<li><a href='callList.php?company={$company[0]}'>{$company[1]}</a>";
		echo "</li>";
			
		}
		
		
		
	}
	// Display a list companies 
	echo "<ul>";
}

