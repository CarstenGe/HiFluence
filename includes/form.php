<div id="box">
	<div id="head">
		<img src="img/compose-icon.png" alt="compose-icon">
		<h1>Login to your account / Register new</h1>
	</div>
	<div id="login">
		<div class="fb-login-button" data-size="large" data-show-faces="true" data-auto-logout-link="false"><img src="img/fb.png"></div>
		<hr>
		<form method="post" action="login.php">
			<input type="text" name="username" placeholder="User Name" required="required"><br><br>
			<input type="password" name="password" placeholder="Password" required="required"><br>
			<p><input type="checkbox" name="remember-password">
			Remember My Password</p>
			<input type="submit" value="Login">
		</form>
	</div>
	<div id="register">
		<h3>Register</h3>
		<form method="post" action="register.php" enctype="multipart/form-data">
			<p>Profile Image</p>
		    <input type="file" name="fileToUpload" id="fileToUpload"><br>
			<p>Email</p>
			<input type="text" name="email" required="required">
			<p>User Name</p>
			<input type="text" name="username" required="required">
			<p>Password</p>
			<input type="password" name="password" placeholder="Password" required="required">
			<br><br>
			<input type="submit" value="Register">
		</form>
	</div>
</div>