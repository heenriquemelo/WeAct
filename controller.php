<?php

function getContactBook($json_file){
	$json = file_get_contents($json_file);
	
	return json_decode($json, true);
}

function saveContactBook($book_path,$array){
	$json = json_encode($array);
	$fp = fopen($book_path, "w");
	fwrite($fp, $json);
	fwrite($fp, "\n");
	fclose($fp);
}

$book_path = "file.json";
//catch post information 
$data = json_decode(file_get_contents("php://input"));

//get all emails
$book = getContactBook($book_path);

//add new email into the book 
//makes a single-element array
$book[] = $data;

//save all your book in json file
saveContactBook($book_path, $book);

