<!DOCTYPE html>
<html>
<head>
	<title>Show Complain | student</title>
	<style type="text/css">
		img{
			width: 250px;
			height: auto;
		}

	</style>
</head>
<body>

	<?php
		session_start();
		$_SESSION['regid'] = "1601227132";
	?>
	<div>
		<a href="hostel.php"><img src="../assets/hostel.png"></a> 
		<a href="food.php"><img src="../asses/food.png"></a> 
		<a href="exam.php"><img src="../assets/exam.png"></a>
	</div> <br>
	<div>
		<a href="dsw.php"><img src="../assets/dsw.png"></a> 
		<a href="placement.php"><img src="../assets/placement.png"></a> 
		<a href="others.php"><img src="../assets/others.png"></a> 
	</div>

	<a href="addComplaint.php"><h3> Add Complaint </h3> </a>
</body>
</html>
