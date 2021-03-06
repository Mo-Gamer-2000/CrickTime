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
          <h1>ABOUT US</h1>
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
                    <div class="image_about">
                         <h2>
                              CrickTime - We build Durable and Long Lastin Cricket Bats since
                              2004.
                         </h2>
                         <p>
                              We are based in Lancashire on 3 Redwood Road. We having creating
                              different verity of bats from Teenagers to Pro Athletes. Wood on
                              our bats are imported from many different coutries like India,
                              Zimbabwe, Pakistan and South Africa. We have a great team of
                              people who are pessionate about their job and work hard day and
                              night to build optimal bats for you.
                         <figure>
                              <img src="IMG/Image7.jpg" alt="img7">
                              <figcaption>
                                   As you can see in this image how the bats are getting build
                                   one by one, they are fully handmade and they are built with
                                   attention and detail.
                              </figcaption>
                              We also provide 2 year warranty for repairment on our bats. So
                              if you find any issue the yourn bat you can contact us through
                              our contact us page and we will get back to you within 48hrs.
                         </figure>
                         </p>
                    </div>
               </div>
          </div>
     </main>
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     <script src="../CrickTime/js/main.js"></script>

     <?php
     include "../CrickTime/partials/footer.php";
     ?>