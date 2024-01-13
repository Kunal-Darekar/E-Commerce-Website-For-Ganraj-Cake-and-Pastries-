<?php
session_start();


$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'project');


if (isset($_POST['csubmit'])) {
 
  $name = mysqli_real_escape_string($db, $_POST['cname']);
  $email = mysqli_real_escape_string($db, $_POST['cemail']);
  $msg = mysqli_real_escape_string($db, $_POST['cmsg']);



  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is req-uired"); }
  if (empty($msg)) { array_push($errors, "Message is required"); }
 
  


  if (count($errors) == 0) {
  

  	$query = "INSERT INTO messages (name, email,msg) 
  			  VALUES('$name', '$email','$msg')";
  	mysqli_query($db, $query);

    header('location: index.php');
    // echo '<script>alert("Thanks for you\'r feedback... we will contact you as soon as possible 😊")</script>';

  }
}
?>