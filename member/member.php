<?php

// Create database connection
$Database = mysqli_connect("localhost", "root", "", "image_upload");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	$image_text = mysqli_real_escape_string($Database, $_POST['image_text']);

	// image file directory
	$target = "images/" . basename($image);

	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
	// execute query
	mysqli_query($Database, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		header('Location: member.php');
	} else {
		$msg = "Failed to upload image";
		header('Location: member.php');
	}
}
$result = mysqli_query($Database, "SELECT * FROM images");

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/member.css">
	<title>CrickTime - Members Area</title>
</head>

<body>
	<nav>
		<a href="logout.php"><button type="button">Log Out</button></a>
	</nav>
	<h1>Welcome to Member Area</h1>
	<div id="content">
		<?php
		while ($row = mysqli_fetch_array($result)) {
			echo "<div id='img_div'>";
			echo "<img src='images/" . $row['image'] . "' alt='batAdded'>";
			echo "<p>" . $row['image_text'] . "</p>";
			echo "</div>";
		}
		?>
		<form method="POST" action="member.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">

			<div>
				<label for="image">Upload Image: </label>
				<input id="image" type="file" name="image">
			</div>

			<br><br>

			<div>
				<label for="text">Title: </label>
				<input id="text" type="text" cols="40" rows="4" name="image_text" placeholder="Title: ">
				<!-- <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Title: "></textarea> -->
			</div>

			<br><br>

			<div>
				<button type=" submit" name="upload">POST</button>
			</div>
		</form>
	</div>

	<?php
	include "../partials/footer.php";
	?>