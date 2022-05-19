<?php
require_once "pdo.php";
session_start();

if (
    isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['password'])
) {
    $sql = "INSERT INTO members (name, email, password) 
              VALUES (:name, :email, :password)";
    echo ("<pre>\n" . $sql . "\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    ));
}

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $sql = "DELETE FROM members WHERE user_id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
}

$stmt = $pdo->query("SELECT name, email, password, id FROM members");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/RegLog.css">
    <title>CrickTime - Register</title>
</head>

<body>

    <nav>
        <button><a href="../member/login.php">Got to Login Page</a></button>
    </nav>

    <table border="1">
        <tr>
            <th>
                Members Table:
                <?php
                foreach ($rows as $row) {
                    echo "<tr><td>";
                    echo ($row['name']);

                    echo ("</td><td>");
                    echo ($row['email']);

                    echo ("</td><td>");
                    echo ($row['password']);

                    echo ("</td><td>");
                    echo ('<form method="post"><input type="hidden" ');

                    echo ('name="id" value="' . $row['id'] . '">' . "\n");

                    echo ('<input type="submit" value="Del" name="delete">');

                    echo ("\n</form>\n");

                    echo ("</td></tr>\n");
                }

                ?>
            </th>
        </tr>
    </table>

    <!- Should use proper semantic HTML -->
        <div class="container">
            <h1>Register</h1>
            <form method="post">

                <label for="name">Name: </label>
                <input id="name" type="text" name="name">

                <br><br>

                <label for="email">Email: </label>
                <input id="email" type="text" name="email">

                <br><br>

                <label for="password">Password: </label>
                <input id="password" type="password" name="password">

                <br><br>

                <input type="submit" value="Add New" />

            </form>
        </div>

        <?php
        include "../partials/footer.php";
        ?>