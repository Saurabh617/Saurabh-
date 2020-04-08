<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Esports-A Gaming Platform</title>
	<link rel="stylesheet" type="text/css" href="tournament.css">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

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
					<li><a href="Tournament.php" class="active" >Tournament</a></li>
					<li><a href="#" >My ECode</a></li>
					<li><a href="Contact.php" >Contact Us</a></li>
					<li><a href="About.php" >About</a></li>

				</ul>
			</div>
			<?php if(isset($_SESSION['myusername'])){
				echo '<h3 style="font-family:century gothic; color:#A9A9A9; font-size : 25px; " >Welcome '.$_SESSION['myusername'];
			}
			 ?>

			</nav>
	</header>
<div class="jumbotron">
	<div class="container"  style="padding-bottom:100px">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 ">
				<img src="FIFA.png" alt="" width="650px" style="margin-left:-120px;">
			</div>
			<div class="col-12 col-sm-6 col-md-6">
				<h2>The FIFA eWorld Cup, formerly known as the FIFA Interactive World Cup (FIWC), is an eSports tournament held by FIFA and its presenting partner EA Sports. Each tournament has players competing in games of the latest incarnation of the FIFA video game series.</h2>
			</div>

			</div>

<div class="row ">

<form class="" action="Signupfifa.php" method="post">
  <div class="col-auto">
  	<input type="submit" name="" value="SIGN UP">

  </div>

</form>
		</div>

	</div>

</div>


</body>
</html>
