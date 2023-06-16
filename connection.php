<?php

// better method is by using define

$servername = "localhost";
$username = "root";
$password = "";
$db = "KindHeart_DB";

$con = mysqli_connect($servername, $username, $password, $db);

if(mysqli_connect_error()){
    echo "Error";
}


?>
