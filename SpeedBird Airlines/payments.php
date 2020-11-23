<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara&display=swap" rel="stylesheet">
	<title>Payments</title>

	<style>
		body {
			margin: 0;
			padding: 0;
			background-image: url("logo.png"), url("reg-wall.jpg");
			background-repeat: no-repeat;
			background-position: top right, center;
			background-size: auto, cover;
			background-attachment: fixed, fixed;
			z-index: 3,1;
		}

		.menu {
			position: absolute;
			right: 50%;
			top: 20%;
			border: 2px solid white;
			padding: 20px;
			background-color: rgba(0,0,0,0.4);
			opacity: 0.9;
			color: white;
		}	

		.nav-link {
			color: white;
			font-weight: bold;
		}

		h1 {
			font-size: 35px;
			font-family: 'Hind Vadodara', sans-serif;
			font-weight: bolder;
		}

		.btn {
			background-color: black;
		}


	</style>
</head>
<body>


<div class="menu">

<h1> SELECT PAYMENT METHOD </h1> </br>
	<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Credit/Debit Cards</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Internet Banking</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">UPI</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">E-Wallets</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      	
      	<p>Card Number: <input name="cardno" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" style="width: 300px"></p>
      	<p>Valid Thru: <input type="text" name="valid" placeholder="MM/YY" style="width: 90px"> &nbsp; &nbsp; &nbsp; &nbsp;
      	CVV : <input type="password" name="cvv" placeholder="***" style="width: 40px"></p>
      	<p1 style="color: red"> * Kindly enter the details in specified formats only </p1> </br>
      	<p><a href="Includes/ticket.inc.php"><button type="button" class="btn btn-secondary">Pay Now</button></a></p>

      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      	
      	<p>Select Your Bank: 

      		<input list="banks" name="banklist" style="width: 300px">
      		<datalist id="banks">
      			<option value="State Bank of India">
      			<option value="Bank of Baroda">
      			<option value="HDFC Bank">
      			<option value="ICICI Bank">
      			<option value="Indian Overseas Bank">
      			<option value="Bank of India">
      			<option value="HSBC Bank">
      			<option value="Corporation Bank">
      			<option value="Kotak Mahindra Bank">
      			<option value="Karnataka Bank">
      			<option value="Other Banks">
      		</datalist>
      	</p>
      	<p><a href="Includes/ticket.inc.php"><button type="button" class="btn btn-secondary">Pay Now</button></a></p>

      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      	
      	<p>
      		UPI ID: <input type="text" name="upiid" placeholder="xyz@abc" style="width: 250px">
      	</p>
      	<p1 style="color: red"> * Kindly enter the details in specified formats only </p1> </br>
      	<p><a href="Includes/ticket.inc.php"><button type="button" class="btn btn-secondary">Pay Now</button></a></p>

      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      	
      	<p>
      		Select the Wallet:
      		<input list="wallet" name="walletlist" style="width: 250px">
      		<datalist id="wallet">
      			<option value="PayTm">
      			<option value="Freecharge">
      			<option value="PhonePe">
      			<option value="GPay">
      			<option value="Simpl">
      			<option value="PayZapp">
      		</datalist>
      	</p>
      	<p><a href="Includes/ticket.inc.php"><button type="button" class="btn btn-secondary">Pay Now</button></a></p>

      </div>
    </div>
  </div>
</div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>