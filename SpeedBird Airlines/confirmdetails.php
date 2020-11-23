<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="confirmdetailsstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/66b1644ca5.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<title>Confirm Booking Details</title>
</head>
<body>

	<h1>
		CONFIRM DETAILS
	</h1>

	<?php  

		include_once 'Includes/dbh.inc.php';

		session_start();
		$flight_no = $_SESSION['flight_no'];
		$flight_model = $_SESSION["flight_model"];
		$price = $_SESSION["price"];
		$duration = $_SESSION["duration"];
		$departure = $_SESSION["departure"];
		$arrival = $_SESSION["arrival"];
		$origin = $_SESSION["origin"];
		$destination = $_SESSION["destination"];
		$dateoftravel = $_SESSION['dateoftravel'];

		switch ($origin) {
			case 'Bengaluru':
				$origin = "Kempegowda International Airport, Bengaluru";
				$ICAO = "VOBL";
				$IATA = "BLR";
				break;
			case 'Chennai':
				$origin = "Chennai International Airport, Chennai";
				$ICAO = "VOMM";
				$IATA = "MAA";
				break;
			case 'New Delhi':
				$origin = "Indira Gandhi International Airport, New Delhi";
				$ICAO = "VIDP";
				$IATA = "DEL";
				break;
			case 'Kolkata':
				$origin = "Netaji Subhas Chandra Bose International Airport, Kolkata";
				$ICAO = "VECC";
				$IATA = "CCU";
				break;
			case 'Lucknow':
				$origin = "Chaudhary Charan Singh International Airport, Lucknow";
				$ICAO = "VILK";
				$IATA = "LKO";
				break;
			case 'Srinagar':
				$origin = "Sheikh ul-Alam International Airport, Srinagar";
				$ICAO = "VISR";
				$IATA = "SXR";
				break;
			case 'Hyderabad':
				$origin = "Rajiv Gandhi International Airport, Hyderabad";
				$ICAO = "VOHS";
				$IATA = "HYD";
				break;
			case 'Thiruvananthapuram':
				$origin = "Trivandrum International Airport, Thiruvananthapuram";
				$ICAO = "VOTV";
				$IATA = "TRV";
				break;
			default: echo "Something is fishy!!!";
				break;
		}

		switch ($destination) {
			case 'Bengaluru':
				$destination = "Kempegowda International Airport, Bengaluru";
				$ICAOd = "VOBL";
				$IATAd = "BLR";
				break;
			case 'Chennai':
				$destination = "Chennai International Airport, Chennai";
				$ICAOd = "VOMM";
				$IATAd = "MAA";
				break;
			case 'New Delhi':
				$destination = "Indira Gandhi International Airport, New Delhi";
				$ICAOd = "VIDP";
				$IATAd = "DEL";
				break;
			case 'Kolkata':
				$destination = "Netaji Subhas Chandra Bose International Airport, Kolkata";
				$ICAOd = "VECC";
				$IATAd = "CCU";
				break;
			case 'Lucknow':
				$destination = "Chaudhary Charan Singh International Airport, Lucknow";
				$ICAOd = "VILK";
				$IATAd = "LKO";
				break;
			case 'Srinagar':
				$destination = "Sheikh ul-Alam International Airport, Srinagar";
				$ICAOd = "VISR";
				$IATAd = "SXR";
				break;
			case 'Hyderabad':
				$destination = "Rajiv Gandhi International Airport, Hyderabad";
				$ICAOd = "VOHS";
				$IATAd = "HYD";
				break;
			case 'Thiruvananthapuram':
				$destination = "Trivandrum International Airport, Thiruvananthapuram";
				$ICAOd = "VOTV";
				$IATAd = "TRV";
				break;
			default: echo "Something is fishy!!!";
				break;
		}
		
	?>

	<div class="flight_details">
		

		<h2> <i class="fas fa-plane-departure"></i> <?=$origin?> (ICAO: <?=$ICAO?>) (IATA: <?=$IATA?>)  </br> <i class="fas fa-plane-arrival"></i> <?=$destination?> (ICAO: <?=$ICAOd?>) (IATA: <?=$IATAd?>) </h2>

	<div class="flight_details">
	</br><h3>Flight Details </h3>
		<p><b>Flight Number: </b> <?=$flight_no?></p>
		<p><b>Model: </b> <?=$flight_model?></p>
		<p><b>Duration: </b> <?=$duration?></p>
		<p><b>Price: </b> <?=$price?></p>
		<p><b>Departure: </b> <?=$departure?></p>
		<p><b>Arrival: </b> <?=$arrival?></p>
		<p><b>Date of Travel:</b> <?=$dateoftravel?></p>
	</div>

	<div class="passenger_details">
	</br><h3>Passenger Details</h3>

	<?php 

			include_once 'Includes/dbh.inc.php';
			include_once 'Includes/passconfirm.inc.php';


			


			$noofpass = $_SESSION['passcount'];

			echo "Total Number of Passengers: " . $noofpass; 

			if($noofpass==1) {

			$passid11 = $_SESSION['passid11'];

			$sql = "SELECT * FROM PASSENGERS WHERE passid = '$passid11';";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$passname = $row['passname'];
					$passdob = $row['passdob'];
					$passgen = $row['passgen'];
					$passadd = $row['passadd'];
					$passproof = $row['passproof'];
					$passmobile = $row['passmobile'];
					$passemail = $row['passemail'];

					echo onepass($passname, $passdob, $passgen, $passadd, $passproof, $passmobile, $passemail);

			}
		}
		else
			echo "Error while fetching pass 1";
	}

	elseif($noofpass==2) {
				$passid21 = $_SESSION['passid21'];
				$passid22 = $_SESSION['passid22'];

			$sql1 = "SELECT * FROM PASSENGERS WHERE passid = '$passid21';";
			$result = mysqli_query($conn, $sql1);

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$passname21 = $row['passname'];
					$passdob21 = $row['passdob'];
					$passgen21 = $row['passgen'];
					$passadd21 = $row['passadd'];
					$passproof21 = $row['passproof'];
					$passmobile21 = $row['passmobile'];
					$passemail21 = $row['passemail'];
			}
		}
			else 
				echo "Error while fetching pass 1";


			$sql2 = "SELECT * FROM PASSENGERS WHERE passid = '$passid22';";
			$result = mysqli_query($conn, $sql2);

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$passname22 = $row['passname'];
					$passdob22 = $row['passdob'];
					$passgen22 = $row['passgen'];
					$passadd22 = $row['passadd'];
					$passproof22 = $row['passproof'];
					$passmobile22 = $row['passmobile'];
					$passemail22 = $row['passemail'];


					echo twopass($passname21, $passdob21, $passgen21, $passadd21, $passproof21, $passmobile21, $passemail21, $passname22, $passdob22, $passgen22, $passadd22, $passproof22, $passmobile22, $passemail22);
			
			}
		}
			else 
				echo "Error while fetching pass 2";
		}


	else if($noofpass==3) {
				$passid31 = $_SESSION['passid31'];
				$passid32 = $_SESSION['passid32'];
				$passid33 = $_SESSION['passid33'];


			$sql1 = "SELECT * FROM PASSENGERS WHERE passid = '$passid31';";
			$result = mysqli_query($conn, $sql1);

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$passname31 = $row['passname'];
					$passdob31 = $row['passdob'];
					$passgen31 = $row['passgen'];
					$passadd31 = $row['passadd'];
					$passproof31 = $row['passproof'];
					$passmobile31 = $row['passmobile'];
					$passemail31 = $row['passemail'];
			}
		}
			else 
				echo "Error while fetching pass 1";


			$sql2 = "SELECT * FROM PASSENGERS WHERE passid = '$passid32';";
			$result = mysqli_query($conn, $sql2);

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$passname32 = $row['passname'];
					$passdob32 = $row['passdob'];
					$passgen32 = $row['passgen'];
					$passadd32 = $row['passadd'];
					$passproof32 = $row['passproof'];
					$passmobile32 = $row['passmobile'];
					$passemail32 = $row['passemail'];
				
			}
		}

			else
				echo "Error while fetching pass 2";


			$sql3 = "SELECT * FROM PASSENGERS WHERE passid = '$passid33';";
			$result = mysqli_query($conn, $sql3);

			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$passname33 = $row['passname'];
					$passdob33 = $row['passdob'];
					$passgen33 = $row['passgen'];
					$passadd33 = $row['passadd'];
					$passproof33 = $row['passproof'];
					$passmobile33 = $row['passmobile'];
					$passemail33 = $row['passemail'];
				
				echo threepass($passname31, $passdob31, $passgen31, $passadd31, $passproof31, $passmobile31, $passemail31, $passname32, $passdob32, $passgen32, $passadd32, $passproof32, $passmobile32, $passemail32, $passname33, $passdob33, $passgen33, $passadd33, $passproof33, $passmobile33, $passemail33);
			}
		}

			else
				echo "Error while fetching pass 3";

		}
	

	?>

	</div>

	<div class="buttons">
		<form name="proceed" method="post" action="payments.php">
		<button type="submit" class="btn btn-dark" name="paymentsbtn">Proceed to Payments &nbsp; <i class="fas fa-wallet"></i> </button> &nbsp;
		<a href="index.php"><button type="button" class="btn btn-dark" name="gobackbtn">Edit Details &nbsp; <i class="fas fa-edit"></i> </button></a>
		</form>
	</div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>