<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #111;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #111}

.dropdown:hover .dropdown-content {
    display: block;
}
.active {
		background-color: #000000;
	}
</style>
</head>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="capacity.php" class="dropbtn">Room</a>
    <div class="dropdown-content">
      <a href="editroom.php">Edit</a>
      <a href="confirmRoomClear.php">Clear</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="csDetails.php" class="dropbtn">Course & Student</a>
    <div class="dropdown-content">
      <a href="editcourse.php">Edit</a>
      <a href="confirmCourseClear.php">Clear</a>
    </div>
  </li>
  <li><a href="report.php">Create Report</a></li>
  <li><a href="summarytitle.php">Create Summary</a></li>
  <li class="active"><a href="confirmDatabaseClear.php">Clear DataBase</a></li>
</ul>

</body>
</html>


<html>
<title>Clear Course's Data</title>
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
	$sqlDropCourses = "DROP TABLE CourseStudent";
	if($con->query($sqlDropCourses)===true)
	{
		
	}else{
		echo $con->error;
	}
	//Drop Rooms table
	$sqlDropRooms = "DROP TABLE Rooms";
	if($con->query($sqlDropRooms)===true)
	{
		
	}else{
		echo $con->error;
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
	echo "<h1 style=color:#08c019>Full DataBase cleared successfully!!</h1>";
	//Recreate Rooms TABLE
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
	
	//Recreate CourseStudent table
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
	</div>
</div>
</body>
</html>