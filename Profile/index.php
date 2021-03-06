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
<body background="img/bg.jpg">

	<header>
		
		<div class="container">
			<div class="text-center text-white bg-dark"> <p class="p-2" id="demo"></p></div>
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-4">
					<a href="img/morshed3.jpg"><img src="img/morshed3.jpg"></a>
				</div>
				<div class="col-lg-8 col-md-8">
					<div class="d-flex flex-column">
						<div class="p-5 bg-dark text-white">
							<div class="d-flex flex-row justify-content-between align-items-center">
								<a href="index.php" style="color: white; text-decoration: none;"><h1 class="display-4"> Morshed Khan </h1></a>
								<div><a href="https://www.facebook.com/morshed2767"> <i class="fa fa-facebook"></i></a></div>
								<div><a href="https://plus.google.com/u/0/105657688509263017467"> <i class="fa fa-google-plus"></i></a></div>
								<div><a href="https://www.linkedin.com/in/morshed-khan-0804ab117/"> <i class="fa fa-linkedin"></i> </a></div>
								
							</div>
						</div>

						<div class="p-3 text-white bg-black">
							Web developer and IOT Engineer
						</div>

						<div class="d-flex flex-row text-center text-white">
							<div class="p-4 bg-success font-div" data-toggle="collapse" data-target="#me">
								<a><button class="bg-success btn" style="width: 100%"> <i class="fa fa-user fa-2x d-block"></i> About me </button></a>
							</div>

							<div class="p-4 bg-danger font-div">
								<a href="resume.php"> <button class="bg-danger btn" style="width: 100%"><i class="fa fa-graduation-cap fa-2x d-block"></i> Resume </button></a>
							</div>

							<div class="p-4 bg-primary font-div">
								<a href="works.php"><button class="bg-primary btn" style="width: 100%"> <i class="fa fa-folder fa-2x d-block"></i> Work </button></a>
							</div>

							<div class="p-4 bg-warning font-div">
								<a href="contact.php"><button class="bg-warning btn" style="width: 100%"> <i class="fa fa-envelope fa-2x d-block"></i> Contact </button></a>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>

	</header>



	<div class="container">
		<div class="collapse" id="me">
			<div class="p-3 bg-success text-white">
				<h2>Morshed Khan</h2>
				<p>I'm a netive of a historical city of Bangladesh, Cumilla. Born in 11 July, 1994. I'm an <strong>IOT Engineer</strong>. I also work on <strong>Web Development</strong></p>
			</div>

			<div class="card">
				<div class="card-header bg-dark text-white"><h3>Career Objective</h3></div>
				<div class="card-body">
					<p>Looking for hard and Challenging Job where I will have the scope to utilize my potentiality, adaptability and skill to do something innovate and from where I will be able to enhance my knowledge.</p>
				</div>
			</div>

			<div class="card">
				<h2 class=" card-header bg-success text-white">Educational Background</h2>
				<p class="card-body">I have complited my "Secondary School Certificate" degree from "Rajameher High Schoo, Debidwar, Cumilla" in 2010.
				My mejor was science. After that I have complited my "Higher Secondary Certificate" degree in 2012 from 
				"Rajamaher Engineer M.A. Munshi Adarsha College, Debidwar, Cumilla" in Science.<br>
				In June, 2017 I have complited my "Bachelor of Science in Computer Science & Engineering" from "Daffodil International University, Dhanmondi, Dhaka"</p>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>