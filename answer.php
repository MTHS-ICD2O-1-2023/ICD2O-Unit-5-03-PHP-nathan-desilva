<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Movie Age Rating, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Nathan De Silva" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Movie Age Rating, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Movie Age Rating, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/movie_ratings.jpg" alt="movie_ratings" width="250" />
      </div>
      <div class="page-content-php">
        <div name="number-guessed">
          <div class="mdl-layout__header-row">
            <br />
            <div class="mdl-layout__content">
            </div>
            <div class="mdl-layout__left">
              <?php

              $positiveButton = $_POST["options"];
              $randomNumber = floor(rand(1, 6));
              $randomNegativeNumber = floor(rand(1, 6)) * -1;

              // process
              if ($positiveButton == true) {
                // output
                echo "You selected Positive and your number is: " . $randomNumber . ".";
                //process
              } elseif ($positiveButton == false) {
                // output
                echo "You selected Negative and your number is: " . $randomNegativeNumber . ". ";
              }

              ?>
            </div>
          </div>
        </div>
    </main>
  </div>
</body>

</html>
