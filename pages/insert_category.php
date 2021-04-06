<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
</head>
<body>


	<h1>INSERT CATEGORY</h1>
	<hr>
	<form action="?page=operation" method="POST">
		
		<input type="text" required="" name="CATEGORY_ID" placeholder="ID">
		<input type="text" required="" name="CATEGORY_NAME" placeholder="NAME">
		

		


		<button type="submit" name="insert_category">SEND</button>
	</form>

	<br>



</body>
</html>