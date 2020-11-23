<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
	<style>
		
		body{
			background-image: url("back-image(login).jpg");
			background-size: cover;
			background-position: center,;
			background-repeat: no-repeat;

		}

		input {
			width: 25%;
			height: 20px;
			padding: 2px;
			border: 1px solid black;
		}

		h1 {
			font-family: 'Dosis', sans-serif;
			color: white;
		}
	</style>
	<title>admin-login</title>
</head>
<body>
	<h1>ADMINISTRATOR LOGIN</h1>					  			

	<form name="admin-login" method="post">
		<input type="text" name="admin-username" placeholder="Administator Username"> </br></br>
		<input type="password" name="admin-password" placeholder="Administator Password"> </br></br>
		<input name="submit" type="submit">
	</form>

<?php
	 $dbServername = "localhost";
	 $dbUsername = 	"root";
	 $dbPassword = "";
	 $dbName = "SpeedBird Airlines";

	 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

 	if(!$conn)
 		echo "Conenction Failed!";

	if (isset($_POST['submit'])) {
		$admin_id = $_POST['admin-username'];
		$admin_pass = $_POST['admin-password'];

	/*
	if($admin_id == "root" && $admin_pass == "root") {
		header("Location: addflight.php?admin-login=Successful");
		exit();
	}
	else {
		header("Location: admin-login.php?admin-login=Failed");
		exit();
	}
	*/
}
	
	$sql = "SELECT * FROM ADMIN WHERE admin_username=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location:admin-login.php?connection=Failed");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "s", $admin_id);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)) {
			
			$hashPass = md5($admin_pass);

			$sqlpass = "SELECT admin_pass FROM ADMIN;";
			$resultpass = mysqli_query($conn, $sqlpass);

			if(mysqli_num_rows($resultpass) > 0) {
				while($row1 = mysqli_fetch_assoc($resultpass)) {
					if($row1["admin_pass"] == $hashPass) {
						header("Location: adminmenu.php?Admin_login=Successful");
						exit();
					}
					else {
						header("Location: admin-login.php?IncorrectPassword");
						exit();
					}
				}
			}
			else {
				header("Location: admin-login.php?No_user");
				exit();	
			}
			
			/*
			
			$resultpass = $conn->query($sqlpass);

			if($result->num_rows == 1) {
				while($row == $result->fetch_assoc()) {
					echo $row["admin_pass"];
					if($row["admin_pass"] == $hashPass) {
						header("Location: addflight.php?Admin_login=Successful");
						exit();
					}
					else {
						header("Location: admin-login.php?IncorrectPassword");
						exit();
					}
				}
			}
			
			if($row['admin_pass'] != $hashPass) {
				header("Location:admin-login.php?IncorrectPassword");
				exit();
			}
			elseif($row['admin_pass'] == $hashPass){
				header("Location: addflight.php?admin-login=Successful");
				exit();
			}
			else {
				header("Location: admin-login.php?No_user");
				exit();	
			}
			*/
		}
	}


?>
</body>
</html>