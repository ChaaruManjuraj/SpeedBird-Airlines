<?php 
	
	include_once 'dbh.inc.php';

	$mailuid = $_POST['username'];
	$password = $_POST['password'];

	if(empty($mailuid) || empty($password)) {
		header("Location: ../login.php?error=empty_fields");
		exit();
	}

	else {
		$sql = "SELECT * FROM USERS WHERE email=?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php?connection_failed");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pass']);
				if($pwdCheck == false) {
					header("Location: ../login.php?error=wrong_password");
					exit();
				}
				else if($pwdCheck == true) {
					session_start();
					$_SESSION["userName"] = $row['fullname'];
					$_SESSION["dob"] = $row['dob'];
					$_SESSION["phone"] = $row['mobile'];
					$_SESSION["email"] = $row['email'];
					header("Location: ../index.php?login=Successful");
					exit();

				}
				else {
					header("Location: ../login.php?error=wrong_password");
					exit();
				}
			}
			else {
				header("Location: ../login.php?error=no_user");
				exit();
			}

		}
	}



/*

		$ins = mysqli_query($conn,$sql);
		if(!$ins) {
			header("Location: ../login.php?connection_failed");
			exit();
		}
		else {
			$result = mysqli_stmt_get_result($sql);
			if($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pass']);
				

				if($pwdCheck == false) {
					header("Location: ../login.php?error=wrong_password");
					exit();	
				}
				else if($pwdCheck == true) {
					echo "Login Successful!";
				}
			}
			else {
				header("Location: ../login.php?no_user");
				exit();	
			}
		}

	}

*/

	
 ?>