<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Delete Flight</title>

	<style type="text/css">
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

input {
	height: 40px;
	border: 0.1px solid white;
	border-radius: 3px;
	padding: 10px;
}

.form-container {
	border: 1px solid white;
	width: 30%;
	padding: 20px;
	position: absolute;
	top: 30%;
	left: 10%;
	background-color: rgba(0,0,0,0.4);
	opacity: 0.9;
}
	</style>


</head>
	
<div class="form-container">
	<form name="deleteflight" method="get" action="Includes/deleteflight.inc.php">
		<input type="text"  id="deleteflight" name="flight_no" placeholder="Enter the Flight Number to delete" onclick="defaultattribute()"> &nbsp;
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>

<script type="text/javascript">
	function defaultattribute() {
		document.getElementById("deleteflight").defaultValue = "SB";
	}
</script>
<body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>