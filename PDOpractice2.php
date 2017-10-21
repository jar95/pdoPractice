<?php
	
	$hostname = "sql.njit.edu";
	$username = "jar95";
	$password = "uHnrTJqnT";

	echo "<h3>Testing PDO statements:  Answer 3.</h3>";
	try {
		// Make SQL connection
		$conn = new PDO("mysql:host=$hostname;dbname=jar95",$username,$password);
		
		// Display Information with a table
		$sql = "SELECT * 
				FROM accounts
				WHERE id<6";

		$q = $conn->prepare($sql);
		$q->execute();
		$query = $q->fetchAll();
																					// Create table
		// =\"2\">
		if($q->rowCount()) {
			echo "<table border=\"2\" 
				   style=width:50%><tr>    
										  <th>Id</th>								
										  <th>F.name</th>
										  <th>L.name</th>
										  <th>Phone</th>
										  <th>Birthday</th></tr>";
			$results = 0;															// Show data
			foreach($query as $row) {												
				echo "<tr><td>".$row["id"]."</td>
						  <td>".$row["lname"]."</td>
						  <td>".$row["fname"]."</td>
						  <td>".$row["phone"]."</td>
						  <td>".$row["birthday"]."</td></tr>";
				$results ++; 
				echo "<br>";
			}
			echo "</table>";
			
		} 
		
		echo "<br>";																// Show Number of register
		if ($results>0) {
			echo "Total registers : " . $results . "<br>";			
		}
		else {
			echo "0 results";
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>