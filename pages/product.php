<?php require_once 'connection.php'; ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>PRODUCT</h2>
<hr>







<form action="index.php?page=product" method="get">

    <input type="text" name="search">
    <select name="column_name">
        <option value="PRODUCT_ID">PRODUCT_ID</option>
        <option value="PRODUCT_NAME">PRODUCT_NAME</option>
        <option value="PRODUCT_QUANTITY"> PRODUCT_QUANTITY</option>
        <option value="WAREHOUSE_NAME">WAREHOUSE</option>
        <option value="MANUFACTURER_NAME">MANUFACTURER</option>
        <option value="CATEGORY_NAME">CATEGORY</option>
    </select>
    <input type="submit" value="Search">
    <input type="hidden" name="page" value="product">
</form>
<br>







<table style="width: 60%" border="1">
		
		<tr>
			<th>NO</th>
			<th>PRODUCT_ID</th>
			<th>PRODUCT_NAME</th>
			<th>PRODUCT_QUANTITY</th>
			<th>WAREHOUSE</th>
			<th>MANUFACTURER</th>
			<th>CATEGORY</th>
			<th width="50">FUNCTION1</th>
			<th width="50">FUNCTION2</th>
		</tr>

		<?php






		if(isset($_GET['column_name']))
        {
       $x=$_GET['column_name'];
       $y=$_GET['search'];
               if(in_array($x, array("PRODUCT_ID", "PRODUCT_NAME","PRODUCT_QUANTITY")))
                    {

                        $table="PRODUCT";
                        
                    }
               elseif ($x=="WAREHOUSE_NAME")
                    {
                        $table="WAREHOUSE";
                      
                    }
               elseif ($x=="MANUFACTURER_NAME")
                    {
                        $table="MANUFACTURER";
                       
                    }
               else
                    {
                        $table="CATEGORY";
                       
                    }
               echo "<br>";
            
            $data=$conn->prepare("SELECT PRODUCT.PRODUCT_ID, PRODUCT.PRODUCT_NAME, PRODUCT.PRODUCT_QUANTITY, WAREHOUSE.WAREHOUSE_NAME, MANUFACTURER.MANUFACTURER_NAME,
            CATEGORY.CATEGORY_NAME FROM PRODUCT 
            LEFT JOIN WAREHOUSE ON WAREHOUSE.WAREHOUSE_ID=PRODUCT.WAREHOUSE_ID 
            LEFT JOIN MANUFACTURER ON MANUFACTURER.MANUFACTURER_ID=PRODUCT.MANUFACTURER_ID
            LEFT JOIN CATEGORY ON CATEGORY.CATEGORY_ID=PRODUCT.CATEGORY_ID
            WHERE ".$table.".".$x."='".$y."'");
        }
        else
        {






		$data=$conn->prepare("SELECT PRODUCT.PRODUCT_ID, PRODUCT.PRODUCT_NAME, PRODUCT.PRODUCT_QUANTITY, WAREHOUSE.WAREHOUSE_NAME, MANUFACTURER.MANUFACTURER_NAME, CATEGORY.CATEGORY_NAME  FROM PRODUCT 
			LEFT JOIN WAREHOUSE ON WAREHOUSE.WAREHOUSE_ID=PRODUCT.WAREHOUSE_ID 
			LEFT JOIN MANUFACTURER ON MANUFACTURER.MANUFACTURER_ID=PRODUCT.MANUFACTURER_ID
			LEFT JOIN CATEGORY ON CATEGORY.CATEGORY_ID=PRODUCT.CATEGORY_ID");

}
		
		$data->execute();

		$counter=0;

		while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>



		<tr>
			<td><?php echo $counter; ?></td>
			<td><?php echo $qdata['PRODUCT_ID'] ?></td>
			<td><?php echo $qdata['PRODUCT_NAME'] ?></td>
			<td><?php echo $qdata['PRODUCT_QUANTITY'] ?></td>
			<td><?php echo $qdata['WAREHOUSE_NAME'] ?></td>
			<td><?php echo $qdata['MANUFACTURER_NAME'] ?></td>
			<td><?php echo $qdata['CATEGORY_NAME'] ?></td>
			
			
			<td align="center"><a href="?page=editproduct&PRODUCT_ID=<?php echo $qdata['PRODUCT_ID'] ?>"><button>Edit</button></td></a>
			
			<td align="center"><a href="?page=operation&PRODUCT_ID=<?php echo $qdata['PRODUCT_ID'] ?>&qdelete=ok"><button>Delete</button></td></a>
		</tr>

		
			
		

		<?php } ?>

	</table>
	<br>
<a href="?page=insertproduct"><button>ADD</button></a>

</body>
</html>





