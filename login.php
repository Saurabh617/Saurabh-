<?php session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>
		Esports-A Gaming Platform
	</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body >
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
		</nav>
	<div class="login-page">
		<div class="form">
			<form class="registration-page" action="includes/register.php" method="POST">


				<input type="text" placeholder="Username" name="user" class="form-control" autocomplete="off">
				<p>
								<?php  echo $error['user'];
								?>
						</p>

				<input type="password" placeholder="Password" name="pass" class="form-control" autocomplete="off">
				<p>
								<?php  echo $error['pass'];
								?>
					</p>

				<input type="text" placeholder="Email-id" name="email" value=>
				<p>
								<?php  echo $error['email'];
								?>
						</p>


				<input id="mamu" type="submit" name="submit" value="CREATE">
				<p class="message">Already registered? <a href="#">Login here </a></p>
	</form>


	<form class="login-form" action="logincheck.php" method="POST">
		<input type="text" placeholder="Username" name="user" value="" class="form-control" autocomplete="off">
		<input type="password" placeholder="password" name="pass" value="" class="form-control" autocomplete="off">
		<input id="mamu1" type="submit" name="submit" value="Login">
		<p class="message">Not registered? <a href="#">Register here </a></p>
</div>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script>
	$('.message a').click(function(){
		$('form').animate({height:"toggle",opacity:"toggle"},"slow");
	});



	document.getElementById("mamu").onmouseover = function()
				 {
						 this.style.backgroundColor = "red";
				 }
	document.getElementById("mamu").onmouseout = function()
			  {
			 						 this.style.backgroundColor = "green";
			 	}
	document.getElementById('mamu').style.cssText = "font-family: sans-serif; outline: 0; text-transform: uppercase; background-color: green; width: 100%; border: 0; padding: 15px; color:white; font-size: 14; cursor: pointer; ";
	document.getElementById('mamu1').style.cssText = "font-family: sans-serif; outline: 0; text-transform: uppercase; background-color: green; width: 100%; border: 0; padding: 15px; color:white; font-size: 14; cursor: pointer; ";


</script>

</body>
</html>
