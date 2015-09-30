<?php

function subjects($field)
{
	if(isset($_POST[$field]))
	{
		switch ($_POST[$field])
		{
			case "CSCI":
				return "You like computer science!";
				break;
			case "MATH":
				return "You like mathmatics!";
				break;
			case "VCOM":
				return "You like visual communications!";
				break;
			default:
				return "You like something, that much I know!";
		}
	}
	
	return "You didn't send a field called " . $field;
	
}


if($_SERVER["REQUEST_METHOD"] == "GET")
{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Functions Example</title>
		</head>
		<body>
			<form action="functionsExample.php" method="POST">
				<label><input type="text" name="subject1"></label>
				<label><input type="text" name="subject2"></label>
				<label><input type="text" name="subject3"></label>
				<input type="submit" value="Submit">			
			</form>
		</body>
	</html>
	<?php
}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Functions Example</title>
		</head>
		<body>
			<?php
			
				echo subjects("subject1");
				echo subjects("subject2");
				echo subjects("subject3");
				echo subjects("subject4");					
			?>
		</body>
	</html>
	<?php	
}
else
{
	//unsupported		
}

