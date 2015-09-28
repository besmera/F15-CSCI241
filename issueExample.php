<pre>
<?php

if(isset($_GET["size"]))
{
	$size = $_GET["size"];
}
else {
	$size = 0;
}

for($row = 1; $row <= $size; $row++)
{
        for($col=1; $col<=$size; $col++)
        {
                echo " *";
        }
        echo "\r\n";
}
?>
</pre>