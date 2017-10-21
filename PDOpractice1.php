<?php
	
	//==== variable  that allow sql connection  =====
	$hostname = "sql.njit.edu";
	$username = "jar95";
	$password = "uHnrTJqnT";

	echo "<h3>Answer 2</h3>";
	try{
		$conn = new PDO("mysql:host=$hostname;dbname=jar95",$username,$password);
		echo "Connected successfuly !!!";

		$sql = "SELECT * 
				FROM accounts 
				WHERE id<6";
		
		echo "<br>";
		echo " Statement waiting to be executed !!";


	} catch(PDOException $e) {
		echo $e->getMessage();
		echo "<br>";
	}

	$conn = null;

?>

