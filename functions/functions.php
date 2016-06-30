<?php

	//Connect to Database

		$dbhost = "localhost";
		$dbuser = "database_p";
		$dbpass = "123456";
		$dbname = "ashpaz";
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("connection was not established");
		$message = " ";

		

	//Login 

		function Login(){
			global $conn;

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


				if ($check == 1) {
					
					$_SESSION['email']=$email;
				}else{

					echo "نام کاربری یا گذرواژه اشتباه است";
				}

				$user = $_SESSION['email'];

				$is_chef = "select * from users where email='$user' and catering_name is not not";
				$run_is_chef = mysqli_query($conn,$is_chef);
				$check_is_chef = mysqli_num_rows($run_is_chef);
				
				if ($run_is_chef==1) {
					header("location: page1.php");
				}else{
					header("location: page2.php");
				}


		}
	}


	//Insert user to Database _ Sign Up

		function insertUser(){
		global $conn;

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
						name,family,username,password,email,state_code,city_code,address,phonenumber,catering_name,p_code) values (
						'$name','$family','$username','$password','$email','$state','$city','$address','$phonenumber','$catering_name','$postalCode')";

					$run_insert = mysqli_query($conn, $insert);

					if($run_insert==1){
						$_SESSION['email'] = $email;
						echo "inserted";
						echo $message;
						exit();
					}
				
			}
		}


	// LookUp_state

		function getState(){

			global $conn;

			$get_state = "select * from state_lookup";
			$run_state_lookup = mysqli_query($conn, $get_state);

			while($row = mysqli_fetch_array($run_state_lookup)){

				$state_code = $row['state_code'];
				$state_name = $row['state_name'];

				echo "<option value='$state_code' class='joqd' disabled>$state_name</option>";
			}
		}

	// LookUp_city

		function getCity(){

			global $conn;

			$get_city = "select * from city_lookup";
			$run_city_lookup = mysqli_query($conn, $get_city);

			while($row = mysqli_fetch_array($run_city_lookup)){

				$city_code = $row['city_code'];
				$city_name = $row['city_name'];

				echo "<option value='$city_code' class='joqd' disabled>$city_name</option>";
			}
		}

	// Insert tender 

		function insertTender(){

			global $conn;

			if (isset($_POST['tender_request'])) {
			
				if (isset($_POST['tender_description']) && !empty($_POST['tender_description'])) {

					$tenderDescription = mysqli_real_escape_string($conn,$_POST['tender_description']);

				}else{

					$message = "متن مناقصه وارد نشده";
					$tenderDescription ="";
				}

				if (isset($_POST['delivery_date']) && !empty($_POST['delivery_date'])) {

					$deliveryDate = mysqli_real_escape_string($conn,$_POST['delivery_date']);

				}else{

					$message = "زمان تحویل وارد نشده ";
					$deliveryDate ="";
				}

				if (isset($_POST['total_cost']) && !empty($_POST['total_cost'])) {

					$totalCost = mysqli_real_escape_string($conn,$_POST['total_cost']);

				}else{

					$message = " قیمت کل وارد نشده";
					$totalCost ="";
				}

				$user = $_SESSION['email'];
					$get_user_tender = "select * from users where email='$user'";
					$run_user_tender = mysqli_query($conn,$get_user_tender);
					$row = mysqli_fetch_array($run_user_tender);
					$user_id = $row['user_id'];


				$insert_tender = "insert into tender(
					user_id, tender_description, delivery_date, total_cost) values(
					'$user_id','$tenderDescription', '$deliveryDate', '$totalCost') ";

				$run_insert_tender = mysqli_query($conn, $insert_tender);

					if($run_insert_tender){
						
						echo "inserted";
						echo $message;
					
					}






			}
		}

	// Insert catering information

		function getCateringInformaion(){

			global $conn;

			if (isset($_POST['send'])) {


				if (isset($_POST['catering_name']) && !empty($_POST['catering_name'])) {

					$catringName = mysqli_real_escape_string($conn,$_POST['catering_name']);

				}else{

					$catringName ="";
				}
			
				if (isset($_POST['catering_address']) && !empty($_POST['catering_address'])) {

					$catringAddress = mysqli_real_escape_string($conn,$_POST['catering_address']);

				}else{

					$catringAddress ="";
				}

				if (isset($_POST['catering_pcode']) && !empty($_POST['catering_pcode'])) {

					$catringPcode = mysqli_real_escape_string($conn,$_POST['catering_pcode']);

				}else{

					$catringPcode ="";
				}

				if (isset($_POST['business_license']) && !empty($_POST['business_license'])) {

					$businessLicense = mysqli_real_escape_string($conn,$_POST['business_license']);

				}else{

					$businessLicense ="";
				}

				if (isset($_POST['state_code']) && !empty($_POST['state_code'])) {

					$stateCode = mysqli_real_escape_string($conn,$_POST['state_code']);

				}else{

					$stateCode ="";
				}

				if (isset($_POST['city_code']) && !empty($_POST['city_code'])) {

					$cityCode = mysqli_real_escape_string($conn,$_POST['city_code']);

				}else{

					$cityCode ="";
				}

				$user = $_SESSION['email'];
					$get_user_info = "select * from users where email='$user'";
					$run_user_info = mysqli_query($conn,$get_user_tender);
					$row = mysqli_fetch_array($run_user_info);
					$user_id = $row['user_id'];




				$insert_catering_information = "insert into catering(
					catering_name,catering_address,business_license,state_code,city_code,catering_pcode) values(
					'$catringName', '$catringAddress', 'businessLicense', 'stateCode', 'cityCode', 'catringPcode')";

				$run_insert_catering = mysqli_query($conn, $insert_catering_information);

					if(run_insert_catering ==1){
						
						echo "inserted";
						echo $message;
					
					}

					$insert_catering_user = "insert into catering_user(
						user_id, business_license) values(
						'$user_id', '$businessLicense')";
					
					mysqli_query($conn,$insert_catering_user);

			}
		}

	//Insert food in Database

		function insertFood(){

			global $conn;

				if (isset($_POST['send'])) {

				if (isset($_POST['food_code']) && !empty($_POST['food_code'])) {

					$foodCode = mysqli_real_escape_string($conn,$_POST['food_code']);

				}else{


					$foodCode="";
				}
				
				if (isset($_POST['food_name']) && !empty($_POST['food_name'])) {

					$foodName = mysqli_real_escape_string($conn,$_POST['food_name']);

				}else{

					$foodName="";
				}

				if (isset($_POST['food_type']) && !empty($_POST['food_type'])) {

					$foodType = mysqli_real_escape_string($conn,$_POST['food_type']);

				}else{


					$foodType ="";
				}

				if (isset($_POST['food_cost']) && !empty($_POST['food_cost'])) {

					$foodCost = mysqli_real_escape_string($conn,$_POST['food_cost']);

				}else{


					$foodCost="";
				}


				$insert_food = "insert into food(
					food_name, food_type, food_cost) values(
					'$foodName', '$foodType', '$foodCost')";

				$run_insert_food = mysqli_query($conn, $insert_food);

				if ($run_insert_food == 1) {
					echo "food inserted";
				}

				$user = $_SESSION['email'];
					$get_user_info = "select * from users where email='$user'";
					$run_user_info = mysqli_query($conn,$get_user_tender);
					$row = mysqli_fetch_array($run_user_info);
					$user_id = $row['user_id'];

					

				$insert_food_user = "insert into food_user(
						user_id, food_code) values(
						'$user_id', '$food_code')";
					
					mysqli_query($conn,$insert_catering_user);


			}

		}

	//Insert Posts

		function insertPost(){

			global $conn;
			if (isset($_POST['post_this'])) {

				if (isset($_POST['post_title']) && !empty($_POST['post_title'])) {

					$postTitle = mysqli_real_escape_string($conn,$_POST['post_title']);

				}else{


					$postTitle="";
				}

				if (isset($_POST['post_description']) && !empty($_POST['post_description'])) {

					$postDescription= mysqli_real_escape_string($conn,$_POST['post_description']);

				}else{


					$postDescription="";
				}

				if (isset($_FILES['post_img_url'])) {
					
					$errors= array();
	    			$img_name = $_FILES['post_img_url']['name'];
	    			$img_size = $_FILES['post_img_url']['size'];
	    			$img_tmp = $_FILES['post_img_url']['tmp_name'];
	    			$img_type = $_FILES['post_img_url']['type'];
	    			$img_ext=strtolower(end(explode('.',$_FILES['post_img_url']['name'])));

	    			$expensions= array("jpeg","jpg","png");
	      
				    if(in_array($file_ext,$expensions)=== false){
				       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
				    }
				    
				    if($file_size > 2097152) {
				       $errors[]='File size must be excately 2 MB';
				    }
				    
				    if(empty($errors)==true) {
				       move_uploaded_file($file_tmp,"img/".$file_name);
				       echo "Success";
				    }else{
				       print_r($errors);
				    }
	     
				}

				$user = $_SESSION['email'];
				$get_user = "select * from users where email='$user'";
				$run_user = mysqli_query($conn,$get_user);
				$row = mysqli_fetch_array($run_user);
				$user_id = $row['user_id'];

				$insert_post = "insert into posts (
						user_id,post_title, post_description,post_img_url,post_date) values (
						'$user_id','$postTitle','$postDescription','$img_name',NOW())";

					$run_insert_post = mysqli_query($conn, $insert_post);

					if ($run_insert_post) {
						echo "yes";
					}






			}


		}


	//get post

		function getPost(){

			global $conn;

			$get_post = "select * from posts";

			$run_post = mysqli_query($conn, $get_post);

			while ($row_post = mysqli_fetch_array($run_post)) {

				$user_id = $row_post['user_id'];
				$post_title = $row_post['post_title'];
				$post_description = $row_post['post_description'];
				$post_img_url = $row_post['post_img_url'];

				echo "<div class='joqd post image-post desktop-12 white shadowed soft-corner no-padding'>
							<h4>$post_title</h4>
							<img src='img/$post_img_url' alt='' class='joqd responsive soft-corner'>
						</div>";

			}

		}
?>