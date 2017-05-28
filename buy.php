<?php
include_once "db_config.php"; 
include_once "query.php";
$username = $_SESSION['login_user'];
$sql="SELECT * FROM users where username = '$username";
$firewall = "CALL sp_upgrade_firewall ('".$username."')";
$bypasser = "CALL sp_upgrade_bypasser ('".$username."')";
$encrypter = "CALL sp_upgrade_encrypter ('".$username."')";
$cracker = "CALL sp_upgrade_cracker ('".$username."')";

$buy = $_POST['buy'];
$uang = $fetched['usable_money'];
switch ($buy) {
	case '1':
		mysqli_query($bd,$firewall);
		echo "firewall";
		break;
	case '2':
		mysqli_query($bd,$bypasser);
		break;
	case '3':
		mysqli_query($bd,$encrypter);
		break;
	case '4':
		mysqli_query($bd,$cracker);
		break;
	
	default:
		echo "UANG ANDA TIDAK CUKUP";
		break;
}


/*header('location:menu.php');*/
?>