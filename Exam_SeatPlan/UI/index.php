<!DOCTYPE html>
<html>
<title>exam sit plan</title>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #111;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #111}

.dropdown:hover .dropdown-content {
    display: block;
}
.active {
		background-color: #000000;
	}
</style>
</head>
<body>

<ul>
  <li class="active"><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="capacity.php" class="dropbtn">Room</a>
    <div class="dropdown-content">
      <a href="editroom.php">Edit</a>
      <a href="confirmRoomClear.php">Clear</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="csDetails.php" class="dropbtn">Course & Student</a>
    <div class="dropdown-content">
      <a href="editcourse.php">Edit</a>
      <a href="confirnCourseClear.php">Clear</a>
    </div>
  </li>
  <li><a href="report.php">Create Report</a></li>
  <li><a href="summarytitle.php">Create Summary</a></li>
  <li><a href="confirmDatabaseClear.php">Clear DataBase</a></li>
</ul>
<?php require 'slide.html' ?>
</body>
</html>
