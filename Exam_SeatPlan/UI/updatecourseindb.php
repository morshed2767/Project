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
			position: relative;
			margin:10px;
			width: 30%;
			background:#e2e5e7;
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
	$targetcourse = $_POST["targetcourse"];
	$targetsection = $_POST["targetsection"];
	$course = $_POST["course"];
	$section = $_POST["section"];
	$numberofStudent = $_POST["nStudent"];
	$teacherInitial = $_POST["teacherInitial"];
	$sql2 = "UPDATE CourseStudent SET courseCode='$course', section='$section', numberofStudent='$numberofStudent', teacherInitial='$teacherInitial'  WHERE courseCode='$targetcourse' && section='$targetsection' ";
	if($con->query($sql2)===true){
			echo "<h2 style=color:#08c019>Successfully updated<h2>";
		}else{
			echo "Can not update " . $con->error;
		}

	?>


	<div class="relative"><a href="editcourse.php"><button class="relative3">Update More</button></div>
	<div class="relative2"><a href="index.php"><button class="relative3">Done</button></div>
</div>
</div>
</body>

</html>