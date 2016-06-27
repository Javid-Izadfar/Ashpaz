<?php



	require 'template/header.php';


?>

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
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="joqd row">

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
              <label for="isChef" id="isChefSwitchLabel" class="joqd grey-text switch">
                خیر
                <input id="isChef" type="checkbox">
                <div class="joqd lever round-corner grey-lighten-1">
                  <div class="joqd trigger grey-darken-1 circle-corner"></div>
                </div>
                بله
              </label>
            </div>

            <div class="joqd input-field desktop-6 laptop-6 tablet-6 mobile-12" style="visibility: hidden;">
              <i class="joqd prefix grey-text gorbeh gorbeh_restaurant"></i>
              <input id="cater" type="text"  name="catering_name" class="joqd input thin-bottom-border grey-border">
              <label for="cater" class="joqd grey-text">نام کیترینگ</label>
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

		<?php

		require 'template/footer.php';

		?>
