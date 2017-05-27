<?php 
	include_once "db_config.php"; 
     $username=$_SESSION['login_user'];
    // $user=$_GET['login_user'];
     $query_user="SELECT * FROM users WHERE username='$username'";
     $result=mysqli_query($bd,$query_user);
     $fetched=mysqli_fetch_array($result);
     $level_firewall= $fetched['firewall_lvl'];
     $level_bypasser= $fetched['bypasser_lvl'];
     $level_encryptor= $fetched['encrypter_lvl'];
     $level_decryptor= $fetched['pw_cracker_lvl'];
     $store_firewall= ($level_firewall + 1);
     $store_bypasser= ($level_bypasser + 1);
     $store_encryptor= ($level_encryptor + 1);
     $store_decryptor= ($level_decryptor + 1);
     $cost_tools= "SELECT `bypasser`.`cost_bypasser`, `firewall`.`cost_firewall`, `pw_cracker`.`cost_pw_cracker`, `encrypter`.`cost_encrypter`
                    FROM `users`
                    INNER JOIN `bypasser` ON `bypasser`.`lvl_bypasser` = '$store_bypasser'
                    INNER JOIN `firewall` ON `firewall`.`lvl_firewall` = '$store_firewall'
                    INNER JOIN `pw_cracker` ON `pw_cracker`.`lvl_pw_cracker` = '$store_decryptor'
                    INNER JOIN `encrypter` ON `encrypter`.`lvl_encrypter` = '$store_encryptor'
                    WHERE `users`.`username` = '$username'";
    $cost= mysqli_query($bd,$cost_tools);
    $fetched_cost=mysqli_fetch_array($cost);
 ?>