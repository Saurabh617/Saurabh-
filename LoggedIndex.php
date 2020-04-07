<?php
include('session.php');
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
			<div class="jumbotron">
        <h1 style="font-family:century gothic; color:#006de6">Welcome <?php echo $_SESSION['myusername']; ?></h1>
        <h4><a href = "logout.php">Sign Out</a></h2>
			</div>
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
