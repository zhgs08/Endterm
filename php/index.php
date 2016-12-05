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
		<form action="app.php" method="POST" class="modal_form animate">
			<h1>Registration</h1>
			<div>
				<span class="tooltip" id="tooltip"></span>
				<input name="name" type="text" placeholder="Name" id="input">
			</div>
			<div>
				<span class="tooltip" id="tooltip"></span>	
				<input name="surname" type="text" placeholder="Surname" id="input">
				
			</div>
			<div>
				<span class="tooltip" id="tooltip"></span>	
				<input name="age" type="text" placeholder="Age" id="input">
				
			</div>
			<div>
				<span class="tooltip" id="tooltip"></span>
				<input name="faculty" type="text" placeholder="Faculty" id="input">
				
			</div>
			<button class="submit" id="submit" type = "submit">Submit</button>
		</form>
		<div class = "buttons">
			<form action="delete.php" method="POST" class="modal_form animate">
				<button class="delete" id="delete" type = "submit">Delete</button>
			</form>
			<form action="select.php" method="POST" class="modal_form animate">
				<button class="select" id="select" type = "submit">Select</button>
			</form>
			<form action="update.php" method="POST" class="modal_form animate">
				<button class="update" id="update" type = "submit">Update</button>
			</form>
		</div>
	</div>
</body>
</html>