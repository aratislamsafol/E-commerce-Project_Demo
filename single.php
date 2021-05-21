<?php 
	include('header.php');
	
	if(isset($_POST['addproduct'])){
		$code = $_POST['code'];
		
		$from_sqli = "SELECT*FROM products WHERE p_id='$code'";
		$sqli_query = mysqli_query( $con, $from_sqli );
		
		$get_data = mysqli_fetch_assoc($sqli_query);
		$pd_title = $get_data['p_title'];
		$pd_price = $get_data['p_price'];
		$pd_img = $get_data['p_img'];
		$pd_id = $get_data['p_id'];
		
		$cartArray = array(
			$code=>array(
				'name'=>$pd_title,
				'code'=>$pd_id,
				'price'=>$pd_price,
				'quantity'=>1,
				'image'=>$pd_img
			)
		);
		
		if(empty($_SESSION['shopping_cart'])){
			$_SESSION['shopping_cart'] = $cartArray;
			echo '<script type="text/javascript">alert("Product Added to cart")</script>';
			header("Location: single.php?pdetails=$pd_id");
		}else{
			$array_keys = array_keys($_SESSION['shopping_cart']);
			if(in_array($code, $array_keys)){
				echo '<script type="text/javascript">alert("Product is already added to your cart!")</script>';
				header("Location: single.php?pdetails=$pd_id");
			}else{
				$_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'], $cartArray);
				echo '<script type="text/javascript">alert("Product is added to your cart!")</script>';
			}
		}
	}

	//Show Product data in single page
	if(isset($_GET['pdetails'])){
		$p_id = $_GET['pdetails'];
		
		$p_select = "SELECT*FROM products WHERE p_id = '$p_id'";
		
		$p_query = mysqli_query( $con, $p_select );
		$show = mysqli_fetch_array($p_query);
		
		$title = $show['p_title'];
		$price = $show['p_price'];
		$des = $show['p_des'];
		$productimg = $show['p_img'];
		$productid = $show['p_id'];
	}
	
?>
	<section class="top-bar bg-dark p-1 text-white">
		<div class="container">
			<div class="row">
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
				<?php
					if(!empty($_SESSION['shopping_cart'])){
						$cart_count = count(array_keys($_SESSION['shopping_cart']));
						echo '<a href="checkout.php"><i class="fas fa-shopping-cart"></i><span>'.$cart_count.'</span></a>';
					}
				?>
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
			<!--Navbar fuck off-->
			<section class="our-pc-product">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
							<div class="our-pc-product-item">
								<div class="item d-flex flex-row bd-highlight mb-2">
									<div class="image p-5 bg-dark">
										<figure>
										<img class="card-img-top" src="img/<?php echo $productimg; ?>" class="latest-product-image" alt="Card image cap"/>
										</figure>
										<div class="clearfix"></div>
									</div>
									<div class="body text-center p-3">
									<h1><?php echo $title; ?></h1>
									<h5>Price:&nbsp;<?php echo $price; ?>&nbsp;TK</h5>
									<p class="card-text"><?php echo $des; ?></p>
									<br />
									<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
										<input type="hidden" name="code" value="<?php echo $productid; ?>" />
										<button type="submit" name="addproduct" class="btn btn-outline-primary btn-md"><i class="fas fa-cart-arrow-down">&nbsp; Add To Cart</i></button>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Fuck off Our product Baby-->

	<section class="footer-widget bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-4 col-md-4 col-xl-4 col-lg-4">
					<div class="main-branch text-muted p-5">
						<h6>IDB Bhaban</h6>
						<small>247 & 248, BCS Computer City</small>
						<br>
						<small>IDB Bhaban (2nd Floor)</small>
						<br>
						<small>Agargaon, Dhaka-1207, Bangladesh</small>
						<br>
						<small>Technical Support: 01969545000</small>
						<br>
						<small>Warranty Support: 01969545000</small>
						<br>
						<small><i class="fas fa-envelope-open-text">&nbsp;&nbsp;aratislamsafol@gmail.com</i></small>
						<br>
						<small><i class="fas fa-phone-alt">&nbsp;&nbsp;0196954500,01762644306,01533008620</i></small>
					</div>
				</div>
				<div class="col-12 col-sm-4 col-md-4 col-xl-4 col-lg-4">
						<div class="Corporate Office text-muted p-5">
						<h6>Corporate Office</h6>
						<small>247 & 248, BCS Computer City</small>
						<br>
						<small>IDB Bhaban (2nd Floor)</small>
						<br>
						<small>Agargaon, Dhaka-1207, Bangladesh</small>
						<br>
						<small>Technical Support: 01969545000</small>
						<br>
						<small>Warranty Support: 01969545000</small>
						<br>
						<small><i class="fas fa-envelope-open-text">&nbsp;&nbsp;aratislamsafol@gmail.com</i></small>
						<br>
						<small><i class="fas fa-phone-alt">&nbsp;&nbsp;0196954500,01762644306,01533008620</i></small>
					</div>
				
				</div>
				<div class="col-12 col-sm-3 col-md-4 col-xl-4 col-lg-4">
						<div class="Multiplan Branch text-muted p-5">
						<h6>Multiplan Branch</h6>
						<small>247 & 248, BCS Computer City</small>
						<br>
						<small>IDB Bhaban (2nd Floor)</small>
						<br>
						<small>Agargaon, Dhaka-1207, Bangladesh</small>
						<br>
						<small>Technical Support: 01969545000</small>
						<br>
						<small>Warranty Support: 01969545000</small>
						<br>
						<small><i class="fas fa-envelope-open-text">&nbsp;&nbsp;aratislamsafol@gmail.com</i></small>
						<br>
						<small><i class="fas fa-phone-alt">&nbsp;&nbsp;0196954500,01762644306,01533008620</i></small>
					</div>
				</div>
	
			</div>
		</div>
	</section>
	<div class="clearfix border">
		
	</div>
	<!--Complete footer widget section part-->
	<section class="footer text-muted p-2 bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-6 col-xl-6 col-lg-6">
					<p>Copyright © 2020 Kamrul islam . All Rights Reserved.</p>
				</div>
				<div class="col-12 col-sm-3 col-md-3 col-xl-3 col-lg-3">
					<div class="footer-icon d-flex">
						<small><a href=""><i class="fab fa-facebook-square"></i></a></small>
						<small><a href=""><i class="fab fa-twitter-square"></i></a></small>
						<small><a href=""><i class="fab fa-google-plus-square"></i></a></small>
						<small><a href=""><i class="fab fa-linkedin"></i></a></small>
					</div>
					
				</div>
				<div class="col-12 col-sm-3 col-md-3 col-xl-3 col-lg-3">
					<div class="footer-icon d-flex">
						<small><a href=""><i class="fas fa-id-card"></i></a></small>
						<small><a href=""><i class="fas fa-user"></i></a></small>
						<small><a href=""><i class="fas fa-money-check-alt"></i></a></small>
					</div>	
				</div>
			</div>
		</div>
	</section>
<?php include('footer.php'); ?>