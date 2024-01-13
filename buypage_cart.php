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

// while ($rows = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product's - Ganraj Cakes & Pastries</title>
    <link rel="stylesheet" href="css/buy_stylee.css">
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


        <!-- retrive -->

        <?php $user = 'root';
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

        $sql = " SELECT * FROM cart where username = '$un' ";
        $result = $mysqli->query($sql);
        $mysqli->close();
        $arr_cakeid = array();
        $arr_cakeimg = array();
        $arr_caketype = array();
        $arr_cakeprice = array();
        while ($rows = $result->fetch_assoc()) {
            array_push($arr_cakeid, $rows['id']);
            array_push($arr_cakeimg, $rows['cakeimg']);
            array_push($arr_caketype, $rows['caketype']);
            array_push($arr_cakeprice, $rows['cakeprice']);
            ?>
            <div class="container_1">
                <form method="post">
                    <div class="container_1_img">
                        <img src="<?php echo $rows['cakeimg'] ?>" alt="">
                        <input type="hidden" name="cakeimg" value="<?php echo $rows['cakeimg'] ?>">

                        <input type="hidden" value="<?php echo $rows['id'] ?>" name="cakeid">
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
                        <input type="submit" value="⛔" class="removebtn" name="remove_cart" style="min-width:1vw" ;>

                    </div>
                    <div class="container_form">

                    </div>
                </form>
            </div>
        <?php } ?>
        <!-- retrive -->

        <div class="container_2">
            <div class="topic">Bring A Box Of Happiness Today</div>

            <div id="login-form-wrap">
                <form id="login-form" method="post">
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

                    $sql = " SELECT * FROM cart where username = '$un' ";
                    $result = $mysqli->query($sql);


                    while ($rows = $result->fetch_assoc()) { ?>

                        <input type="hidden" name="cakeid" value="<?php echo $rows['id'] ?>">

                        <input type="hidden" name="cakeimg" value="<?php echo $rows['cakeimg'] ?>">


                        <input type="hidden" name="caketype" value="<?php echo $rows['caketype'] ?>">

                        <input type="hidden" name="cakeprice" value="<?php echo $rows['cakeprice'] ?>">

                    <?php } ?>
                    <?php
                    $sql1 = " SELECT * FROM users where username = '$un' ";
                    $result1 = $mysqli->query($sql1);
                    $mysqli->close();
                    while ($rows1 = $result1->fetch_assoc()) {
                        ?>
                        <p>
                            <input type="text" id="username" name="name" placeholder="NAME" required value="<?php echo $rows1['name'] ?>"><i
                                    class="validation"><span></span><span></span></i>
                            </p>
                            <p>
                                <input type="email" id="email" name="email" placeholder="EMAIL ADDRESS" required value="<?php echo $rows1['email'] ?>"><i
                                        class="validation"><span></span><span></span></i>
                                </p>
                                <p>
                                    <input type="text" id="email" name="mobilenumber" placeholder="MOBILE NUMBER" required value="<?php echo $rows1['mobilenumber'] ?>"><i
                                            class="validation"><span></span><span></span></i>
                                    </p>
                                    <p>
                                        <input type="text" id="email" name="state" placeholder="STATE" required><i
                                            class="validation"><span></span><span></span></i>
                                    </p>
                                    <p>
                                        <input type="text" id="email" name="city" placeholder="CITY" required><i
                                            class="validation"><span></span><span></span></i>
                                    </p>
                                    <p>
                                        <input type="text" id="email" name="postalzipcode" placeholder="POSTAL ZIP CODE" required><i
                                            class="validation"><span></span><span></span></i>
                                    </p>
                                    <p>
                                        <input class="placeord" type="submit" id="login" value="PLACE ORDER " name="mainbuy_cart">
                                    </p>
                    <?php } ?>
                </form>

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
<?php
$db = mysqli_connect('localhost', 'root', '', 'project');
$i = 0;
while ($i < count($arr_cakeprice)) {

    if (isset($_POST['mainbuy_cart'])) {
        $cakeid = mysqli_real_escape_string($db, $_POST['cakeid']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
        $state = mysqli_real_escape_string($db, $_POST['state']);
        $city = mysqli_real_escape_string($db, $_POST['city']);
        $postalzipcode = mysqli_real_escape_string($db, $_POST['postalzipcode']);

        $cakeimg = $arr_cakeimg[$i];
        $caketype = $arr_caketype[$i];
        $cakeprice = $arr_cakeprice[$i];


        if (count($errors) == 0) {

            $query = "INSERT INTO orders (name,email, mobilenumber,state,city,postalzipcode,cakeimg,caketype,cakeprice) 
  			  VALUES('$name', '$email','$mobilenumber','$state','$city','$postalzipcode','$cakeimg','$caketype','$cakeprice')";
            mysqli_query($db, $query);

            $query = "DELETE FROM cart WHERE id = $arr_cakeid[$i]  ";
            mysqli_query($db, $query);

        }
    }

    $i++;
}
?>