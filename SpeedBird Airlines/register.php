<!DOCTYPE html>
<html>
<head>
	<title>Register for free!</title>
	<link rel="stylesheet" type="text/css" href="registerStyle.css">
	 <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:700&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		#echo "hi";
	?>
	<div class="register_win">

		<h1> REGISTER FOR FREE</h1>
		<form name="register" action="Includes/register.inc.php" method="post">
			<!--
			<label for="fullname"> Full Name </label>
			<input type="text" name="fullname" id="fullname" placeholder="Your full name..">
		-->
			<p>Full Name : <input type="text" name="fullname" placeholder="Your Name..."></p>
			<p>Email-ID : <input type="text" name="email" placeholder="Enter a Valid Email-ID"></p>
			<p>Password : <input type="password" name="pass" placeholder="Enter a Password that Contains Minimum of 8 Charecters"></p>
			<p>Re-Enter your Password : <input type="password" name="repass" placeholder="Please Re-Enter your Password"></p>
			<p>Date of Birth: <input type="Date" name="dob"></p>
			<p>Mobile Number: <input type="text" name="mobile" placeholder="Enter a Valid 10-Digit Mobile Number"></p>	
			<p><button class="button-reg" name="reg-submit" type="submit">Register</button></p>
		
		</form>
	</div>

</body>

</html>