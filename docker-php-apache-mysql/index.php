<?php
	$servername = "db";
	$username = "user";
	$password = "password";
	$dbname = "mydb";
	// Connexió a MySQL
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
 		die("Connexió fallida: " . $conn->connect_error);
	}
		echo "Connexió correcta a MySQL!<br>";
	phpinfo();
?> 		
