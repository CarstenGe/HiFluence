<?php
include 'includes/connect.php';

$username = $_GET['username'];
$tag = $_POST['tag'];

$sql = mysqli_query($db, "SELECT tags FROM hifluence WHERE username = '$username'");
$tagDB = mysqli_fetch_row($sql);
$tagDB = $tagDB[0];

$tag = $tagDB . "<br><a href=\"#\">".$tag."</a>";

$update = mysqli_query ($db, "UPDATE hifluence SET tags='$tag' WHERE username='$username' ");

header("Location:profile.php?username=$username");
?>