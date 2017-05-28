<?php 
session_start();
session_regenerate_id();

if(!isset($_SESSION['login_user'])){
    header("Location:login.php");
}
include_once "db_config.php"; 
$username=$_SESSION['login_user'];

$ip=$_POST['ip'];

/*echo $ip;*/

// if ( isset($ip)) {
//     echo "<script> alert("masukkan IP")</script>"
// }

$hasil=mysqli_query($bd,"SELECT ip_address, firewall_lvl FROM users where ip_address = '$ip'") or die(mysql_error($bd));

$fetched=mysqli_fetch_array($hasil);
$ipip = $fetched['ip_address'];
$firewall_lvl = $fetched['firewall_lvl'];
echo json_encode(array($ipip,$firewall_lvl));
// if(!isset($fetched)){
// 	echo '<div class="list-group col-sm-12" style="padding: 0px;">';
//     echo '<div href="#" class="list-group-item"  style="text-align: left;">';
//     echo '<span class="col-sm-5"> IP Address : xxx.xxx.xxx.xxx</span>';
//     echo '<span class="col-sm-5"> Firewall lv : xx</span>';
//     echo '<a href="bypass.php"> <button class="btn btn-danger">BYPASS</button> </a>';
//     echo '</div>';
// 	echo '</div>';
// }
// header('Location:menu.php');
// echo"hello";
?>

