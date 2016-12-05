<?php 
	require('connect.php'); 
	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['faculty'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$age = $_POST['age'];
		$faculty = $_POST['faculty'];
	}	

	
	$sql = "INSERT INTO Register (name, surname, age, faculty)
	VALUES ('$name', '$surname', '$age', '$faculty')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);

 ?>