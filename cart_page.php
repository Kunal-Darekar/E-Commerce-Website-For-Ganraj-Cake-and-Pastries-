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
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cart - Ganraj Cakes & Pastries</title>
    <link rel="stylesheet" href="css/cart.css">
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


    <div class="container">
        <?php
        #retrive data from database
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
        $mysqli->close();
        while ($rows = $result->fetch_assoc()) {
            ?>
            <div class="container_1">
                <form action="" method="post">
                    <div>
                        <input type="hidden" name="cakeid" value="<?php echo $rows['id'] ?>">
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
                        <input type="submit" value="Remove" class="cartbtn" name="remove_cart">
                        <input type="submit" value="Buy Now 🛒" class="buybtn" name="buynow">
                    </div>

                </form>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="subtotal">
        <form action="" method="post">

            <table>
                <caption>Subtotal</caption>
                <thead>
                    <tr>
                        <th scope="col">Sr. No</th>
                        <th scope="col">Cake Type</th>
                        <th scope="col">No of Items</th>
                        <th scope="col">Cake Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    #retrive data from database
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
                    $mysqli->close();
                    $total = 0;
                    $i = 1;
                    $sum_i = 0;
                    $cakeimg_arr = array();
                    $caketype_arr = array();
                    $cakeprice_arr = array();
                    while ($rows = $result->fetch_assoc()) {
                        $total += (int) $rows['cakeprice'];
                        $sum_i += $i;

                        ?>
                        <tr>
                            <td>
                                <?php echo $i ?>
                                <input type="hidden" name="caketype" value="<?php echo array_push($cakeimg_arr,$rows['cakeimg'])  ?>">
                            </td>
                            <td>
                                <?php echo $rows['caketype'] ?>
                                <input type="hidden" name="caketype" value="<?php echo array_push($caketype_arr,$rows['caketype'])  ?>">
                            </td>
                            <td>
                                <?php echo 1?>
                                </td>
                                <td>
                                    <?php echo $rows['cakeprice'] ?>
                                    <input type="hidden" name="caketype" value="<?php echo array_push($cakeprice_arr,$rows['cakeprice'])  ?>">
                            </td>
                        </tr>
                    <?php $i += 1; } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                           <?php 
                        //    echo $sum_i
                         ?>
                        </td>
                        <td>
                            <?php echo $total ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Remove All" class="cartbtn" name="removeallfromcart"
                                style="min-width:22vw" ;>

                        </td>
                        <td><input type="submit" value="Buy All 🛒" class="buybtn" name="buyall" style="min-width:22vw"
                                ;></td>
                    </tr>
                </tbody>
            </table>

        </form>
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

if (isset($_POST['buyall'])) {

     $cakeimg_arr;
     $caketype_arr;
     $cakeprice_arr;
    for ($i = 0; $i < sizeof($cakeimg_arr); $i++) {

        $username = $_SESSION['username'];
        if (count($errors) == 0) {


            $query = "INSERT INTO tempbuy (username, cakeimg,caketype,cakeprice) 
  			  VALUES('$username', '$cakeimg[$i]','$caketype[$i]','$cakeprice[$i]')";
            mysqli_query($db, $query);
        }
    }
}
?>