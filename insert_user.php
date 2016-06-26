<?php

	$dbhost = "localhost";
	$dbuser = "ashpaz_bashi";
	$dbpass = "1234";
	$dbname = "ashpaz";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("connection was not established");
	$message = " ";




	if (isset($_POST['sign_up'])) {

		if (isset($_POST['name']) && !empty($_POST['name'])) {

			$name =  mysqli_real_escape_string($conn,$_POST['name']);

		}else{

			$message .= " نام وارد نشده  ";
			exit();

		}

		if (isset($_POST['family']) && !empty($_POST['family'])) {

			$family =  mysqli_real_escape_string($conn,$_POST['family']);

		}else{

			$message .= " نام خانوادگی وارد نشده ";
			exit();
		}


		if (isset($_POST['usr']) && !empty($_POST['usr'])) {

			$username =  mysqli_real_escape_string($conn,$_POST['usr']);

		}else{

			$message .= " نام کاربری وارد نشده ";
			exit();
		}

		if (isset($_POST['psw']) && !empty($_POST['psw'])) {

			$password =  mysqli_real_escape_string($conn,$_POST['psw']);

		}else{

			$message .= " گذرواژه وارد نشده ";
			exit();
		}

		if (isset($_POST['address']) && !empty($_POST['address'])) {

			$address =  mysqli_real_escape_string($conn,$_POST['address']);

		}else{

			$message .= " آدرس وارد نشده ";
			exit();
		}

		if (isset($_POST['email'])&& !empty($_POST['email'])) {

			$email =  mysqli_real_escape_string($conn,$_POST['email']);

		}else{

			$message .= " ایمیل وارد نشده";
			exit();
		}

		if (isset($_POST['city_code']) && !empty($_POST['city_code'])) {

			$city=  mysqli_real_escape_string($conn,$_POST['city_code']);

		}else{

			$message .= " شهر وارد نشده";
			exit();
		}

		if (isset($_POST['state_code']) && !empty($_POST['state_code'])) {

			$state=  mysqli_real_escape_string($conn,$_POST['state_code']);

		}else{

			$message .= "استان وارد نشده";
			exit();
		}

		if (isset($_POST['p_code']) && !empty($_POST['p_code'])) {

			$postalCode=  mysqli_real_escape_string($conn,$_POST['p_code']);

		}else{

			$message .= " کد پستی وارد نشده";
			exit();
		}

		if (isset($_POST['phonenumber']) && !empty($_POST['phonenumber'])) {

			$phonenumber=  mysqli_real_escape_string($conn,$_POST['phonenumber']);

		}else{

			$message .= " ایمیل وارد نشده";
			exit();
		}

			$catering_name = mysqli_real_escape_string($conn, $_POST['catering_name']);


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
				$_SESSION['email'] = $email;
				echo "inserted";
				echo $message;
				exit();
			}
			
		}

?>