<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE butterflyeffect";
$sql2 = "CREATE TABLE details(
id VARCHAR(10) PRIMARY KEY, password VARCHAR(16),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30)NOT NULL,
email VARCHAR(50),
phone INT(10)NOT NULL, credit INT(100), debit INT(100))";
if ($conn->query($sql)==TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

$dbname='butterflyeffect';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($conn->query($sql2)==TRUE) {
echo "Table created successfully";
} else {
    echo "Error creating datatable: " . $conn->error;
}



$conn->close();
?>
