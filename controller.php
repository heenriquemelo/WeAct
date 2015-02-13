<?php
//catch post information 
$email = file_get_contents("php://input");

//create a file to retrieve user information
$fp = fopen("emails.json", "a+");
fwrite($fp, $email);
fwrite($fp, "\n");	
fclose($fp);
