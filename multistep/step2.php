<?php


require_once("common.php");
require_once("validation.php");

saveFormPOSTData();

if(!isStepOneValid())
{
	header("Location: step1.php");
	exit();
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isStepTwoValid())
	{
		//Goto success
	}	
	else
	{
		//redirect back to this page.
	}
}

require_once("header.php");



?>

<form action="step2.php" method="POST">
	<label>Email: <input type="text" name="email"></label>
	
	
	
	<label>First:  <input type="text" name="first"></label>
	
	
	<label>Last Name: <input type="text" name="last"></label>
	<button type="submit">Submit</button>
</form>


<?php

require_once("footer.php");