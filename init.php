<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "fcm_db";

$con = mysqli_connect($host, $user, $pass, $db_name);
if ($con)
    echo "Connection Successful";
else
    echo "Connection error !....";

?>