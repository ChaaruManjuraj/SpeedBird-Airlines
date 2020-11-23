<?php 


	include_once 'dbh.inc.php';
	session_start();

	if(isset($_POST['submitone'])) {

		$passname1 = $_POST['passname'];
		$passdob1 = $_POST['passDOB'];
		$passgen1 = $_POST['passgen'];
		$passadd1 = $_POST['passaddress'];
		$passproof1 = $_POST['passproof'];
		$passmobile1 = $_POST['passmobile'];
		$passemail1 = $_POST['passemail'];

		$flight_no = $_SESSION["flight_no"];
		$origin = $_SESSION['origin'];
		$destination = $_SESSION['destination'];
		$dateoftravel = $_SESSION["dateoftravel"];
		$bookingemail = $_SESSION["email"];

		$_SESSION['passcount'] = 1;

	#Exception handling

		if(empty($passname1) || empty($passdob1) || empty($passgen1) || empty($passadd1) || empty($passproof1) || empty($passmobile1) || empty($passemail1)) {
			header("Location: ../addpassenger.php?error=emptyfields");
			exit();
		}

		else if(!filter_var($passemail1, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../addpassenger.php?error=invalidemail");
			exit();
		}

		else {
			
			$sql = "INSERT INTO `PASSENGERS`(`passname`, `passdob`, `passgen`, `passadd`, `passproof`, `passmobile`, `passemail`, `flight_no`, `org`, `dest`, `bookingemail`, `dot`) VALUES ('$passname1','$passdob1','$passgen1','$passadd1','$passproof1','$passmobile1','$passemail1','$flight_no','$origin','$destination','$bookingemail','$dateoftravel');";

			if(mysqli_query($conn, $sql)) {
				$getid = mysqli_insert_id($conn);
				$_SESSION['passid11'] = $getid;	
				
				header("Location: ../confirmdetails.php?addpass=Successful?");
				exit();		
				/*
				$id = mysqli_query($conn, $getid);

				if(mysqli_num_rows($id) > 0) {
					while($row = mysqli_fetch_assoc($id)) {
						echo $id;
					}
				}
				else 
					echo "Fuck it";
			}
			*/
			
			}
			else {
				header("Location: ../addpassenger.php?addpass=Failed");
				exit();
			}
			
		}

	}

	if (isset($_POST['submitwo'])) {
		$passname21 = $_POST['passname21'];
		$passdob21 = $_POST['passDOB21'];
		$passgen21 = $_POST['passgen21'];
		$passadd21 = $_POST['passaddress21'];
		$passproof21 = $_POST['passproof21'];
		$passmobile21 = $_POST['passmobile21'];
		$passemail21 = $_POST['passemail21'];

		$passname22 = $_POST['passname22'];
		$passdob22 = $_POST['passDOB22'];
		$passgen22 = $_POST['passgen22'];
		$passadd22 = $_POST['passaddress22'];
		$passproof22 = $_POST['passproof22'];
		$passmobile22 = $_POST['passmobile22'];
		$passemail22 = $_POST['passemail22'];

		$flight_no = $_SESSION["flight_no"];
		$origin = $_SESSION['origin'];
		$destination = $_SESSION['destination'];
		$dateoftravel = $_SESSION["dateoftravel"];
		$bookingemail = $_SESSION["email"];

		$_SESSION['passcount'] = 2;

		if(empty($passname21) || empty($passdob21) || empty($passgen21) || empty($passadd21) || empty($passproof21) || empty($passmobile21) || empty($passemail21) || empty($passname22) || empty($passdob22) || empty($passgen22) || empty($passadd22) || empty($passproof22) || empty($passmobile22) || empty($passemail22))  {
				header("Location: ../addpassenger.php?error=emptyfields");
				exit();
		}

		else {
			$sql = "INSERT INTO `PASSENGERS`(`passname`, `passdob`, `passgen`, `passadd`, `passproof`, `passmobile`, `passemail`, `flight_no`, `org`, `dest`, `bookingemail`, `dot`) VALUES ('$passname21','$passdob21','$passgen21','$passadd21','$passproof21','$passmobile21','$passemail21','$flight_no','$origin','$destination','$bookingemail','$dateoftravel');";

			$sql2 = "INSERT INTO `PASSENGERS`(`passname`, `passdob`, `passgen`, `passadd`, `passproof`, `passmobile`, `passemail`, `flight_no`, `org`, `dest`, `bookingemail`, `dot`) VALUES ('$passname22','$passdob22','$passgen22','$passadd22','$passproof22','$passmobile22','$passemail22','$flight_no','$origin','$destination','$bookingemail','$dateoftravel');";


			$insert1 = mysqli_query($conn, $sql);
			if($insert1) {
				$getid21 = mysqli_insert_id($conn);
				$_SESSION['passid21'] = $getid21;	
			}
			else 
				echo "Issue with 1st insertion!";

			$insert2 = mysqli_query($conn, $sql2);
			if($insert2) {
				$getid22 = mysqli_insert_id($conn);
				$_SESSION['passid22'] = $getid22;
				header("Location: ../confirmdetails.php?addpass=Successful");
				exit();
			}

			/*
			if(mysqli_query($conn, $sql) && (mysqli_query($conn, $sql2)))  {
				header("Location: ../confirmdetails.php?addpass=Successful");
				exit();

			}
			*/
			
			else {
				
				header("Location: ../addpassenger.php?addpass=Failed");
				exit();

			}


		}

	}

	if (isset($_POST['submithree'])) {
		$passname31 = $_POST['passname31'];
		$passdob31 = $_POST['passDOB31'];
		$passgen31 = $_POST['passgen31'];
		$passadd31 = $_POST['passaddress31'];
		$passproof31 = $_POST['passproof31'];
		$passmobile31 = $_POST['passmobile31'];
		$passemail31 = $_POST['passemail31'];

		$passname32 = $_POST['passname32'];
		$passdob32 = $_POST['passDOB32'];
		$passgen32 = $_POST['passgen32'];
		$passadd32 = $_POST['passaddress32'];
		$passproof32 = $_POST['passproof32'];
		$passmobile32 = $_POST['passmobile32'];
		$passemail32 = $_POST['passemail32'];

		$passname33 = $_POST['passname33'];
		$passdob33 = $_POST['passDOB33'];
		$passgen33 = $_POST['passgen33'];
		$passadd33 = $_POST['passaddress33'];
		$passproof33 = $_POST['passproof33'];
		$passmobile33 = $_POST['passmobile33'];
		$passemail33 = $_POST['passemail33'];

		$flight_no = $_SESSION["flight_no"];
		$origin = $_SESSION['origin'];
		$destination = $_SESSION['destination'];
		$dateoftravel = $_SESSION["dateoftravel"];
		$bookingemail = $_SESSION["email"];

		$_SESSION['passcount'] = 3;

		if(empty($passname31) || empty($passdob31) || empty($passgen31) || empty($passadd31) || empty($passproof31) || empty($passmobile31) || empty($passemail31) || empty($passname32) || empty($passdob32) || empty($passgen32) || empty($passadd32) || empty($passproof32) || empty($passmobile32) || empty($passemail32) || empty($passname33) || empty($passdob33) || empty($passgen33) || empty($passadd33) || empty($passproof33) || empty($passmobile33) || empty($passemail33))  {
				header("Location: ../addpassenger.php?error=emptyfields");
				exit();
		}

		else {
			$sql = "INSERT INTO `PASSENGERS`(`passname`, `passdob`, `passgen`, `passadd`, `passproof`, `passmobile`, `passemail`, `flight_no`, `org`, `dest`, `bookingemail`, `dot`) VALUES ('$passname31','$passdob31','$passgen31','$passadd31','$passproof31','$passmobile31','$passemail31','$flight_no','$origin','$destination','$bookingemail','$dateoftravel');";

			$sql2 = "INSERT INTO `PASSENGERS`(`passname`, `passdob`, `passgen`, `passadd`, `passproof`, `passmobile`, `passemail`, `flight_no`, `org`, `dest`, `bookingemail`, `dot`) VALUES ('$passname32','$passdob32','$passgen32','$passadd32','$passproof32','$passmobile32','$passemail32','$flight_no','$origin','$destination','$bookingemail','$dateoftravel');";

			$sql3 = "INSERT INTO `PASSENGERS`(`passname`, `passdob`, `passgen`, `passadd`, `passproof`, `passmobile`, `passemail`, `flight_no`, `org`, `dest`, `bookingemail`, `dot`) VALUES ('$passname33','$passdob33','$passgen33','$passadd33','$passproof33','$passmobile33','$passemail33','$flight_no','$origin','$destination','$bookingemail','$dateoftravel');";

			
			$insert1 = mysqli_query($conn, $sql);
			if($insert1) {
				$getid31 = mysqli_insert_id($conn);
				$_SESSION['passid31'] = $getid31;	
			}
			else 
				echo "Issue with 1st insertion!";

			$insert2 = mysqli_query($conn, $sql2);
			if($insert2) {
				$getid32 = mysqli_insert_id($conn);
				$_SESSION['passid32'] = $getid32;	
			}
			else 
				echo "Issue with 2nd insertion!";

			$insert3 = mysqli_query($conn, $sql3);
			if($insert3) {
				$getid33 = mysqli_insert_id($conn);
				$_SESSION['passid33'] = $getid33;
				header("Location: ../confirmdetails.php?addpass=Successful");
				exit();
			}


			/*
			if(mysqli_query($conn, $sql) && (mysqli_query($conn, $sql2)) && (mysqli_query($conn, $sql3)))  {
				header("Location: ../confirmdetails.php?addpass=Successful");
				exit();
			}
			*/
			
			else {
				header("Location: ../addpassenger.php?addpass=Failed");
				exit();

			}


		}

	}


?>