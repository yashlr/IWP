<?php
//session_start();
// initializing variables
$name = "";
$email    = "";
$subject = "";
$message = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ceosite');
if (isset($_POST['send'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string ($db, $_POST['email']);
  $subject = mysqli_real_escape_string ($db, $_POST['subject']);
  $message = mysqli_real_escape_string ($db, $_POST['message']);
  if (count($errors) == 0) {
  	$query = "INSERT into query values ('$name','$email','$subject','$message')";
  	$results = mysqli_query($db, $query);
  	
  	  header('location: home.php');
  }
}

?>