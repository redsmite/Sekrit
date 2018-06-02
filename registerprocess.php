<?php
//set timezone to manila
date_default_timezone_set('Asia/Manila');

require_once'connection.php';

if(isset($_POST['username'])){
	//insert into Database
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = md5($_POST['password']);
	$retype= md5($_POST['retype']);
	$firstname= mysqli_real_escape_string($conn,$_POST['firstname']);
	$middlename= mysqli_real_escape_string($conn,$_POST['middlename']);
	$lastname= mysqli_real_escape_string($conn,$_POST['lastname']);
	$birthday= mysqli_real_escape_string($conn,$_POST['birthday']);
	$timestamp = date("Y-m-d H:i:s");
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$phoneno= mysqli_real_escape_string($conn,$_POST['phoneno']);
	$address= mysqli_real_escape_string($conn,$_POST['address']);

	if($password==$retype){
		$sql="SELECT username FROM tbluser WHERE username='$username'";
		if($res_u=mysqli_query($conn,$sql)){
			if (mysqli_num_rows($res_u) == 0) {
				$sql2="SELECT email FROM tbluser WHERE email='$email'";
				$res_e =mysqli_query($conn,$sql2);
				if(mysqli_num_rows($res_e) == 0){
					
					$sql3="INSERT INTO tbluser(username,password,firstname,middlename,lastname,birthday,datecreated,email,phoneno,address,usertypeid,access) VALUES('$username','$password','$firstname','$middlename','$lastname','$birthday','$timestamp','$email','$phoneno','$address','1','1')";

					if(mysqli_query($conn,$sql3)){
						echo 'success';
					} else {
							echo '<i class="fas fa-exclamation-triangle"></i>Sorry, we are having some problems.';
					}

				}else{
					echo '<i class="fas fa-exclamation-triangle"></i>Email is already taken';
				}
			

			}	else {
				echo '<i class="fas fa-exclamation-triangle"></i>Username is already taken';
			}

		} else {
				echo '<i class="fas fa-exclamation-triangle"></i>Sorry, we are having some problems.';
		}

	} else {
		echo'<i class="fas fa-exclamation-triangle"></i>Password doesn\'t match';
	}
}
?>