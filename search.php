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
		<h1>SEARCH PAGE</h1>
		<div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
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
			<form class="bat_form">
				<h2>
					Enter minimum and maximum value for the bat. Make sure to select
					the right gender:
				</h2>
				<p>Enter value below to find the right bats for you.</p>

				<label for="min_Cost">Minimum Cost: </label>
				<input type="number" id="min_Cost" name="min_Cost" min="40" max="200" placeholder="40" />

				<label for="max_Cost">Maximum Cost: </label>
				<input type="number" id="max_Cost" name="max_Cost" min="60" max="200" placeholder="60" />

				<label for="gender">Gender: </label>
				<select name="gender" id="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Unisex">Unisex</option>
				</select>

				<input type="button" value="Search" id="find_Btn" />
			</form>
		</div>
	</main>

	<script src="../CrickTime/js/search.js" defer></script>
	<script src="../CrickTime/js/main.js"></script>
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

	<?php
	include "../CrickTime/partials/footer.php";
	?>