<!DOCTYPE html>
<html>
<head>
	<title>addComplaint | student</title>
</head>
<body> 
	<?php 
		session_start();
		echo "Hello  " . $_SESSION["username"] . ",";

	?>
	<form method="post" action="">
		Problem	title <br>
		<input type="text" name="title"> <br>

		<select name="type"> <br>
			<option>Hostel</option>
			<option>Food</option>
			<option>Exam</option>
			<option>Placement</option>
			<option>DSW</option>
			<option>other</option>
		</select> <br>

		Description <br>
		<textarea name="description" rows="4" cols="50">
		</textarea> <br>
		<input type="submit" name="submit"> <br>
	</form>

</body>
</html>

<?php
	include('../config.php');

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	if(isset($_POST['submit'])){
		
		$date=date("y-m-d");
		$user_id=test_input($_SESSION["regd_id"]);
		$description=test_input($_POST['description']);
		$type=test_input($_POST['type']);
		$title=test_input($_POST['title']);

		$sql="INSERT INTO `complaints`( `user_id`, `description`, `type`,  `created_at`, `title`) VALUES (?,?,?,?,?)";
		$stmt=$conn->prepare($sql);
			$stmt->bind_param("sssss",$user_id,$description,$type,$date,$title);
			if($stmt->execute())
				echo "complaint added successfully";
			else
				echo "failed to add complaint";

	}
?>