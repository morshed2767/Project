<?php
	$exm = $_POST["exm"];
	$date= $_POST["date"];
	$slot= $_POST["slot"];
	
	echo "<h1 align='center'>" . $exm . "</h1><br>";
	echo "<h3> Date: " . $date . "</h3><br>";
	echo "<h3 align='right' style=margin-top:-60px>Slot: " . $slot . "</h3><br>";
	//require 'showreport.php';
?>