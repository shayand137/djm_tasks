<?php
$servername = "db";
$username = "shayand137";
$password = "Sh39171200.";
$dbname = "shayand137";
 // creating onnection 

$conn = new mysqli ($servername, $username, $password, $dbname);
 
//chek the connection
 if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
 }


?>