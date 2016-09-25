<?php 

/*
header("Set-Cookie: lastVisit=" . time());
if(!isset($_COOKIE["lastVisit"]))
{
	$_COOKIE["lastVisit"] = time();
}

echo "Hi there, your last visit was at " . $_COOKIE["lastVisit"];
*/

header("Set-Cookie: pages=" . base64_encode("1,3,5"));

$arrayPagesVisited = explode(",", base64_decode($_COOKIE['pages']));


