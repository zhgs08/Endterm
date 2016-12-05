<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Application</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			$(document).ready(function() {
			  $(".js-example-basic-single").select2();
			});
		</script>

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="page.php" >Male</a></li>
							<li><a href="select.php">Female</a></li>
							<li><a href="select1.php">Children</a></li>
							<li><a href="select2.php">Country</a></li>
							<li><a href="add.html">Add</a></li>
						</ul>
					</nav>
				<!-- 
						<select class="js-example-basic-single">
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="USA">USA</option>
						<option value="Korea">Korea</option>
						</select>
					</form> -->

					<form action="select2.php" method="POST" class="modal_form animate">
						<div>
							<input name="country" type="text" placeholder="Country" id="input">
						</div>
							<button class="submit" id="submit" type = "submit">Submit</button>
					</form>

							<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>


<?php 
	require('connect.php');

	if(isset($_POST['country'])){
		$country = $_POST['country'];
	}	
			
				
	 $sql = "SELECT * FROM People1 WHERE country = '$country'";
	 $result = $conn->query($sql);
	 // echo $result->num_rows;
	 if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "Name: " . $row["Name"]. "  Surname: " . $row["Surname"]. "  Age:" . $row["Age"]. "  Country:" . $row["Country"]. "<br>";
	     }
	  }
	  else {
	      echo "0 results";
	 }

	 // mysqli_close($conn);
 ?>
</body>
</html>