<?php 
	
	//if (isset($POST['reg-submit'])) {
		
		#Connecting to the 'SpeedBird Airlines' database
		//require 'dbh.inc.php';

		#Adding the data
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$dob = $_POST['dob'];
		$mobile = $_POST['mobile'];

		//echo "fullname = ".$fullname;
		//echo "email = ".$email;

	//}


		
		$sql = "INSERT INTO USERS(fullname, email, pass, dob, mobile) VALUES('$fullname', '$email', '$pass', '$dob', '$mobile');";
		mysqli_query($conn, $sql);

		header("Location: ../register.php?register=success");
		exit();
		

 ?>