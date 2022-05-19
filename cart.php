<!DOCTYPE html>
<html lang="en-GB">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css" />
	<title>CrickTime</title>
</head>

<body>
	<header>
		<h1>SHOPPING CART</h1>
		<div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="contact.php">Contact us</a></li>
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
			<h2 class="product-title">Products in shopping cart below:</h2>
			<p>Your selected items should apper here.</p>
			<div class="products-container">
				<div class="product-header">
					<div class="products">

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/main.js"></script>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

	<?php
	include "../CrickTime/partials/footer.php";
	?>