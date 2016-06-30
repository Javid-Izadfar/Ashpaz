<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	address:<input type="text" name="catering_name" value="" /><br/>
	address:<input type="text" name="catering_address" value="" /><br/>
	postal code:<input type="number" name="catering_pcode" value="" /><br/>
	bussiness license: <input type="number" name="business_license" value="" /><br/>
	state name: <select name="state_code">
		<option value="0"  disabled>شهر محل زندگی خود را مشخص کنید</option>
                <?php getState(); ?>
	</select><br/>
	city name:<select name="city_code">
		<option value="0"  disabled>شهر محل زندگی خود را مشخص کنید</option>
                <?php getCity(); ?>
	</select><br/>
	<input type="submit" name="send" value="send" />
	<?php getCateringInformaion(); ?>


</form>