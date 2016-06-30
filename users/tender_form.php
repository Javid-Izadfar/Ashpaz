
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

	description: <input type="text" name="tender_description" /><br/>
	delivery date: <input type="date" name="delivery_date" /><br/>
	total cost :<input type="number" name="total_cost" /><br/>

	<input type="submit" name="tender_request" value="send" />
	<?php insertTender(); ?>

</form>