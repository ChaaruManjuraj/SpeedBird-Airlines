<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title>Welcome to SpeedBird</title>
	<link rel="stylesheet" type="text/css" href="index-style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

</head>
<body>


<?php 
	session_start();

	/*
	echo "Welcome " . $_SESSION["userName"] . "</br>";
	echo "Your date of birth is " . $_SESSION['dob'] . "</br>";
	echo "Your session id is " . session_id();
	*/
	
?>



<div class="slideshow">

	<div class="slideshow-container">

		<!-- Full-Width images with number and caption text -->
		<div class="mySlides fade">
			<div class="numbertext">1 / 8</div>
			<img src="Slideshow Images/bengaluru.jpg" style="width:100%">
			<div class="text">ಸ್ವಾಗತ ನಮ್ಮ ಬೆಂಗಳೂರಿಗೆ!!!</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 8</div>
			<img src="Slideshow Images/Chennai.jpg" style="width:100%">
			<div class="text">எங்கள் சென்னைக்கு வருக</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 8</div>
			<img src="Slideshow Images/Delhi.jpg" style="width:100%">
			<div class="text">राजधानी में आपका स्वागत है</div>
		</div>
		
		<div class="mySlides fade">
			<div class="numbertext">4 / 8</div>
			<img src="Slideshow Images/Hyderabad.jpg" style="width:100%">
			<div class="text">వెల్సమ్ టు తెలుగు రాష్ట్రం</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">5 / 8</div>
			<img src="Slideshow Images/Kolkata.jpg" style="width:100%">
			<div class="text">বিপ্লব রাজ্যে স্বাগতম</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">6 / 8</div>
			<img src="Slideshow Images/Lucknow.jpg" style="width:100%">
			<div class="text">भारत के सबसे बड़े शहर में आपका स्वागत है</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">7 / 8</div>
			<img src="Slideshow Images/srinagar.jpg" style="width:100%">
			<div class="text">ہندوستان کے اٹوٹ انگ میں خوش آمدید۔</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">8 / 8</div>
			<img src="Slideshow Images/Trivendrum.jpg" style="width:100%">
			<div class="text">ദേവന്മാരുടെ നാട്ടിലേക്ക് സ്വാഗതം</div>
		</div>

	</div>
	<br>

		<!-- The dots/circles-->
		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
</div>

		<!-- Tab -->

	<div class="menu">
		<div class="tab">
			<button class="tablinks" onclick="openOpt(event, 'book')"> Book a Flight</button> 
			<button class="tablinks" onclick="openOpt(event, 'tickets')">Your Previous Bookings</button>
		</div>

		<div id="book" class="tabcontent">
			<h3>Book your flight here</h3>
			<p>
				<form action="searchflight.php", name="book", method="get">
					FROM &emsp;<input list="from" name="from">
					<datalist id="from">
						<option value="Bengaluru">
						<option value="Chennai">
						<option value="Kolkata">
						<option value="Lucknow">
						<option value="Srinagar">
						<option value="Hyderabad">
						<option value="Thiruvananthapuram">
						<option value="New Delhi">
					</datalist>
					&emsp; &emsp; TO &emsp; <input list="to" name="to">
					<datalist id="to">
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
			<p align="center">
				DATE OF TRAVELLING &emsp; <input type="date" name="dateoftravel" style="width: 10%; ">
			</p>
			<button type="submit" class="searchfl"><i class="fa fa-search"></i>&ensp;Search Flights</button>
		</form>
				
		</div>


		<div id="tickets" class="tabcontent">
			<h3> <?php echo "Hi ". $_SESSION["userName"].","; ?> Your Previous Bookings are</h3>
			<?php 

				include_once 'Includes/dbh.inc.php';
				

				$bookingemail = $_SESSION['email'];

				$sql = "SELECT * FROM TICKETS WHERE bookingemail = '$bookingemail'";
				$result = mysqli_query($conn, $sql);
				if($result) {
					if(mysqli_num_rows($result)>0) {
						while($row = mysqli_fetch_assoc($result)) {
							$flight_no = $row['flight_no'];
							$price = $row['price'];
							$nooftickets = $row['nooftickets'];
							$total = $price*0.05;
							$total = $total+$price;


							include_once 'Includes/displayflights.inc.php';
							echo displayflights($flight_no, $price, $nooftickets, $bookingemail, $total);
						}
					}
					else 
						echo "You have no bookings yet!";
				}


			?>
		</div>

</div>


	



<script>
	
var slideIndex = 0;
showSlides();

function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	for (i=0;i<slides.length;i++) 
		slides[i].style.display = "none";
	slideIndex++;
	if(slideIndex > slides.length) {slideIndex=1}
	for(i=0;i<dots.length;i++) {
		dots[i].className = dots[i].className.replace("  active", " ");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += "  active";
	setTimeout(showSlides, 4000);
}

</script>

<script>

	/*
	function openOpt(option) {
		var i, tabcontent, tablinks;

		tabcontent = document.getElementsByClassName("tabcontent");
		for(i=0;i<tabcontent.length;i++) {
			tabcontent[i].style.display="none";
		}
		document.getElementById(option).style.display="block";
	}
	
	*/


	function openOpt(evt, option) {
		var i, tabcontent, tablinks;
		tabcontent=document.getElementsByClassName("tabcontent");
		//alert(tabcontent.length);
		for(i=0; i<tabcontent.length;i++) {
			tabcontent[i].style.display="none";
		}
		tablinks=document.getElementsByClassName("tablinks");
		for(i=0;i<tablinks.length;i++) {
			tablinks[i].className=tablinks[i].className.replace("  active", " ");
		}
		document.getElementById(option).style.display = "block";
		evt.currentTarget.className += "  active";
	}
	


</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

