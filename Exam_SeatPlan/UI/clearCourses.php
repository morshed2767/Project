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
	$sqlDropCourses = "DROP TABLE CourseStudent";
	if($con->query($sqlDropCourses)===true)
	{
		echo "<h1 style=color:#08c019>All Course's data cleared successfully!!</h1>";
	}else{
		echo $con->error;
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
		echo $con->error;
	}
?>
	</div>
</div>
</body>
</html>