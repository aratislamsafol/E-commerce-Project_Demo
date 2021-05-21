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
	<!--Navbar fuck off-->
	<hr />
	<?php
		if(isset($_POST['action']) && $_POST['action'] == 'remove'){
			if(!empty($_SESSION['shopping_cart'])){
				foreach($_SESSION['shopping_cart'] as $key => $value){
					if($_POST['code'] == $key){
						unset($_SESSION['shopping_cart'][$key]);
						echo '<script type="text/javascript">alert("Product is removed from your cart!")</script>';
					}
					
					if(empty($_SESSION['shopping_cart'])){
						unset($_SESSION['shopping_cart']);
					}		
				}
			}
		}
		
		if(isset($_POST['action']) && $_POST['action'] == 'change'){
			foreach($_SESSION['shopping_cart'] as &$value){
				if($value['code'] === $_POST['code']){
					$value['quantity'] = $_POST['quantity'];
					break; // Stop the loop after we've found the product
				}
			}
		}
	?>

<section class="cart-page">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-12">
				<?php
					if(isset($_SESSION['shopping_cart'])){
						$total_price = 0;
				?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Image</th>
								<th>Title</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($_SESSION['shopping_cart'] as $product){ ?>
							
								<tr>
									<td><img src="img/<?php echo $product['image']; ?>" width="50" height="40" /></td>
									<td><?php echo $product['name']; ?><br /><br />
										<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
											<input type="hidden" name="code" value="<?php echo $product['code']; ?>" />
											<input type="hidden" name="action" value="remove" />
											<button type="submit" class="btn btn-outline-danger btn-sm">Remove Item</button>
										</form>
									</td>
									<td>
										<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
											<input type="hidden" name="code" value="<?php echo $product['code']; ?>" />
											<input type="hidden" name="action" value="change" />
											
											<select name="quantity" class="form-control" onChange="this.form.submit()">
												<option <?php if($product['quantity']==1) echo 'selected';?> value="1">1</option>
												<option <?php if($product['quantity']==2) echo 'selected';?> value="2">2</option>
												<option <?php if($product['quantity']==3) echo 'selected';?> value="3">3</option>
												<option <?php if($product['quantity']==4) echo 'selected';?> value="4">4</option>
												<option <?php if($product['quantity']==5) echo 'selected';?> value="5">5</option>
											</select>
										</form>
									</td>
									<td><?php echo $product['price'].' TK'; ?></td>
									<td><?php echo $product['price']*$product['quantity'].' TK'; ?></td>
								</tr>
								<?php	$total_price += ($product['price']*$product['quantity']); ?>
								
							<?php } ?>
							
							<tr>
								<td colspan="5" align="right"><strong>Total: <?php echo $total_price.' TK'; ?></strong></td>
							</tr>
							<tr>
								<td colspan="5" align="right"><a href="" class="btn btn-outline-success btn-md">Place Order</a></td>
							</tr>
						</tbody>
					</table>
					
				<?php 
					}else{
						echo "<h3>Your cart is empty!</h3>";
					}
				?>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>