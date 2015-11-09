<?php

//For all the common functions and things we need to do like sessions


function saveFormPOSTData()
{
	//$_POST
	foreach($_POST as $field => $value)
	{
		$_SESSION["formData"][$field] = $value;
	
	}	
}
