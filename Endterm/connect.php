<?php 
	$servername = "localhost";
	$username = "gaukhar";
	$password = "password";
	$dbname = "v";

	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	    echo "error";
	} 

 ?>