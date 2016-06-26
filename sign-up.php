<?php

	session_start();
?>
<!DOCTYPE html>
<html lang="fa">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta charset="utf-8" />

		<meta name="author" content="IKA">

		<title>آشپز - ثبت‌نام</title>

		<!-- Styles -->
		<!-- Joqd Core CSS -->
		<link href="css/joqd.min.css" rel="stylesheet">

		<!-- Gorbeh Icons -->
		<link href="gorbeh/css/gorbeh-icons.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body class="joqd grey-lighten-5">

		<header>

			<!-- Navbar -->
			<nav class="joqd navbar thick-navbar red white-text">
			  <div class="joqd container-narrow">

			    <!-- Sandwich -->
			    <div class="joqd sandwich white-text red-lighten-1-hover open-navside">
			      <i class="gorbeh gorbeh_menu"></i>
			    </div>
			    <!-- /Sandwich -->

			    <!-- Logo -->
			    <div class="joqd logo">
			      <a href="index.html" class="joqd link white-text">
			        <img src="img/ashpaz-logo.png" alt="آشپز">
			      </a>
			    </div>
			    <!-- /Logo -->

			    <!-- Content -->
			    <ul class="joqd navbar-content">
			      <li>
			        <a href="#" class="joqd link white-text red-lighten-1-hover" title="ورود"><i class="gorbeh gorbeh_account_circle"></i></a>
			      </li>
			    </ul>
			    <!-- /Content -->

			  </div>
			</nav>
			<!-- /Navbar -->

			<!-- Navside -->
			<nav class="joqd navside dynamic-navside no-padding desktop-2 laptop-3 tablet-4 mobile-8">
				<div class="joqd navside-container grey-lighten-4">

					<!-- Navside Header -->
					<div class="joqd navside-header">
						<img src="https://placeholdit.imgix.net/~text?txtsize=32&txt=Ashpaz&w=224.83&h=128" alt="" class="joqd responsive" style="width: 100%; height: auto">
					</div>
					<!-- Navside Header -->

					<!-- Navside Body -->
					<div class="joqd navside-body">
						<ul class="joqd stack">
							<li>
								<a href="#" class="joqd primary-action black-text">اولی</a>
								<!-- <ul class="joqd stack">
									<li><a href="" class="joqd secondary-action grey-darken-4-text"></a></li>
								</ul> -->
							</li>
							<li>
								<a href="#" class="joqd primary-action black-text">دومی</a>
								<!-- <ul class="joqd stack">
									<li><a href="" class="joqd secondary-action grey-darken-4-text"></a></li>
								</ul> -->
							</li>
							<li>
								<a href="#" class="joqd primary-action black-text">سومی</a>
								<!-- <ul class="joqd stack">
									<li><a href="" class="joqd secondary-action grey-darken-4-text"></a></li>
								</ul> -->
							</li>
						</ul>
					</div>
					<!-- /Navside Body -->

					<!-- Navside Footer -->
					<div class="joqd navside-footer">
					</div>
					<!-- Navside Footer -->

				</div>
			</nav>
			<!-- /Navside -->

		</header>

		<main class="joqd narrow-container">
      <!-- Banner -->
			<section id="pageBanner" class="joqd row red-lighten-5">
				<div class="joqd desktop-10 desktop-push-1">
				  <h1>ثبت نام در آشپز</h1>
				</div>
			</section>
			<!-- /Banner -->

      <!-- Form -->
      <div class="joqd row">
        <div id="formWrapper" class="joqd white soft-corner desktop-10 desktop-push-1 custom-input">
          <form method="post" action="sign-up.php" class="joqd row">

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_perm_identity"></i>
              <input id="fname"type="text" name="name" class="joqd input thin-bottom-border grey-border">
              <label for="fname" class="joqd grey-text">نام</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_person"></i>
              <input id="lname" type="text" name="family" class="joqd input thin-bottom-border grey-border">
              <label for="lname" class="joqd grey-text">نام خانوادگی</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_streetview"></i>
              <input id="username" type="text" name="usr" class="joqd input thin-bottom-border grey-border">
              <label for="username" class="joqd grey-text">نام کاربری</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_mail_outline"></i>
              <input id="email" type="email" name="email" class="joqd input thin-bottom-border grey-border">
              <label for="email" class="joqd grey-text">ایمیل</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_lock_outline"></i>
              <input id="password" type="password" name="psw" class="joqd input thin-bottom-border grey-border">
              <label for="password" class="joqd grey-text">رمز عبور</label>
            </div>

            <div class="joqd input-field alaki desktop-6 laptop-6 tablet-6 mobile-12"></div>

            <div class="joqd switch-field isChef desktop-6 laptop-6 tablet-6 mobile-12">
              <p class="joqd grey-text"><i class="gorbeh gorbeh_room_service"></i> آشپز هستید؟</p>
              <input id="cater" type="text" name="catering_name" class="joqd input thin-bottom-border grey-border">
              <label for="cater" class="joqd grey-text">نام کیترینگ</label>
             
              </label>
            </div>
      
            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_terrain"></i>
              <select id="state" name="state_code"class="joqd input thin-bottom-border grey-border">
                <option value="0" class="joqd" disabled>استان محل زندگی خود را مشخص کنید</option>
                <option value="1" class="joqd" selected>تهران</option>
                <option value="2" class="joqd">اصفهان</option>
              </select>
              <span class="joqd caret"></span>
              <label for="state" class="joqd grey-text always-open-input">استان</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_location_city"></i>
              <select id="city" name="city_code" class="joqd input thin-bottom-border grey-border">
                <option value="0" class="joqd" disabled>شهر محل زندگی خود را مشخص کنید</option>
                <option value="1" class="joqd" selected>تهران</option>
                <option value="2" class="joqd">پردیس</option>
                <option value="3" class="joqd">دماوند</option>
                <option value="4" class="joqd">شهرری</option>
                <option value="4" class="joqd">اصفهان</option>
                <option value="5" class="joqd">چادگان</option>
                <!-- <option value="11" class="joqd">اصفهان</option>
                <option value="12" class="joqd">کاشان</option>
                <option value="13" class="joqd">گلپایگان</option> -->
              </select>
              <span class="joqd caret"></span>
              <label for="city" class="joqd grey-text">شهر</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_my_location"></i>
              <input id="localAddress" name="address" type="text" class="joqd input thin-bottom-border grey-border">
              <label for="localAddress" class="joqd grey-text">آدرس محلی</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_markunread_mailbox"></i>
              <input id="postalCode" type="number" name="p_code" class="joqd input thin-bottom-border grey-border">
              <label for="postalCode" class="joqd grey-text">کد پستی</label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12">
              <i class="joqd prefix grey-text gorbeh gorbeh_local_phone"></i>
              <input id="phoneNumber" type="number" name="phonenumber" class="joqd input thin-bottom-border grey-border">
              <label for="phoneNumber" class="joqd grey-text">شماره تماس</label>
            </div>

            <div class="joqd input-field alaki desktop-6 laptop-6 tablet-6 mobile-12"></div>

            <div class="joqd input-field desktop-6  laptop-6 laptop-push-3 tablet-6 tablet-push-3 mobile-12 align-center">
              <input type="submit" name="sign_up" value="ثبت نام" class="joqd green large soft-corner no-border flat button">
            </div>

            <?php require 'insert_user.php'; ?>
          </form>

        </div>

      </div>
      <!-- /Form -->
		</main>

		<footer class="joqd narrow-container red">
			<section class="joqd row">
				<div class="joqd desktop-6 desktop-push-1">
					<a href="#!" class="joqd link white-text">فلان</a>
						<a href="#!" class="joqd link white-text">بهمان</a>
				</div>
			</section>
		</footer>

		<!-- Scripts -->
		<!-- Latest jQuery (CND) -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>

		<!-- Joqd Core js -->
		<script src="js/joqd.min.js"></script>

    <!-- Custom js -->
		<script src="js/custom.js"></script>

	</body>
</html>
