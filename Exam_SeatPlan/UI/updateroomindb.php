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
$targetroom = $_POST["targrtroom"];
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
$sql2 = "UPDATE Rooms SET roomNo='$roomNo',col1=$col1,col2=$col2,col3=$col3,col4=$col4,col5=$col5,col6=$col6,col7=$col7,col8=$col8,col9=$col9,col10=$col10 WHERE roomNo='$targetroom'";
if($con->query($sql2)===true){
		echo "<h2 style=color:#08c019>Successfully updated<h2>";
	}else{
		echo "Can not update " . $con->error;
	}

?>


<div class="relative"><a href="editroom.php"><button class="relative3">Update More</button></div>
<div class="relative2"><a href="index.php"><button class="relative3">Done</button></div>
</div>
</div>
</body>

</html>