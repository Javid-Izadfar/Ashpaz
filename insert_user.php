<?php

	$dbhost = "localhost";
	$dbuser = "ashpaz_bashi";
	$dbpass = "1234";
	$dbname = "ashpaz";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("connection was not established");




	if (isset($_POST['sign_up'])) {


			$name =  mysqli_real_escape_string($conn,$_POST['name']);
			$family =  mysqli_real_escape_string($conn, $_POST['family']);
			$username = mysqli_real_escape_string($conn, $_POST['usr']);
			$password = mysqli_real_escape_string($conn, $_POST['psw']);
			$address = mysqli_real_escape_string($conn, $_POST['address']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$city=  mysqli_real_escape_string($conn,$_POST['city_code']);
			$state = mysqli_real_escape_string($conn, $_POST['state_code']);
			$postalCode = mysqli_real_escape_string($conn, $_POST['p_code']);
			$catering_name = mysqli_real_escape_string($conn, $_POST['catering_name']);
			$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);


			$get_email = "select * from users where email='$email'";
			$run_email = mysqli_query($conn, $get_email);
			$check = mysqli_num_rows($run_email);

			if ($check==1) {
				echo "this email registerd";
				exit();
			}

			$insert = "insert into users (
				name ,family,username,password,address,state_code,city_code,email,p_code,catering_name,phonenumber) values (
				'$name', '$family','$username','$password','$address','$state','$city','$email','$postalCode','$catering_name','$phonenumber')";

			$run_insert = mysqli_query($conn, $insert);

			if($run_insert){
				
				echo "inserted";
				exit();
			}
			
		}

?>