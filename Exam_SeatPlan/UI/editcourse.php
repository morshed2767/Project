<?php
	require 'nevigation.html';
?>
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
			left:-140px;
		}.pos2{
			position: relative;
			left:-160px;
		}
		.pos3{
			position: relative;
			left:-117px;
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
		}
		.pos6{
			position: relative;
			left:20px;
			top:-20px;
		}
		.pos7{
			position: relative;
			left:-120px;
		}
		.pos8{
			position: relative;
			left:-130px;
		}
	</style>
</head>

<body>
	<div align="center">
	<div class="area">
	<h1 align="center" style=color:#ff0000>Update Courses and Student Information</h1>
	<form method="post" action="updatecourseindb.php">
		<div class="pos7"><b>Target Course Code :</b></div> <div class="pos4"><input class="relative2" name="targetcourse"></div>
		<div class="pos2"><b>Section :</b></div> <div class="pos4"><input class="relative2" name="targetsection"></div>
		<div align="center"><h4 style=color:#ff0000>New Information</h4></div>
		<div class="pos1"><b>Course Code :</b></div> <div class="pos4"><select class="relative2" name="course">
		  <option>Select course</option>
		  <option value="cse111">CSE-111</option>
		  <option value="cse112">CSE-112</option>
		  <option value="cse113">CSE-113</option>
		  <option value="cse114">CSE-114</option>
		  <option value="cse115">CSE-115</option>
		</select></div>
	
		
		<div class="pos2"><b>Section :</b></div> <div class="pos4"><select class="relative2" name="section">
		  <option>Select section</option>
		  <option value="a">A</option>
		  <option value="b">B</option>
		  <option value="c">C</option>
		  <option value="d">D</option>
		</select>
		</div>
		
		<div class="pos3"><b>Number of Students :</b></div> <div class="pos5"><input class="relative2" type="text" name="nStudent"></div>	
	
		<div class="pos8"><b>Teacher's Initial :</b></div> <div class="pos6"><select class="relative2" name="teacherInitial">
		  <option>Select TI</option>
		  <option value="nrc">NRC</option>
		  <option value="sah">SAH</option>
		  <option value="sn">SN</option>
		  <option value="sl">SL</option>
		</select>
		</div>
		<div class="relative"><input class="relative3" type="submit" name="update" value="UPDATE"></div>
	</form>
	</div>
	</div>
</body>
</html>