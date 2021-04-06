<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<h2>WAREHOUSE</h2>
<hr>
<form action="" method="get">

    <input type="text" name="search">
    <select name="column_name">
        <option value="WAREHOUSE_ID">WAREHOUSE_ID</option>
        <option value="WAREHOUSE_NAME">WAREHOUSE_NAME</option>
    </select>
    <input type="submit" name="ara" value="Search">
    <input type="hidden" name="page" value="warehouse">
</form>
<br>
   
<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>WAREHOUSE_ID</th>
        <th>WAREHOUSE_NAME</th>
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php

    if(isset($_GET['ara']))
    {
        echo $_GET['column_name'];
        $x = $_GET['column_name'];
        $y = $_GET['search'];
        $data = $conn->prepare("SELECT * from WAREHOUSE WHERE ".$x."='".$y."'");
    }
    else
        {
        $data = $conn->prepare("SELECT * from WAREHOUSE");
    }
    $data->execute();
    $counter=0;
    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['WAREHOUSE_ID'] ?></td>
            <td><?php echo $qdata['WAREHOUSE_NAME'] ?></td>
            <td align="center"><a href="?page=editwarehouse&WAREHOUSE_ID=<?php echo $qdata['WAREHOUSE_ID'] ?>"><button>Edit</button></td></a>
            <td align="center"><a href="?page=operation&WAREHOUSE_ID=<?php echo $qdata['WAREHOUSE_ID'] ?>&qdelete=ware"><button>Delete</button></td></a>
        </tr>
    <?php } ?>
</table>
<br>
<a href="?page=insertwarehouse"><button>ADD</button></a>
                
        



</body>
</html>