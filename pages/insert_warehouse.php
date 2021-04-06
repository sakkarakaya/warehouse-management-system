<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
</head>
<body>


	<h1>INSERT WAREHOUSE</h1>
	<hr>
	<form action="?page=operation" method="POST">
		
		<input type="text" required="" name="WAREHOUSE_ID" placeholder="ID">
		<input type="text" required="" name="WAREHOUSE_NAME" placeholder="NAME">
		

		


		<button type="submit" name="insert_warehouse">SEND</button>
	</form>

	<br>



</body>
</html>