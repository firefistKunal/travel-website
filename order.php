<?php
$product=$_POST['product'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername; dbname=travelbag;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>"; 
	$sql = "INSERT INTO orderdetails(product, fname, email, phone)
    VALUES('$product', '$fname', '$email', '$phone')";
	echo $sql."<br>";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>