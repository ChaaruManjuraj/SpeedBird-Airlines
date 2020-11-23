<?php
	
	#if (isset($POST['reg-submit'])) {
		
		#Connecting to the 'SpeedBird Airlines' database
		require 'dbh.inc.php';

		#Adding the data
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$dob = $_POST['dob'];
		$mobile = $_POST['mobile'];


		/*
		$name = mysqli_real_escape_string($conn, $_POST['fullname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);
		$repass = mysqli_real_escape_string($conn, $POST['repass']);
		$dob = mysqli_real_escape_string($conn, $_POST['dob']);
		$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
		*/


		#Exception Handling

		#check_for_empty
		if(empty($fullname) || empty($email) || empty($pass) || empty($repass) || empty($dob) || empty($mobile)) {
			header("Location: ../register.php?error=emptyfields");
			exit();
		}
		#check_if_email_is_valid
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../register.php?error=invalidemail");
			exit();
			
		}
		#repass_match
		else if($pass !== $repass) {
			header("Location: ../resister.php?error=passcheckfailed");
			exit();

		}
		
		#conn_check		
		else {
			$stmt = mysqli_stmt_init($conn);
			
			/*
			if(!mysqli_stmt_prepare($stmt)) {
				header("Location: ../resister.php?error=connectionfailed");
				exit();
			}
			*/


			#insertion
			if($conn){

				$sql = "INSERT INTO USERS(fullname, email, pass, dob, mobile) VALUES(?, ?, ?, ?, ?);";

			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../resister.php?error=updatefailed");
				exit();
			}
			#else {

				#hashing_the_password
				$hash_pass = password_hash($pass, PASSWORD_DEFAULT);


				mysqli_stmt_bind_param($stmt, "sssss", $fullname, $email, $hash_pass, $dob, $mobile);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);

				header("Location: ../login.html?register=success");
				exit();
			#}
			}

			//mysqli_stmt_close($stmt);
			//mysqli_stmt_close($conn);

		}
	//}



				
		/*
				#Insert the user into the database
				$sql = "INSERT INTO USERS VALUES('$name', '$email', '$hash_pass', '$dob', '$mobile');";
				mysqli_query($conn, $sql);

				header("Location: ../resister.php?register=success");
				exit();
 */

?>
