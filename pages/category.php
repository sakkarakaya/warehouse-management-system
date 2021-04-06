<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<h2>CATEGORY</h2>
<hr>
<form action="" method="get">

    <input type="text" name="search">
    <select name="column_name">
        <option value="CATEGORY_ID">CATEGORY_ID</option>
        <option value="CATEGORY_NAME">CATEGORY_NAME</option>
    </select>
    <input type="submit" name="ara" value="Search">
    <input type="hidden" name="page" value="category">
</form>
<br>
   
<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>CATEGORY_ID</th>
        <th>CATEGORY_NAME</th>
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php

    if(isset($_GET['ara']))
    {
        
        $x = $_GET['column_name'];
        $y = $_GET['search'];
        $data = $conn->prepare("SELECT * from CATEGORY WHERE ".$x."='".$y."'");
    }
    else
        {
        $data = $conn->prepare("SELECT * from CATEGORY");
    }
    $data->execute();
    $counter=0;
    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['CATEGORY_ID'] ?></td>
            <td><?php echo $qdata['CATEGORY_NAME'] ?></td>
            <td align="center"><a href="?page=editwarehouse&CATEGORY_ID=<?php echo $qdata['CATEGORY_ID'] ?>"><button>Edit</button></td></a>
            <td align="center"><a href="?page=operation&CATEGORY_ID=<?php echo $qdata['CATEGORY_ID'] ?>&qdelete=ware"><button>Delete</button></td></a>
        </tr>
    <?php } ?>
</table>
<br>
<a href="?page=insertcategory"><button>ADD</button></a>
                
        



</body>
</html>