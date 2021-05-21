<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['pass'];
	$con_password=$_POST['confirm_pass'];
	if($password==$con_password){
		$sql="insert into signup(username,email,phone,password,confirm_pass) values ('$username','$email','$phone','$password','$con_password')";
	}
	$res = mysqli_query($con,$sql);
	
	if($res){
		
		echo "<script>alert 'Login Sucessful'</script>";
		
	}else{
		
		echo"<script>alert 'Login Failed'</script>";
		
	}

}
?>