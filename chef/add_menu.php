		<main id="menu" class="joqd container">

			<section id="menuWrapper" class="joqd row">

				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="joqd desktop-12 white shadowed no-padding soft-corner">
					<div class="joqd desktop-4">
						<h2>منو غذاهایت را تکمیل کن!</h2>
					</div>
					<div class="joqd desktop-3">
						<div class="joqd input-field">
					    <input id="foodName" type="text" name="food_name" class="joqd input thin-bottom-border grey-border">
					    <label for="foodName" class="joqd grey-text">نام غذا</label>
					  </div>
					</div>
					<div class="joqd desktop-2">
						<div class="joqd input-field">
			              <input id="foodCat" type="text" name="food_type" class="joqd input thin-bottom-border grey-border">
			              <label for="foodCat" class="joqd grey-text">نوع غذا</label>
			            </div>
					</div>
					<div class="joqd desktop-3">
						<div class="joqd input-field">
					    <input id="foodprice" type="number" name="food_cost" class="joqd input thin-bottom-border grey-border">
					    <label for="foodprice" class="joqd grey-text">قیمت غذا</label>
					  </div>
					</div>

				food Code:	<input type="number" name="food_code" value="">
					<input type="submit" name="send" value="ثبت کن">
				</form>

				<?php insertFood(); ?>
