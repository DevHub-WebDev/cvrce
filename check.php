<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.disp{
			width: 80%;
			background-color: #F0FFF0;
		}
		.inner-disp{
			width: 100%;
			text-align: center;
			background-color: #E0FFFF;
		}
		#seen{
			 float: right;
		}

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		function fun1(){
			var to=document.getElementByName("forwardTo");
			alert(to);
		}

	</script>
</head>

<?php
	include("../super_user/config1.php");
	session_start();
	//$empid=$_SESSION['empid'];
	$empid = 578;

	if(isset($_POST['option'])){
		$type=$_POST['option'];
	}

	if($type == 0){
					$domain = "other";
				}elseif ($type == 1) {
					$domain = "hostel";
				}elseif ($type == 2) {
					$domain = "dsw";
				}elseif ($type == 3) {
					$domain = "placement";
				}elseif ($type == 4) {
					$domain = "exam";
				}elseif ($type == 5) {
					$domain = "food";
				}else{
					$domain ="all";
				}

				$sqlpos="SELECT `empId`, `name`,`domain` FROM `employee` WHERE `domain`='$domain'";
				$resultpos=mysqli_query($conn,$sqlpos);
				
		

	$sql1="SELECT REGID FROM `users` WHERE `mentor_id` =  '$empid'  and `CONFIRMED` = 1";
			$array = array();
			$result=mysqli_query($conn,$sql1);
				if (mysqli_num_rows($result) > 0) {
	    			// output data of each row
	   			 	while($row = mysqli_fetch_assoc($result)) {
	   			 		$array[] = $row['REGID'];
	   			 	}
	   			 }
	  foreach ($array as $regid) {
		   	$sql2="SELECT  `complaint_id`,`user_id`, `description`, `type`, `is_resolved`, `created_at`, `title`, `mentor_seen` FROM `complaints` WHERE `user_id` = $regid and `type` = $type ";
			$result=mysqli_query($conn,$sql2);
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$compId=$row["complaint_id"];
				$regn=$row["user_id"];
				$title=$row["title"];
				$desc=$row["description"];
				$date=$row["created_at"];
				$seen=$row["mentor_seen"];
				$arr1 = array();
				
	   			 		
			?>
				<body>
						<div class="disp">
							<div class="inner-disp">
							<span><h3><?php echo $title; ?></h3></span>
							</div>
							<span><b>Date: </b><?php echo $date; ?><br></span>
							<span><b>Regn No:</b><?php echo $regn; ?><br></span>
							<span><b>Description:</b><?php echo $desc; ?></span>
							<span><?php
							if (mysqli_num_rows($resultpos) > 0) {
									echo "<select name='forwardTo'>";

	
   			 				while($row1 = mysqli_fetch_assoc($resultpos)) {
   			 					echo "<option value=".$row1['empId']."> " .$row1['name']."</option>";
	   			 					

		 					 }

			 					echo "</select>";
			 				}
			 			?></span>
							<span id="seen"><input type="checkbox" name="seen" 
								<?php 
									if($seen == 1){
										echo "checked";
									}else{
										echo "";
									}

								 ?>

								><b> Seen</b><br></span>

						</div>
						<br>
					</body>
				<?php

			}
		}
	}

?>

<script>
		$(function () {
        $("#seen").click(function () {
            var isChecked = $("#seen").is(":checked");
            if (isChecked) {
            	<?php
            		$qu="UPDATE `complaints` SET `mentor_seen`= 0 WHERE `complaint_id` =$compId ";
            		
			  		if ($conn->query($sql) === TRUE) {
    				echo "Record updated successfully";
					} else {
    				echo "Error updating record: " . $conn->error;
					}
            	?>
                alert("CheckBox checked.");
            } else {
            	<?php
            		$qu="UPDATE `complaints` SET `mentor_seen`= 1 WHERE `complaint_id` =$compId ";
            		
			  		if ($conn->query($sql) === TRUE) {
    				echo "Record updated successfully";
					} else {
    				echo "Error updating record: " . $conn->error;
					}
            	?>
                alert("CheckBox not checked.");
            }
        });
    });
</script>