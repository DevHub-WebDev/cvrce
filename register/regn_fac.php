<?php
	include('../config.php');

 	$error_eid = $error_name =  $error_dept =  $error_pass =  " ";

 	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	if(isset($_POST['submit'])){
		$eid=test_input($_POST['eid']);
		$name=$_POST['name'];
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    		  $error_name = "Only letters and white space allowed"; 
    		}
		$dept=test_input($_POST['dept']);
		$pass=test_input($_POST['pass1']);
		$pass2=test_input($_POST['pass2']);
		if($pass == $pass2){
			$pass=md5($pass);
			$sql = "INSERT INTO `faculty`(`empid`, `name`, `department`, `PASS`) VALUES (?,?,?,?)";
			$stmt=$conn->prepare($sql);
			$stmt->bind_param("ssss",$eid,$name,$dept,$pass);
			if($stmt->execute())
				header("Location: ../login/facultyLoginNext.php");
		}else{
			$error_pass = "Password does not match ";
			}
	}
}
?>
