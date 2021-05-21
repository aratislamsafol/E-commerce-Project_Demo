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
	}else{
		$array_keys = array_keys($_SESSION['shopping_cart']);
		if(in_array($code, $array_keys)){
			echo '<script type="text/javascript">alert("Product is already added to your cart!")</script>';
		}else{
			$_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'], $cartArray);
			echo '<script type="text/javascript">alert("Product is added to your cart!")</script>';
		}
	}
}
?>
	<section class="top-bar bg-dark p-1 text-white">
		<div class="container">
			<div class="row">
				<!--.col-12.col-sm-6.col-md-6.col-lg-6.col-xl-6-->
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<span><h5><i class="fas fa-phone-alt rounded-circle bg-danger p-2"></i>&nbsp; &nbsp;0145555555 >> 0175855555</h5></span>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
					<h5 class="float-right text-muted p-1"><a href="login.php">Login</a> or <a href="reg.php">Register</a></h5>
				</div>
			</div>
		</div>
	</section><!--fuck off top_bar-->
	<!--top-navbar start bro-->
	<section class="top-navabar p-2">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
					<h4><a href="index.php">Binary Solution</a></h4>
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
					<ul class="navbar-nav mr-auto">
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
	<section class="slider-area p-3">
	<div class="container">
		<div class="row">
		<div class="col-12 col-md-9 col-sm-9 col-lg-9 col-xl-9">
			<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
			
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				
			</ol>
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/best-gaming-pc-2020.jpg" class="d-block w-100" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				
				<div class="carousel-item">
					<img src="img/Linux_Mint_19__Tara__(Cinnamon).png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				
				<div class="carousel-item">
					<img src="img/03GaWBJDU6tulmVetkPtzNp-49.fit_scale.size_1050x591.v1569486245.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/dims.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>Third slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				
			</div>
		</div>
		  
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
		  
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
		</div>
		<!--fuck off slider left-->
		<!--start slider right-->
		<div class="col-12 col-md-3 col-sm-3 col-lg-3 col-xl-3">
			<div class="owl-carousel owl-specialish bg-light p-4">
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
					<img class="card-img-top" src="img/6t8Zh249QiFmVnkQdCCtHK.jpg" alt="Card image cap">
				</figure>
				 
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
				<img class="card-img-top" src="img/U5Fdom8yDwVcEivFjiqajF-1200-80.jpg" alt="Card image cap">
				</figure>
				 
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
				 <img class="card-img-top" src="img/pexels-photo-1714208.jpeg" alt="Card image cap">
				 </figure>
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
				 <img class="card-img-top" src="img/GeIL-SUPER-LUCE-RGB-SYNC-AMD-Edition-RAM-Newegg-10.jpg" alt="Card image cap">
				 </figure>
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
					<img class="card-img-top" src="img/19-113-569-V10.jpg" class="latest-product-image" alt="Card image cap"/>
				</figure>
				 
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>    
       </div>
		</div>
	</div>
	</div>  
	</section>
	<!--slider fuck off-->
	<section class="Latest-product">
		<h3 class="p-1 ml-4">Latest Product</h3>
		<div class="owl-carousel owl-theme bg-light p-4">
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
					<img class="card-img-top" src="img/6t8Zh249QiFmVnkQdCCtHK.jpg" alt="Card image cap">
				</figure>
				 
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
				<img class="card-img-top" src="img/U5Fdom8yDwVcEivFjiqajF-1200-80.jpg" alt="Card image cap">
				</figure>
				 
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
				 <img class="card-img-top" src="img/pexels-photo-1714208.jpeg" alt="Card image cap">
				 </figure>
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
				 <img class="card-img-top" src="img/GeIL-SUPER-LUCE-RGB-SYNC-AMD-Edition-RAM-Newegg-10.jpg" alt="Card image cap">
				 </figure>
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<figure>
					<img class="card-img-top" src="img/19-113-569-V10.jpg" class="latest-product-image" alt="Card image cap"/>
				</figure>
				 
					<div class="card-body text-center">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
            </div>    
       </div>
	</section>
	<!--Fuck off latest product-->

	<section class="intel-catagory p-4">
		<h3>Intel Catagory</h3>
		<div class="owl-carousel owl-theme">
		
		<?php
			$show = "SELECT*FROM products";
			$result = mysqli_query( $con, $show );
			if(mysqli_num_rows($result) > 0){
				while($product = mysqli_fetch_assoc($result)){
					
					echo '<div class="item">
						<div class="card" style="width: 20rem;">
							<div class="card-img">

								<figure>
									<img class="card-img-top" src="img/'.$product['p_img'].'" class="latest-product-image" alt="Card image cap"/>
								</figure>

								<div class="card-icon1">
									<span><i class="fas fa-heart"></i></span>
								</div>

								<div class="clearfix"></div>

								<div class="card-icon2">
									<span><i class="fab fa-buffer mt-1"></i></span>
								</div>
								<form action="'.$_SERVER['PHP_SELF'].'" method="POST">
									<input type="hidden" name="code" value="'.$product['p_id'].'" />
									<button type="submit" name="addproduct" class="cart-caption text-center"><i class="fas fa-cart-arrow-down">&nbsp; Add To Cart</i></button>
								</form>

							</div>
							
							<div class="card-body text-center">
								<h5 class="card-title">'.$product['p_title'].'<br/><small>Price: '.$product['p_price'].' TK</small></h5>
								<p class="card-text">'.$product['p_des'].'</p>
								<a href="single.php?pdetails='.$product['p_id'].'" class="btn btn-primary">Details</a>
							</div>

						</div>
					</div>
					';
				}
			}else{
				echo '
					<div class="item">
						<div class="card" style="width: 20rem;">
							<div class="card-img">

								<figure>
									<img class="card-img-top" src="http://www.binarylogic.com.bd/wp-content/uploads/2020/06/Avengers_Tristan_Eaton_i7_Left_Top_Down_GRAD_BKG-300x300.jpg" class="latest-product-image" alt="Card image cap"/>
								</figure>

								<div class="card-icon1">
									<span><i class="fas fa-heart"></i></span>
								</div>

								<div class="clearfix"></div>

								<div class="card-icon2">
									<span><i class="fab fa-buffer mt-1"></i></span>
								</div>
									
								<a href="#0" class="cd-add-to-cart js-cd-add-to-cart cart-caption text-center" data-price="25.99"><i class="fas fa-cart-arrow-down">&nbsp; Add To Cart</i></a>

							</div>
							
							<div class="card-body text-center">
								<h5 class="card-title">Core i7</h5>
								<p class="card-text">Intel® Core™ i7-1185G7 Processor (12M Cache, up to 4.80 GHz)</p>
								<a href="#" class="btn btn-primary">Details</a>
							</div>

						</div>
					</div>
				';
			}
		?>
		</div>		
	</section>
	<!--Fuck off Intel Catagory-->
	<section class="leadtek-catagory p-4">
		<h3>leadtek Catagory</h3>
		<div class="owl-carousel owl-theme">
				<div class="item">
				<div class="card" style="width: 20rem;">
				<div class="card-img">
					<figure>
						<img class="card-img-top" src="https://www.leadtek.com/p_images/zoom/20830_1Z.jpg" class="latest-product-image" alt="Card image cap"/>
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
					<h5 class="card-title">RTX6000<h5>
					<p class="card-text">
					Leadtek Nvidia Quadro RTX6000 Graphics Card</p>
					<a href="#" class="btn btn-primary">call now</a>
				</div>
				</div>
            </div> 
			<div class="item">
				<div class="card" style="width: 20rem;">
				<div class="card-img">
					<figure>
					<img class="card-img-top" src="https://www.servethehome.com/wp-content/uploads/2020/06/NVIDIA-Quadro-RTX-8000-NVLINK.jpg" class="latest-product-image" alt="Card image cap"/>
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
					<h5 class="card-title">RTX8000</h5>
					<p class="card-text">
					Leadtek Nvidia Quadro RTX8000 Graphics Card</p>
					<a href="#" class="btn btn-primary">call now</a>
				</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 20rem;">
				<div class="card-img">
					<figure>
					<img class="card-img-top" src="https://www.scorptec.com.au/images/products/35/548/75286/169505_large.jpg" class="latest-product-image" alt="Card image cap"/>
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
					<h5 class="card-title">P620</h5>
					<p class="card-text">
					Leadtek Nvidia Quadro P620 Graphics Card</p>
					<a href="#" class="btn btn-primary">call now</a>
				</div>
				</div>
            </div>			
			</div>		
	</section>
	<!--Fuck off leadtek Catagory-->
	<section class="product-banner p-3">
		<div class="row">
			<div class="col-12 col-sm-12 col-xl-12 col-lg-12 col-md-12">
				<img src="img/b.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</section>
	<!--Fuck off Product Banner-->
	<section id="others-product p-4">
		<div class="container">
		<div class="other-products-catagory">
			<ul class="d-flex">
				<li class="p-2"><a href="" class="active"><h5>Barcode Printer</h5></a></li>
				<li class="p-2"><a href=""><h5>Barcode Scanner</h5></a></li>
				<li class="p-2"><a href=""><h5>Cash Drawer</h5></a></li>
				<li class="p-2"><a href=""><h5>Money Counter</h5></a></li>
				<li class="p-2"><a href=""><h5>Thermal Printer</h5></a></li>
			</ul>
		</div>
			<div class="owl-carousel">
				<div class="item">
				<div class="card" style="width: 17rem;">
				<div class="card-img">
					<figure>
					<img class="card-img-top" src="https://cdn.vox-cdn.com/thumbor/2pShHY-5evBJd_0nEvqWX0PNzWU=/0x0:1800x1039/1200x0/filters:focal(0x0:1800x1039):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/20026450/Epson_Expression_Premium_ET7750_EcoTank.jpg" class="latest-product-image" alt="Card image cap"/>
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
					
					<p class="card-text">Honeywell PC42t Barcode Label Printer</p>
					<small class="card-text">Regular price: $300 </small>
					<br />
					<a href="#" class="btn btn-primary">Details</a>
				</div>
				</div>
            </div> 
			<div class="item">
				<div class="card" style="width: 17rem;">
				<div class="card-img">
					<figure>
					<img class="card-img-top" src="https://www.bdstall.com/asset/product-image/giant_78808.jpg" class="latest-product-image" alt="Card image cap"/>
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
					
					<p class="card-text">Rongta RP80VI Thermal Label Barcode Printer content.</p>
					<small class="card-text">Regular price :$100</small>
					<br />
					<a href="#" class="btn btn-primary">Details</a>
					
				</div>
				</div>
            </div> 
			<div class="item">
				<div class="card" style="width: 17rem;">
				<div class="card-img">
					<figure>
					<img class="card-img-top" src="img/advantage-bl-stainless_800_600.png" class="latest-product-image" alt="Card image cap"/>
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
					<p class="card-text">Rongta RP80VI Thermal Label Barcode Printer</p>
					<small class="card-text">Regular Price :$150</small>
					<br />
					<a href="#" class="btn btn-primary">Details</a>
				</div>
				</div>
            </div>
			<div class="item">
				<div class="card" style="width: 17rem;">
				<div class="card-img">
					<figure>
					<img class="card-img-top" src="https://s3-ap-southeast-1.amazonaws.com/priyoshop/content/Images/thumbs/0185076_zkteco-zkp5801-58mm-thermal-printer.jpeg" class="latest-product-image" alt="Card image cap"/>
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
					<p class="card-text">Zebra GT800 Barcode Label Printer With Lan</p>
					<small class="card-text">Regular Price :$200</small>
					<br />
					<a href="#" class="btn btn-primary">Details</a>
				</div>
				</div>
            </div>
			
			</div>
		</div>	
	</section>
	<!--Fuck off Others Catagory-->
	<!--Parallex Scrolling Man-->
	<section class="parallax p-5">
		<div class="first-wrap">
		  <div class="first-div">
			<div class="first-inner-div">   
			</div>
		  </div>
		</div>
	</section>
	<!--Fuck You Parallex-->
	<section class="hot-product p-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<div class="card p-2 shadow-lg">
					<div class="hot-product-image">
						<a href=""><img src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/graphic-cards/20-series/geforce-rtx-super-series-og-1200x630.jpg" alt="" class="p-2 ml-3" /></a>
						
					</div>
				</div>
					
				</div>
				<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
				<div class="card p-2 shadow-lg">
					<div class="hot-product-image2">
						<a href=""><img src="https://static.bhphoto.com/images/images2500x2500/1565105027_1496118.jpg" alt="" /></a>
					</div>
					</div>
				</div>
				<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
				<div class="card p-2 shadow-lg">
					<div class="hot-product-image3">
						<img src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6384/6384932_sd.jpg" alt="" />
					</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
				<div class="card p-2 shadow-lg">
					<div class="hot-product-image3">
						<img src="img/apacer-pendrive-500x500.jpg" alt="" />
					</div>
				</div>
				</div>
				<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
				<div class="card p-2 shadow-lg">
					<div class="hot-product-image2">
						<a href=""><img src="https://helpdeskgeek.com/wp-content/pictures/2019/08/ram-speeds-overview.jpg.optimal.jpg" alt="" /></a>
					</div>
					</div>
				</div>
				<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
				<div class="card p-2 shadow-lg">
					<div class="hot-product-image">
						<a href=""><img src="img/router.jpg" alt="" class="p-2 ml-3" /></a>
						
					</div>
				</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--Fuck off hot product-->
	<section class="provided-company p-3 shadow-lg">
		<div class="owl-carousel owl-theme">
    <div class="item provided-company-image ml-2"><img src="https://cdn.vox-cdn.com/thumbor/TWIO8YRwtsOxL8kWlhGb6buEnpE=/0x0:1280x720/1200x0/filters:focal(0x0:1280x720):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/21847394/Intel_Logo_history.jpg" alt="" /></div>
    <div class="item provided-company-image ml-2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS4Be-AAuxBoMYawZkJ0fwpXU_z54h3CKNtjQ&usqp=CAU" alt="" /></div>
    <div class="item provided-company-image ml-2"><img src="img/84-842318_corsair-product-list-corsair-logo.png" alt="" /></div>
    <div class="item provided-company-image ml-2"><img src="https://1.bp.blogspot.com/-iGOkDDmq6jw/T-S4lG2eyTI/AAAAAAAAAAk/GFl1LC1mDgk/s1600/POWER.png" alt="" /></div>
	</div>
	</section>
	<!--Fuck off Provided Company-->
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