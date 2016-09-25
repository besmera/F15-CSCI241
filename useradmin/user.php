<?php


require_once("common.php");

if(!($_SESSION["username"] == "user" || $_SESSION["username"] == "admin"))
{
	exit("Page restricted");
}
?>

This page should be visible only to the user.