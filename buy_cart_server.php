<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'project');



//adding to tempbuy
if (isset($_POST['buynow'])) {

  $username = $_SESSION['username'];
  $cakeimg = mysqli_real_escape_string($db, $_POST['cakeimg']);
  $caketype = mysqli_real_escape_string($db, $_POST['caketype']);
  $cakeprice = mysqli_real_escape_string($db, $_POST['cakeprice']);

  if (count($errors) == 0) {


    $query = "INSERT INTO tempbuy (username, cakeimg,caketype,cakeprice) 
  			  VALUES('$username', '$cakeimg','$caketype','$cakeprice')";
    mysqli_query($db, $query);
    header("Location: buypage_buy.php");
  }
}



//adding to cart
if (isset($_POST['addtocart'])) {

  $username = $_SESSION['username'];
  $cakeimg = mysqli_real_escape_string($db, $_POST['cakeimg']);
  $caketype = mysqli_real_escape_string($db, $_POST['caketype']);
  $cakeprice = mysqli_real_escape_string($db, $_POST['cakeprice']);

  if (count($errors) == 0) {


    $query = "INSERT INTO cart (username, cakeimg,caketype,cakeprice) 
  			  VALUES('$username', '$cakeimg','$caketype','$cakeprice')";
    mysqli_query($db, $query);
    // echo '<script>alert("Product added to your Cart 🛒😊")</script>';

  }
}

//removing one from tempbuy

if (isset($_POST['remove_buy'])) {

  
 

    if (count($errors) == 0) {
      
      $cakeid = mysqli_real_escape_string($db, $_POST['cakeid']);
      
      $query = "DELETE FROM tempbuy WHERE id = $cakeid";
      mysqli_query($db, $query);   
      
    }
  }



//removing one from cart

if (isset($_POST['remove_cart'])) {

  if (count($errors) == 0) {

    $cakeid = mysqli_real_escape_string($db, $_POST['cakeid']);

    $query = "DELETE FROM cart WHERE id = $cakeid";
    mysqli_query($db, $query);
  
  }
}

//remoing all from cart
if (isset($_POST['removeallfromcart'])) {

  if (count($errors) == 0) {

    $username = $_SESSION['username'];

    $query = "DELETE FROM cart WHERE username = '$username'";
    mysqli_query($db, $query);

  }
}

#buy all from cart
if (isset($_POST['buyall'])) {

  if (count($errors) == 0) {
    header("Location: buypage_cart.php");
 

  }
}




#placing order

if (isset($_POST['mainbuy_buy'])) {

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $postalzipcode = mysqli_real_escape_string($db, $_POST['postalzipcode']);
  
  $cakeimg = mysqli_real_escape_string($db, $_POST['caketype']);
  $caketype = mysqli_real_escape_string($db, $_POST['cakeimg']);
  $cakeprice = mysqli_real_escape_string($db, $_POST['cakeprice']);
  

  if (count($errors) == 0) {


    $query = "INSERT INTO orders (name,email, mobilenumber,state,city,postalzipcode,cakeimg,caketype,cakeprice) 
  			  VALUES('$name', '$email','$mobilenumber','$state','$city','$postalzipcode','$cakeimg','$caketype','$cakeprice')";
    mysqli_query($db, $query);

    $query1 = "DELETE FROM tempbuy";
    mysqli_query($db, $query1);
    header("Location: index.php");
    exit;
  }
}
?>

