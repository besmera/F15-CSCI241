<?php

$size = $_GET["size"];

for($row = 1; $row <= $size; $row++)
{
        for($col=1; $col<=$size; $col++)
        {
                echo " *";
        }
        echo "<br>";
}
