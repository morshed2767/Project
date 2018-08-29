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
  <li class="active"><a href="report.php">Create Report</a></li>
  <li><a href="confirmDatabaseClear.php">Clear DataBase</a></li>
</ul>

</body>
</html>


<?php
	require 'clearTempData.php';
	//connecting to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "roomStudent";
	$con = new mysqli($servername, $username, $password, $dbname);
	
	//Declearing variables
	$courseCode = $section = $numberofStudent = $teacherInitialn = "";
	$roomNo = "";
	$id = $col1 = $col2 = $col3 = $col4 = $col5 = $col6 = $col7 = $col8 = $col9 = $col10 = $maxidc = $maxidr = $maxidtr = 0;
	$r = $tr = $noroom = $notmroom = 1;

	//getting number of rows in CourseStudent table
	$sqlmaxidc = "SELECT MAX(id) AS 'maximum' FROM CourseStudent";
	$maxc = $con->query($sqlmaxidc);
	if($maxc->num_rows>0){
		while($row = $maxc->fetch_assoc()){
			global $maxidc;
			$maxidc = $row['maximum'];
		}
	}
	
	//getting the number of rows in Rooms table
	$sqlmaxidr = "SELECT MAX(id) AS 'maximum' FROM Rooms";
	$maxr = $con->query($sqlmaxidr);
	if($maxr->num_rows>0){
		while($row = $maxr->fetch_assoc()){
			global $maxidr;
			$maxidr = $row['maximum'];
		}
	}
	
	
	//getting the number of rows in temporary Rooms table
	$sqlmaxidtr = "SELECT MAX(id) AS 'maximum' FROM tempRooms";
	$maxtr = $con->query($sqlmaxidtr);
	if($maxtr->num_rows>0){
		while($row = $maxtr->fetch_assoc()){
			global $maxidtr;
			$maxidtr = $row['maximum'];
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
	
	//Retrieve data from Rooms table	
	function fetchRooms($j){
		global $id, $roomNo, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10;
		global $con, $noroom;
		$sqlRoom = "SELECT * FROM Rooms WHERE id=$j";
		$resultR = $con->query($sqlRoom);
		if($resultR->num_rows<=0){
			$noroom = 0;
		}
		
		if($resultR->num_rows>0){
			$noroom = 1;
			while($row = $resultR->fetch_assoc()){
				$id = $row["id"];
				$roomNo = $row["roomNo"];
				$col1 = $row["col1"];
				$col2 = $row["col2"];
				$col3 = $row["col3"];
				$col4 = $row["col4"];
				$col5 = $row["col5"];
				$col6 = $row["col6"];
				$col7 = $row["col7"];
				$col8 = $row["col8"];
				$col9 = $row["col9"];
				$col10 = $row["col10"];
				
			}
		}
	}
	
	//Retrieve data from temporary Room table
	function fetchtempRooms($j){
		global $id, $roomNo, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10;
		global $con, $notmroom;
		$sqltempRoom = "SELECT * FROM tempRooms WHERE id=$j";
		$resultTR = $con->query($sqltempRoom);
		if($resultTR->num_rows<=0){
			$notmroom = 0;
		}
		
		else{
			$notmroom = 1;
			while($row = $resultTR->fetch_assoc()){
				$id = $row["id"];
				$roomNo = $row["roomNo"];
				$col1 = $row["col1"];
				$col2 = $row["col2"];
				$col3 = $row["col3"];
				$col4 = $row["col4"];
				$col5 = $row["col5"];
				$col6 = $row["col6"];
				$col7 = $row["col7"];
				$col8 = $row["col8"];
				$col9 = $row["col9"];
				$col10 = $row["col10"];
			}
		}
	}
	$checker=0;
	$oldcourse = "";
	fetchCourses(1);
	$oldcourse = $courseCode;
	//Mai Allocation starts from here
	for($i=1;$i<=$maxidc;$i++){
		fetchCourses($i); //select a course from CourseStudent table
		if($numberofStudent<=0){
			
		}
		else{
			while($numberofStudent>0){
				global $r, $tr;
				if($oldcourse==$courseCode && $checker==0){
					fetchRooms($r);
					if($noroom==0){
						echo "<br>" . $courseCode . " " . $section . " " . $numberofStudent . " students Can't allocated <br>";
						break;
					}
					$r++;
				}
				else{
					//select a Room from tempRooms or Rooms table
					fetchtempRooms($tr);
					//echo $notmroom;
					if($notmroom==0){
						fetchRooms($r);
						if($noroom==0){
							echo "<br>" . $courseCode . " " . $section . " " . $numberofStudent . " students Can't allocated <br>";
							break;
						}
						$r++;
						$checker=0;
					}
					else{
						$checker=1;
					}
				}
				
				$colArray = [$col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10]; //save the coloums to a Array
				
				//check is the room is empty or not
				$checkRoom = 0;
				for($j=0;$j<10;$j++){
					if($colArray[$j]==0){
						
					}else{
						$checkRoom=$checkRoom+$colArray[$j];
					}
				}
				
				//Allocate space to report table
				if($checkRoom>0){
					for($k=0;$k<10;$k++){
						if($colArray[$k] >0){
							$newnumberofStudent = $assignedStudentNo = 0;
							$newnumberofStudent = $numberofStudent - $colArray[$k];
							if($newnumberofStudent>0){
								$assignedStudentNo = $numberofStudent - $newnumberofStudent;
								$numberofStudent = $newnumberofStudent;
							}
							else{
								$assignedStudentNo = $numberofStudent;
								$numberofStudent=0;
							}
							$colArray[$k] = $colArray[$k] - $assignedStudentNo; //update the value of coloums
							$k++;
							$colno = "Col".$k;
							$sqlIsertReport = "INSERT INTO Report(courseCode, section, roomNo, colNo, numberofStudent)
								values('$courseCode', '$section', '$roomNo', '$colno', '$assignedStudentNo')";
							if($con->query($sqlIsertReport)===true){
								
							}else{
								echo "error in data insertion: " . $con->error;
							}
						}
						else{
							
						}
					}
					
					$sqlcheck = "SELECT * FROM tempRooms WHERE roomNo='$roomNo'";
					$resultcheck = $con->query($sqlcheck);
					if($resultcheck->num_rows <= 0){
						$sqlInsert = "INSERT INTO tempRooms(roomNo, col1, col2, col3, col4, col5, col6, col7, col8, col9, col10)
							values('$roomNo', '$colArray[0]', '$colArray[1]', '$colArray[2]', '$colArray[3]', '$colArray[4]', '$colArray[5]', '$colArray[6]', '$colArray[7]', '$colArray[8]', '$colArray[9]')";
						if($con->query($sqlInsert)===true){
							
						}else{
							echo "error in data insertion: " . $con->error;
						}
					}else{
						$sqlUpdate = "UPDATE tempRooms SET col1=$colArray[0],col2=$colArray[1],col3=$colArray[2],col4=$colArray[3],col5=$colArray[4],col6=$colArray[5],col7=$colArray[6],col8=$colArray[7],col9=$colArray[8],col10=$colArray[9] WHERE roomNo='$roomNo'";
						if($con->query($sqlUpdate)===true){
							
						}else{
							echo "error in data insertion: " . $con->error;
						}
					}
					
					//recheck if the room is empty or not
					$checkRoomagain = 0;
					for($m=0;$m<10;$m++){
						if($colArray[$m]==0){
							
						}else{
							$checkRoomagain=$checkRoomagain+$colArray[$m];
						}
					}
					if($checkRoomagain==0){
						$tr++;
						$notmroom = 0;
					}
				}
				$oldcourse=$courseCode;
			}
			
		}
	}
	
	//require 'checkreport.php';
?>