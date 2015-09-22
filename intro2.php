<?php

//echo (PHP_INT_MAX+2);

//echo floor((0.1+0.7)*10);

//echo sqrt(-1);



/*$greeting = 'Hello';
$name = "$greeting Andrew Besmer";
echo $name;
 
 */
 
/*
$name = 'Pat O\'Neil';
echo $name;
 */

 /* 
$name = "Hello \r\n World";
echo $name;
 */

/*
$greeting = "Hello!";
$longText = <<<EOF
$greeting
This is some longer text.
All of this will wind up in the string.
If can go on for many lines.
EOF;

echo $longText;
*/

/*
$hello = "Hello";
$world = " World";

$helloWorld = $hello . $world;

echo $helloWorld;

*/


/*
$name = "137.7";

$name = (int)$name;

var_dump($name);

*/


/*
 
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
?>
<html> 
    <head>
        <title>Hello <?php echo $firstName . " " . $lastName . "!"; ?></title>
    </head>
    <body> 
        <form method="GET" action="intro2.php"> 
            First Name: <input type="text" name="firstName"></input><br /> 
            Last Name: <input type="text" name="lastName"></input>
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>

*/

/*

if($_SERVER["REQUEST_METHOD"]  == "GET")
{
	?>
	
	<form method="POST" action="intro2.php">
		<input type="checkbox" name="student">
		<input type="text" name="fullName">
		<input type="submit" value="submit" name="submit">
		
	</form> 
	
	<?php
} else if ($_SERVER["REQUEST_METHOD"]  == "POST")
{
	//Addition
	if(isset($_POST["student"]) == true)
	{
		echo "Hello " . $_POST["fullName"] . " you are a student.";
	}
	else
	{
		echo "Hello " . $_POST["fullName"] . " you are not a student.";	
	}
	
} else {
	//Unsupported
}

  
 */

$u = 0;
$v = "Andrew";
$w = true;
$x = 5;
$y = 22;
$z = false;

if(!$u && $v && (int)($w && $x) < (int)$y && ($z || $y)) 
{
	echo "true";
}
else {
	echo "false";
}

