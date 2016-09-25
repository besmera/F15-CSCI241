<?php

/*function sayHello($prefix, $postfix)
{
    return $prefix . " " . $postfix . "\n";
}
*/
//echo sayHello("Hello", "World"); // "Hello World";

//echo sayHello("World", "Hello"); // "World Hello"

//echo sayHello("Hello");

/*
function sayHello($prefix = "Hello", $postfix = "there")
{
    return $prefix . " " . $postfix . "\n";
}
*/

//echo sayHello("Hello", "World"); // "Hello World"

//echo sayHello("Hello"); // "Hello there"

//echo sayHello(); // "Hello there"

//echo sayHello(NULL, "World"); // " World"

//echo sayHello("Hello", NULL); // "Hello "

//echo sayHello(NULL); //" there"

/*
function sayHello()
{
    echo "Hello World!";
}

function sayHello()
{
    echo "Hello World!";
}

sayHello();
*/

/*
if(isset($_GET["registerFunction"]))
{
	function sayHello()
	{
	    echo "Hello World!";
	}
}

sayHello();

*/

/*
function getNum()
{
    $num = getFive(); //num="five"
    return $num;
}

function getFive()
{
    return "five";
}

echo "High " . getNum() . "!"; //"High five!"
*/

/*
function getNum($num)
{
    return $num;
}

function getFive()
{
    return "five";
}

echo "High " . getNum("five") . "!"; //"High five!"

*/

//var_dump($_SERVER);

/*
function world()
{
    $world = "world";
}

world();
echo "Hello " . $world;
*/

/*
function world()
{
    $world = "world";
}

echo "Hello " . world();
*/

/*
$hello = "hello";

function world()
{
	echo $hello . " world";
}

world();
*/


/*
$hello = "hello";

function world()
{
    echo $GLOBALS["hello"] . " world";
}

world();

*/


/*
function hello()
{
    $hello = "hello";
}

function world()
{
    $world = "world";
    echo $hello . " " . $world;
}

hello();
world();

*/

/*
function hello()
{
    $hello = "hello";
}

function world()
{
    hello();
    $world = "world";
    echo $hello . " " . $world;
}

world();
*/

/*
function world()
{
    echo $_SERVER["REQUEST_METHOD"];
}

world();
*/






