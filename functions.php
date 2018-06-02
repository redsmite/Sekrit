<!-- Side Menu -->
<?php

function addSidebar(){
	echo'
<div class="side-nav" id="side-menu">
	<ul>
		<li><p href="#" class="btn-close" onclick="closeSlideMenu()">&times;</p></li>
		<li><a href="profile.php"><i class="fas fa-user-alt"></i></a></li>
		<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li><a href="#"><i class="fab fa-youtube"></i></a></li>
		<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
	</ul>
</div>';
}

function addLogin(){
	echo'<div id="simpleModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span id="closeBtn">&times;</span>	
					<h5>Login Form</h5>
				</div>
				<div class="modal-body">
					<form action="loginprocess.php" method="post" id="log-form" >
						<center><label for="">Username:</label>
						<input type="text" required name="username" id="log-user" placeholder="Enter Username...">
						<br>
						<label for="">Password:</label>
						<input type="password" required name="password" id="log-pass" placeholder="Enter Password...">
						<br>
						<label for="">Remember Me?</label>
						<input type="checkbox" name="remember">
						<br>
						<input type="submit" class="modal-button" value="Login"></center>
					</form>
					<div id="process-message"></div>
					<div id="error-message"></div>	
				</div>
				<div class="modal-footer">
					<a href="register.php">Doesn\'t have an account?</a>
				</div>
			</div>
		</div>
	';
}