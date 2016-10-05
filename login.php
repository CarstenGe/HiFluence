<?php

include 'includes/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM hifluence WHERE username='$username' and password='$password'";
$result=mysqli_query($db, $sql);
$count=mysqli_num_rows($result);

if($count==1){
    header("Location:profile.php?username=$username");
}
else {
	header("Location:access-denied.php");
}

?>
