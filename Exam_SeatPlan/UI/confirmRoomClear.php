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
			background:#e2e5e7;
			position: relative;
			margin:10px;
			width: 30%;
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
<div><h3 style=color:#ff0000>Clear all Room's Data!!</h3></div>
<div><h3 style=color:#ff0000>Are you sure??</h3></div>
<div class="relative"><a href="clearRooms.php"><button class="relative3">YES</button></div>
<div class="relative2"><a href="index.php"><button class="relative3">NO</button></div>
</div>
</div>
</body>

</html>