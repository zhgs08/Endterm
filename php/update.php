<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Application</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
	include('connect.php');
 ?>
	<div id="modal" class="modal">
		<form action="update.php" method="POST" class="modal_form animate">
			<div>
				<span class="tooltip" id="tooltip"></span>	
				<input name="surname" type="text" placeholder="Surname" id="input">
				
			</div>
			<div>
				<span class="tooltip" id="tooltip"></span>	
				<input name="age" type="text" placeholder="Age" id="input">
				
			</div>
			<button class="submit" id="submit" type = "submit">Submit</button>
	</div>
</body>
</html>

<?php 
	require('connect.php'); 
	if(isset($_POST['surname']) && isset($_POST['age'])){
		$surname = $_POST['surname'];
		$age = $_POST['age'];
		

		$sql = "UPDATE Register SET age='$age'  WHERE surname='$surname'";

		if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}
		
		mysqli_close($conn);
	}

 ?>