<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="searchflightStyle.css">
	<title>Search Flights</title>
</head>
<body>
<!--Table--><!--
	<table class="table table-borderless">
		
 
  <thead>
    <tr>
      <th scope="col">Flight Number</th>
      <th scope="col">Departure</th>
      <th scope="col">Arrival</th>
      <th scope="col">Duration</th>
    </tr>
  </thead>
-->
  <!-- 

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?=$flight_no?></td>
      <td><?=$departure?></td>
      <td><?=$arrival?></td>
      <td><?=$duration?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@thin</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>abc</td>
      <td>dev</td>
      <td>etc</td>
      <td>ene</td>
    </tr>
  </tbody> 
</table>-->

	<?php 

		include_once 'Includes/dbh.inc.php';
		include_once 'Includes/tabledisplay.inc.php';

		session_start();

		$origin = $_GET['from'];
		$destination = $_GET['to'];
		$date = $_GET['dateoftravel'];

		$_SESSION["dateoftravel"] = $date;


		$sql = "SELECT `flight_no`, `flight_model`, `org`, `dest`, `duration`, `price`, `departure`, `arrival` FROM `FLIGHTS` WHERE org = '$origin' AND dest = '$destination';";
		$result = mysqli_query($conn, $sql);

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
				$ICAOD = "VOBL";
				$IATAD = "BLR";
				break;
			case 'Chennai':
				$destination = "Chennai International Airport, Chennai";
				$ICAOD = "VOMM";
				$IATAD = "MAA";
				break;
			case 'New Delhi':
				$destination = "Indira Gandhi International Airport, New Delhi";
				$ICAOD = "VIDP";
				$IATAD = "DEL";
				break;
			case 'Kolkata':
				$destination = "Netaji Subhas Chandra Bose International Airport, Kolkata";
				$ICAOD = "VECC";
				$IATAD = "CCU";
				break;
			case 'Lucknow':
				$destination = "Chaudhary Charan Singh International Airport, Lucknow";
				$ICAOD = "VILK";
				$IATAD = "LKO";
				break;
			case 'Srinagar':
				$destination = "Sheikh ul-Alam International Airport, Srinagar";
				$ICAOD = "VISR";
				$IATAD= "SXR";
				break;
			case 'Hyderabad':
				$destination = "Rajiv Gandhi International Airport, Hyderabad";
				$ICAOD = "VOHS";
				$IATAD = "HYD";
				break;
			case 'Thiruvananthapuram':
				$destination = "Trivandrum International Airport, Thiruvananthapuram";
				$ICAOD = "VOTV";
				$IATAD = "TRV";
				break;
			default: echo "Something is fishy!!!";
				break;
		}

			echo "<h1>AVAILABLE FLIGHTS </br> </br> </br> </h1>";
			echo "<h2>$origin TO $destination</h2> </br>";

		if(mysqli_num_rows($result)>0) {
		
			while($row = mysqli_fetch_assoc($result)) {


				$flight_no = $row['flight_no'];
				$flight_model = $row['flight_model'];
				$price = $row['price'];
				$duration = $row['duration'];
				$departure = $row['departure'];
				$arrival = $row['arrival'];

				echo fetchmultiple($flight_no, $flight_model, $price, $duration, $departure, $arrival, $date);


			}
		}
		else {
			echo '<h2>No Flights Found!</h2>';
		}

		
	?>

	



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>