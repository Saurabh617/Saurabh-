<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esports-A Gaming Platform</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="logo">
				<a href="index.php" target="_blank">Esports</a>

			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="Tournament.php" >Tournament</a></li>
					<li><a href="#" >My ECode</a></li>
					<li><a href="Contact.php" >Contact Us</a></li>
					<li><a href="About.php" >About</a></li>
				</ul>
			</div>
			<?php if(!isset($_SESSION['myusername'])){

				echo '<div class="login">
					<a href="login.php">Login/Register</a>
				</div>';
			}
			else {
				echo '<h3 style="font-family:century gothic; color:#A9A9A9; font-size : 25px; " >Welcome '.$_SESSION['myusername'].'<h4 style="margin:0p; padding:0; margin-top:5px;"><a href = "logout.php">Sign Out</a></h2>';
			}
			 ?>

		</nav>

		<div class="center_content">
			<h1>Esports gaming platform</h1>
			<h2>Welcomes you to the best Gaming </h2>

		</div>

		<div class="social_content">
			<div class="fa_icons">
				<a href="#">
					<i class="fa fa-facebook" aria-hidden="true"></i>
			</div>

			<div class="fa_icons">
				<a href="#">
					<i class="fa fa-twitter" aria-hidden="true"></i>
			</div>

			<div class="fa_icons">
				<a href="#">
					<i class="fa fa-instagram" aria-hidden="true"></i>
			</div>

			<div class="fa_icons">
				<a href="#">
					<i class="fa fa-youtube" aria-hidden="true"></i>
			</div>
		</div>
	</header>

</body>
</html>
