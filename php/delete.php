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
		<form action="delete.php" method="POST" class="modal_form animate">
			<div>
				<span class="tooltip" id="tooltip"></span>
				<input name="id" type="text" placeholder="id" id="input">
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

		$sql = "DELETE FROM Register WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	}
	
	mysqli_close($conn);

 ?>