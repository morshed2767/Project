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
		<div>
			<div class="p-3 bg-danger text-white">
				<h2>My Resume</h2>
				<p>Short description about my training, certification and my skills</p>
			</div>

			<div class="card">
				<h2 class=" card-header bg-dark text-white">Training and Professional Certification</h2>
				
				<div class="card-body">

					<div class="card-deck text-center">
						<div class="card">
							<div class="card-header bg-dark text-white font-weight-bold">IOT Army 300</div>
							<div class="card-body">
								<p>Professional Training on "Internet Of Things", where I have learnt about IOT and worked on different real life IOT projects</p>
							</div>
							<div class="card-footer">Duration: Oct, 2017 - Mar, 2018</div>
						</div>

						<div class="card">
							<div class="card-header bg-dark text-white font-weight-bold">Android App Development</div>
							<div class="card-body">
								<p>Three months long training on Android App Development. This training was organized by LICT Bangladesh.</p>
							</div>
							<div class="card-footer">Duration: June, 2016 - Aug, 2016</div>
						</div>

						<div class="card">
							<div class="card-header bg-dark text-white font-weight-bold">ITEE FE(Level-2)</div>
							<div class="card-body">
								<p>Fundamental IT Engineer Examination of Information Technology Engineers Examination(ITEE), conducted by BD-ITEC and Bangladesh Computer Council(BCC)</p>
							</div>
							<div class="card-footer">Date: 25 March, 2018</div>
						</div>

					</div>

				</div>

			</div>

			<div class="card">
				<h2 class="card-header bg-danger text-white">My Skills</h2>
				<div class="card-body">
				<p>I have these skills and I'm always interested to learn new technologics and to develop my skill</p>


				<div class="d-flex flex-row text-center text-white">
					<div class="p-2 bg-success font-div2" data-toggle="collapse" data-target="#web">
						 <button class="bg-success btn" style="width: 100%">Web Development</button>
					</div>

					<div class="p-2 bg-danger font-div2" data-toggle="collapse" data-target="#iot">
						<button class="bg-danger btn" style="width: 100%">IOT</button>
					</div>

					<div class="p-2 bg-primary font-div2" data-toggle="collapse" data-target="#programming">
						<button class="bg-primary btn" style="width: 100%"> Programming </button>
					</div>
				</div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="container">
		<div class="collapse" id="web">

			<div class="card card-body">
				<h3 class="text-success"><u>Web Technology</u></h3>
				<h4>HTML</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
				</div>

				<h4>CSS</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
				</div>

				<h4>JavaScript</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%"></div>
				</div>

				<h4>BootStrap</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
				</div>

				<h4>PHP</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
				</div>

				<h4>MySQL</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%"></div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="container">
		<div class="collapse" id="iot">

			<div class="card card-body">
				<h3 class="text-danger"><u>IOT Technology</u></h3>
				<h4>Arduino</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
				</div>

				<h4>Intel Edison</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
				</div>

				<h4>Sensors</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
				</div>
			</div>
			
		</div>
	</div>


	<div class="container">
		<div class="collapse" id="programming">

			<div class="card card-body">
				<h3 class="text-primary"><u>Programming Language</u></h3>
				<h4>C</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
				</div>

				<h4>Python</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
				</div>

				<h4>Java</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
				</div>

				<h4>NodeJS</h4>
				<div class="progress mb-3">
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"></div>
				</div>
			</div>
			
		</div>
	</div>



	<div class="container">
		<footer class="p-2 bg-dark mt-1 text-center">
			<button class="btn"> <i class="fa fa-download fa-2x"></i> Download </button>
		</footer>
	</div>

	 <script>
		var d = new Date();
		document.getElementById("demo").innerHTML = d;
	</script>


    <script type="text/javascript">
    	$('.font-div2').click(function(){
    		$('.collapse').collapse('hide');
    	});
    </script>

</body>
</html>