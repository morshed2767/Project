<?php require 'nevigation.html' ?>

<html>
<head>
	<style>
		div.relative {
			position: relative;
			left: 50px;
			bottom: 10px;
			color:blue;
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
			border: 2px solid black;
			background:#e2e5e7;
			position: relative;
			margin:10px;
			width: 30%;
			
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
			left:-100px;
		}
		.pos4{
			position: relative;
			left:40px;
			top:-20px;
		}
		.pos5{
			position: relative;
			left:70px;
			top:-20px;
		}.pos6{
			position: relative;
			left:20px;
			top:-20px;
		}
	</style>
</head>

<body>
	<div align="center">
	<div class="area">
	<h1 align="center">Courses and Student details</h1>
	<form method="post" action="courseStudentInsertion.php">
		<div class="pos1"><b>Course Code :</b></div> <div class="pos4"><select class="relative2" name="course">
		  <option>Select course</option>
		  <option value="CSE-111">CSE-111</option>
		  <option value="CSE-112">CSE-112</option>
		  <option value="CSE-113">CSE-113</option>
		  <option value="CSE-114">CSE-114</option>
		  <option value="CSE-115">CSE-115</option>
		</select></div>
	
		
		<div class="pos2"><b>Section :</b></div> <div class="pos4"><select class="relative2" name="section">
		  <option>Select section</option>
		  <option value="A">A</option>
		  <option value="B">B</option>
		  <option value="C">C</option>
		  <option value="D">D</option>
		</select>
		</div>
		
		<div class="pos3"><b>Number of Students :</b></div> <div class="pos5"><input class="relative2" type="text" name="nStudent"></div>	
	
		<div class="pos1"><b>Teacher's Initial :</b></div> <div class="pos6"><select class="relative2" name="teacherInitial">
		  <option>Select TI</option>
		  <option value="NRC">NRC</option>
		  <option value="SAH">SAH</option>
		  <option value="SN">SN</option>
		  <option value="SL">SL</option>
		</select>
		</div>
		<div class="relative"><input class="relative3" type="submit" name="add" value="ADD"></div>
	</form>
	</div>
	</div>
</body>
</html>