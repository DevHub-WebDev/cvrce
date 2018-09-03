<?php
	include('config.php');

	session_start();
	//$regid=$_SESSION['regid'];
	$type = 1;

	$sql="SELECT  `description`,  `is_resolved`, `created_at`, `title`,  `position_seen`, `mentor_seen` FROM `complaints` WHERE `type` = 3 AND user_id=1601227132";
	$result=mysqli_query($conn,$sql);

	echo "Title" . " " . "Description " . " " . "is_resolved " . " " . " date " . "mentor_seen " . "<br>";

	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row["title"] . " " . $row["description"] . " " . $row["is_resolved"] . " " . $row["created_at"] ." " . $row["mentor_seen"] ."<br>" ;
		}
	}
	else{
		echo "0 result";
	}
?>