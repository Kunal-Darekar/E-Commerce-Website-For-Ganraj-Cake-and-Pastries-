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
    <title>Home - Ganraj Cakes & Pastries</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="website icon" type="png" href="images/web_icon.png">
    <script>

        function Timer() {
            var date = new Date();

            document.getElementById("demo").innerHTML = date.toLocaleTimeString();
            t = setTimeout(Timer, 1000);

        }

    </script>
</head>

<body onload="Timer()">
    <header>
        <div class="aa">
            <a href="index.php" style="text-decoration:none">Ganraj Cakes & Pastries</a>


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

                <!-- logged in user information -->

            </div>

        </div>
    </header>

    <!-- container -->


    <div class="container">
        <div class="container1">
            <div class="container_a">
                <h5 id="demo" class="clock">Show Time</h5>


                <h1 class="font_welcome">Welcome to <span style="color:rgb(255, 0, 162)">Ganraj Cakes & Pastries</span>
                </h1>
                <p class="prg">
                    Ganraj Cakes & Pastries is a delightful cake shop that offers an extensive selection of delicious cakes and pastries. From classic chocolate cakes to exquisite fondant creations, Ganraj Cakes & Pastries specializes in creating delectable treats for all occasions. With their skilled bakers, high-quality ingredients, and attention to detail, Ganraj Cakes & Pastries is the go-to destination for those seeking scrumptious cakes and pastries that are sure to delight taste buds and make special moments even sweeter. Whether it's a birthday, anniversary, wedding, or just a craving for something sweet, Ganraj Cakes & Pastries is the perfect place to satisfy your dessert cravings. Visit us today and indulge in a world of tempting treats!
                </p>
                <div class="explore_and_shop_button">
                    <a href="blog.php">Explore Blog</a>
                    <a href="index.php">Our Products</a>
                </div>

            </div>
            <div class="container_b">
                <img src="images/shop1.jpeg" alt="shop_image">
            </div>
        </div>

        <div class="container2">
            <div class="container2_head">
                Bring A Box Of Happiness Today
            </div>
            <div class="container2_body">
                <div class="container2_body1">
                    <img src="images/shop_online1.jpg" alt="shop online">
                    <a href="index.php">Order Online</a>
                </div>
                <div class="container2_body2">
                    <img src="images/visitourstore.jpg" alt="visit_our_store">
                    <a href="https://goo.gl/maps/3EFzhvDmnT6N3VGi6">Visit Our Store</a>

                </div>
            </div>
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