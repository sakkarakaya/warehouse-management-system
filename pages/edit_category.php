<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>UPDATE CATEGORY TABLE</h2>
<hr>


	<?php 

	$data=$conn->prepare("SELECT * FROM CATEGORY where CATEGORY_ID=:id");
	$data->execute(array(
		'id' => $_GET['CATEGORY_ID']
	));

	$qdata=$data->fetch(PDO::FETCH_ASSOC);

	
	?>




	<form action="?page=operation" method="POST">

		<label>CATEGORY ID  &emsp;&emsp;&emsp;&emsp;  :</label>
		<input type="text" required="" name="CATEGORY_ID" value="<?php echo $qdata['CATEGORY_ID'] ?>"><br>
		<label>CATEGORY NAME   &emsp;&emsp; :</label>
		<input type="text" required="" name="CATEGORY_NAME" value="<?php echo $qdata['CATEGORY_NAME'] ?>"><br>
		



		


		<input type="hidden" value="<?php echo $qdata['CATEGORY_ID'] ?>" name="CATEGORY_ID">
		<br>
		<button type="submit" name="update_category">Edit</button>

	</form>

	<br>







</body>
</html>