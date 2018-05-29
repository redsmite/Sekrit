<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
	<title>Company Name - Home</title>
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
							<li><a href="index.php" class="current">HOME</a></li>
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
	<!-- Showcase -->
		<div class="showcase">
			<div class="container">
				<div class="showcase-content">
					<div class="showcase-container">
						<h1>Welcome to Our Website</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos suscipit, quis vel inventore, autem possimus a! Debitis ipsa, nobis aperiam.</p><br>
						<p><a href="about.php">Read More</a></p>
					</div>
				</div>
			</div>
		</div>
	<!-- Content -->
		<div class="main-content">
			<div class="main-content-grid">
				<div class="content-body">
					<h2>Main Content</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sunt aliquam ipsum officia molestiae cum amet natus totam. At soluta, molestiae dicta! Illum dicta temporibus nobis architecto assumenda, perferendis, aperiam hic excepturi suscipit, quaerat sit enim perspiciatis amet accusamus nam, eveniet labore dignissimos! Veritatis, consequuntur, dolorem! Velit magnam laboriosam in, veritatis labore? Voluptatum cupiditate saepe excepturi fugit officia nam, ipsum doloribus officiis omnis nihil eligendi vitae sit velit assumenda quas tempore commodi nesciunt quidem eos. Architecto ad, provident quo. Obcaecati molestiae similique repellendus voluptatem necessitatibus. Exercitationem dolorum, quam recusandae repellendus iste laudantium laboriosam autem. Corporis et sequi optio veniam deleniti totam, eaque ipsum tenetur voluptatem, id vel mollitia laudantium dolores, ut saepe. Quos, quo porro eum accusamus omnis. Nam facilis corporis est reiciendis accusamus cum officia repellat perferendis adipisci consequatur, iste voluptatibus, aspernatur fugiat eum alias aut iure ducimus earum ipsum ipsa esse velit eaque delectus laboriosam. Ducimus modi eos ut reprehenderit, consequatur consequuntur iusto. Consectetur laudantium accusantium vel porro voluptates, voluptatum voluptatibus eos excepturi aperiam tempora, possimus iure quos itaque tempore culpa illo unde a libero veniam ipsa dicta in esse. Ab ad temporibus cumque rerum natus voluptatum, sunt quod eligendi quam, magnam? Sed, quo! Esse a ab accusamus!</p>
				</div>
				<div class="sidebar">
					<h3>Sidebar</h3>
					<small>Posted: mm/dd/yyyy</small>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae laboriosam itaque facere voluptate dolores recusandae eaque, vel. Doloribus earum, eos.</p>
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