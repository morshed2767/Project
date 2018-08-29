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
	
	
	//Declearing variables
	$courseCode = $section = $numberofStudent = $teacherInitialn = "";
	$roomNo = "";
	$id = $col1 = $col2 = $col3 = $col4 = $col5 = $col6 = $col7 = $col8 = $col9 = $col10 = $maxidc = $maxidr = $maxidtr = 0;
	$r = $tr = $noroom = $notmroom = 1;
	$cr = $nrow = 0;
	
	//getting number of rows in CourseStudent table
	$sqlmaxidc = "SELECT MAX(id) AS 'maximum' FROM CourseStudent";
	$maxc = $con->query($sqlmaxidc);
	if($maxc->num_rows>0){
		while($row = $maxc->fetch_assoc()){
			global $maxidc;
			$maxidc = $row['maximum'];
		}
	}
	
	//Retrieve the data from CourseStudent table
	function fetchCourses($j){
		global $id, $courseCode, $section, $numberofStudent, $teacherInitial;
		global $con;
		$sqlCourseStudent = "SELECT * FROM CourseStudent WHERE id=$j";
		$resultCS = $con->query($sqlCourseStudent);
		if($resultCS->num_rows<=0){
			//echo "No data found in CourseStudent Table :(";
		}
		if($resultCS->num_rows>0){
			while($row = $resultCS->fetch_assoc()){
				$id = $row["id"];
				$courseCode = $row["courseCode"];
				$section = $row["section"];
				$numberofStudent = $row["numberofStudent"];
				$teacherInitial = $row["teacherInitial"];
				//echo $numberofStudent."<br>";
			}
		}
	}
	echo "<table border='1' cellspacing='0px' width='100%'>
			<tr>
				<th>Course Code</th>
				<th>Teacher's Initial</th>
				<th>Section</th>
				<th>Assigned Room</th>
				<th>Seat(s)</th>
				<th>Total Seats in Section</th>
			</tr>";
	for($i=1;$i<=$maxidc;$i++){
		
		fetchCourses($i);
		$cr = 0;
		//select course
		$sqlcourse = "SELECT DISTINCT courseCode FROM report WHERE courseCode='$courseCode'";
		$resultcourse = $con->query($sqlcourse);
		while($row = $resultcourse->fetch_assoc()){
			echo "<tr>";
			$selectedCourse = $row["courseCode"];
			courserow($selectedCourse);
			echo "<td align='center'>" . $selectedCourse . "</td>";
			//select teacherInitial
			$sqlTI = "SELECT DISTINCT teacherInitial FROM report WHERE courseCode='$selectedCourse'";
			$resultTI = $con->query($sqlTI);
			while($row = $resultTI->fetch_assoc()){
				$nrow = 0;
				$selectedTI = $row["teacherInitial"];
				otherrow($selectedCourse, $selectedTI);
				echo "<td align='center'>". $selectedTI . "</td>";
				//select section
				$sqlsection = "SELECT DISTINCT section FROM report WHERE courseCode='$selectedCourse' AND teacherInitial='$selectedTI'";
				$resultsection = $con->query($sqlsection);
				$totalinSection = 0;
				while($row = $resultsection->fetch_assoc()){
					$selectedsection = $row["section"];
					echo "<td align='center'>".$selectedsection . "</td>";
					//select roomNo
					$sqlroom = "SELECT DISTINCT roomNo FROM report WHERE courseCode='$selectedCourse' AND teacherInitial='$selectedTI'";
					$resultroom = $con->query($sqlroom);
					echo "<td><table border='1' width='100%' cellspacing='0px'>";
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
					echo "<td><table border='1' width='100%' cellspacing='0px'>";
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
				
			}
			echo "</tr>";
		}
		
	}
	echo "</table>";
	
	function courserow($cc){
		global $cr, $con;
		$sqlcr = "SELECT DISTINCT roomNo FROM report WHERE courseCode='$cc'";
		$resultcr = $con->query($sqlcr);
		while($row = $resultcr->fetch_assoc()){
			$cr++;
		}
		//echo $cr."<br>";
	}
	
	function otherrow($cc, $ti){
		global $con, $nrow;
		$sqlrow = "SELECT DISTINCT roomNo FROM report WHERE courseCode='$cc' AND teacherInitial='$ti'";
		$resultrow = $con->query($sqlrow);
		while($row = $resultrow->fetch_assoc()){
			$nrow++;
		}
		//echo $nrow."<br>";
	}
	
	/*$i=2;
	echo "<table border=1 width='100%'>
	
			<tr>
				<th rowspan=". $i.">Test</th>
			</tr>
			<tr>
				<td>test</td>
				<td>test2</td>
			</tr>
			</table>";*/
?>