<!DOCTYPE html>
<html lang="en-GB">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CrickTime/css/search.css">
     <script src="../CrickTime/js/script.js" defer></script>
     <title>CrickTime - Search</title>
</head>

<body>

     <div class="search-wrapper">
          <label for="search">Search Bats</label>
          <input type="search" id="search" data-search>
     </div>
     <div class="bat-cards" data-bat-cards-container>
          <template data-bat-template>
               <div class="bats">
                    <div class="header" data-header>
                         <div class="body" data-body>
                         </div>
                    </div>
               </div>
          </template>
     </div>

     <?php
     include "../CrickTime/partials/footer.php";
     ?>