<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign up - Ganraj Cakes & Pastries</title>
	<link rel="stylesheet" href="register.css">
	<link rel="website icon" type="png" href="images/logo.png">
	<script>
		function validatemobilenumber() {
			x = document.getElementById('mobilenumber').value;
			patt = /^[7-9][0-9]{9}$/
			res = patt.test(x)
			if (res == false) {
				alert('enter valid mobile number')
				document.getElementById('mobilenumber').value = ""
				document.getElementById('mobilenumber').focus();
			}
		}
		function validatename() {
			var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
			var name = document.getElementById('name').value;
			if (!regName.test(name)) {
				alert('Please enter your full name (first & last name).');
				document.getElementById('name').value = ""
				document.getElementById('name').focus();
			}
		}
		
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
		<div class="_img">
			<!-- img field -->
		</div>
		<div class="_form">

			<div id="logo">
				<img src="images/logo.png">
			</div>
			<div class="brand-title" style="">Ganraj Cakes & Pastries</div>
			<div class="inputs">
				<div class="error">
					<!-- error -->
				</div>
				<form action="register.php" method="post">
					<?php include('errors.php'); ?>

					<label>NAME</label>
					<input type="text" required name="name" id="name" minlength="6" style="text-transform: capitalize;"
						onchange="validatename()" />


					<label>MOBILE NUMBER</label>
					<input type="text" required name="mobilenumber" id="mobilenumber" minlength="10" maxlength="10"
						onchange="validatemobilenumber()" />


					<label>EMAIL</label>
					<input type="email" required name="email" />

					<label>USERNAME</label>
					<input type="text" required name="username" style="text-transform: lowercase;" id="username"
						onchange="fun()" />

					<label>PASSWORD</label>
					<input type="password" required name="password_1" />

					<label> CONFIRM PASSWORD</label>
					<input type="password" required name="password_2" />

					<button type="submit" name="reg_user">REGISTER</button><br><br>
				</form>
				<div class="end">
					Already Registered Click here to <a href="login.php">login</a>
				</div>
			</div>
		</div>
</body>

</html>