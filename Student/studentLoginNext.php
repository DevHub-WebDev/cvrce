<html>
    <body>
	<?php
	session_start();
	$hostname = "localhost";
	$username = "cvrce";
	$password = "Cvrce@123";
	$db = "cvrce";
	$_SESSION['adding'] = "Copy that";
	
	/* Connection check */
	$dbconnect=mysqli_connect($hostname,$username,$password,$db);
	
	if ($dbconnect->connect_error) {
            $_SESSION['log'] = " Server Down ";
            header('location: ../studentLogin.html');
	    die("Server Down: " . $dbconnect->connect_error);
	}
	
	// Insert data
	if(isset($_POST['login'])) {
	    $name=$_POST['username'];
	    $code=$_POST['passwd'];
	    
	    // ////////////////  Aloha region
	    $stmt = $dbconnect ->prepare('SELECT * FROM users WHERE USERNAME = ?  AND PASS = ? ');
	    $stmt->bind_param('ss', $name, $code ); // 's' specifies the variable type => 'string'
	    
	    $stmt->execute();
	    
	    $result = $stmt->get_result();
            if($row = $result->fetch_assoc()) {
		$valued = $row["UserName"];
		
		$_SESSION['log'] = "Logged in by - ".$valued;
		$_SESSION['usercode'] = $valued;
		header('Location: ../index.html');
		die();
            }

            else {
		$_SESSION['log'] = " Username/Password is incorrect ";
		header("location: ../studentLogin.html");
		die();
            }
            
	}
	else {
	    echo "Errors bigger than thought";
	}
	
	$dbconnect -> close();
	
	?>
    </body>
    
    
</html>
