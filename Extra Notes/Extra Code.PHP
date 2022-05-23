require_once "pdo.php";

session_start();

if (isset($_SESSION['user'])) {
$sql = "SELECT * FROM users WHERE user_id = :user";
// just for demonstration - delete
echo ("
<pre>\n" . $sql . "\n</pre>\n");
$stmt = $pdo->prepare($sql);
$stmt->execute(['user' => $_SESSION['user']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$user = $stmt->fetchColumn();
// just for demonstration - delete
print_r($user);
$username = $user["name"];
} else {
header('Location: login.php ');
}


$msg = "";

if (isset($_POST['upload'])) {
$target = "images/" . basename($_FILES['image']['name']);
$pdo = mysqli_connect("localhost", "root", "", "login");

$image = $_FILES['image']['name'];
$text = $_POST['text'];

$sql = "INSERT INTO login (image, text) VALUES ('$image', '$text')";
mysqli_query($pdo, $sql);

if (move_uploaded_file($_FILES['image ']['tmp_name'], $target)) {
$msg = "Image uploaded successfully";
} else {
$msg = "There was a problem uploading the image";
}
}

$pdo = mysqli_connect("localhost", "root", "", "login");
$sql = "SELECT * FROM login";
$result2 = mysqli_fetch_array($pdo2, $sql2);
while ($row = mysqli_fetch_array($result)) {
echo "<div id='img_div'>";
	echo "<img src='images/" . $row[' image'] . "'>" ; // echo "<p>" . $row['text'] . "</p>" ; // echo "</div>" ; //} ?>

	// Create database connection
	$db = mysqli_connect("localhost", "root", "", "image_upload");

	// Initialize message variable
	$msg = "";

	// If upload button is clicked ...
	if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

	// image file directory
	$target = "images/" . basename($image);

	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	$msg = "Image uploaded successfully";
	} else {
	$msg = "Failed to upload image";
	}
	}
	$result = mysqli_query($db, "SELECT * FROM images");

	$pdo = mysqli_connect("localhost", "root", "", "login");
	$sql = "SELECT * FROM login";
	$result2 = mysqli_fetch_array($pdo2, $sql2);
	while ($row = mysqli_fetch_array($result)) {
	echo "<div id='img_div'>";
		// echo "<img src='images/" . $row[' image'] . "'>" ; // echo "<p>" . $row['text'] . "</p>" ; // echo "</div>" ; //} <div id="content">
		<?php
		while ($row = mysqli_fetch_array($result)) {
			echo "<div id='img_div'>";
			echo "<img src='images/" . $row['image'] . "' >";
			echo "<p>" . $row['image_text'] . "</p>";
			echo "</div>";
		}
		?>

		<form method="POST" action="member.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="Upload Image">
			</div>
		</form>
	</div>

	$host = "sql308.epizy.com";
	$username = "epiz_31617197";
	$password = "0HyRGIVLgu0iDVF";
	$database = "epiz_31617197_CrickTimeDB";

	$pdo = new PDO("mysql:host=sql308.epizy.com;dbname=epiz_31617197_CrickTimeDB", $username, $password);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	<?php


	$pdo = new PDO(
		'mysql:host=sql308.epizy.com;port=3306;dbname=epiz_31617197_CrickTimeDB',
		'epiz_31617197',
		'0HyRGIVLgu0iDVF'
	);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	try {
		$pdo = new PDO('mysql:host=sql308.epizy.com;dbname=epiz_31617197_CrickTimeDB', $username, $password);
		foreach ($pdo->query('SELECT * from users') as $row) {
			print_r($row);
		}
		$pdo = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
