<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die ('Connection failed: ' . $conn->connect_error);
}
$sql = "CREATE DATABASE roomStudent";
if($conn->query($sql)===true){
	echo "";
}else{
	echo "error in Database creation: " . $conn->error;
}
$dbname = "roomStudent";
$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
	die ('Connection failed: ' . $con->connect_error);
}

$sql = "CREATE TABLE Rooms(
	id INT(5) NOT NULL AUTO_INCREMENT,
	roomNo VARCHAR(20) NOT NULL,
	col1 INT(5),
	col2 INT(5),
	col3 INT(5),
	col4 INT(5),
	col5 INT(5),
	col6 INT(5),
	col7 INT(5),
	col8 INT(5),
	col9 INT(5),
	col10 INT(5),
	PRIMARY KEY(id,roomNo)
	)";
	
if($con->query($sql)===true){
		echo "";
	}else{
		echo "error in creating table: " . $con->error;
	}
$sql2 = "CREATE TABLE CourseStudent(
	id INT(5) NOT NULL AUTO_INCREMENT,
	courseCode VARCHAR(20) NOT NULL,
	section VARCHAR(10) NOT NULL,
	numberofStudent INT(20)NOT NULL,
	teacherInitial VARCHAR(10) NOT NULL,
	PRIMARY KEY(id,courseCode,section)
)";
if($con->query($sql2)===true){
		echo "";
	}else{
		echo "error in creating table: " . $con->error;
	}
$sql3 = "CREATE TABLE Report(
	courseCode VARCHAR(20) NOT NULL,
	section VARCHAR(10) NOT NULL,
	teacherInitial VARCHAR(20),
	roomNo VARCHAR(20),
	colNo VARCHAR(10),
	numberofStudent INT(5),
	PRIMARY KEY(courseCode,roomNo,colNo)
)";

if($con->query($sql3)===true){
		echo "";
	}else{
		echo "error in creating table: " . $con->error;
	}
$sql4 = "CREATE TABLE tempRooms(
	id INT(5) NOT NULL AUTO_INCREMENT,
	roomNo VARCHAR(20) NOT NULL,
	col1 INT(5),
	col2 INT(5),
	col3 INT(5),
	col4 INT(5),
	col5 INT(5),
	col6 INT(5),
	col7 INT(5),
	col8 INT(5),
	col9 INT(5),
	col10 INT(5),
	PRIMARY KEY(id)
	)";
	
if($con->query($sql4)===true){
		echo "";
	}else{
		echo "error in creating table: " . $con->error;
	}
?>