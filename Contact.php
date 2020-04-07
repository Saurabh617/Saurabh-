<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esports-A Gaming Platform</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
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
			<h2>Email us the queries and keep upto the latest news</h2>

			<div class="contact_form">
				<div>
					<i class="fa fa-map-marker"></i><span class="form-info">Law Gate, Lovely Professional University, Punjab</span><br>
					<i class="fa fa-phone"></i><span class="form-info">+91-8427099940</span><br>
					<i class="fa fa-envelope"></i><span class="form-info">Law Gate, Lovely Professional University, Punjab</span><br>
				</div>

			</div>

			<div >
				<form>
					<input type="text" placeholder="First Name" required>
					<input type="text" placeholder="Last Name" required>
					<input type="text" placeholder="Email" required>
					<input type="text" placeholder="Subject of this text" required>
					<textarea name="message" placeholder="Message" rows="5" required></textarea>
					<button class="submit">Send Message</button>
				</form>

			</div>
		</div>
</section>
</header>
</body>
</html>
