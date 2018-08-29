<html>
<title>Clear Room's Data</title>
<head></head>
<style>
	.area{
			background:#e2e5e7;
			position: relative;
			margin:10px;
			width: 30%;
			border: 2px solid black;
		}
</style>
<body>
<?php require 'nevigation.html';  ?>
<div align="center">
	<div class="area">
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
	$sqlDropRooms = "DROP TABLE Rooms";
	if($con->query($sqlDropRooms)===true)
	{
		echo "<h1 style=color:#08c019>All Room's data cleared successfully!!</h1>";
	}else{
		echo $con->error;
	}
	//recreate Rooms table
	$sqlRooms = "CREATE TABLE Rooms(
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
	
	if($con->query($sqlRooms)===true){
		echo "";
	}else{
		echo $con->error;
	}
?>
	</div>
</div>
</body>
</html>