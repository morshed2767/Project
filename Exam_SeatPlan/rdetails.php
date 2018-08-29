<?php include 'nevigation.html'; ?>

<?php

$building = $rNum = $nfCol = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$building = $_POST["aBuilding"];
	$rNum = $_POST["rNumber"];
	$nfCol = $_POST["nCol"];
}
?>
<html>
<head>
	<style> 
		 .mrg{
			margin: 10px 0 0 0; 
		}
			
		.mrg2{
			margin: -20px 0 0 0; }
	</style>
</head>
<body>

	<h2 align="center">Room details...</h2>
	<table width='25%' border="2px">
	
	<tr>
		<th colspan='25%'><?php echo $rNum; ?></th>
	</tr>
	<tr>
		<th>Col No.</th>
		<?php 
		$i=1;
		for($i=1;$i<=$nfCol;$i++){
			echo "<th>Col. $i</th>";} 
		?>
	</tr>
	<tr>
		<th>Capacity</th>
		<?php 
		$i=1;
		for($i=1;$i<=$nfCol;$i++){
			echo "<td><input type='text' name='capacity' style='border:0px'></td>";} 
		?>
	</tr>
	</table>
	<div class="mrg"> <a href="capacity.php">Add</a></div><div class="mrg2" align="center"><a href="csDetails.php">Submit</a></div>
	
	
</body>
</html>

