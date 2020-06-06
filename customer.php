<?php
//session_start();
// initializing variables
$name = "";
$status    = "yes";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ceosite');
if (isset($_POST['pay'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  //$status = mysqli_real_escape_string($db, $_POST['pass']);
  if (count($errors) == 0) {
  	$query = "INSERT into customer values ('$name','$status')";
  	$results = mysqli_query($db, $query);
  	
  	  header('location: weblogin.php');
  }
}

?>