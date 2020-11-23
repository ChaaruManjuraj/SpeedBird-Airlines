<!DOCTYPE html>
<html>
<head>
	<title>Book Your Airline Tickets</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">

</head>
<body>

	<div class="login-text">

		<h1>LOGIN TO YOUR ACCOUNT</h1>


		<form name="login field" action="Includes/login.inc.php" method="post">
			Username: <br>
			<input type="text" name="username" id="username">
			<br>Password: <br>
			<input type="password" name="password" id="password">
			
			<button class="button">Login</button>
		</form>
	</div>


	<div class = "register">
		<p><pre>                                                     Don't have an account?</pre>
			<form method="get" action="register.php">
				<span style="cursor: pointer;">
			<button class="button-reg">Register Here!</button>
		</span>
		</form>
		</p>
	</div>


		

</body>
</html>