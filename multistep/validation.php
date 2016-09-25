<?php

//Have all the validation logic

function showRemainingErrors()
{

	echo "<ul>";
	
	foreach($_SESSION["errors"] as $errorCategory)
	{
		foreach($errorCategory as $error)
		{
			echo "<li>$error</li>";
		}
	}
	
	echo "</ul>";
	
	unset($_SESSION["errors"]);
	
}

function showErrorsFor($field)
{
	if(isset($_SESSION["errors"][$field]))
	{
		echo "<ul>";
		
		foreach($_SESSION["errors"][$field] as $theError)
		{
			echo "<li>$theError</li>";
		}
		
		echo "</ul>";
		
	}
	
	unset($_SESSION["errors"][$field]);
	
}

function isStepTwoValid()
{
	
	unset($_SESSION["errors"]);
	
	
		
	if(isset($_SESSION["formData"]["email"]) == false)
	{
		$_SESSION["errors"]["email"][] = "You did not provide a email for me to use.";
	}
	
	
	return !isset($_SESSION["errors"]);
	
	
	
}


function isStepOneValid()
{
	unset($_SESSION["errors"]);
	
	if(isset($_SESSION["formData"]["username"]) == false)
	{
		$_SESSION["errors"]["username"][] = "You did not provide a username for me to use.";
	}
	
	if(strlen($_SESSION["formData"]["username"]) < 5  || strlen($_SESSION["formData"]["username"]) > 20)
	{
		$_SESSION["errors"]["username"][] = "Your username should be between 5 and 20 characters.";
	}
	
	if(strpos($_SESSION["formData"]["username"], "admin") !== false)
	{
		$_SESSION["errors"]["username"][] = "Your username should not contain words like admin.";
	}
	
	
	if(isset($_SESSION["formData"]["password"]) == false)
	{
		$_SESSION["errors"]["password"][] = "You did not provide a password for me to use.";
	}
	
	if(strlen($_SESSION["formData"]["password"]) < 5  || strlen($_SESSION["formData"]["password"]) > 20)
	{
		$_SESSION["errors"]["password"][] = "Your password should be between 5 and 20 characters.";
	}
	
	
	if($_SESSION["formData"]["password"] != $_SESSION["formData"]["password2"])
	{
		$_SESSION["errors"]["password"][] = "Your passwords do not match.";
	}
	
	
	//if(registrations != open)
	//{
		$_SESSION["errors"]["general"][] = "User Registration is Currently Closed.";		
//	}	
	
	
	return !isset($_SESSION["errors"]);
	
	
}
