<?php 
	
	include_once 'dbh.inc.php';

	#Adding the data
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];
		$dob = $_POST['dob'];
		$mobile = $_POST['mobile'];	

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
			#hashing_the_password
			

		}
		else {

		//$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
		//$sql = "INSERT INTO `USERS`(`fullname`, `email`, `pass`, `dob`, `mobile`) VALUES ('$fullname' ,'$email','$pass','$dob','$mobile');";

		$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `USERS`(`fullname`, `email`, `pass`, `dob`, `mobile`) VALUES ('$fullname','$email','$hash_pass','$dob','$mobile');";
		$ins = mysqli_query($conn,$sql);

		if($ins){
			//header("Location: ../login.html?register=success");
			//exit();
			header("Location: ../login.php?Registration_Successful");
			exit();
		}
			
	}
 	

 ?>