<?php

$server='localhost';
$database='University';
$username='root';
$password='mysql';


$connect = mysqli_connect($server,$username,$password,$database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }
 // echo "Database Connected successfully";

?>