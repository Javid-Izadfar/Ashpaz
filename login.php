<?php

	if(!isset($_SESSION))
    {
        session_start();
    }
    else
    {
        session_destroy();
        session_start();
    }

	$dbhost = "localhost";
	$dbuser = "database_p";
	$dbpass = "123456";
	$dbname = "ashpaz";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("connection was not established");
	$message = " ";


if (isset($_POST['login'])) {

	if (isset($_POST['email']) && !empty($_POST['email'])) {

		$email = mysqli_real_escape_string($conn, $_POST['email']);
	}else{

		$message .= "ایمیل وارد نکردید";
	}

	if (isset($_POST['psw']) && !empty($_POST['psw'])) {

		$password = mysqli_real_escape_string($conn, $_POST['psw']);
	}else{

		$message .= "پسورد وارد نکردید";
	}


			$get_user = "select * from users where email='$email' AND password='$password'";
			$run_user = mysqli_query($conn, $get_user);
			$check = mysqli_num_rows($run_user);


	if ($check==1) {

		$_SESSION['email']=$email;
		echo "yes yes";

	}
}


?>
