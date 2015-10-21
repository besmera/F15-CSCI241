<?php

function calculateSaltCost($pounds)
{
		//Return back the cost of the salt
		return $pounds * .14;
}


echo calculateSaltShippingCost(-2001);

function calculateSaltShippingCost($pounds)
{
	//Goal: Return back the cost of the shipping
	
	//Figure out how many bags of salt I am shipping
	$bags = ceil($pounds/50);
	
	//Figure out how many pallets
	$pallets = (int)($bags / 40);
	$bags = $bags % 40;
	
	//Figure out how many gaggles
	$gaggles = (int) ($bags / 8);
	$bags = $bags % 8;
	
	//Figure out how many single bags are left
	//Already done!

	//echo "$pallets $gaggles $bags";
		
	//Calculate the cost of shipping that number of pallets, gaggles, and bags
	return (50*$pallets) + (12 * $gaggles) + (5*$bags);
	
}
