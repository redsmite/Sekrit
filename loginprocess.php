<?php
require_once'connection.php';

if(isset($_POST['username'])){
	//insert into Database
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = md5($_POST['password']);

	$sql = "SELECT username,password FROM tbluser WHERE username='$username' and password='$password'";

		if($result=mysqli_query($conn,$sql)){
		
			if (mysqli_num_rows($result) != 0) {
				echo 'success';
			}else{
				echo '<i class="fas fa-exclamation-triangle"></i>Invalid username or password.';
			}
		}
}





