<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>UPDATE MANUFACTURER TABLE</h2>
<hr>


	<?php 

	$data=$conn->prepare("SELECT * FROM MANUFACTURER where MANUFACTURER_ID=:id");
	$data->execute(array(
		'id' => $_GET['MANUFACTURER_ID']
	));

	$qdata=$data->fetch(PDO::FETCH_ASSOC);

	
	?>




	<form action="?page=operation" method="POST">

		<label>MANUFACTURER ID  &emsp;&emsp;&emsp;&emsp;  :</label>
		<input type="text" required="" name="MANUFACTURER_ID" value="<?php echo $qdata['MANUFACTURER_ID'] ?>"><br>
		<label>MANUFACTURER NAME   &emsp;&emsp; :</label>
		<input type="text" required="" name="MANUFACTURER_NAME" value="<?php echo $qdata['MANUFACTURER_NAME'] ?>"><br>
		



		


		<input type="hidden" value="<?php echo $qdata['MANUFACTURER_ID'] ?>" name="MANUFACTURER_ID">
		<br>
		<button type="submit" name="update_manufacturer">Edit</button>

	</form>

	<br>







</body>
</html>