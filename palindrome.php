<?php

$word = "pool";

$palStack = array();

for($ct = 0; $ct < strlen($word); $ct++)
{
	array_push($palStack, $word[$ct]);
}

$isPal = true;

for($ct = 0; $ct < strlen($word); $ct++)
{
	$currentValue = array_pop($palStack);
	if($currentValue != $word[$ct])
	{
		$isPal = false;
		break;
	}
}

if($isPal == true)
{
	echo "This is a palindrome!";
}
else {
	echo "This is not a palindrome!";
}


