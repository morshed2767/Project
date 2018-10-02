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
		<div class="p-3 bg-warning text-dark">
			<h2>Contact Me</h2>
			<p>If you have any query, please send me a massage.</p>
		</div>

		<div class="card card-body">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-8 col-12">

					<form action="" method="post">
						
						<div class="form-group">
						 	<label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
						 	<input type="text" name="name" class="form-control" placeholder="Enter Name">
						</div>

						<div class="form-group">
						 	<label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
						 	<input type="email" name="email" class="form-control" placeholder="Enter Email">
						</div>

						<div class="form-group">
						 	<label><i class="fa fa-phone" aria-hidden="true"></i> Contact No.</label>
						 	<input type="phone" name="phone" class="form-control" placeholder="Enter your contact no.">
						</div>

						<div class="form-group">
						 	<label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
						 	<textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
						</div>

						<input type="submit" name="submit" class="btn btn-danger text-dark" value="Send">

					</form>
					
				</div>
				
			</div>
		</div>
	</div>

		<?php
			if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$admin = "morshed2767@gmail.com";
				$subject = "From My Web";

				$headers = "From: " . $email;
				//mail($admin,$subject, $message, $headers);
				//echo $name . ' ' . $email . ' ' . $message;
			}
		?>


	<div class="container">
		<footer class="p-1 mt-1 text-center bg-dark text-white">
			<h5>Morshed khan</h5>
			<p>Email: morshed2767@gmail.com; Phone: +8801815463939</p>
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