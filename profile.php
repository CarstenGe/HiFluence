<!DOCTYPE html>
<html>
<head>
	<title>Logged in</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	include 'includes/connect.php';

	$username = $_GET['username'];

	$sql = mysqli_query($db,"SELECT password FROM hifluence WHERE username = '$username'");
	$password = mysqli_fetch_row($sql);
	$password = $password[0];

	$sql = mysqli_query($db,"SELECT email FROM hifluence WHERE username = '$username'");
	$email = mysqli_fetch_row($sql);
	$email = $email[0];

	$sql = mysqli_query($db,"SELECT tags FROM hifluence WHERE username = '$username'");
	$tags = mysqli_fetch_row($sql);
	$tags = $tags[0];

	$sql = mysqli_query($db,"SELECT comments FROM hifluence WHERE username = '$username'");
	$comments = mysqli_fetch_row($sql);
	$comments = $comments[0];
?>
<div id="box">
	<div id="head">
		<img src="img/compose-icon.png" alt="compose-icon">
		<h1>This is your account page</h1>
	</div>
	<div id="profile-left">
		<p>Username: <?php echo $username; ?></p>
		<p>Password: <?php echo $password; ?></p>
		<p>Email: <?php echo $email; ?></p>
		<p>Tags: <?php echo $tags; ?></p>

		<form method="post" action="tags.php?username=<?php echo $username; ?>">
			<input type="text" name="tag"><br><br>
			<input type="submit" value="add tag">
		</form>
	</div>
	<div id="profile-right">
		<h3>Comments:</h3>
		<p><?php echo $comments; ?></p>

		<form method="post" action="comments.php?username=<?php echo $username; ?>">
			<input type="text" name="comment"><br><br>
			<input type="submit" value="add comment">
		</form>
	</div>
</div>
</body>
</html>