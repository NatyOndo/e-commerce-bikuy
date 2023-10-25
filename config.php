<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

//Start session
if(!isset($_SESSION))
   {
       session_start();
   } 

// Create connection
$conn = new mysqli($servername,$username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error());
}

$sql = "SELECT prodName,price1,price2,prodImage,prodDescription,prodId  FROM products";
$result = $conn->query($sql);

 ?>
