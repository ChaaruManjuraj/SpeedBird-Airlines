<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="addpassengerstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/66b1644ca5.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara&display=swap" rel="stylesheet">


	<title>Add Passengers</title>
</head>
<body>

	<?php 

	include_once 'Includes/dbh.inc.php';

	session_start();

	$flight_no = $_POST['flight_no'];
	#$date = $_POST['date'];

	$sql = "SELECT * FROM FLIGHTS WHERE flight_no = '$flight_no'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {

				$_SESSION["flight_no"] = $row['flight_no'];
				$_SESSION["flight_model"] = $row['flight_model'];
				$_SESSION["price"] = $row['price'];
				$_SESSION["duration"] = $row['duration'];
				$_SESSION["departure"] = $row['departure'];
				$_SESSION["arrival"] = $row['arrival'];
				$_SESSION["origin"] = $row['org'];
				$_SESSION["destination"] = $row['dest'];


				$origin = $row['org'];
				$destination = $row['dest'];

				
				/*
				$flight_no = $row['flight_no'];
				$flight_model = $row['flight_model'];
				$price = $row['price'];
				$duration = $row['duration'];
				$departure = $row['departure'];
				$arrival = $row['arrival'];
				$origin = $row['org'];
				$destination = $row['dest'];
				*/
			}
			
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

	<div class="form-container">

	<h1> PASSENGER DETAILS </h1>
	</br>
	



<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Single Passenger &nbsp; <i class="fas fa-biking"></i>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="one">
        <form name="single" method="post" action="Includes/addpassenger.inc.php">
        <p>	<input type="text" name="passname" placeholder="Passenger's Full Name..." style="width: 90%"></p>
        	<p>Date of Birth &ensp; <input type="date" name="passDOB" placeholder="Date of Birth"></p>
        	<p><input list="gen" name="passgen" placeholder="Gender">
        	<datalist id="gen">
        		<option value="Male">
        		<option value="Female">
        		<option value="Transgender">
        	</datalist></p>
        	<p><input type="text" name="passaddress" placeholder="Address" style="width: 90%" ></p>
        	<p><input list="addressproof" name="passproof" placeholder="Photo ID Proof" style="width: 90%">
        	<datalist id="addressproof">
        		<option value="Aadhar Card">
        		<option value="Passport">
        		<option value="Bank Passbook">
        		<option value="Pan Card">
        	</datalist> </br> You need to carry this document during boarding
        	</p>
        	<p><input type="text" name="passmobile" placeholder="Passenger's Mobile Number" style="width: 50%"></p>
        	<p><input type="email" name="passemail" placeholder="Passenger's email" style="width: 50%"></p>
        	<button type="submit" name="submitone" class="btn btn-dark">Book Flight &nbsp; <i class="fas fa-plane"></i></button> </div>
        </form>
        </div>
      </div>
    </div>



  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Two Passengers &nbsp; <i class="fas fa-motorcycle"></i>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

      	<div class="twoone">
      		<h2> First Passenger </h2>
        <form name="double" method="post" action="Includes/addpassenger.inc.php">
        <p>	<input type="text" name="passname21" placeholder="Passenger's Full Name..." style="width: 90%"></p>
        	<p>Date of Birth &ensp; <input type="date" name="passDOB21" placeholder="Date of Birth"></p>
        	<p><input list="gen" name="passgen21" placeholder="Gender">
        	<datalist id="gen">
        		<option value="Male">
        		<option value="Female">
        		<option value="Transgender">
        	</datalist></p>
        	<p><input type="text" name="passaddress21" placeholder="Address" style="width: 90%" ></p>
        	<p><input list="addressproof" name="passproof21" placeholder="Photo ID Proof" style="width: 90%">
        	<datalist id="addressproof">
        		<option value="Aadhar Card">
        		<option value="Passport">
        		<option value="Bank Passbook">
        		<option value="Pan Card">
        	</datalist> </br> You need to carry this document during boarding
        	</p>
        	<p><input type="text" name="passmobile21" placeholder="Passenger's Mobile Number" style="width: 50%"></p>
        	<p><input type="email" name="passemail21" placeholder="Passenger's email" style="width: 50%"></p> 
    </div>

    <div class="twotwo">
    	<h2>Second Passenger</h2>
    	<p>	<input type="text" name="passname22" placeholder="Passenger's Full Name..." style="width: 90%"></p>
        	<p>Date of Birth &ensp; <input type="date" name="passDOB22" placeholder="Date of Birth"></p>
        	<p><input list="gen" name="passgen22" placeholder="Gender">
        	<datalist id="gen">
        		<option value="Male">
        		<option value="Female">
        		<option value="Transgender">
        	</datalist></p>
        	<p><input type="text" name="passaddress22" placeholder="Address" style="width: 90%" ></p>
        	<p><input list="addressproof" name="passproof22" placeholder="Photo ID Proof" style="width: 90%">
        	<datalist id="addressproof">
        		<option value="Aadhar Card">
        		<option value="Passport">
        		<option value="Bank Passbook">
        		<option value="Pan Card">
        	</datalist> </br> You need to carry this document during boarding
        	</p>
        	<p><input type="text" name="passmobile22" placeholder="Passenger's Mobile Number" style="width: 50%"></p>
        	<p><input type="email" name="passemail22" placeholder="Passenger's email" style="width: 50%"></p>
        	<button type="submit" name="submitwo" class="btn btn-dark">Book Flight &nbsp; <i class="fas fa-plane"></i></button> </div>
        </form>
    </div>
      </div>
    </div>
  </div>
</div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Three Passengers &nbsp; <i class="fas fa-car-side"></i>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

        <div class="threeone">
        	<h2> First Passenger </h2>
        <form name="triple" method="post" action="Includes/addpassenger.inc.php">
        <p>	<input type="text" name="passname31" placeholder="Passenger's Full Name..." style="width: 90%"></p>
        	<p>Date of Birth &ensp; <input type="date" name="passDOB31" placeholder="Date of Birth"></p>
        	<p><input list="gen" name="passgen31" placeholder="Gender">
        	<datalist id="gen">
        		<option value="Male">
        		<option value="Female">
        		<option value="Transgender">
        	</datalist></p>
        	<p><input type="text" name="passaddress31" placeholder="Address" style="width: 90%" ></p>
        	<p><input list="addressproof" name="passproof31" placeholder="Photo ID Proof" style="width: 90%">
        	<datalist id="addressproof">
        		<option value="Aadhar Card">
        		<option value="Passport">
        		<option value="Bank Passbook">
        		<option value="Pan Card">
        	</datalist> </br> You need to carry this document during boarding
        	</p>
        	<p><input type="text" name="passmobile31" placeholder="Passenger's Mobile Number" style="width: 50%"></p>
        	<p><input type="email" name="passemail31" placeholder="Passenger's email" style="width: 50%"></p>
        </div>

        <div class="threetwo">
        	<h2>Second Passenger</h2>
    	<p>	<input type="text" name="passname32" placeholder="Passenger's Full Name..." style="width: 90%"></p>
        	<p>Date of Birth &ensp; <input type="date" name="passDOB32" placeholder="Date of Birth"></p>
        	<p><input list="gen" name="passgen32" placeholder="Gender">
        	<datalist id="gen">
        		<option value="Male">
        		<option value="Female">
        		<option value="Transgender">
        	</datalist></p>
        	<p><input type="text" name="passaddress32" placeholder="Address" style="width: 90%" ></p>
        	<p><input list="addressproof" name="passproof32" placeholder="Photo ID Proof" style="width: 90%">
        	<datalist id="addressproof">
        		<option value="Aadhar Card">
        		<option value="Passport">
        		<option value="Bank Passbook">
        		<option value="Pan Card">
        	</datalist> </br> You need to carry this document during boarding
        	</p>
        	<p><input type="text" name="passmobile32" placeholder="Passenger's Mobile Number" style="width: 50%"></p>
        	<p><input type="email" name="passemail32" placeholder="Passenger's email" style="width: 50%"></p>
        </div>

        <div class="threethree">
        	<h2>Third Passenger</h2> 
    	<p>	<input type="text" name="passname33" placeholder="Passenger's Full Name..." style="width: 90%"></p>
        	<p>Date of Birth &ensp; <input type="date" name="passDOB33" placeholder="Date of Birth"></p>
        	<p><input list="gen" name="passgen33" placeholder="Gender">
        	<datalist id="gen">
        		<option value="Male">
        		<option value="Female">
        		<option value="Transgender">
        	</datalist></p>
        	<p><input type="text" name="passaddress33" placeholder="Address" style="width: 90%" ></p>
        	<p><input list="addressproof" name="passproof33" placeholder="Photo ID Proof" style="width: 90%">
        	<datalist id="addressproof">
        		<option value="Aadhar Card">
        		<option value="Passport">
        		<option value="Bank Passbook">
        		<option value="Pan Card">
        	</datalist> </br> You need to carry this document during boarding
        	</p>
        	<p><input type="text" name="passmobile33" placeholder="Passenger's Mobile Number" style="width: 50%"></p>
        	<p><input type="email" name="passemail33" placeholder="Passenger's email" style="width: 50%"></p>
        	<button type="submit" name="submithree" class="btn btn-dark">Book Flight &nbsp; <i class="fas fa-plane"></i></button> </div>
        </div>

      </div>
    </div>
  </div>
</div>
<p style="color: #000099"></br><b> &nbsp; <i class="fas fa-info-circle"></i>  Only 3 tickets can be booked at once from a personal account!</b></p>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>