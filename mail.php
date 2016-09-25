<?php

//mail("besmera@winthrop.edu", "Thanksgiving", "Thanksgiving is about 20 days away!");

//mail("besmera@winthrop.edu", "Thanksgiving", "Thanksgiving is about 20 days away, bruh!", "From: Gerry Derksen <derkseng@winthrop.edu>");


$headers = "From: Gerry Derksen <derkseng@winthrop.edu>\r\n";
$headers .= "Content-Type: text/html";

mail("besmera@winthrop.edu", "Thanksgiving", "<strong>Thanksgiving</strong> is about <em>20 days away</em>, bruh!", $headers);