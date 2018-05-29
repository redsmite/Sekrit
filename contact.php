<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/fontawesome-all.css">
	<title>Company Name - Contact</title>
</head>
<body>
	<div class="main-container">
	<!-- Header -->
		<header id="main-header">
			<div class="grid-header">
				<div class="box1">
					<h1 id="header-text"><a href="index.php"><span id="first-text">IT</span> <span id="second-text">Works</span></a></h1>
				</div>
				<div class="box2">
					<nav class="main-nav">
						<ul class="header-list">
							<li><a href="index.php">HOME</a></li>
							<li><a href="about.php">ABOUT</a></li>
							<li><a href="services.php">SERVICES</a></li>
							<li><a href="contact.php" class="current">CONTACT</a></li>
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
					<form action="#" method="post">
						<center><label for="">Username:</label>
						<input type="text" name="username" placeholder="Enter Username...">
						<br>
						<label for="">Password:</label>
						<input type="password" name="password" placeholder="Enter Password...">
						<br>
						<input type="submit" class="modal-button" value="Login"></center>
					</form>
				</div>
				<div class="modal-footer">
					<a href="register.php">Doesn't have an account?</a>
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
			<h1>Contact Us</h1>
			<div class="container">
				<div class="content-box">
					<h2><span id="highlight-text">Get</span> in Touch</h2>
					<div class="form">
						<center>
							<form action="#" method="post">
								<p>Please use this form to contact us</p>
								<div>
									<label for="name">Name</label><br>
									<input type="text" name="contact-name">
								</div>
								<div>
									<label for="email">Email</label><br>
									<input type="email" name="contact-email">
								</div>
								<div>
									<label for="message">Message</label><br>
									<textarea name="message" name="contact-message"></textarea>
								</div>
								<button type="submit" name="contact-button">Submit</button>
							</form>
						</center>	
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->
		<footer class="main-footer">
			<div class="container">
				<p>Copyright &copy; <span id="company">IT Works</span> | 2018</p>
			</div>
		</footer>
	<!-- End of Container -->
	</div>
	<script src="js/main.js"></script>
</body>
</html>