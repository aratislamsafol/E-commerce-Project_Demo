<?php
include('header.php');
if(!$_SESSION['user_role']){
	echo '<script type="text/javascript">window.open("login.php", "_self")</script>';
}else{
	$username_id = $_SESSION['userid'];
	$user_role = $_SESSION['user_role'];
	$user_email = $_SESSION['user_email'];
	$username = $_SESSION['username'];
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#userPanelnav" aria-controls="userPanelnav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="userPanelnav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username; ?></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<p class="dropdown-item text-center"><img src="img/user.jpg" alt="" class="rounded-circle" width="100" height="100" /></p>
						<p class="dropdown-item">User ID:&nbsp;<?php echo $username_id; ?></p>
						<p class="dropdown-item">Email:&nbsp;<?php echo $user_email; ?></p>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
<section class="userpanel-body">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-md-2 col-lg-2 col-xl-2">
				<div class="accordion" id="userpanelsidebar">
					<div class="card">
						<div class="card-header p-1" id="headingOne">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Products
								</button>
							</h2>
						</div>
						
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#userpanelsidebar">
							<div class="card-body p-0">
								<div class="list-group">
									<a class="list-group-item list-group-item-action active" id="addproduct-tab" data-toggle="tab" href="#addproduct" role="tab" aria-controls="addproduct" aria-selected="true">Add new product</a>
									
									<a class="list-group-item list-group-item-action" id="showproduct-tab" data-toggle="tab" href="#showproduct" role="tab" aria-controls="showproduct" aria-selected="false">All Product</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header p-1" id="headingTwo">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Users
								</button>
							</h2>
						</div>
						
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#userpanelsidebar">
							<div class="card-body p-0">
								<div class="list-group">
									<a class="list-group-item list-group-item-action" id="adduser-tab" data-toggle="tab" href="#adduser" role="tab" aria-controls="adduser" aria-selected="true">Add new user</a>
									
									<a class="list-group-item list-group-item-action" id="showuser-tab" data-toggle="tab" href="#showuser" role="tab" aria-controls="showuser" aria-selected="false">All User</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-10 col-lg-10 col-xl-10">
			
				<div class="tab-content">
				
					<div class="tab-pane fade show active p-4" id="addproduct" role="tabpanel" aria-labelledby="addproduct-tab">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<label for="ptitle">Product Title</label>
								<input type="text" name="ptitle" class= "form-control" placeholder="Product Title" required/>
							</div>
							
							<div class="form-group">
								<label for="price">Product Price</label>
								<input type="number" name="price" placeholder="Price" class="form-control" required/>
							</div>
							
							<div class="form-group">
								<label for="pcategory">Categories</label>
								<select name="pcategory" class="form-control" required>
									<option selected disabled>Select Category</option>
									<option value="1">ASUS</option>
									<option value="2">Dell</option>
									<option value="3">Lenevo</option>
									<option value="4">HP</option>
									<option value="5">Acer</option>
									<option value="6">VIVO</option>
									<option value="7">Intel</option>
									<option value="8">AMD</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="productimg">Choose image</label>
								<input type="file" name="productimg" class="form-control" />
							</div>
							
							<div class="form-group">
								<label for="pdes">Description</label>
								<textarea name="pdes" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
							</div>
							
							<button type="submit" name="pcreate" class="btn btn-md btn-outline-danger">Create Product</button>
						</form>
					</div>
					
					<div class="tab-pane fade p-4" id="showproduct" role="tabpanel" aria-labelledby="showproduct-tab">
						<table class="table table-bordered">
							<tr>
								<th>Title</th>
								<th>Image</th>
								<th>Price (TK)</th>
								<th>Category</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
							
							<?php
								//Show Product Data
								$show = "SELECT*FROM products";
								$result = mysqli_query( $con, $show );
								if(mysqli_num_rows($result) > 0){
									while($product = mysqli_fetch_assoc($result)){
										
										echo '
										<tr>
											<td>'.$product['p_title'].'</td>
											<td><img src="img/'.$product['p_img'].'" alt="Product Image" width="100" height="100"></td>
											<td>'.$product['p_price'].'</td>
											<td>'.$product['p_category'].'</td>
											<td>'.$product['p_des'].'</td>
											<td><a href="http://localhost/es/update.php?editproduct='.$product['p_id'].'" class="btn btn-outline-primary btn-small">Edit</a>&nbsp;<a href="http://localhost/es/panel.php?deleteproduct='.$product['p_id'].'" class="btn btn-outline-danger btn-small">Delete</a>&nbsp;<a href="" class="btn btn-outline-success btn-small">View</a></td>
										</tr>
										';
									}
								}else{
									echo '
									
										<tr>
											<td colspan="6" class="text-center">No Product Found</td>
										</tr>
									';
								}
							?>
							
						</table>
					</div>
					
					<div class="tab-pane fade p-4" id="adduser" role="tabpanel" aria-labelledby="adduser-tab">
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
					
					<div class="tab-pane fade p-2" id="showuser" role="tabpanel" aria-labelledby="showuser-tab">
						<table class="table table-bordered">
							<tr>
								<th>Full Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Password</th>
								<th>Image</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
							
							<?php
								//Show Product Data
								$user_select = "SELECT*FROM users";
								$user_query = mysqli_query( $con, $user_select );
								if(mysqli_num_rows($user_query) > 0){
									while($user = mysqli_fetch_assoc($user_query)){
										
										echo '
										<tr>
											<td>'.$user['userfname'].'</td>
											<td>'.$user['username'].'</td>
											<td>'.$user['user_email'].'</td>
											<td>'.$user['user_pass'].'</td>
											<td><img src="img/'.$user['user_avatar'].'" alt="Product Image" width="100" height="100"></td>
											<td>'.$user['user_role'].'</td>
											<td><a href="http://localhost/es/update.php?edituser='.$user['user_id'].'" class="btn btn-outline-primary btn-small">Edit</a>&nbsp;<a href="http://localhost/es/panel.php?deleteuser='.$user['user_id'].'" class="btn btn-outline-danger btn-small">Delete</a>&nbsp;<a href="" class="btn btn-outline-success btn-small">View</a></td>
										</tr>
										';
									}
								}else{
									echo '
									
										<tr>
											<td colspan="7" class="text-center">No User Found</td>
										</tr>
									';
								}
							?>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<div class="container">
		<?php if($user_role == 'superadmin'){ ?>
		
		<div class="row">
			<div class="col-md-12">
				User ID:&nbsp;<?php echo $username_id; ?><br>
				User Role:&nbsp;<?php echo $user_role; ?><br>
				User Email:&nbsp;<?php echo $user_email; ?><br>
				<a href="logout.php">Logout</a>
			</div>
		</div>
		
		<?php }elseif($user_role == 'sales'){ ?>
		
		<div class="row">
			<div class="col-md-12">
				User ID:&nbsp;<?php echo $username_id; ?><br>
				User Email:&nbsp;<?php echo $user_email; ?><br>
				<a href="logout.php">Logout</a>
			</div>
		</div>
		
		<?php }else{ ?>
		
		<div class="row">
			<div class="col-md-12">
				User Email:&nbsp;<?php echo $user_email; ?><br>
				<a href="logout.php">Logout</a>
			</div>
		</div>
		
		<?php } ?>
	</div>
	
	<?php
		//Creating Product
		if(isset($_POST['pcreate'])){
			$ptitle = $_POST['ptitle'];
			$price = $_POST['price'];
			$pcategory = $_POST['pcategory'];
			$pdes = $_POST['pdes'];
			
			$pimg = $_FILES['productimg']['name'];
			$pimg_tmp = $_FILES['productimg']['tmp_name'];
			move_uploaded_file($pimg_tmp, "img/$pimg");
			
			if($pcategory == 1){
				$pcategory = 'ASUS';
			}elseif($pcategory == 2){
				$pcategory = 'Dell';
			}elseif($pcategory == 3){
				$pcategory = 'Lenevo';
			}elseif($pcategory == 4){
				$pcategory = 'HP';
			}elseif($pcategory == 5){
				$pcategory = 'Acer';
			}elseif($pcategory == 6){
				$pcategory = 'VIVO';
			}elseif($pcategory == 7){
				$pcategory = 'Intel';
			}else{
				$pcategory = 'AMD';
			}
			
			$insert = "INSERT INTO products(p_title, p_img, p_price, p_des, p_category) VALUES ('$ptitle', '$pimg', '$price', '$pdes', '$pcategory')";
			
			$create = mysqli_query( $con, $insert );
			
			if($create){
				echo '<script type="text/javascript">alert("Product Added")</script>';
				echo '<script type="text/javascript">window.open("panel.php", "_self")</script>';
			}else{
				echo '<script type="text/javascript">alert("Error!!! Please check your data")</script>';
				echo '<script type="text/javascript">window.open("panel.php", "_self")</script>';
			}
		}
		
		
		//Creating User
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
				echo '<script type="text/javascript">alert("User Added")</script>';
				echo '<script type="text/javascript">window.open("login.php", "_self")</script>';
			}else{
				echo '<script type="text/javascript">alert("Error!!! Please check your data")</script>';
				echo '<script type="text/javascript">window.open("reg.php", "_self")</script>';
			}
		}
		
		
		// Product Deletion
		if(isset($_GET['deleteproduct'])){
			$delete_id = $_GET['deleteproduct'];
			
			$delete = "DELETE FROM products WHERE p_id='$delete_id'";
			$run_delete = mysqli_query( $con, $delete );
			
			if($run_delete){
				echo '<script type="text/javascript">alert("Product Deleted")</script>';
				echo '<script type="text/javascript">window.open("panel.php", "_self")</script>';
			}else{
				echo '<script type="text/javascript">alert("Error!!!")</script>';
			}
		}
		
include('footer.php'); ?>