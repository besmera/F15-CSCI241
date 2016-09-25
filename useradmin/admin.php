<?php


require_once("common.php");

if($_SESSION["username"] != "admin")
{
	exit("Page restricted");
}
?>
This page should only be visible to the admin.