<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign in - Ganraj Cakes & Pastries</title>
	<link rel="stylesheet" href="login.css">
	<link rel="website icon" type="png" href="images/logo.png">
	<script>
		// script
		function fun() {
			var regName = /^[a-zA-Z0-9_.]+$/;
			var username = document.getElementById('username').value;
			if (!regName.test(username)) {
				alert('username only contain letter,underscore and dot');
				document.getElementById('username').value = ""
				document.getElementById('username').focus();
				document.getElementById("head_username").innerText = "👤 username";
			}
			else {
				document.getElementById("head_username").innerText = "👤" + username;
			}
		}
	</script>
</head>

<body>
	<!-- header -->
	<header>
		<div class="aa">
			<a href="home.php" style="text-decoration:none;color: #060443;">Ganraj Cakes & Pastries</a>
		</div>
		<div class="ab">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="about.php"> About-us</a></li>
				<li><a href="contactus.php"> Contact-us</a></li>
				<li><a id="head_username">👤 username</a></li>
			</ul>
		</div>

	</header>

	<div class="container">
		<!-- main container -->
		<div class="_img">
			<!-- img field -->
		</div>

		<div class="_form">
			<div id="logo"><img src="images/logo.png">
			</div>
			<div class="brand-title" style="">Ganraj Cakes & Pastries</div>
			<div class="inputs">
				<div class="error">
					<!-- error -->
				</div>
				<form action="login.php" method="post">
					<?php include('errors.php'); ?>

					<label style="margin-top:8vh;">USERNAME</label>
					<input type="text" required name="username" id="username" style="text-transform: lowercase;"
						onchange="fun()" />

					<label>PASSWORD</label>
					<input type="password" required name="password" />

					<button type="submit" name="login_user" style="margin-top:6vh;">LOGIN</button><br>

				</form>
				<div class="end">

					Don't have an account <a href="register.php">Sign-up</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>