<?php

require "init.php";
$fcm_number = $_POST["fcm_number"];
$fcm_token = $_POST["fcm_token"];
$sql="INSERT INTO fcm_info (phone_num, fcm_token) VALUES ('".$fcm_number."','".$fcm_token."');";
mysqli_query($con,$sql);
mysqli_close($con);

?>