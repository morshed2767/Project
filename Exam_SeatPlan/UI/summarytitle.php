<?php
	require 'nevigation.html';
?>
<html>
<head>
	<title>Room details</title>
	<style>
		.relative {
			position: relative;
			bottom:10px;
			left: 50px;
		}
		.relative2 {
			background-color:#f8ed8c;
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
			border: 2px solid black;
			background:#e2e5e7;
		}
		.pos1{
			position: relative;
			left:-120px;
		}.pos2{
			position: relative;
			left:-140px;
		}
		.pos3{
			position: relative;
			left:-165px;
		}
		.pos4{
			position: relative;
			left:40px;
			top:-20px;
		}
		
		
	</style>
</head>

<body>
	<div align="center">
	<div class="area">
	<h1>* Enter details about The Exam</h1>
	<form method="post" action="trysumm.php">
		
		<div class="pos2"><b>Report For:</b></div> <div class="pos4"><input class="relative2" type="text" name="exm"></div>
		<div class="pos3"><b>Date:</b></div> <div class="pos4"><input class="relative2" type="text" name="date"></div>
		<div class="pos3"><b>Slot:</b></div> <div class="pos4"><input class="relative2" type="text" name="slot"></div>
		<div class="relative"><input class="relative3" type="submit" name="add" value="Show Summary"></div>
	</form>
	</div>
	</div>
</body>
</html>


