<?php 
	
	 $dbServername = "localhost";
	 $dbUsername = 	"root";
	 $dbPassword = "";
	 $dbName = "SpeedBird Airlines";

	 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

 	if(!$conn)
 		echo "Conenction Failed!";

 ?>