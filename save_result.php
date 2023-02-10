<?php


	// Get result from POST request
	$result = $_POST["result"];
	
	// Save result to a file
	file_put_contents("result.txt", $result);
	
	// Or save result to a database
	// $conn = mysqli_connect("host", "username", "password", "database");
	// mysqli_query($conn, "INSERT INTO results (result) VALUES ('$result')");
?>
