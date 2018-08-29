
<?php
	$exm = $_POST["exm"];
	$date= $_POST["date"];
	$slot= $_POST["slot"];
	
	echo "<h1 align='center'>" . $exm . "</h1><br>";
	echo "<div style=margin-top:-50px><h2 style=margin-left:350px> Date: " . $date . "</h3></div><br>";
	echo "<div align='right' style=margin-top:-83px><h2 style=margin-right:300px>Slot: " . $slot . "</h3></div><br>";
	echo "<div style=margin-top:-40px><hr align='center' width='80%' height='5px' style=border-width:5px></div>";
	//require 'title.php';
//connecting to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "roomStudent";
	$con = new mysqli($servername, $username, $password, $dbname);

	if($con->connect_error){
		die ('Connection failed: ' . $con->connect_error);
	}
	
	$roomNo = "";
	$id= $col1= $col2= $col3= $col4= $col5= $col6= $col7= $col8= $col9= $col10= $noroom= 0;
	
	//getting the number of rows in Rooms table
	$maxidr=0;
	$sqlmaxidr = "SELECT MAX(id) AS 'maximum' FROM Rooms";
	$maxr = $con->query($sqlmaxidr);
	if($maxr->num_rows>0){
		while($row = $maxr->fetch_assoc()){
			global $maxidr;
			$maxidr = $row['maximum'];
		}
	}
	//echo $maxidr . "<br>";
	
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
	//echo "<h1 align='center'>Examination Seat Plan</h1>";
	for($i=1;$i<=$maxidr;$i++){
		fetchRooms($i);
		$roomNumber = $roomNo;
		$sqlreport = "SELECT * FROM Report WHERE roomNo='$roomNumber'";
		$resultreport = $con->query($sqlreport);
		if($resultreport->num_rows <= 0){
			//$checkprev = 0;
			//echo "No data in report<br>";
		}
		else{
			echo "<table border=1 width='100%' style=margin-top:20px>
				<tr>
					<th colspan='100%'> ROOM# "  . $roomNumber . "</th>
				</tr>";
				echo "<tr style=background:#EEEAEA>";
			while($row = $resultreport->fetch_assoc()){
				$courseCode=$row["courseCode"];
				$section = $row["section"];
				$roomNo=$row["roomNo"];
				$colNo=$row["colNo"];
				$numberofStudent=$row["numberofStudent"];
				$teacherInitial=$row["teacherInitial"];
				
				echo "<td align='center' style=background-size:10>" . $colNo . "<br>" . $courseCode . "<br>" . $teacherInitial . "</td>";
				//echo "<td>" . $section . "</td>";
				//echo "<td>" . $roomNo . "</td>";
				//echo "<td>" . $colNo . "</td>";
				//echo "<td>" . $numberofStudent . "</td>";
				
			}
			echo "</tr>";
			echo "<tr>";
			$sqlreport2 = "SELECT * FROM Report WHERE roomNo='$roomNumber'";
			$resultreport2 = $con->query($sqlreport2);
			while($row = $resultreport2->fetch_assoc()){
				$courseCode=$row["courseCode"];
				$section = $row["section"];
				$roomNo=$row["roomNo"];
				$colNo=$row["colNo"];
				$numberofStudent=$row["numberofStudent"];
				
				echo "<td align='center'>" . $numberofStudent . "</td>";
				//echo "<td>" . $section . "</td>";
				//echo "<td>" . $roomNo . "</td>";
				//echo "<td>" . $colNo . "</td>";
				//echo "<td>" . $numberofStudent . "</td>";
				
			}
			echo "</tr>";
			echo "</table>";
		}
	}
	
?>
