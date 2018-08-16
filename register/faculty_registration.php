<?php
	include('regn_fac.php');
?>
<html>
<head>
	<title>user-registration</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
		
		<form action="" method="post">
			<div>
				<h3> Faculty Registration</h3>
			<br>Employee Id:<br><input type="number" name="eid" id="eid" placeholder="Enter Your Employee Id" required="yes">		
			<span class="error">*<br> <?php echo $error_eid;?></span>
 			 <br><br>	
		<br>	Name: <br><input type="text" name="name" placeholder="Enter your Name" required="yes">
			<span class="error">*<br> <?php echo $error_name;?></span>
 			 <br><br>
		<br>	Password:<br> <input type="password" name="pass1" placeholder="Enter Your password" required="yes">
		<span class="error">*<br> </span>
 			 <br><br>
		<br>	Re-Type Password:<br> <input type="password" name="pass2" placeholder="Re-Enter Your password" required="yes">
		<span class="error">*<br> <?php echo $error_pass;?></span>
 			 <br><br>
		<br> 

		<br>	Department: <br><select name="dept" required="yes">
						<option>CSE</option>
						<option>CSE/IT</option>
						<option>ETC</option>
						<option>EEE</option>
						<option>EE</option>
						<option>MECH</option>
						<option>CHEM</option>
						<option>CIVIL</option>
						</select>
		<br> 
			<center>
			<input type="submit" value="submit" name="submit"> </center>
			</div>
		</form>
	
</body>
</html