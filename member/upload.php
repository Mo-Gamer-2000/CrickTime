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
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/style.css">
     <title>CrickTime</title>
</head>

<body>
     <header>
          <h1>UPLOAD PAGE</h1>
          <div>
               <nav>
                    <ul>
                         <li><a href="../index.php">Home</a></li>
                         <li><a href="../about.php">About us</a></li>
                         <li><a href="upload.php">Upload</a></li>
                         <li><a href="../search.php">Search</a></li>
                         <li><a href="../contact.php">Contact us</a></li>
                         <li><a href="../member/login.php">Sign in</a></li>
                         <li><a href="../member/create_user.php">Sign up</a></li>
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

     <main id="maincontent">
          <h1>Latest Arrivals:</h1>
          <br>
          <p>Here we have recently added items by the members of CrickTime.</p>
          <div class="outline">
               <?php
               while ($row = mysqli_fetch_array($result)) {
                    echo "<div id='img_div'>";
                    echo "<img src='images/" . $row['image'] . "' alt='BatAdded' height='280px' width='320px' align='center''>";
                    echo "<p>" . $row['image_text'] . "</p>";
                    echo "</div>";
               }
               ?>
          </div>
     </main>
     <!-- Footer Section Starts -->
     <footer>
          <p>© 2000 Moeez Abdul - All Rights Reserved.</p>
     </footer>
     <!-- Footer Section Ends -->
</body>

</html>