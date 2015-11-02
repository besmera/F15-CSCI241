<?php



require_once("common.php");


if($_SERVER["REQUEST_METHOD"] == "GET")
{
	require("header.php");
	//Produce the form to enter todo
	?>
	<form action="todo.php" method="POST">
		<label>
			Title: <input type="text" name="title">
		</label>
		<label>
			Description: <textarea name="description"> </textarea>
		</label>
		<label>
			Assigned to: 
			<select name="assignedTo">
				<?php
					$people = readLines("people.csv");
					
					foreach($people as $person)
					{
						$person = explode(",", $person);
						echo "<option value='{$person[0]}'>{$person[1]}</option>";
					}
				?>
			</select>
		</label>
		<button type="submit">Submit</button>
	</form>
	
	
	
<?php


$todos = readLines("todo.csv");

echo "<ul>";
foreach($todos as $todo)
{
	$todo = explode ("|", $todo);
	echo "<li>{$todo[0]}</li>";
	echo "<ul>";
	echo "<li>Title: {$todo[0]}</li>";
	echo "<li>Description: {$todo[1]}</li>";
	echo "<li>Assigned To: {$todo[2]} </li>";
	echo "</ul>";
	
}
echo "</ul>";


require("footer.php");


}
else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//Add the todo item to the todo.csv file
	$todo = array();
	 
	//Sanity checks
	
	$todo[] = $_POST["title"];
	$todo[] = $_POST["description"];
	$todo[] = $_POST["assignedTo"];
	
	appendLine("todo.csv", implode("|",$todo) . "\r\n");
	
	header("Location: new.php");
	
}


