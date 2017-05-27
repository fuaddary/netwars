<?php
include_once "db_config.php"; 

$sql="SELECT ip_address FROM users where ip_address = '127.0.0.1'";
$hasil=mysqli_query($bd,$sql) or die(mysql_error($bd));
$fetched=mysqli_fetch_array($hasil);
echo $fetched['ip_address'];

?>