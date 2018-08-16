<?php
	include('regn_auth.php');
?>
<html>
<head>
	<title>Auth-registration</title>
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
		<br>	Employee Id: <input type="text" name="eid" id="eid" placeholder="Enter Your Employee Id" required="yes">	
				<span class="error">* <br><?php echo $error_eid;?></span>
 			 <br><br>
		<br>	Name:<br> <input type="text" name="name" placeholder="Enter your Name" required="yes">
				<span class="error">*<br> <?php echo $error_name;?></span>
 			 <br><br>
		<br>	Domain: <br><input type="text" name="domain" placeholder="Enter your Domain" required="yes">
		<br>	Position: <br><input type="text" name="position" placeholder="Enter your position" required="yes">
		<br>	Password:<br> <input type="password" name="pass1" placeholder="Enter Your password" required="yes">
			<span class="error">* </span>
			<br>
		<br>	Re-Type Password:<br> <input type="password" name="pass2" placeholder="Re-Enter Your password" required="yes">
				<span class="error">* <?php echo $error_pass;?></span>
		
		<br> 
		<center>
			<input type="submit" value="submit" name="submit"> </center>
		</div>
		</form>
	
</body>
</html