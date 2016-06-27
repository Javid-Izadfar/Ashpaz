<main class="joqd narrow-container">

			<!-- Banner -->
			<section id="indexPageBanner" class="joqd row">
				<span></span>
			</section>
			<!-- /Banner -->

			<!-- Content -->
			<section class="joqd row">

				<!-- SignUp Form -->
				<div id="formWrapper" class="joqd soft-corner white desktop-4 desktop-push-1">
					<h2>وارد شوید</h2>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

						<div class="joqd input-field">
							<i class="joqd prefix grey-text gorbeh gorbeh_streetview"></i>
					    <input id="email" type="text"  name="email" class="joqd input thin-bottom-border grey-border">
					    <label for="email" class="joqd grey-text">نام کاربری</label>
					  </div>

						<div class="joqd input-field">
							<i class="joqd prefix grey-text gorbeh gorbeh_lock_outline"></i>
					    <input id="password" type="password" name="psw" class="joqd input thin-bottom-border grey-border">
					    <label for="password" class="joqd grey-text">رمز عبور</label>
					  </div>

						<div class="joqd input-field">
							<input type="submit" name="login" value="وارد شوید" class="joqd green large soft-corner no-border flat button">
						</div>

					</form>
					<?php require 'login.php'; ?>

					<p id="alreadySignedUp">در آشپز عضو نیستید؟ <a href="sign-up.html" class="joqd link red-text red-darken-2-text-hover">عضو شوید</a>!</p>
				</div>
				<!-- /SignUp Form -->

				<!-- About -->
				<div id="about" class="joqd desktop-6 desktop-push-1">
					<h1 class="joqd red-text">آشپز</h1>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
					<p>این شبکه اجتماعی به عنوان پروژه‌ی درس پایگا‌ه‌های داده <b>دکتر وزیری</b> طراحی و پیاده‌سازی شده است.</p>
				</div>
				<!-- /About -->

			</section>
			<!-- /Content -->
		</main>