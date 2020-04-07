<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esports-A Gaming Platform</title>
	<link rel="stylesheet" type="text/css" href="About.css">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar">
			<div class="logo">
				<a href="index.php" target="_blank">Esports</a>

			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="Tournament.php" >Tournament</a></li>
					<li><a href="#" >My ECode</a></li>
					<li><a href="Contact.php" >Contact Us</a></li>
					<li><a href="#" class="active" >About</a></li>

				</ul>
			</div>
			<?php if(isset($_SESSION['myusername'])){
				echo '<h3 style="font-family:century gothic; color:#A9A9A9; font-size : 25px; " >Welcome '.$_SESSION['myusername'];
			}
			 ?>
		</nav>

			<div class="team-section">
				<h1>Our Team</h1>
				<span class="border"></span>
				<div class="ps">
					<a href="#p1"><img src="Beekram.jpg" alt=""></a>
					<a href="#p2"><img src="Beekram.jpg" alt=""></a>
					<a href="#p3"><img src="Beekram.jpg" alt=""></a>
					<a href="#p4"><img src="Beekram.jpg" alt=""></a>
				</div>

			<div class="section" id="p1">
				<span class="name">Bikram Khatiwada</span>
				<span class="border"></span>
				<p>
					Gaming is one of those things that's pretty amazing because when you think about it, everybody wants to game; whether you're a casual gamer, or you're an enthusiast gamer, there's a large market for us.
				</p>
			</div>
			<div class="section" id="p2">
				<span class="name">Bikram Khatiwada</span>
				<span class="border"></span>
				<p>
					The more people who come forward and talk about how much they love gaming, how much they talk about individuality and diversity, the more gamers of color that come out and gay gamers that come out.
				</p>
			</div>
			<div class="section" id="p3">
				<span class="name">Bikram Khatiwada</span>
				<span class="border"></span>
				<p>
					If you're a game company, you want to create a singular gaming experience, and part of that is doing stuff that nobody else is doing. If you're trying to create a game that feels different and game creates that.
				</p>
			</div>
			<div class="section" id="p4">
				<span class="name">Bikram Khatiwada</span>
				<span class="border"></span>
				<p>
					We see our mobile initiatives as a way to bring our intellectual properties and our gameplay experiences to a larger population than the tens or hundred million consumers that own a dedicated gaming system

				</p>
			</div>
</body>
</html>
