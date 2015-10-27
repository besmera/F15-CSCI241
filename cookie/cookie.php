<?php 

header("Set-Cookie: lastVisit=" . time());
if(!isset($_COOKIE["lastVisit"]))
{
	$_COOKIE["lastVisit"] = time();
}

echo "Hi there, your last visit was at " . $_COOKIE["lastVisit"];
