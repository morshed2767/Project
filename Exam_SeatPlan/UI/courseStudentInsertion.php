<html>
<head></head>
<style>
	.relative {
			position: relative;
			left: -150px;
			padding: 10px;
		}
		.relative2 {
			position: relative;
			left: 100px;
			top: -30px;
		}
		.relative3 {
			background-color:#1f8dd5;
			color:#f9fdff;
			border-radius: 5px;
		}
		.area{
			background:#e2e5e7;
			position: relative;
			margin:10px;
			width: 30%;
			border: 2px solid black;
		}
		button:hover{
			background-color:#90b5e6;
			text-decoration:underline;
		}
		
</style>

<body>
<?php require 'nevigation.html'; ?>
<div align="center">
	<div class="area">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roomStudent";
$con = new mysqli($servername, $username, $password, $dbname);

if($con->connect_error){
	die ('Connection failed: ' . $con->connect_error);
}
$course = $_POST["course"];
$section = $_POST["section"];
$numberofStudent = $_POST["nStudent"];
$teacherInitial = $_POST["teacherInitial"];
$sql2 = "INSERT INTO CourseStudent(courseCode, section, numberofStudent, teacherInitial)
			values('$course', '$section', '$numberofStudent', '$teacherInitial')";
if($con->query($sql2)===true){
		echo "<h2>Successfully added<h2>";
	}else{
		echo "error in data insertion: " . $con->error;
	}

?>

<div class="relative"><a href="csDetails.php"><button class="relative3">ADD More</button></div>
<div class="relative2"><a href="report.php"><button class="relative3">SUBMIT</button></div>
</div>
</div>
</body>

</html>