<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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

	h1 {
	font-family: 'Hind Vadodara', sans-serif;
	font-size: 30px;
	font-weight: bolder;
	text-align: left;
	color: white;
	}

	.options {
		border: 1px solid white;
		width: 20%;
		position: absolute;
		left: 30%;
		top: 30%;
		background-color: rgba(0,0,0,0.4);
		opacity: 0.9;
		padding: 20px;
	}


	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara&display=swap" rel="stylesheet">
</head>
<body>
	<div class="options">
	<form name="addordelete" method="post">
		<h1>OPTIONS</h1>
		<a href="addflight.php"><button type="button" class="btn btn-warning">Add a Fight</button></a> </br></br>
		<a href="deleteflight.php"><button type="button" class="btn btn-warning">Delete a Fight</button></a>
	</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>