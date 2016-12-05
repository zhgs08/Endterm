<?php 
	require('connect.php'); 
	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['country'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
	}	

	
	$sql = "INSERT INTO People1 (name, surname, age, gender, country)
	VALUES ('$name', '$surname', '$age', '$gender', '$country')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);

 ?>