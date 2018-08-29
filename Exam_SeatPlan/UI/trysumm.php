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
	//calculate total seats
	$totalSeats=0;
	$sqltotal= "SELECT * FROM report";
	$resulttotal = $con->query($sqltotal);
	while($row = $resulttotal->fetch_assoc()){
		$seat = $row["numberofStudent"];
		$totalSeats=$totalSeats+$seat;
	}
	
	$exm = $_POST["exm"];
	$date= $_POST["date"];
	$slot= $_POST["slot"];
	
	echo "<h1 align='center'>" . $exm . "</h1><br>";
	echo "<div style=margin-top:-50px><h2 style=margin-left:350px> Date: " . $date . "</h3></div><br>";
	echo "<div align='right' style=margin-top:-83px><h2 style=margin-right:300px>Slot: " . $slot . "</h3></div><br>";
	echo "<h2 align='center' style=margin-top:-35px>Total Seat: " . $totalSeats . "</h2><br>";
	echo "<div style=margin-top:-40px><hr align='center' width='80%' height='5px' style=border-width:5px></div>";
	echo "<h2 style=margin-left:145px>Summary:</h2>";
	//creating table
	echo "<table border='1' cellspacing='0px' width='80%' align='center'>
			<tr>
				<th>Course Code</th>
				<td><table border='1' cellspacing='0px' width='100%'><tr>
					<th>Section</th>
					<th>Teacher's Initial</th>
					<th>Assigned Room</th>
					<th>Seat(s)</th>
					<th>Total Seats in Section</th>
				</tr></table></td>
				
			</tr>";
	//select course
	$sqlcourse = "SELECT DISTINCT courseCode FROM report";
	$resultcourse = $con->query($sqlcourse);
	while($row = $resultcourse->fetch_assoc()){
		echo "<tr>";
			$selectedCourse = $row["courseCode"];
			//courserow($selectedCourse);
			echo "<td align='center'>" . $selectedCourse . "</td>";
			//select section
				$sqlsection = "SELECT DISTINCT section FROM report WHERE courseCode='$selectedCourse'";
				$resultsection = $con->query($sqlsection);
			echo "<td><table border='1' width='100%' cellspacing='0px'>";
			echo "<col width='104'>
				  <col width='225'>
				  <col width='220'>
				  <col width='100'>";
			
			while($row = $resultsection->fetch_assoc()){
				echo "<tr>";
				$nrow = 0;
				$selectedsection = $row["section"];
				//otherrow($selectedCourse, $selectedTI);
				echo "<td align='center'>". $selectedsection . "</td>";
				//select teacherInitial
				$sqlTI = "SELECT DISTINCT teacherInitial FROM report WHERE courseCode='$selectedCourse' AND section='$selectedsection'";
				$resultTI = $con->query($sqlTI);
				$totalinSection = 0;
				while($row = $resultTI->fetch_assoc()){
					$selectedTI = $row["teacherInitial"];
					echo "<td align='center'>".$selectedTI . "</td>";
					//select roomNo
					$sqlroom = "SELECT DISTINCT roomNo FROM report WHERE courseCode='$selectedCourse' AND teacherInitial='$selectedTI'";
					$resultroom = $con->query($sqlroom);
					echo "<td><table border='0' width='100%' cellspacing='0px'>";
					while($row = $resultroom->fetch_assoc()){
						$selectedroom = $row["roomNo"];
						echo "<tr>";
						echo "<td align='center'>" . $selectedroom . "</td>"; 
						
						echo "</tr>";
					}
					echo "</table></td>";
					//select roomNo
					$sqlroom2 = "SELECT DISTINCT roomNo FROM report WHERE courseCode='$selectedCourse' AND teacherInitial='$selectedTI'";
					$resultroom2 = $con->query($sqlroom2);
					echo "<td><table border='0' width='100%' cellspacing='0px'>";
					while($row = $resultroom2->fetch_assoc()){
						$selectedroom2 = $row["roomNo"];
						//calculate numberofStudent
						$sqlNS = "SELECT numberofStudent FROM report WHERE courseCode='$selectedCourse' AND teacherInitial='$selectedTI' AND roomNo='$selectedroom2'";
						$resultNS = $con->query($sqlNS);
						$totalStudent = 0;
						while($row = $resultNS->fetch_assoc()){
							$selectedNS = $row["numberofStudent"];
							$totalStudent= $totalStudent + $selectedNS;
						}
						//echo "<td>";
						echo "<tr>";
						echo "<td align='center'>" . $totalStudent. "</td>"; 
						
						echo "</tr>";
						//echo "</td>";
						$totalinSection = $totalinSection + $totalStudent;
					}echo "</table></td>";
					echo "<td align='center'>" . $totalinSection . "</td>";
				}
				echo "</tr>";
			}
			echo "</table></td>";
			echo "</tr>";
	}
	
	echo "</table>";
?>