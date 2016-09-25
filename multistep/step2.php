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
		header("Location: success.php");
		exit();
	}	
	else
	{
		header("Location: step2.php");
		exit();
		//redirect back to this page.
	}
}

require_once("header.php");



?>

<form action="step2.php" method="POST">
	<label>Email: <input type="text" name="email"  value="<?php echo showPreviousValue("email"); ?>"></label>
		<?php showErrorsFor("email"); ?>
	
	
	<label>First:  <input type="text" name="first"  value="<?php echo showPreviousValue("first"); ?>"></label>
		<?php showErrorsFor("first"); ?>
	
	<label>Last: <input type="text" name="last"  value="<?php echo showPreviousValue("last"); ?>"></label>
		<?php showErrorsFor("last"); ?>
	
	<button type="submit">Submit</button>
</form>


<?php

require_once("footer.php");