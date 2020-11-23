<?php 
 
	include_once 'dbh.inc.php';

	session_start();

	$flight_no = $_SESSION['flight_no'];
	$bookingemail = $_SESSION['email'];
	$price = $_SESSION["price"];
	$passcount = $_SESSION['passcount'];
	$total = $price*0.05;
	$total = $total+$price;


	$sql = "INSERT INTO `TICKETS`(`flight_no`, `bookingemail`, `price`, `nooftickets`, pricePLUSgst) VALUES ('$flight_no','$bookingemail','$price','$passcount', '$total');";

	if(mysqli_query($conn, $sql)) {
		header("Location: ../ticket.php?ticketGen=Successful");
		exit();
	}

	else {
		header("Location: ../payments.php?ticketGen=Failed");
		exit();
	}

?>
