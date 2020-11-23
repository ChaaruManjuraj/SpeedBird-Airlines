<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="addflight-style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="addflight-style.css">

	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara&display=swap" rel="stylesheet">
	<title>Add New Flight</title>
</head>
<body>
	<div class="form-container">

		<h1> ADD A FLIGHT </h1>
	</br>
		<form name="addFlight" method="post">

			<p><input type="text" name="flight_no" id="flight_no" placeholder="Flight Number" style="width: 90%" onclick="defaultattribute()"></p>
			<p><input type="text" name="flight_model" placeholder="Flight Model" style="width: 90%"></p>
			<p><input list="org" name="org" placeholder="Origin" style="width: 40%">
				<datalist id="org">
						<option value="Bengaluru">
						<option value="Chennai">
						<option value="Kolkata">
						<option value="Lucknow">
						<option value="Srinagar">
						<option value="Hyderabad">
						<option value="Thiruvananthapuram">
						<option value="New Delhi">
					</datalist>
					&emsp;&emsp;&emsp;
					<input list="dest" name="dest" placeholder="Destination" style="width: 40%">
						<datalist id="dest">
						<option value="Bengaluru">
						<option value="Chennai">
						<option value="Kolkata">
						<option value="Lucknow">
						<option value="Srinagar">
						<option value="Hyderabad">
						<option value="Thiruvananthapuram">
						<option value="New Delhi">
					</datalist>
				</p>
				<p><input type="text" name="duration" placeholder="Duration"></p>
				<p><input type="number" name="price" placeholder="Price (in rupees)">&nbsp; ₹</p>
				<p><strong>Departure Time:</strong>&emsp; <input type="time" name="departure" placeholder="Departure Time"></p>
				<p><strong>Arrival Time:</strong>&emsp;&emsp;&ensp; <input type="time" name="arrival" placeholder="Arrival Time"></p> </br>
				<p><input type="submit" class="btn" name="submit">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
					<button type="reset" class="btn">Reset</button> </p>
		</form>

	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<?php  
	
	include_once 'Includes/dbh.inc.php';


	if (isset($_POST['submit'])) {
		$flight_number = $_POST['flight_no'];
		$flight_model = $_POST['flight_model'];
		$origin = $_POST['org'];
		$destination = $_POST['dest'];
		$duration = $_POST['duration'];
		$price = $_POST['price'];
		$departure = $_POST['departure'];
		$arrival = $_POST['arrival'];


		if(empty($flight_number) || empty($flight_model) || empty($origin) || empty($destination) || empty($duration) || empty($price) || empty($departure) || empty($arrival)) {
			header("Location: addflight.php?empty-fields");
			exit();
		}

		else { 
			$sql = "INSERT INTO `FLIGHTS`(`flight_no`, `flight_model`, `org`, `dest`, `duration`, `price`, `departure`, `arrival`) VALUES ('$flight_number','$flight_model','$origin','$destination','$duration','$price','$departure','$arrival')";

			//$ins = mysqli_query($conn, $sql);

			if(mysqli_query($conn, $sql)) {
				header("Location: addflight.php?addflight=Successful");
				exit();
			}
			else{
				header("Location: addflight.php?addflight=Failed");
				exit();
			}
		}
	}
		

?>

<script type="text/javascript">
	function defaultattribute() {
		document.getElementById("flight_no").defaultValue = "SB";
	}
</script>
</body>
</html>