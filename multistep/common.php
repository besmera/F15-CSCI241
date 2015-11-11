<?php

//For all the common functions and things we need to do like sessions

session_start();


function saveFormPOSTData()
{
	//$_POST
	foreach($_POST as $field => $value)
	{
		$_SESSION["formData"][$field] = $value;
	
	}	
}


function showPreviousValue($field)
{
	if(isset($_SESSION["formData"][$field]))
	{
		return $_SESSION["formData"][$field];
	}
	else {
		return "";
	}
}
