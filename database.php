<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}else{
    echo "Connected Successfully";
}

?>
