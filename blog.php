<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Blog's - Ganraj Cakes & Pastries</title>
	<link rel="stylesheet" href="css/blog.css">
	<link rel="website icon" type="png" href="images/web_icon.png">
</head>

<body>
	<header>
		<div class="aa">
			<a href="index.php" style="text-decoration:none;color: #060443;">Ganraj Cakes & Pastries</a>
		</div>
		<div class="ab">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="about.php"> About-us</a></li>
				<li><a href="contactus.php"> Contact-us</a></li>
				<li>
					<div class="dropdown">
						<a class="dropbtn" style="color:#6965d8">👤
							<?php echo $_SESSION['username']; ?>
						</a>
						<div class="dropdown-content">
							<a href="cart_page.php"> Cart 🛒</a>
							<!-- <a href="orders_page.php"> Orders </a> -->
							<a href="index.php?logout='1'" style="color:red">Logout</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="ac">

			<div class="content">
				<!-- notification message -->
				<?php if (isset($_SESSION['success'])): ?>
					<div class="error success">
						<h3>
							<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
							?>
						</h3>
					</div>
				<?php endif ?>
			</div>

		</div>
	</header>

	<!-- container -->


	<div class="cn1">
		<h1>Blog's</h1>

		<!-- 1 -->
		<div class="cn1_1">
			<div class="cn1_1_1">

				<h2>Christmas - The Magical Time of the Year is here!</h2>
				<h5> December 25, 2022 by <a href="index.php">Ganraj Cakes & Pastris</a></h5>
			</div>
			<br>
			<img src="images/crits.jpg" alt="">
			<br><br><br>
			<p>It is time for the most magical time of the year! Christmas is the season to be with your loved ones and
				Celebrate the festive together. The anticipation of coming home to that warm smell of freshly baked,
				delicious fresh cream cake or plum cakes fills one with joy.
				It is the time to set up your Christmas tree, put up some lights, and enjoy the delicacies. </p>
		</div>

		<!-- 2 -->
		<br><br><br>

		<div class="cn1_1">
			<div class="cn1_1_1">

				<h2>Dipawali - The Festival of the year!</h2>
				<h5> Octomber 24, 2022 by <a href="index.php">Ganraj Cakes & Pastris</a></h5>
			</div>
			<br>
			<img src="images/diwali.jpg" alt="">
			<br><br><br>
			<p>Diwali which is also known as “Deepawali” is celebrated every year with great enthusiasm in India. It is
				a festival of light and prosperity, this year falls on 24th October 2022. It is a perfect occasion to
				show love and affection to your family and friends. Diwali hampers are filled with an array of
				traditional Indian sweets & snacks that are sure to delight your loved ones.</p>
		</div>


		<!-- 3 -->
		<br><br><br>

		<div class="cn1_1">
			<div class="cn1_1_1">

				<h2>Dipavali - The Festival of the year!</h2>
				<h5> December 25, 2022 by <a href="index.php">Ganraj Cakes & Pastris</a></h5>
			</div>
			<br>
			<img src="images/diwali.jpg" alt="">
			<br><br><br>
			<p>It is time for the most magical time of the year! Christmas is the season to be with your loved ones and
				Celebrate the festive together. The anticipation of coming home to that warm smell of freshly baked,
				delicious fresh cream cake or plum cakes fills one with joy.
				It is the time to set up your Christmas tree, put up some lights, and enjoy the delicacies. </p>
		</div>



		<!-- 4 -->
		<br><br><br>

		<div class="cn1_1">
			<div class="cn1_1_1">

				<h2>Dipavali - The Festival of the year!</h2>
				<h5> December 25, 2022 by <a href="index.php">Ganraj Cakes & Pastris</a></h5>
			</div>
			<br>
			<img src="images/diwali.jpg" alt="">
			<br><br><br>
			<p>It is time for the most magical time of the year! Christmas is the season to be with your loved ones and
				Celebrate the festive together. The anticipation of coming home to that warm smell of freshly baked,
				delicious fresh cream cake or plum cakes fills one with joy.
				It is the time to set up your Christmas tree, put up some lights, and enjoy the delicacies. </p>
		</div>



		<!-- 5 -->
		<br><br><br>

		<div class="cn1_1">
			<div class="cn1_1_1">

				<h2>Dipavali - The Festival of the year!</h2>
				<h5> December 25, 2022 by <a href="index.php">Ganraj Cakes & Pastris</a></h5>
			</div>
			<br>
			<img src="images/diwali.jpg" alt="">
			<br><br><br>
			<p>It is time for the most magical time of the year! Christmas is the season to be with your loved ones and
				Celebrate the festive together. The anticipation of coming home to that warm smell of freshly baked,
				delicious fresh cream cake or plum cakes fills one with joy.
				It is the time to set up your Christmas tree, put up some lights, and enjoy the delicacies. </p>
		</div>

	</div>


	<footer>
		<div class="leftftr">
			Copyright &copy; !! all rights reserved..........

		</div>
		<div class="rightftr">

			<a href="#">Facebook</a>
			<a href="#">Twitter</a>
			<a href="#">Instagram</a>
			<a href="#">Linked-in</a>
			<a href="#">Snapchat</a>


		</div>
	</footer>

</body>

</html>