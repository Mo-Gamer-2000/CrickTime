<?php
require_once "pdo.php";
session_start();
if (
	isset($_POST['email'])
	&& isset($_POST['password'])
) {
	//this way is vulnerable replace like below

	//get the typed email and password

	$typed_email = $_POST['email'];
	$typed_password = $_POST['password'];

	$sql = "SELECT * FROM members WHERE email = '$typed_email' AND password= '$typed_password'";

	//just for demonstration - delete
	echo ("<pre>\n" . $sql . "\n</pre>\n");
	$stmt = $pdo->query($sql);
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	//print_r($rows);

	// this uses prepared statements so is not vulnerable to injection
	$sql = "SELECT * FROM members WHERE email = :email AND password=:password";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['email' => $_POST['email'], 'password' => $_POST['password']]);
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	print_r($user);

	if ($user) {

		$_SESSION["user"] = $user["user_id"];
		//just for demonstration - delete
		print_r($_SESSION);
		echo session_id();

		//just for demonstration - delete
		$myLoc = "member.php?user=$user[user_id]";
		header('Location: member.php');
	} else {
		echo "You must enter a correct email and password";
	}
}
?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/RegLog.css">
	<title>CrickTime - Login</title>
</head>

<body>
	<nav>
		<button><a href="../index.php">Home Page</a></button>
	</nav>

	<!- Should use proper semantic HTML -->
		<div class="container">
			<h1>Login</h1>
			<form method="post">

				<label for="email">Email: </label>
				<input id="email" type="email" name="email" placeholder="Email">

				<br><br>

				<label for="password">Password: </label>
				<input id="password" type="password" name="password" placeholder="Password">

				<br><br>

				<input type="submit" value="Login">

			</form>
		</div>

		<?php
		include "../partials/footer.php";
		?>