<?php

require_once("common.php");

//$_SESSION

if($_SERVER["REQUEST_METHOD"] == "GET")
{
	?>
	
		<form method="POST" action="login.php">
			<input type="text" name="username">
			<input type="password" name= "password">
			<button type="submit">Submit</button>
		</form>
	
	<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//sanity checks
	
	if($_POST["username"] == "admin" && $_POST["password"] == "password")
	{
		
			$_SESSION["username"] = "admin";


	} else if($_POST["username"] == "user" && $_POST["password"] == "user")
	{
			$_SESSION["username"] = "user";
	}
	else {
		//come back
		session_destroy();
		$_SESSION = array();
		session_write_close();
		header("Location: login.php");
		exit();
	}
	
}
else {
	exit("unsupported");
}
