<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>UPDATE WAREHOUSE TABLE</h2>
<hr>


	<?php 

	$data=$conn->prepare("SELECT * FROM WAREHOUSE where WAREHOUSE_ID=:id");
	$data->execute(array(
		'id' => $_GET['WAREHOUSE_ID']
	));

	$qdata=$data->fetch(PDO::FETCH_ASSOC);

	
	?>




	<form action="?page=operation" method="POST">

		<label>WAREHOUSE ID  &emsp;&emsp;&emsp;&emsp;  :</label>
		<input type="text" required="" name="WAREHOUSE_ID" value="<?php echo $qdata['WAREHOUSE_ID'] ?>"><br>
		<label>WAREHOUSE NAME   &emsp;&emsp; :</label>
		<input type="text" required="" name="WAREHOUSE_NAME" value="<?php echo $qdata['WAREHOUSE_NAME'] ?>"><br>
		



		


		<input type="hidden" value="<?php echo $qdata['WAREHOUSE_ID'] ?>" name="WAREHOUSE_ID">
		<br>
		<button type="submit" name="update_warehouse">Edit</button>

	</form>

	<br>







</body>
</html>