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
          <h1>CONTACT US</h1>
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
                    <h2>Add your personal details here:</h2>
                    <p>
                         Add your details and one of our team members will contact you
                         within 48hrs and help you with your issue.
                    </p>
                    <form action="action_page.php">
                         <label for="fname">First Name</label>
                         <input type="text" id="fname" name="firstname" placeholder="Your name.." />

                         <label for="lname">Last Name</label>
                         <input type="text" id="lname" name="lastname" placeholder="Your last name.." />

                         <label for="country">Country</label>
                         <select id="country" name="country">
                              <option value="canada">Canada</option>
                              <option value="australia">Australia</option>
                              <option value="usa">USA</option>
                              <option value="uk">UK</option>
                         </select>

                         <label for="subject">Subject</label>
                         <textarea id="subject" name="subject" placeholder="Write your query here..." Write your query here></textarea>
                         <input type="submit" value="Submit" />
                    </form>
               </div>
          </div>
     </main>
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     <script src="js/main.js"></script>

     <?php
     include "../CrickTime/partials/footer.php";
     ?>