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
    <title>Product's - Ganraj Cakes & Pastries</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="main.js"></script>
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
                <!-- <p class="logout_btn"> <a href="index.php?logout='1'">logout</a> </p> -->
            </div>

        </div>
    </header>

    <!-- container -->


    <div class="container">
        <div class="container_head">
            Delivery at your Doorstep !!!
        </div>
        <br>

        <div class="maincon">
            <h1 style="font-family:Niconne;font-size:3rem">Shop by cake</h1>
            <div class="con1">
                <div class="con1_1">
                    <br>
                    <a href="tall&fancy.php">
                        <img src="images/type1_1.jpg" alt="">
                        <br>
                        <p>TALL & <br> FANCY</p>
                    </a>
                </div>
                <div class="con1_1">
                    <br>
                    <a href="exotic.php">
                        <img src="images/type1_2.jpg" alt="">
                        <br>
                        <p>EXOTIC <br>CAKES</P>
                    </a>
                </div>
                <div class="con1_1">
                    <br>
                    <a href="premimum.php">
                        <img src="images/type1_3.jpg" alt="">
                        <br>
                        <p>PREMIMUM CAKES</p>
                    </a>

                </div>
                <div class="con1_1">
                    <br>
                    <a href="designer.php">
                        <img src="images/type1_4.jpg" alt="">
                        <br>
                        <p>DESIGNER CAKES</p>
                    </a>


                </div>

            </div>


        </div>



        <!-- 2 -->


        <div class="maincon">
            <h1 style="font-family:Niconne;font-size:3rem">Shop by 3D cake</h1>
            <div class="con1">
                <div class="con1_1">
                    <br>
                    <a href="3dcake.php">
                        <img src="images/type2_1.jpg" alt="">
                        <br>
                        <p>WEEDING <br> CAKE</p>
                    </a>
                </div>
                <div class="con1_1">
                    <br>
                    <a href="3dcake.php">
                        <img src="images/type2_2.jpg" alt="">
                        <br>
                        <p>PHOTO <br> CAKE</P>
                    </a>

                </div>
                <div class="con1_1">
                    <br>
                    <a href="3dcake.php">
                        <img src="images/type2_3.jpg" alt="">
                        <br>
                        <p>E-MOTION CAKES</p>
                    </a>

                </div>
                <div class="con1_1">
                    <br>
                    <a href="3dcake.php">
                        <img src="images/type2_4.jpg" alt="">
                        <br>
                        <p>3D <br> CAKE</P>
                    </a>


                </div>

            </div>


        </div>





        <!-- 3 -->


        <div class="maincon">
            <h1 style="font-family:Niconne;font-size:3rem">Shop by Pastries</h1>
            <div class="con1">
                <div class="con1_1">
                    <br>
                    <a href="pastries.php">
                        <img src="images/type3_1.jpg" alt="">
                        <br>
                        <p>FRESH CREAM <br>
                            PASTRIES</p>
                    </a>
                </div>
                <div class="con1_1">
                    <br>
                    <a href="pastries.php">
                        <img src="images/type3_2.jpg" alt="">
                        <br>
                        <p>CHOCKLATE <br> PASTRIES</P>
                    </a>

                </div>
                <div class="con1_1">
                    <br>
                    <a href="pastries.php">
                        <img src="images/type3_3.jpg" alt="">
                        <br>
                        <p>CUP <br>
                            PASTRIES</p>
                    </a>

                </div>
                <div class="con1_1">
                    <br>
                    <a href="pastries.php">
                        <img src="images/type3_4.jpg" alt="">
                        <br>
                        <p>SWISS MISS <br>
                            PASTRIES</p>
                    </a>


                </div>


            </div>
        </div>



        <!-- 4 -->

        <div class="maincon">
            <h1 style="font-family:Niconne;font-size:3rem">Shop by Savories</h1>
            <div class="con1">
                <div class="con1_1">
                    <br>
                    <a href="savories.php">
                        <img src="images/type4_1.jpg" alt="">
                        <br>
                        <p>BURGERS </p>
                    </a>
                </div>
                <div class="con1_1">
                    <br>
                    <a href="savories.php">
                        <img src="images/type4_2.jpg" alt="">
                        <br>
                        <p>BURGER</p>
                    </a>


                </div>
                <div class="con1_1">
                    <br>
                    <a href="savories.php">
                        <img src="images/type4_3.jpg" alt="">
                        <br>
                        <p>ROLLS</p>
                    </a>

                </div>
                <div class="con1_1">
                    <br>
                    <a href="savories.php">
                        <img src="images/type5_4.jpg" alt="">
                        <br>
                        <p>PATTIES & PUFFS </p>
                    </a>


                </div>

            </div>


        </div>








    </div>
    </div>



</body>

</html>