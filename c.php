<?php
// initializing variables
$username = "";
$email= "";
$password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ceosite');
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT ID,Username,Email,Password FROM admin";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		$id=$row['ID'];
        $username=$row['Username'];
		$email=$row['Email'];
		$password=$row['Password'];
		}
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
?>