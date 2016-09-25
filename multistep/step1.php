<?php

$title = "Step 1";

require_once("common.php");
require_once("validation.php");

//var_dump($_SESSION);

saveFormPOSTData();

if($_SERVER["REQUEST_METHOD"] == "POST")
{

	if(isStepOneValid())
	{
		//Goto step2
		header("Location: step2.php");
		exit();
	}
	else {
		header("Location: step1.php");
		exit();
	}
	
}

require_once("header.php");


?>


<form action="step1.php" method="POST">
	
	
	
	<?php 
	
	ob_start();
	
	?>
	
	<label>Username: <input type="text" name="username" value="<?php echo showPreviousValue("username"); ?>"></label>
	<?php showErrorsFor("username"); ?>
	
	<label>Password: <input type="password" name="password"></label>
	<?php showErrorsFor("password"); ?>
	
	<label>Verify Password: <input type="password" name="password2"></label>
	<?php showErrorsFor("password2"); ?>
	
	<button type="submit">Submit</button>
	
	<?php 
	
	$output = ob_get_clean();
	showRemainingErrors(); 
	
	echo $output;
	
	?>
	
	
	
	
	
</form>

<?php




require_once("footer.php");