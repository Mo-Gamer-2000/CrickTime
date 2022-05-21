<!DOCTYPE html>
<html lang="en-GB">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>CrickTime</title>
</head>

<body>
	<header>
		<h1>CRICKET & ACCESSORIES - ONLINE SHOP</h1>
		<div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="../CrickTime/member/upload.php">Upload</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="../CrickTime/member/login.php">Sign in</a></li>
					<li><a href="../CrickTime/member/create_user.php">Sign up</a></li>
					<li><a href="#maincontent">Skip-To-Content</a></li>
					<li class="cart">
						<a href="cart.php">
							<ion-icon name="basket"></ion-icon>Cart: <span>0</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<div id="maincontent" class="container body-content">
			<div class="container">
				<div class="image">
					<figure>
						<img src="IMG/Image1.png" alt="Boom Slasher 2000">
						<figcaption>
							<h2>Boom Slasher 2000</h2>
							<p><b>Description:</b> Best selling Bat on our Website, Buy it now Limited Stock
								left.
							</p>
							<h3>£129.99</h3>
						</figcaption>
					</figure>
					<a class="add-cart cart1" href="#">Add Cart</a>
				</div>
				<div class="image">
					<figure>
						<img src="IMG/Image2.png" alt="Bat2">
						<figcaption></figcaption>
					</figure>

					<h2>RazorBack</h2>
					<p><b>Description:</b> Suitable for Teenagers and Amateur people, fully knocked and made
						in
						India.</p>
					<h3>£99.99</h3>
					<a class="add-cart cart2" href="#">Add Cart</a>
				</div>

				<div class="image">
					<figure>
						<img src="IMG/Image3.jpg" alt="Bat3">
						<figcaption></figcaption>
					</figure>

					<h2>AS</h2>
					<p><b>Description:</b> Suitable for Rookies, great price for quality.</p>
					<h3>£89.99</h3>
					<a class="add-cart cart3" href="#">Add Cart</a>
				</div>

				<div class="image">
					<figure>
						<img src="IMG/Image4.jpg" alt="Bat4">
						<figcaption></figcaption>
					</figure>

					<h2>Plain Puma</h2>
					<p><b>Description:</b> Basic Bat for Kids and home use, reasonable price.</p>
					<h3>£69.99</h3>
					<a class="add-cart cart4" href="#">Add Cart</a>
				</div>

				<div class="image">
					<figure>
						<img src="IMG/Image5.jpg" alt="Bat5">
						<figcaption></figcaption>
					</figure>

					<h2>GM</h2>
					<p><b>Description:</b> Bat for Professionals with high quality of wood and fully knocked
						bat, GM
						bat
						made in England.</p>
					<h3>£199.99</h3>
					<a class="add-cart cart5" href="#">Add Cart</a>
				</div>

				<div class="image">
					<figure>
						<img src="IMG/Image6.jpg" alt="Bat6">
						<figcaption></figcaption>
					</figure>

					<h2>Adidas</h2>
					<p><b>Description:</b> Adidas Pro bat for the Firy player, Light weight and fully knocked bat
						from
						Pakistan.</p>
					<h3>£169.99</h3>
					<a class="add-cart cart6" href="#">Add Cart</a>
				</div>
			</div>

		</div>
	</main>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script src="js/main.js"></script>
	<?php
	include "../CrickTime/partials/footer.php";
	?>