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
$roomNo = $_POST["rNumber"];
$col1=$_POST["col1"];
$col2=$_POST["col2"];
$col3=$_POST["col3"];
$col4=$_POST["col4"];
$col5=$_POST["col5"];
$col6=$_POST["col6"];
$col7=$_POST["col7"];
$col8=$_POST["col8"];
$col9=$_POST["col9"];
$col10=$_POST["col10"];
$sql2 = "INSERT INTO Rooms(roomNo, col1, col2, col3, col4, col5, col6, col7, col8, col9, col10)
			values('$roomNo', '$col1', '$col2', '$col3', '$col4', '$col5', '$col6', '$col7', '$col8', '$col9', '$col10')";
if($con->query($sql2)===true){
		echo "<h2>Successfully added<h2>";
	}else{
		echo "error in data insertion. Room no. already there " . $con->error;
	}

?>


<div class="relative"><a href="capacity.php"><button class="relative3">ADD More</button></div>
<div class="relative2"><a href="csDetails.php"><button class="relative3">SUBMIT</button></div>
</div>
</div>
</body>

</html>