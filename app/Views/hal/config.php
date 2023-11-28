<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "tb_kasir";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }
    
   
?>