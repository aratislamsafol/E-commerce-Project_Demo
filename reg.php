<?php
include('header.php');
if(isset($_SESSION['user_role'])){
	header("Location: panel.php");
}
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>User registration Form</h3>
			</div>
		</div>
		<div class="row no-gutters justify-content-md-center">
			<div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 ">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="userfname">Full Name</label>
						<input type="text" name="userfname" class="form-control" />
					</div>
					
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label for="useremail">Email</label>
						<input type="text" name="useremail" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label for="userpass">Password</label>
						<input type="text" name="userpass" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<label for="userpass">Avatar</label>
						<input type="file" name="useravatar" class="form-control" />
					</div>
					<button class="btn btn-outline-primary btn-md" name="createuser">Create User</button>
				</form>
			</div>
		</div>
	</div>
	<?php
	if(isset($_POST['createuser'])){
			$userfname = $_POST['userfname'];
			$username = $_POST['username'];
			$useremail = $_POST['useremail'];
			$userpass = $_POST['userpass'];
			$user_role = 'customer';
			
			$useravatar = $_FILES['useravatar']['name'];
			$useravatar_tmp = $_FILES['useravatar']['tmp_name'];
			move_uploaded_file($useravatar_tmp, "img/$useravatar");
			
			$insert = "INSERT INTO users(userfname, username, user_email, user_pass, user_role, user_avatar) VALUES ('$userfname', '$username', '$useremail', '$userpass', '$user_role', '$useravatar')";
			
			$create = mysqli_query( $con, $insert );
			
			if($create){
				echo '<script type="text/javascript">alert("Success Registration")</script>';
				echo '<script type="text/javascript">window.open("login.php", "_self")</script>';
			}else{
				echo '<script type="text/javascript">alert("Error!!! Please check your data")</script>';
				echo '<script type="text/javascript">window.open("reg.php", "_self")</script>';
			}
		}
		?>
</section>
<?php include('footer.php'); ?>
