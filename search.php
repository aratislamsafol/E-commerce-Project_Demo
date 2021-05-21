<?php include('header.php'); ?>
	<section class="top-bar bg-dark p-1 text-white">
		<div class="container">
			<div class="row">
				<!--.col-12.col-sm-6.col-md-6.col-lg-6.col-xl-6-->
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<span><h5><i class="fas fa-phone-alt rounded-circle bg-danger p-2"></i>&nbsp; &nbsp;0145555555 >> 0175855555</h5></span>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
					<h5 class="float-right text-muted p-1">Welcome To Our Website</h5>
				</div>
			</div>
		</div>
	</section><!--fuck off top_bar-->
	<!--top-navbar start bro-->
	<section class="top-navabar p-2">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
					<h4><a href="index.php">Brand Logo</a></h4>
				</div>
				<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
					<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
					  <input class="form-control mr-sm-2" type="text" name="psearch" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="productsearch">Search</button>
					</form>
				</div>
				<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-right">
					<button type="button" class="btn btn-outline-primary">Primary</button>
				</div>
			</div>
		</div>
	</section>
	<!--fuck off top-nav-->
	<section class="navbar sticky-top bg-light m-0 p-0">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item p-2">
							<a href="index.php"><i class="fas fa-home"></i></a>
						</li>	
				
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Laptop
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							  <a class="dropdown-item" href="category.php?laptop=ASUS">ASUS</a>
							  <a class="dropdown-item" href="category.php?laptop=HP">HP</a>
							  <a class="dropdown-item" href="category.php?laptop=Lenevo">Lenevo</a>
							  <a class="dropdown-item" href="category.php?laptop=Acer">Acer</a>
							  <a class="dropdown-item" href="category.php?laptop=Dell">Dell</a>
							  <a class="dropdown-item" href="category.php?laptop=VIVO">VIVO</a>
							</div>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Processor
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="category.php?processor=Intel">Intel</a>
							<a class="dropdown-item" href="category.php?processor=AMD">AMD</a>
						</div>
						</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Cooling
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Storage
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Component
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pos Product
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Peripheral
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Software
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>	
	</section>
	<hr />
	<section class="search-result-section">
		<div class="container">
			<div class="row">
				<?php
					if(isset($_POST['productsearch'])){
						$s_data = $_POST['psearch'];
						$sqli_select = "SELECT*FROM products WHERE username LIKE '%$s_data%'";
						$data_query = mysqli_query( $con, $sqli_select );
						if(mysqli_num_rows($data_query) > 0){
							while($data = mysqli_fetch_assoc($data_query)){
								echo '
									<div class="col-lg-4 mb-2">
										<div class="our-pc-product-item">
											<div class="item">
												<div class="card" style="width: 25rem;">
												<div class="card-img">
													<figure>
													<img class="card-img-top" src="img/'.$data['p_img'].'" class="latest-product-image" alt="Card image cap"/>
												</figure>
												<div class="card-icon1">
													<span><i class="fas fa-heart"></i></span>	
												</div>
												<div class="clearfix"></div>
												<div class="card-icon2">
													<span><i class="fab fa-buffer mt-1"></i></span>
												</div>
												<div class="cart-caption text-center">
													<p><i class="fas fa-cart-arrow-down">&nbsp; Add To Cart</i></p>
												</div>
												</div>
												
												<div class="card-body text-center">
													<p class="card-text m-0">'.$data['p_title'].'</p>
													<small class="card-text">Regular Price:&nbsp;'.$data['p_price'].'&nbsp;TK</small>
													<p>'.$data['p_des'].'</p>
													<br />
													<a href="single.php?pdetails='.$data['p_id'].'" class="btn btn-primary">Details</a>
												</div>
												</div>
											</div>
										
										</div>
									</div>
								';
							}
						}else{
							echo '<h4>No data found!!</h4>';
						}
					}
				?>
			</div>
		</div>
	</section>
	<!--Navbar fuck off-->
<?php include('footer.php'); ?>