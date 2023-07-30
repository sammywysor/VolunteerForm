<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "volunteer-registration";  

$connect = mysqli_connect($servername, $username, $password, $dbname); 

if ($connect) {
   // echo "connection ok";
} else {
    echo "connection failed";
}

?>