<?php require 'nevigation.html' ?>

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
			width:100%;
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
	<h1 align="center">Examination Seat Plan</h1>
	<h3>* Add the details about seat capacity</h3>
	<form method="post" action="insertroom.php">
		<div class="pos1"><b>Academic Building:</b></div> <div class="pos4"><input class="relative2" type="text" name="aBuilding"></div>
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
		<div class="relative"><input class="relative3" type="submit" name="add" value="ADD"></div>
	</form>
	</div>
	</div>
</body>
</html>
