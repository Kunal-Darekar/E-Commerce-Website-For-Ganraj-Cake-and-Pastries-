<?php
include('msgserver.php');

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
	<title>Contact us - Ganraj Cakes & Pastries</title>
	<!-- <link rel="stylesheet" href="cont.css"> -->
	<link rel="stylesheet" href="contactus.css">
	<link rel="website icon" type="png" href="images/web_icon.png">
	<script>

      	function fun1() {
			document.getElementById("dimg").src = "images/img3.jpg"
			document.getElementById("dname").innerText = "Mr.Kunal Darekar"
			document.getElementById("dno").innerText = "9423845339"
			document.getElementById("demail").innerText = "kunaldarekar99@gmail.com"
			document.getElementById("daddr").innerText = "Ch. Sambhajinagar (431103), Maharashtra"
		}

		function fun2() {
			document.getElementById("dimg").src = "images/img1.jpg"
			document.getElementById("dname").innerText = "Mr.Kiran Mangde"
			document.getElementById("dno").innerText = "7820807874"
			document.getElementById("demail").innerText = "mangdekiran@gmail.com"
			document.getElementById("daddr").innerText = "Jalna (431203), Maharashtra"
		}
		function fun3() {
			document.getElementById("dimg").src = "images/img2.jpg"
			document.getElementById("dname").innerText = "Mr.Arjun Wandhekar"
			document.getElementById("dno").innerText = "9322139616"
			document.getElementById("demail").innerText = "wandhekararjun22@gmail.com"
			document.getElementById("daddr").innerText = "Parbhani (431401), Maharashtra"
		}
		

	</script>

</head>

<body onload="fun()">
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
							<?php echo $_SESSION['username'];
							$un = $_SESSION['username']; ?>
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
		<img src="images/img3.jpg" alt="image" id="dimg">
		<h6>Developed & Designed By</h6>
		<h2 id="dname">Mr.Kunal Darekar</h2>
		<h3 id="dno">9423845339</h3>
		<h3 id="demail">kunaldarekar99@gmail.com</h3>
		<h4 id="daddr" style="color:blueviolet;">Ch. Sambhajinagar (431103), Maharashtra</h6><br>
			<Button class="btn_d" id="b1" onclick="fun1()" autofocus></Button>
			<Button class="btn_d" id="b2" onclick="fun2()"></Button>
			<Button class="btn_d" id="b3" onclick="fun3()"></Button>

	</div>
	<div class="container">
		<!-- main container -->
		<div class="_img">
			<!-- img field -->
		</div>

		<div class="_form">
			<div class="brand-title">SEND US A MESSAGE</div>
			<form method="post" action="contactus.php">
				<?php include('errors.php'); ?>
				<?php
				$user = 'root';
				$password = '';
				$database = 'project';


				$servername = 'localhost:3306';
				$mysqli = new mysqli(
					$servername,
					$user,
					$password,
					$database
				);

				if ($mysqli->connect_error) {
					die('Connect Error (' .
						$mysqli->connect_errno . ') ' .
						$mysqli->connect_error);
				}

				$sql = " SELECT * FROM user where username = '$un' ";
				$result = $mysqli->query($sql);
				$mysqli->close();
				while ($rows = $result->fetch_assoc()) {
					?>

					<label >ENTER YOUR NAME</label>
					<input type="text" name="cname" required class="inpt" id="na"
						value="<?php echo $rows['name'] ?>">

					<label>ENTER YOUR MOBILE NO</label>
					<input type="text" name="cemail" required class="inpt" id="mo" value=<?php echo $rows['mobilenumber']; ?>>

					<label>ENTER YOUR EMAIL</label>
					<input type="text" name="cemail" required class="inpt" id="em" value=<?php echo $rows['email']; ?>>

					<label>ENTER YOUR MESSAGE</label>
					<textarea required name="cmsg" id="" cols="50" ></textarea>

					
					<?php } ?>
					<input type="submit" value="Send Message" name="csubmit" class="btn" onclick="funforfun()">
			</form>
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

	<script>
		function funforfun(){
			alert("Thanks for you\'r feedback... we will contact you as soon as possible 😊")
		}
	</script>
</body>

</html>