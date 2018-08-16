<?php
	include('regn.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title>user-registration</title>
	<style>
	.error{
		color : red;
		}
	</style>
</head>
<body>
		<form action="" method="post">
				
				<div>
					<h3>Register Here</h3>
			Registration Number: <br> <input type="number" name="regid" id="regid" placeholder="Enter Your Registration Number" required="yes">	
				<span class="error">*<br> <?php// echo $error_regn;?></span>
			<br>
 			 
			First-Name: <br><input type="text" name="fname" placeholder="Enter your First Name" required="yes">
				<span class="error">*<br> <?php echo $error_name;?></span>
 			 
		Last-Name:<br> <input type="text" name="lname" placeholder="Enter your Last Name" required="yes">
				<span class="error">* <br><?php echo $error_name;?></span>
 			 
			Username:<br> <input type="text" name="uname" placeholder="Enter your Username" required="yes">
			<br>
			Password:<br> <input type="password" name="pass1" placeholder="Enter Your password" required="yes">
			<span class="error">* </span>
			<br>
			Re-Type Password:<br> <input type="password" name="pass2" placeholder="Re-Enter Your password" required="yes">
		<span class="error">* <?php echo $error_pass;?></span>
 			
			<br>	Branch:<br> <select name="branch" required="yes">
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
				Email: <br><input type="text" name="email" placeholder="Enter your email" required="yes" >
		<span class="error">* <br> <?php echo $error_email;?></span>

				Contact: <br> <input type="text" name="phno" placeholder="Enter your  Phone Number" required="yes" >
				<br>
				Hostel: <br> <input type="radio" name="hostel" value="yes"> Yes
						<input type="radio" name="hostel" value="no"> No
						<br>
		
			<input type="submit" value="submit" name="submit">

			</div>
		
		</form>
	
</body>
</html>