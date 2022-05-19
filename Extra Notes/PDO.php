<?php
// if upload button is pressed
if (isset($_POST['upload'])) {

    $target = "images/" . basename($_FILES['image']['name']);

    $dsn = 'mysql:host=localhost;dbname=image_upload';
    $username = 'root';
    $password = '';

    try {

        $con = new PDO($dsn, $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {

        echo 'Not Connected to the database ' . $ex->getMessage();
    }

    // get all the submitted data from the form
    $image = $_FILES['image']['name'];
    $image_text = $_POST['image_text'];

    $sql = $con->prepare("INSERT INTO images (image, image_text) VALUES ('$image', '$text')");
    $sql->execute(); //stores the submitted data in the table (images)

    //lets move the upload image into the folder (images)

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header('Location: member.php');
    } else {
        $msg = "There was a problem uploading the image";
        header('Location: member.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/member.css">
    <link rel="stylesheet" href="../css/RegLog.css">
    <title>CrickTime - Members Area</title>
</head>

<body>
    <nav>
        <a href="logout.php"><button type="button">Log Out</button></a>
    </nav>
    <h1>Welcome to Member Area</h1>
    <div id="content">
        <!-- <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div id='img_div'>";
            echo "<img src='images/" . $row['image'] . "' alt='batAdded'>";
            echo "<p>" . $row['image_text'] . "</p>";
            echo "</div>";
        }
        ?> -->
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

    <!-- <!DOCTYPE html>
<html>

<head>
    <title>Image upload</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="content">
        <form method="POST" action="member.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000" <div>
            <input type="file" name="image">
    </div>
    <div>
        <textarea name="image_text" cols="40" rows="4" placeholder="say something about this image"></textarea>
    </div>
    <div>
        <input type="submit" name="upload" value="upload image">
    </div>
    </form>
    </div>
</body>

</html> -->