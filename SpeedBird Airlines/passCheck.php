<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if (isset($_POST['Login'])) {
			
			$username = $_POST['username'];
			echo "UserName = " . $username . "<br/>";
			$password = $_POST['password'];
			echo "Password = " . $password . "<br/>";
		}
	?>


</body>
</html>