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
		$sql="INSERT INTO tbluser(username,password,firstname,middlename,lastname,birthday,datecreated,email,phoneno,address) VALUES('$username','$password','$firstname','$middlename','$lastname','$birthday','$timestamp','$email','$phoneno','$address')";

		if(mysqli_query($conn,$sql)){
			echo ' User added...';
		} else {
				echo 'Error: '+mysqli_error($conn);
		}
	}
}
?>