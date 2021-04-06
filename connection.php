<?php  

include 'config.php';

try {
$conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8",$dbuser, $dbpassword);
//echo "database is connected";	
}
catch (PDOException $e){
echo "error" . $e->getMessage();
}

?>
