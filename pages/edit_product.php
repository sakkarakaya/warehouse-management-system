<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>UPDATE PRODUCT TABLE</h2>
<hr>


	<?php 

	$data=$conn->prepare("SELECT PRODUCT.*, WAREHOUSE.*, MANUFACTURER.* 
FROM PRODUCT JOIN WAREHOUSE ON WAREHOUSE.WAREHOUSE_ID=PRODUCT.WAREHOUSE_ID  
JOIN MANUFACTURER ON MANUFACTURER.MANUFACTURER_ID=PRODUCT.MANUFACTURER_ID where PRODUCT_ID=:id");
	$data->execute(array(
		'id' => $_GET['PRODUCT_ID']
	));

	$qdata=$data->fetch(PDO::FETCH_ASSOC);

	
	?>




	<form action="?page=operation" method="POST">

		<label>Product ID&emsp;&emsp;&emsp;&emsp;:</label>
		<input type="text" required="" name="PRODUCT_ID" value="<?php echo $qdata['PRODUCT_ID'] ?>"><br>
		<label>Product Name&emsp;&emsp; :</label>
		<input type="text" required="" name="PRODUCT_NAME" value="<?php echo $qdata['PRODUCT_NAME'] ?>"><br>
		<label>Product Quantity &emsp;:</label>
		<input type="text" required="" name="PRODUCT_QUANTITY" value="<?php echo $qdata['PRODUCT_QUANTITY'] ?>"><br>



		Warehouse Name&emsp;:
		<label class="container">Garbsen
 		<input type="radio" name="WAREHOUSE_ID" value="1" <?php
  			if($qdata['WAREHOUSE_ID']=="1"){
			echo 'checked="checked"';
		} ?>>
		</label>
		<label class="container">Laatzen
  		<input type="radio" name="WAREHOUSE_ID" value="2" <?php
  			if($qdata['WAREHOUSE_ID']=="2"){
			echo 'checked="checked"';
		} ?>>
		</label>
		<br>

		
		<label for="MANUFACTURER">Manufacturer&emsp;&emsp;&emsp;:</label>

		<select name="MANUFACTURER_ID" id="MANUFACTURER_ID">
		  <option value="1" <?php if($qdata['MANUFACTURER_ID']=="1"){
            echo 'selected=""';
            } ?>>Apple</option>
		  <option value="2" <?php if($qdata['MANUFACTURER_ID']=="2"){
              echo 'selected=""';
          } ?>>Samsung</option>
          <option value="3" <?php if($qdata['MANUFACTURER_ID']=="3"){
              echo 'selected=""';
          } ?>>HP</option>
		</select>
		<br>

		<label for="CATEGORY">Category&emsp;&emsp;&emsp;&emsp;&emsp;:</label>

		<select name="CATEGORY_ID" id="CATEGORY_ID">
		  <option value="1" <?php if($qdata['CATEGORY_ID']=="1"){
            echo 'selected=""';
            } ?>>Electronics</option>
		  <option value="2" <?php if($qdata['CATEGORY_ID']=="2"){
              echo 'selected=""';
          } ?>>Home</option>
		</select>

		<input type="hidden" value="<?php echo $qdata['PRODUCT_ID'] ?>" name="PRODUCT_ID">
		<br>
		<button type="submit" name="update">Edit</button>

	</form>

	<br>







</body>
</html>