<?php

$balance = 100;

$transactions = array(12, 10, 5, 4, 3, 24, 15, 22, 52);

rsort($transactions);

while($transaction = array_shift($transactions))
{
	$balance -= $transaction;
	if($balance < 0)
	{
		$balance -= 35;
	}
}

echo "Your account currently has in it $balance";
