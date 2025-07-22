<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
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
	
	$sql = " SELECT * from users where username = 'kiran_mangde' ";
	$result = $mysqli->query($sql);
	$mysqli->close();?>
	<?php  endif ?>