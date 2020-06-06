<?php
//session_start();
// initializing variables
$name = "";
$email    = "";
$mob = "";
$country = "";
$pin = 0;
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ceosite');
if (isset($_POST['registerbt'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);
  $email = mysqli_real_escape_string ($db, $_POST['email']);
  $mob = mysqli_real_escape_string ($db, $_POST['mob']);
  $country = mysqli_real_escape_string ($db, $_POST['country']);
  $pin = mysqli_real_escape_string ($db, $_POST['pin']);
  if (count($errors) == 0) {
  	$query = "INSERT into signup values ('$name','$email','$mob','$country','$pin','$password')";
  	$results = mysqli_query($db, $query);
  	
  	  header('location: weblogin.php');
  }
}

?>