<!DOCTYPE html>
<html>
<head>
	<title>Morshed Khan</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body style = "background: #f2f2f2">

	<?php
		require('header.html');
	?>

	<div class="container">
		<div class="p-3 bg-primary text-white">
			<h2>Work Experience and Projects</h2>
			<p>Short description about my professional background and Projects</p>
		</div>

		<div class="card">
			<h2 class=" card-header bg-dark text-white">Employment Experience</h2>
			<div class="card-body">
				<p><label><strong>Company Name:</strong></label> <a href="http://datasoft-bd.com"> DataSoft Systems Bangladesh Limited </a></p>
				<p><strong>Job Title: </strong> IOT Trainee</p>
				<p><strong>Job Responsibilities: </strong></p>
				<ul>
					<li>Develop system test plans, prepare test scenarios, test cases and test scripts</li>
					<li>Understand business requirements and design</li>
					<li>Identify new tools and methodologies</li>
					<li>Rapidly fixing bugs and solving problems</li>
					<li>Write scripts & codes for machines to interact with real world objects</li>
				</ul>

				<p><strong>Duration: </strong> October, 2017 - March, 2018</p>
			</div>
		</div>

		<div class="card">
			<div class="card-header bg-primary">
				<h2 class="text-white">Projects</h2>
			</div>
		</div>

		<div class="card">

			<div class="card-header">
				<h3>Web Development</h3>
				<p>I have made these web application. Take a look at the photo gallery below. Also you can see the source code in  <button class="bg-success btn" data-toggle="collapse" data-target="#weblinks"> GitHub </button>.</p>

				<div class="collapse" id="weblinks">
					<ul>
						<li><a href="https://github.com/morshed2767/PHP/tree/master/Employee_Info">Employee Information Management System</a></li>
						<li><a href="https://github.com/morshed2767/Project/tree/master/Exam_SeatPlan">Examination Seat Planning System</a></li>
						<li><a href="https://github.com/morshed2767/Project/Protfolio">Parsonal Protfolio Website</a></li>
					</ul>
				</div>
			</div>

			<div class="card-body"> 
				<div class="row no-gutters">
					<div class="col-lg-4 col-md-4"><img src="img/employee_info.png"></div>
					<div class="col-lg-4 col-md-4"><img src="img/seat_plan.png"></div>
					<div class="col-lg-4 col-md-4"><img src="img/profile.png"></div>
				</div>
			</div>

		</div>

		<div class="card">
			<div class="card-header">
				<h3>IOT</h3>
			</div>
			<div class="card-body"> IOT projects</div>
		</div>
		
	</div>



	<div class="container">
		<footer class="p-2 bg-dark mt-1 text-center">
			<button class="btn"> <i class="fa fa-download fa-2x"></i> Download </button>
		</footer>
	</div>

</body>
</html>