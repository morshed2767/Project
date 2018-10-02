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
$sql = "CREATE DATABASE IF NOT EXISTS employee_info";
if ($conn->query($sql) === TRUE) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


//Create Table
$dbname = "employee_info";

// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql2 = "CREATE TABLE IF NOT EXISTS employees (
SL INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
designation VARCHAR(50),
department VARCHAR(50),
mobile INT(30),
extension_no INT(20)
)";

if ($conn2->query($sql2) === TRUE) {
    //echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn2->error;
}

$conn2->close();

$conn->close();
?>
