<?php 

include 'connection.php';


//UPDATE PRODUCT
if (isset($_POST['update'])) {
	
	$PRODUCT_ID=$_POST['PRODUCT_ID'];

	$kaydet=$conn->prepare("UPDATE PRODUCT set
		PRODUCT_ID=:a,
		PRODUCT_NAME=:b,
		PRODUCT_QUANTITY=:c,
		WAREHOUSE_ID=:d,
		MANUFACTURER_ID=:e,
		CATEGORY_ID=:f
		where PRODUCT_ID={$_POST['PRODUCT_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['PRODUCT_ID'],
		'b' => $_POST['PRODUCT_NAME'],
		'c' => $_POST['PRODUCT_QUANTITY'],
		'd' => $_POST['WAREHOUSE_ID'],
		'e' => $_POST['MANUFACTURER_ID'],
		'f' => $_POST['CATEGORY_ID']
	));
	
		

		Header("Location:?page=product");
		


}




//UPDATE WAREHOUSE
if (isset($_POST['update_warehouse'])) {
	
	$WAREHOUSE_ID=$_POST['WAREHOUSE_ID'];

	$kaydet=$conn->prepare("UPDATE WAREHOUSE set
		WAREHOUSE_ID=:a,
		WAREHOUSE_NAME=:b
		
		where WAREHOUSE_ID={$_POST['WAREHOUSE_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['WAREHOUSE_ID'],
		'b' => $_POST['WAREHOUSE_NAME']
	
	));
	Header("Location:?page=warehouse");
}




//UPDATE MANUFACTURER
if (isset($_POST['update_manufacturer'])) {
	
	$MANUFACTURER_ID=$_POST['MANUFACTURER_ID'];

	$kaydet=$conn->prepare("UPDATE MANUFACTURER set
		MANUFACTURER_ID=:a,
		MANUFACTURER_NAME=:b
		
		where MANUFACTURER_ID={$_POST['MANUFACTURER_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['MANUFACTURER_ID'],
		'b' => $_POST['MANUFACTURER_NAME']
	
	));
	Header("Location:?page=manufacturer");
}




//UPDATE CATEGORY
if (isset($_POST['update_category'])) {
	
	$CATEGORY_ID=$_POST['CATEGORY_ID'];

	$kaydet=$conn->prepare("UPDATE CATEGORY set
		CATEGORY_ID=:a,
		CATEGORY_NAME=:b
		
		where CATEGORY_ID={$_POST['CATEGORY_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['CATEGORY_ID'],
		'b' => $_POST['CATEGORY_NAME']
	
	));
	Header("Location:?page=category");
}



//DELETE PRODUCT

if ($_GET['qdelete']=="ok") {
	

	$del=$conn->prepare("DELETE from PRODUCT where PRODUCT_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['PRODUCT_ID']
	));

	Header("Location:?page=product");


}


//DELETE WAREHOUSE

if ($_GET['qdelete']=="ware") {
	

	$del=$conn->prepare("DELETE from WAREHOUSE where WAREHOUSE_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['WAREHOUSE_ID']
	));

	Header("Location:?page=warehouse");


}





//DELETE MANUFACTURER

if ($_GET['qdelete']=="manufacturer") {
	

	$del=$conn->prepare("DELETE from MANUFACTURER where MANUFACTURER_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['MANUFACTURER_ID']
	));

	Header("Location:?page=manufacturer");


}


//DELETE CATEGORY

if ($_GET['qdelete']=="category") {
	

	$del=$conn->prepare("DELETE from CATEGORY where CATEGORY_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['CATEGORY_ID']
	));

	Header("Location:?page=category");


}





//INSERT BENUTZER

if (isset($_POST['insert_product'])) {
	
	

	$kaydet=$conn->prepare("INSERT into PRODUCT set
		PRODUCT_ID=:x,
		PRODUCT_NAME=:y,
		PRODUCT_QUANTITY=:z,
		WAREHOUSE_ID=:q,
		MANUFACTURER_ID=:w,
		CATEGORY_ID=:u
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['PRODUCT_ID'],
		'y' => $_POST['PRODUCT_NAME'],
		'z' => $_POST['PRODUCT_QUANTITY'],
		'q' => $_POST['WAREHOUSE_ID'],
		'w' => $_POST['MANUFACTURER_ID'],
		'u' => $_POST['CATEGORY_ID']
	));
	echo "kayıt başarılı";

		Header("Location:?page=product");
}



//INSERT ROLE

if (isset($_POST['insert_warehouse'])) {
	
	

	$kaydet=$conn->prepare("INSERT into WAREHOUSE set
		WAREHOUSE_ID=:x,
		WAREHOUSE_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['WAREHOUSE_ID'],
		'y' => $_POST['WAREHOUSE_NAME']
	));
	Header("Location:?page=warehouse");
}





//INSERT MANUFACTURER

if (isset($_POST['insert_manufacturer'])) {
	
	

	$kaydet=$conn->prepare("INSERT into MANUFACTURER set
		MANUFACTURER_ID=:x,
		MANUFACTURER_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['MANUFACTURER_ID'],
		'y' => $_POST['MANUFACTURER_NAME']
	));
	Header("Location:?page=manufacturer");
}




//INSERT CATEGORY

if (isset($_POST['insert_category'])) {
	
	

	$kaydet=$conn->prepare("INSERT into CATEGORY set
		CATEGORY_ID=:x,
		CATEGORY_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['CATEGORY_ID'],
		'y' => $_POST['CATEGORY_NAME']
	));
	Header("Location:?page=category");
}


?>