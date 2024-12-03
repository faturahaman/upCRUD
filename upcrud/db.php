<?php 
$db = "upcrud";
$host = "localhost";
$username = "root";
$password = "";

$conn  = mysqli_connect($host,$username,$password,$db);

if(!$conn){
    echo "data gagl terhubung" . $conn;
}
?>