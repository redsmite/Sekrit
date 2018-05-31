<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/fontawesome-all.css">
	<title><span id="company"></span> - Register</title>
</head>
<body>
	<div class="main-container">
	<!-- Header -->
		<header id="main-header">
			<div class="grid-header">
				<div class="box1">
					<h1 id="header-text"><a href="index.php"><span id="first-text"></span> <span id="second-text"></span></a></h1>
				</div>
				<div class="box2">
					<nav class="main-nav">
						<ul class="header-list">
							<li><a href="index.php">HOME</a></li>
							<li><a href="about.php" class="current">ABOUT</a></li>
							<li><a href="services.php">SERVICES</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</nav>
				</div>
				<div class="box3">
					<a id="modalBtn" class="button"><i class="fas fa-sign-in-alt"></i>LOGIN</a>
				</div>
			</div>
		</header>
	<!-- Modal -->
		<div id="simpleModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span id="closeBtn">&times;</span>	
					<h5>Login Form</h5>
				</div>
				<div class="modal-body">
					<form action="functions.php" method="post">
						<center><label for="">Username:</label>
						<input type="text" required name="username" placeholder="Enter Username...">
						<br>
						<label for="">Password:</label>
						<input type="password" required name="password" placeholder="Enter Password...">
						<br>
						<label for="">Remember Me?</label>
						<input type="checkbox" name="remember">
						<br>
						<input type="submit" class="modal-button" value="Login"></center>
					</form>
				</div>
				<div class="modal-footer">
					<h5>Login Form</h5>
				</div>
			</div>
		</div>
	<!-- Sub Header -->
		<div class="subheader">
			<div class="container">
				<div class="search">
					<form action="search.php">
						<i class="fas fa-search"></i>
						<label>Search</label>
						<input type="text" id="search-text" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	<!-- Contact Form -->
		<div class="other-content">
			<h1>Register</h1>
			<div class="container">
				<div class="content-box">
					<h2><span id="highlight-text">Join</span> Us Today</h2>
					<div class="form">
						<center>	
						<form action="registerprocess.php" id="reg-form" method="post">
							<div class="grid-register">
								<div class="box-reg1">
									<div>
										<label for="">Username</label><br>
										<input type="text" required id="reg-name" placeholder="Enter Username...">
									</div>
									<div>
										<label for="">Password</label><br>
										<input type="password" required id="reg-password" placeholder="Enter Password...">
									</div>
									<div>
										<label for="">Re-type Password</label><br>
										<input type="password" required id="reg-retype" placeholder="Enter Password...">
									</div>
									<div>
										<label for="">First Name</label><br>
										<input type="text" required id="reg-first" placeholder="Enter First Name...">
									</div>
									<div>
										<label for="">Middle Name</label><br>
										<input type="text" required id="reg-middle" placeholder="Enter Middle Name...">
									</div>
									<div>
										<label for="">Last Name</label><br>
										<input type="text" required id="reg-last" placeholder="Enter Last Name...">
									</div>
								</div>
								<div class="box-reg2">
									<div>
										<label for="">Birthday</label><br>
										<input type="date" required id="reg-birthday">
									</div>
									<div>
										<label for="">Email</label><br>
										<input type="email" required id="reg-email" placeholder="Enter Email...">
									</div>
									<div>
										<label for="">Phone Number</label><br>
										<input type="number" required id="reg-phone" placeholder="Enter Phone Number...">
									</div>
									<div>
										<label for="">Address</label><br>
										<textarea id="reg-address" placeholder="Enter Address..."></textarea>
										<br><br>
										<button type="submit" name="contact-button" id="contact-button">Submit</button>
									</div>
								</div>								
							</div>	
						</form>
						</center>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->
		<footer class="main-footer">
			<div class="container">
				<p>Copyright &copy; <span id="company"></span> | 2018</p>
			</div>
		</footer>
	<!-- End of Container -->
	</div>
	<script src="js/main.js"></script>
	<script>
		// Register AJAX
		document.getElementById('reg-form').addEventListener('submit', postName);

		function postName(e){
			e.preventDefault();

			var myRequest = new XMLHttpRequest();
			var url = 'registerprocess.php';

			//form data variables
			var username = document.getElementById('reg-name').value;
			var password = document.getElementById('reg-password').value;
			var retype = document.getElementById('reg-retype').value;
			var firstname = document.getElementById('reg-first').value;
			var middlename = document.getElementById('reg-middle').value;
			var lastname = document.getElementById('reg-last').value;
			var birthday = document.getElementById('reg-birthday').value;
			var email = document.getElementById('reg-email').value;
			var phoneno = document.getElementById('reg-phone').value;
			var address = document.getElementById('reg-address').value;

			var formData = "username="+username+"&password="+password+"&retype="+retype+"&firstname="+firstname+"&middlename="+middlename+"&lastname="+lastname+"&birthday="+birthday+"&email="+email+"&phoneno="+phoneno+"&address="+address;
			
			myRequest.open('POST', url ,true);
			myRequest.setRequestHeader('Content-type','application/x-www-form-urlencoded');

			myRequest.onload = function(){
				console.log(this.responseText);
			}
			myRequest.send(formData);
		}
		
	</script>
</body>
</html>