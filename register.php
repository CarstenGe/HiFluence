<?php

include 'includes/connect.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$sql = "SELECT email FROM hifluence WHERE email='$email'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$sql2 = "SELECT username FROM hifluence WHERE username='$username'";
$result2 = mysqli_query($db,$sql2);
$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1){
	header("Location:email-exists.php");
}
elseif(mysqli_num_rows($result2) == 1){
	header("Location:username-exists.php");
}
else {
	$query = mysqli_query($db, "INSERT INTO hifluence (username, email, password) VALUES ('$username', '$email', '$password')");
 
	if($query){
		header("Location:account-created.html");
	}
}

?>