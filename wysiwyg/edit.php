<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo "<pre>";
	echo $_POST["source"];
	echo "</pre>";
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- CDN hosted by Cachefly -->
		<script src="//tinymce.cachefly.net/4.3/tinymce.min.js"></script>
		<script>
			tinymce.init({
				selector : 'textarea'
			});
		</script>
	</head>
	<body>
		
		<form method="POST" action="edit.php">
		
			<textarea name="source">Easy! You should check out MoxieManager!</textarea>
		
		<button type="submit">Submit</button>
		</form>
		
	</body>
</html>