<!DOCTYPE html>
<html>
	<head>
		<title>
			TodoApp			
		</title>
	</head>
	<body>
		<?php
		if(isset($_COOKIE["flash"]))
		{
			echo "<h1>" .  base64_decode($_COOKIE["flash"]) .  "</h1>";
			setrawcookie("flash", "", time() - 60*60*24 );
		}
		