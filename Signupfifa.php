<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esports-A Gaming Platform</title>
	<link rel="stylesheet" type="text/css" href="signupfifa.css">
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
					<li><a href="index.php">Home</a></li>
					<li><a href="Tournament.php" >Tournament</a></li>
					<li><a href="#" >My ECode</a></li>
					<li><a href="Contact.php" class="active"  >Contact Us</a></li>
					<li><a href="About.php" >About</a></li>

				</ul>
			</div>
			<?php if(isset($_SESSION['myusername'])){
				echo '<h3 style="font-family:century gothic; color:#A9A9A9; font-size : 25px; " >Welcome '.$_SESSION['myusername'];
			}
			 ?>

			</nav>

<section id="contact-section">
		<div class="container">

			<div >
				<form>
					<input type="text" placeholder="First Name" required>
					<input type="text" placeholder="Last Name" required>
					<input type="text" placeholder="Email" required>
					<input type="number" placeholder="Number of players" required>
					<input type="text" placeholder="FIFA20">
					<button class="submit"><a href="index.php">REGISTER</a></button>
				</form>

			</div>
		</div>
</section>
</header>
</body>
</html>
