<?php
	
	// Declare variables that allows sql connection
$password = "uHnrTJqnT";
$username = "jar95";
$hostname = "sql.njit.edu";

echo "<h3> Test connection: ANSWER 1. </h3>";

try {
	
	$connect = new PDO("mysql:host=$hostname;dbname=jar95",$username,$password);
	echo "Connected successfully  !!";
	echo "<br>";
	
} catch (PDOExeption $e) {

	echo "Connection failed " . $e->getMessage();
	echo "<br>";
}

$connect = null;

?>