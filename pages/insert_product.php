<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
</head>
<body>


	<h1>INSERT PRODUCT</h1>
	<hr>
		<form action="?page=operation" method="POST">
		
		<input type="text" required="" name="PRODUCT_ID" placeholder="ID"><br>
		<input type="text" required="" name="PRODUCT_NAME" placeholder="NAME"><br>
		<input type="text" required="" name="PRODUCT_QUANTITY" placeholder="QUANTITY">
		
		<br>
		<label for="WAREHOUSE">Warehouse:</label>
		<label class="container">Garbsen
	 		<input type="radio" name="WAREHOUSE_ID" value="1" checked="checked">
		</label>
		<label class="container">Laatzen
	  		<input type="radio" name="WAREHOUSE_ID" value="2" >
		</label>
		<br>

		<label for="MANUFACTURER">Manufacturer:</label>
		<select name="MANUFACTURER_ID" id="MANUFACTURER_ID">
		  <option value="1" >Apple</option>
		  <option value="2" >Samsung</option>
		  <option value="3" >HP</option>

		</select>
		<br>

		<label for="CATEGORY">Category:</label>
		<select name="CATEGORY_ID" id="CATEGORY_ID">
		  <option value="1" >Electronics</option>
		  <option value="2" >Home</option>

		</select>
		<br>

		<button type="submit" name="insert_product">SEND</button>
	</form>

	<br>



</body>
</html>