<?php

	include_once 'dbh.inc.php';

	session_start();

	$bookingemail = $_POST['bookingemail'];
	$flight_no = $_POST['flight_no'];

	

	$sql = "DELETE FROM TICKETS WHERE bookingemail = '$bookingemail' AND flight_no = '$flight_no'";

	$result = mysqli_query($conn, $sql);

	if($result) {
		echo "<script>
			alert('Successfully Cancelled Booking!');
			window.location = '../index.php';
				</script>";
	}

	else 
		echo "Non Sense";
?>