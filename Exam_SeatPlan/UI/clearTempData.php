<?php
	//connecting to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "roomStudent";
	$con = new mysqli($servername, $username, $password, $dbname);

	if($con->connect_error){
		die ('Connection failed: ' . $con->connect_error);
	}
	
	//Drop report table
	$sqlDropreport = "DROP TABLE Report";
	if($con->query($sqlDropreport)===true)
	{
		
	}else{
		echo $con->error;
	}
	
	//Drop temRooms table
	$sqlDroptempTable = "DROP TABLE tempRooms";
	if($con->query($sqlDroptempTable)===true)
	{
		
	}else{
		echo $con->error;
	}
	
	//Recreate Report table
	$sqlreport = "CREATE TABLE Report(
	courseCode VARCHAR(20) NOT NULL,
	section VARCHAR(10) NOT NULL,
	teacherInitial VARCHAR(20),
	roomNo VARCHAR(20),
	colNo VARCHAR(10),
	numberofStudent INT(5)
	)";

	if($con->query($sqlreport)===true){
		echo "";
	}else{
		echo "error in creating table: " . $con->error;
	}
	
	//Recreate tempRooms TABLE
	$sqltempRoom = "CREATE TABLE tempRooms(
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
	
	if($con->query($sqltempRoom)===true){
		echo "";
	}else{
		echo "error in creating table: " . $con->error;
	}
?>