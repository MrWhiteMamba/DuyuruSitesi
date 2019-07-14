<?php

$servername = "localhost";
$dbname = "webodev";
$username = "root";
$password = "123456";
// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
	}
catch(Exception $e)
	{
		die("Beklenmeyen bir hata oluÅŸtu:" .$e->getMEssage());
	}
?>
