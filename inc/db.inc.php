<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "hotel";

$conn = mysqli_connect($servername,$dBUsername,$dbPassword,$dBName);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}

?>