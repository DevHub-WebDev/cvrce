<?php
	include('config.php');

	$error_eid = $error_name =  $error_domain =  $error_pos =  $error_pass =  " ";


	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	if(isset($_POST['submit'])){
		$eid=test_input($_POST['eid']);
		if (!preg_match("/^[0-9 ]*$/",$eid)) {
    		  $error_eid = "Only numbers are allowed"; 
    	}
		$name=test_input($_POST['name']);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    		  $error_name = "Only letters and white space allowed"; 
    	}
		$domain=test_input($_POST['domain']);
		$pos=test_input($_POST['position']);
		$pass=test_input($_POST['pass1']);
		$pass2=test_input($_POST['pass2']);
		if($pass == $pass2)
		{
		$pass=md5($pass);
		$sql = "INSERT INTO `employee`(`empId`, `name`, `domain`, `position`,  `pass`) VALUES (?,?,?,?,?)";
			$stmt=$conn->prepare($sql);
			$stmt->bind_param("sssss",$eid,$name,$domain,$pos,$pass);
		if($stmt->execute()){
			header("Location: ../login/adminLoginNext.php");
		
		}else{
			$error_pass = "Password does not match ";
		}
		}

?>
