<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
$country=$_POST['country'];
$subject=$_POST['subject'];

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername; dbname=travelbag;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>"; 
	$sql = "INSERT INTO contact(fname, email, country, comment)
    VALUES('$fname', '$email', '$country', '$subject')";
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