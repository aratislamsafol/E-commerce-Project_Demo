<?php 
include 'signup_connection.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login page</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<!--font awsome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom css-->
	<link rel="stylesheet" href="css/signup.css"/>
</head>
<body>
	<div class="signup">
		<div class="container">
			<div class="card">
				<div class="card-body mx-auto">
						<div class="card-title text-center">
							<h4>Create Account</h4>
							<p>Get started with your free account</p>
						</div>
						<button type="button" class="btn btn-twit btn-lg 	btn-block"><i class="fab fa-twitter"></i>  Login via Twitter
						</button>
						<button type="button" class="btn btn-face btn-lg btn-block"><i class="fab fa-facebook-f"></i>  Login via Facebook</button>
						<p class="divider-text">
							<span class="bg-light">OR</span>
						</p>
					<form action="signup_connection.php" method="post">
						<div class="input-group mb-2 mr-sm-2">
							<div class="input-group-prepend">
							  <div class="input-group-text"><i class="fas fa-user"></i>
							  </div>
							</div>
							<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="full name" name="username">
						</div>
						<div class="input-group mb-2 mr-sm-2">
							<div class="input-group-prepend">
							  <div class="input-group-text"><i class="far fa-envelope"></i></i>
							  </div>
							</div>
							<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="email address" name="email">
						</div>
						<div class=" input-group mb-2 mr-sm-2">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							<select class="custom-select" style="max-width: 120px;">
								<option selected="">+088</option>
								<option value="1">+128</option>
								<option value="2">+198</option>
								<option value="3">+701</option>
							</select>
							<input name="phone" class="form-control" placeholder="Phone number" type="text">
						</div>
						<div class="input-group mb-2 mr-sm-2">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Create password" type="password" name="pass">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" placeholder="Repeat password" type="password" name="confirm_pass">
						</div>                                       
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block" name="submit"> Create Account  </button>
						</div> 
						<p class="text-center">Have an account? <a href="index.php">Log In</a> </p> 
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>