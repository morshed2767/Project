<?php
	require 'nevigation.html';
?>

<html>

<head>
	<title>Update Rooms Info</title>
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
			left:-135px;
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
		.pos5{
			position: relative;
			left:-200px;
		}
		
		
	</style>
</head>

<body>
	<div align="center">
	<div class="area">
	<h1 align="center" style=color:#ff0000>Update information of a particular room</h1>
	<form method="post" action="updateroomindb.php">
		<div class="pos1"><b>Target RoomNo:</b></div> <div class="pos4"><input class="relative2" type="text" name="targrtroom"></div>
		<div align="center"><h4 style=color:#ff0000>New Information</h4></div>
		<div class="pos2"><b>Room number:</b></div> <div class="pos4"><input class="relative2" type="text" name="rNumber"></div>
		<div class="pos3"><b>Col. 1:</b></div> <div class="pos4"><input class="relative2" type="text" name="col1"></div>
		<div class="pos3"><b>Col. 2:</b></div> <div class="pos4"><input class="relative2" type="text" name="col2"></div>
		<div class="pos3"><b>Col. 3:</b></div> <div class="pos4"><input class="relative2" type="text" name="col3"></div>
		<div class="pos3"><b>Col. 4:</b></div> <div class="pos4"><input class="relative2" type="text" name="col4"></div>
		<div class="pos3"><b>Col. 5:</b></div> <div class="pos4"><input class="relative2" type="text" name="col5"></div>
		<div class="pos3"><b>Col. 6:</b></div> <div class="pos4"><input class="relative2" type="text" name="col6"></div>
		<div class="pos3"><b>Col. 7:</b></div> <div class="pos4"><input class="relative2" type="text" name="col7"></div>
		<div class="pos3"><b>Col. 8:</b></div> <div class="pos4"><input class="relative2" type="text" name="col8"></div>
		<div class="pos3"><b>Col. 9:</b></div> <div class="pos4"><input class="relative2" type="text" name="col9"></div>
		<div class="pos3"><b>Col. 10:</b></div> <div class="pos4"><input class="relative2" type="text" name="col10"></div>
		<div class="relative"><input class="relative3" type="submit" name="update" value="UPDATE"></div>
	</form>
	</div>
	</div>
</body>
</html>


