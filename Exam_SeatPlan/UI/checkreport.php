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
	echo "<strong>CourseCode-----Section-----RoomNo-----ColNo-----NumberofStudent</strong><br>";
	$sqlreport = "SELECT * FROM Report";
	$resultreport = $con->query($sqlreport);
	if($resultreport->num_rows <= 0){
		//$checkprev = 0;
		echo "No data in report<br>";
	}
	else{
		while($row = $resultreport->fetch_assoc()){
			$courseCode=$row["courseCode"];
			$section = $row["section"];
			$roomNo=$row["roomNo"];
			$colNo=$row["colNo"];
			$numberofStudent=$row["numberofStudent"];
			echo $courseCode."-------------" . $section . "-------------".$roomNo."-------------".$colNo."-------------".$numberofStudent . "<br>";
		}
	}
	
?>
