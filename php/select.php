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
		<form action="select.php" method="POST" class="modal_form animate">
			<div>
				<span class="tooltip" id="tooltip"></span>	
				<input name="id" type="text" placeholder="ID" id="input">
			</div>
			<button class="submit" id="submit" type = "submit">Submit</button>
		</form>
	</div>
</body>
</html>

<?php 
	require('connect.php'); 
	if(isset($_POST['id'])){
		$id = $_POST['id'];
				
	$sql = "SELECT id, name, surname FROM Register WHERE id='$id'" ;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	}

	mysqli_close($conn);

 ?>