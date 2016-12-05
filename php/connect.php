<?php 
	$servername = "localhost";
	$username = "gaukhar";
	$password = "password";
	$dbname = "v";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	    echo "error";
	}

	//echo "Connected successfully";	
	// Create database
	// $sql = "CREATE DATABASE students";
	// if ($conn->query($sql) === TRUE) {
	//     echo "Database created successfully";
	// } else {
	//     echo "Error creating database: " . $conn->error;
	// }

	// sql to create table
	// $sql = "CREATE TABLE StudentInfo (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	// name VARCHAR(30) NOT NULL,
	// surname VARCHAR(30) NOT NULL,
	// age INT(4),
	// faculty VARCHAR(50),
	// phone INT(20),
	// reg_date TIMESTAMP
	// )";

	// if ($conn->query($sql) === TRUE) {
	//     echo "Table MyGuests created successfully";
	// } else {
	//     echo "Error creating table: " . $conn->error;
	// }

 ?>