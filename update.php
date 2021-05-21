 <?php
	include('config.php');
	
	//Show Product data into form field for Edit
	if(isset($_GET['editproduct'])){
		$p_id = $_GET['editproduct'];
		
		$p_edit = "SELECT*FROM products WHERE p_id = '$p_id'";
		
		$edit_query = mysqli_query( $con, $p_edit );
		$edit = mysqli_fetch_array($edit_query);
		
		$id = $edit['p_id'];
		$title = $edit['p_title'];
		$price = $edit['p_price'];
		$des = $edit['p_des'];
		$category = $edit['p_category'];
		$productimg = $edit['p_img'];
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="update.php?editproduct=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
					<img src="img/<?php echo $productimg; ?>" alt="Product Image" width="100" height="100" />
					<input type="file" name="productnewimg" class="form-control" />
					<input type="text" name="ptitle" value="<?php echo $title; ?>" class="form-control" required/>
					<input type="number" name="price" value="<?php echo $price; ?>" class="form-control" required/>
					<select name="pcategory" class="form-control">
						<option selected disabled value="0"><?php echo $category; ?></option>
						<option value="1">ASUS</option>
						<option value="2">Dell</option>
						<option value="3">Lenevo</option>
						<option value="4">HP</option>
						<option value="5">Acer</option>
						<option value="6">VIVO</option>
						<option value="7">Intel</option>
						<option value="8">AMD</option>
					</select>
					<textarea name="pdes" class="form-control"><?php echo $des; ?></textarea>
					<button type="submit" name="pupdate" class="btn btn-md btn-outline-danger">Update</button>
				</form>
			</div>
		</div>
	</div>
	
	
	<?php
		//Update Product data
		if(isset($_POST['pupdate'])){
			$ptitle = $_POST['ptitle'];
			$price = $_POST['price'];
			$pcategory = $_POST['pcategory'];
			$pdes = $_POST['pdes'];
			
			$newimg = $_FILES['productnewimg']['name'];
			$newimg_tmp = $_FILES['productnewimg']['tmp_name'];
			move_uploaded_file($newimg_tmp, "img/$newimg");
			
			if($pcategory == 0){
				$pcategory = $category;
			}elseif($pcategory == 1){
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
			
			$update = "UPDATE products SET p_title='$ptitle', p_img='$newimg', p_price='$price', p_des='$pdes', p_category='$pcategory' WHERE p_id='$id'";
			
			$run_update = mysqli_query( $con, $update );
			
			if($run_update){
				echo '<script type="text/javascript">alert("Product Updated!!!")</script>';
				echo '<script type="text/javascript">window.open("panel.php", "_self")</script>';
			}else{
				echo '<script type="text/javascript">alert("Error!!! Please check your data")</script>';
				echo '<script type="text/javascript">window.open("update.php", "_self")</script>';
			}
		}
		
	?>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>