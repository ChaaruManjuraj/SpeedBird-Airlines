<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/66b1644ca5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="ticketstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Handlee&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Ticket</title>
</head>
<body>

	<?php 

		session_start();
		$bookingemail = $_SESSION["email"];
	

	?>
	<h1> Thank you for flying with us!!! </h1> </br>

	<h2> Your ticket has been booked <i class="fas fa-smile"></i> </h2> </br>

	<h4> Details have been sent to <?= $bookingemail ?> </h4></br>

	<h3> We look forward to giving you a smoother flight </h3></br>

	<div class="instructions">
		<h4>Instructions</h4></br>

		<p><i class="fas fa-arrow-right"></i> &nbsp; You can choose the seats at the time of Check-in</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; The Check-in procedure starts before 48 hours to take-off and ends when half an hour is left for the take-off</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; The maximum baggage allowed per passenger is 17Kgs</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; The Check-in bag's weight limit is restricted to 7Kgs per customer</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; Kindly follow the safety instructions which will be provided on-board</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; This ticket is not included for the on-board food & breverages</p>
		<p> <i class="fas fa-arrow-right"></i> &nbsp; Carrying any sort of primary/secondary/tertiary degree weapons are strictly prohibited</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; Any sort of food/liquid isn't allowed inside the airplane</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; Each passenger has to carry a boarding pass to get into the flight</p>
		<p><i class="fas fa-arrow-right"></i> &nbsp; Any miss-behavior with the flight-attendents will be resulted to kicking out of the airplane mid-air (without parachute!!) </p>
	</div>

	
	</br><a href="home.html"><button type="button" class="btn btn-dark"><i class="fas fa-home"></i>&nbsp;Logout</button></a>

	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>