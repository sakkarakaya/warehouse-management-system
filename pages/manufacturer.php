<?php require_once 'connection.php'; ?>




<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<h2>MANUFACTURER</h2>
<hr>

<form action="" method="get">

    <input type="text" name="search">
    <select name="column_name">
        <option value="MANUFACTURER_ID">MANUFACTURER_ID</option>
        <option value="MANUFACTURER_NAME">MANUFACTURER_NAME</option>
    </select>
    <input type="submit" name="ara" value="Search">
    <input type="hidden" name="page" value="manufacturer">
</form>
<br>

<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>MANUFACTURER_ID</th>
        <th>MANUFACTURER_NAME</th>
        
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php

    if(isset($_GET['ara']))
    {
        echo $_GET['column_name'];
        $x = $_GET['column_name'];
        $y = $_GET['search'];
        $data = $conn->prepare("SELECT * from MANUFACTURER WHERE ".$x."='".$y."'");
    }
    else
        {
    $data=$conn->prepare("SELECT * from MANUFACTURER ");
}
    $data->execute();
    $counter=0;

    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['MANUFACTURER_ID'] ?></td>
            <td><?php echo $qdata['MANUFACTURER_NAME'] ?></td>
            
            
            <td align="center"><a href="?page=editmanufacturer&MANUFACTURER_ID=<?php echo $qdata['MANUFACTURER_ID'] ?>"><button>Edit</button></td></a>

            <td align="center"><a href="?page=operation&MANUFACTURER_ID=<?php echo $qdata['MANUFACTURER_ID'] ?>&qdelete=manufacturer"><button>Delete</button></td></a>
        </tr>
    <?php 

} 



?>
</table>
<br>
<a href="?page=insertmanufacturer"><button>ADD</button></a>
 

</body>
</html>