<?php
//catch post information and decode
$email = json_decode(file_get_contents("php://input"));

//variables
$uemail = mysql_real_escape_string($email);

//create a file to retrieve user information
$fp = fopen("myEmails.txt", "a");
fwrite($fp, $uemail);
fwrite($fp, "\n");	
fclose($fp);
