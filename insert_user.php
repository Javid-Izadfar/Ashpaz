<?php

	$dbhost = "localhost";
	$dbuser = "database_p";
	$dbpass = "123456";
	$dbname = "ashpaz";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("connection was not established");
	$message = "";
	$name = $family = $username = $password = $email = $address = $phonenumber = $postalCode =  "";



	if (isset($_POST['sign_up'])) {

		if (isset($_POST['name']) && !empty($_POST['name'])) {
			$name =  mysqli_real_escape_string($conn,$_POST['name']);
		}else{
			$message .= "<p class='joqd red-text'>نام وارد نشده است.</p>";
		}

		if (isset($_POST['family']) && !empty($_POST['family'])) {
			$family =  mysqli_real_escape_string($conn,$_POST['family']);
		}else{
			$message .= "<p class='joqd red-text'>نام خانوادگی وارد نشده است.</p>";
		}

		if (isset($_POST['usr']) && !empty($_POST['usr'])) {
			$username =  mysqli_real_escape_string($conn,$_POST['usr']);
		}else{
			$message .= "<p class='joqd red-text'>نام کاربری وارد نشده است.</p>";
		}

		if (isset($_POST['psw']) && !empty($_POST['psw'])) {
			$password =  mysqli_real_escape_string($conn,$_POST['psw']);
		}else{
			$message .= "<p class='joqd red-text'>رمز ورود وارد نشده است.</p>";
		}

		if (isset($_POST['address']) && !empty($_POST['address'])) {
			$address =  mysqli_real_escape_string($conn,$_POST['address']);
		}else{
			$message .= "<p class='joqd red-text'>آدرس محلی وارد نشده است</p>";
		}

		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email =  mysqli_real_escape_string($conn,$_POST['email']);
		}else{
			$message .= "<p class='joqd red-text'>ایمیل وارد نشده است</p>";
		}

		if (isset($_POST['city_code']) && !empty($_POST['city_code'])) {
			$city=  mysqli_real_escape_string($conn,$_POST['city_code']);
		}else{
			$message .= "<p class='joqd red-text'>شهر وارد نشده</p>";
		}

		if (isset($_POST['state_code']) && !empty($_POST['state_code'])) {
			$state=  mysqli_real_escape_string($conn,$_POST['state_code']);
		}else{
			$message .= "<p class='joqd red-text'>استان وارد نشده</p>";
		}

		if (isset($_POST['p_code']) && !empty($_POST['p_code'])) {
			$postalCode=  mysqli_real_escape_string($conn,$_POST['p_code']);
		}else{
			$message .= "<p class='joqd red-text'>کد پستی وارد نشده است</p>";
		}

		if (isset($_POST['phonenumber']) && !empty($_POST['phonenumber'])) {
			$get_email = "select * from users where email='$email'";
			$run_email = mysqli_query($conn, $get_email);
			$check_email = mysqli_num_rows($run_email);
			if ($check_email == 1) {
				$message .= "<p class='joqd red-text'>ایمیل قبلا ثبت شده است.</p>";
			} else {
				$phonenumber=  mysqli_real_escape_string($conn,$_POST['phonenumber']);
			}
		}else{
			$message .= "<p class='joqd red-text'>ایمیل وارد نشده است.</p>";
		}

		$catering_name = mysqli_real_escape_string($conn, $_POST['catering_name']);

		echo "<h4 class='joqd red-text'>خطا!</h4>". $message;

		if (!empty($_POST['name']) || !empty($_POST['family']) || !empty($_POST['usr']) || !empty($_POST['psw']) || !empty($_POST['address']) || !empty($_POST['email']) || !empty($_POST['p_code'])  || !empty($_POST['phonenumber']) ) {
			$insert = "INSERT INTO users (
				name,family,username,password,email,state_code,city_code,address,phonenumber,catering_name,p_code) VALUES (
				'$name','$family','$username','$password','$email','$state','$city','$address','$phonenumber','$catering_name','$postalCode')";

			$run_insert = mysqli_query($conn, $insert);

			if($run_insert){
				$_SESSION['email'] = $email;
			} else {
				echo "خطا: " . $sql . "<br>" . mysqli_error($conn);
			}
		}

	}

	mysqli_close($conn);
?>
