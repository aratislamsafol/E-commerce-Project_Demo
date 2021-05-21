<?php 
include('header.php');
if(isset($_SESSION['user_role'])){
	header("Location: panel.php");
}
?>
<section class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3>User login Form</h3>
		</div>
	</div>
	<div class="row no-gutters justify-content-md-center">
		<div class="col-md-4">
			<form action="login.php" method="POST">
				<div class="form-group">
					<label for="username">Unsername</label>
					<input type="text" name="username" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" required/>
				</div>
				<button type="submit" name="login" class="btn btn-outline-success btn-md">Login</button>
			</form>
		</div>
	</div>
</section>
<?php
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$userpass = $_POST['password'];
		
		$select_data = "SELECT*FROM users WHERE username='$username' AND user_pass='$userpass'";
		
		$sqli_query = mysqli_query( $con, $select_data );
		$data_check = mysqli_num_rows($sqli_query);
		
		if($data_check == 1){
			$user_data = mysqli_fetch_assoc($sqli_query);
			$user_id = $user_data['user_id'];
			$user_role = $user_data['user_role'];
			$user_email = $user_data['user_email'];
			$username = $user_data['username'];
			
			$_SESSION['userid'] = $user_id;
			$_SESSION['user_role'] = $user_role;
			$_SESSION['user_email'] = $user_email;
			$_SESSION['username'] = $username;
			
			echo '<script type="text/javascript">window.open("panel.php", "_self")</script>';
		}else{
			echo '<script type="text/javascript">alert("User not found!! Please reg")</script>';
		}
	}
?>
<?php include('footer.php'); ?>