<?php
include('buy_cart_server.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

#data retrive
$user = 'root';
$password = '';
$database = 'cakes';


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

$sql = " SELECT * FROM `chocolate`  "; #line to be change
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product's - Ganraj Cakes & Pastries</title>
    <link rel="stylesheet" href="css/cakepage_stylee.css">
</head>

<body>
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
                <li><a href="cart_page.php"> Cart</a></li>
                <!-- <li><a href="orders_page.php"> Orders</a></li> -->
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
                <?php if (isset($_SESSION['username'])): ?>
                    <h5>Welcome</h5>
                    <h6>
                        <?php echo $_SESSION['username'];
                        $un = $_SESSION['username']; ?>
                    </h6>
                    <p class="logout_btn"> <a href="index.php?logout='1'">logout</a> </p>
                <?php endif ?>
            </div>

        </div>
    </header>

    <!-- container -->


    <div class="container">
        <?php
        #retrive data from database
        while ($rows = $result->fetch_assoc()) {

            ?>
            <div class="container_1">
                <form method="post">
                    <div>
                        <img src="<?php echo $rows['cakeimg'] ?>" alt="">
                        <input type="hidden" name="cakeimg" value="<?php echo $rows['cakeimg'] ?>">
                    </div>
                    <div class="container_1_head">
                        <label>
                            <?php echo $rows['caketype'] ?>
                        </label>
                        <input type="hidden" name="caketype" value="<?php echo $rows['caketype'] ?>">
                    </div>
                    <div class="container_1_price">
                        <label>
                            <?php echo '₹', $rows['cakeprice'] ?>
                        </label>
                        <input type="hidden" name="cakeprice" value="<?php echo $rows['cakeprice'] ?>">
                    </div>
                    <div class="container_1_btn">
                        <input type="submit" value="Buy Now 🛒" class="buybtn" name="buynow">
                        <input type="submit" value="Add to Cart" class="cartbtn" name="addtocart" onclick="fun()">
                    </div>

                </form>
            </div>
            <?php
        }
        ?>
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
        function fun(){
            alert("Product added to your Cart 🛒😊");
        }
    </script>
</body>

</html>