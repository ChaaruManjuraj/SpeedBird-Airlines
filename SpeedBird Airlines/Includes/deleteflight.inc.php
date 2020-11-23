<?php
	
	include_once 'dbh.inc.php';

	$flight_no1 = $_GET['flight_no'];
	$flight_no = strtoupper($flight_no1);

	$sql = "DELETE FROM `FLIGHTS` WHERE flight_no = '$flight_no';";

	if(mysqli_query($conn, $sql)) {
			echo "<script>
			alert('Successfully Deleted!');
			window.location = '../deleteflight.php';
				</script>";
	}
	else {
		header("Location: ../deleteflight.php?deleteflight=Failed");
		exit();
	}
	
	
 ?>