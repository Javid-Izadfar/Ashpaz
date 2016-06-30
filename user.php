<?php 
session_start();
require 'functions/functions.php';
require 'template/header.php';
?>

<main id="user" class="joqd container">

			<header id="profileWrapper" class="joqd row">
				<div class="joqd desktop-12 white shadowed soft-corner">
					<h1>گوردون رمزی</h1>
					<p><i class="gorbeh gorbeh_person_pin_circle gorbeh_s2"></i> ساکن آمریکا، فلان‌جا</p>
					<p><i class="gorbeh gorbeh_list gorbeh_s2"></i> <a href="menu.html" class="joqd link red-text red-darken-1-text">مشاهده‌ی منو</a></p>
					<p><i class="gorbeh gorbeh_store_mall_directory gorbeh_s2"></i> آشپز در <a href="resturant.html" class="joqd link red-text red-darken-1-text">رستوران گوردون رمزی</a>‌</p>
				</div>
			</header>

			<section id="profile-content" class="joqd row">

				<div id="makeNewPost" class="joqd desktop-4">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="joqd row white shadowed no-padding soft-corner">
						<div class="joqd desktop-12 laptop-12 tablet-12 mobile-12">

								<div class="joqd input-field">
									<input id="postTitle" type="text" name="post_title" class="joqd input thin-bottom-border grey-border">
									<label for="postTitle" class="joqd grey-text">عنوان</label>
							  </div>

								<div class="joqd input-field">
									<textarea id="postConent" name="post_description" class="joqd input thin-bottom-border grey-border"></textarea>
									<label for="postConent" class="joqd grey-text">چه میکنی؟</label>
							  </div>

								<div class="upload">
									<label for="datafile">
										<i class="gorbeh gorbeh_camera_alt joqd red-text-hover"></i>
										
									</label>
									<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
					        	<input type="file" name="post_img_url" id="datafile">
						    </div>

								<input type="submit" name="post_this" id="submit" value="پست" class="joqd green medium soft-corner no-border flat button" style="float: left">
						</div>
					</form>
					<?php insertPost(); ?>
				</div>

				<div id="timeline" class="joqd desktop-8">

					<?php getPost(); ?>

					

				</div>
			</section>

		</main>
<?php
require 'template/footer.php';
?>