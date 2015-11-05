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
foreach($todos as $todoIndex => $todo)
{
	$todo = explode ("|", $todo);
	echo "<li>{$todo[0]}";
	?>
		<form method="post" action="todo.php">
			<input type="hidden" name="deleteTodo" value="<?php  echo $todoIndex; ?>">
			<button type="submit" >X</button>
		</form>
		
		<form method="post" action="todo.php">
			<input type="hidden" name="sendReminder" value="<?php  echo $todoIndex; ?>">
			<button type="submit" >Send Reminder</button>
		</form>
	<?php
	echo "</li>";
	
	
	
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
	
	//Which should I do? Delete or Insert?
	if(isset($_POST["deleteTodo"]))
	{
		//Perform a delete
		//Sanity Checks
		
		deleteLine("todo.csv",$_POST["deleteTodo"]);

		setrawcookie("flash", base64_encode("You successfully deleted from my file!"), time() + (5 * 60));
				
		header("Location: todo.php");
		
	}
	else if(isset($_POST["title"]))
	{
		//Perform an insert
		//Add the todo item to the todo.csv file
		$todo = array();
		 
		//Sanity checks
		
		$todo[] = $_POST["title"];
		$todo[] = $_POST["description"];
		$todo[] = $_POST["assignedTo"];
		
		appendLine("todo.csv", implode("|",$todo) . "\r\n");
		
		setrawcookie("flash", base64_encode("You successfully inserted into my file!"), time() + (5 * 60));
		
		
		header("Location: todo.php");
	}
	else if(isset($_POST["sendReminder"]))
	{
		$todos =  readLines("todo.csv");
		if(isset($todos[$_POST["sendReminder"]]))
		{
			//A todo exists at the position I'm asked to send a reminder for
			$todo = $todos[$_POST["sendReminder"]];
			$todo = explode("|", $todo);
			
			$subject = "TODO: " . $todo[0];
			$message = $todo[1];
			
			/*
			var_dump($subject);
			var_dump($message);
			exit();
			*/
			
			mail("besmera@winthrop.edu", $subject, $message, "From: no-reply@winthrop.edu");	
			
			setrawcookie("flash", base64_encode("Email was sent!"), time() + (5 * 60));
			header("Location: todo.php");
			
		}
		else
		{
			//No todo exists for me to send a reminder for
			setrawcookie("flash", base64_encode("Could not send the reminder you requested!"), time() + (5 * 60));
			header("Location: todo.php");		
		}
		
			
	}
	else
	{
		header("Location index.php");			
		exit();
	}
	
	
	
}


