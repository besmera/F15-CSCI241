<?php

session_start();

if(!isset($_SESSION["ip"]))
{
	$_SESSION["ip"] = $_SERVER["REMOTE_ADDR"];	
}
else
{
	if($_SESSION["ip"] == $_SERVER["REMOTE_ADDR"])
	{
		//No problems
	}	
	else {
		session_destroy();
		$_SESSION = array();
		session_write_close();
		header("Location: login.php");
		exit();
	}
}
 
