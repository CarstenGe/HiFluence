<?php
include 'includes/connect.php';

$username = $_GET['username'];
$comment = $_POST['comment'];

$sql = mysqli_query($db, "SELECT comments FROM hifluence WHERE username = '$username'");
$commentDB = mysqli_fetch_row($sql);
$commentDB = $commentDB[0];

$comment = $commentDB . "<br>" . $comment;

$update = mysqli_query ($db, "UPDATE hifluence SET comments='$comment' WHERE username='$username' ");

header("Location:profile.php?username=$username");
?>