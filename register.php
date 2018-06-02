<?php
	include'functions.php';
	addSidebar();
	addLogin();
?>
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
							<li><a href="about.php">ABOUT</a></li>
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
	<!-- Sub Header -->
		<div class="subheader">
			<div class="subgrid">
				<div class="svg">
					<p class="open-slide" onclick="openSlideMenu()">
						<svg width="30" height="30">
							<path d="M0,5 30,5" stroke="#fafafa" stroke-width="5"/>
							<path d="M0,14 30,14" stroke="#fafafa" stroke-width="5"/>
							<path d="M0,23 30,23" stroke="#fafafa" stroke-width="5"/>	
						</svg>
					</p>
				</div>
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
								<div id="process-message"></div>
								<div id="error-message"></div>								
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
		modal();
		ajaxRegister();
		ajaxLogin();
	</script>
</body>
</html>